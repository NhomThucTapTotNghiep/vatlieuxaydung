<!--::subscribe_area part end::-->

<!--::footer_part start::-->

<!--::footer_part end::-->

<!-- jquery plugins here-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="asset/js/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="asset/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="asset/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="asset/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="asset/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="asset/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="asset/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="asset/js/slick.min.js"></script>
<script src="asset/js/jquery.counterup.min.js"></script>
<script src="asset/js/waypoints.min.js"></script>
<script src="asset/js/contact.js"></script>
<script src="asset/js/jquery.ajaxchimp.min.js"></script>
<script src="asset/js/jquery.form.js"></script>
<script src="asset/js/jquery.validate.min.js"></script>
<script src="asset/js/mail-script.js"></script>
<!-- custom js -->
<script src="asset/js/custom.js"></script>
<script src="asset/js/custome.js"></script>

<!-- jquery -->
<script type="text/javascript">
$(document).ready(function() {
    
});

function addCart() {
    var MaVT = document.getElementById('id').value;
    var inputVal = document.getElementById("soluong").value;
    $.ajax({
        url: 'Controllers/cartComtroller.php?action=add',
        data: {
            mavt: MaVT,
            soluong: inputVal
        },
        success: function(result) {
            console.log(result.abc);
        }
    })
}

function getInputValue() {
    // Lấy số lượng vật tư
    var inputVal = document.getElementById("soluong").value;
    return inputVal;
}
</script>
<script>
function addCart(mavt) {
    var quantity = $('#soluong').val();
    if (Number.isInteger(quantity) == false) {
        quantity = 1;
    }
    var data = {
        'mavt': mavt,
        'quantity': quantity,
        'action': 'add'
    };
    $.ajax({
        url: 'Controllers/cartAction.php',
        type: 'POST',
        data: {
            'mavt': mavt,
            'quantity': quantity,
            'action': 'add'
        },
        success: function(result) {
            Swal.fire(
                'Thêm thành công!',
                'success'
            )
        }
    });
}
</script>
<script>
function deleteVatTU(mavt) {
    Swal.fire({
        title: 'Bạn chắc muốn xóa không?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'Controllers/cartAction.php',
                type: 'POST',
                data: {
                    'mavt': mavt,
                    'action': 'delete'
                },
                success: function(result) {
                    Swal.fire(
                        'Deleted!',
                        'Vật tư đã được loại bỏ khỏi đơn hàng.',
                        'success'
                    )
                    $('tr#' + mavt).remove();
                }
            });
        }
    })
}

function giamSoLuong(dem, mavt) {
    var soluong = document.getElementById('cart' + dem).value;
    var dongia = document.getElementById('cart' + dem + dem).value;
    var soluongtang = parseInt(soluong) - 1;
    if (soluongtang > 0) {
        var tamp = 'cart' + dem;
        var tongtien = soluongtang * parseInt(dongia);
        document.getElementById('cart' + dem).setAttribute('value', soluongtang);
        $('h5#' + tamp).text(tongtien);
        $.ajax({
            url: 'Controllers/cartAction.php',
            type: 'POST',
            data: {
                'mavt': mavt,
                'quantity': soluongtang,
                'action': 'update'
            },
            success: function(result) {

            }
        });
    }
}

function tangSoLuong(dem, mavt) {
    var soluong = document.getElementById('cart' + dem).value;
    var dongia = document.getElementById('cart' + dem + dem).value;
    var soluongtang = parseInt(soluong) + 1;
    var tamp = 'cart' + dem;
    var tongtien = soluongtang * parseInt(dongia);
    document.getElementById('cart' + dem).setAttribute('value', soluongtang);
    $('h5#' + tamp).text(tongtien);
    $.ajax({
        url: 'Controllers/cartAction.php',
        type: 'POST',
        data: {
            'mavt': mavt,
            'quantity': soluongtang,
            'action': 'update'
        },
        success: function(result) {

        }
    });
}
</script>