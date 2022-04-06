<!--::subscribe_area part end::-->

    <!--::footer_part start::-->
 
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
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
        function addCart(){
            var MaVT = document.getElementById('id').value;
            var inputVal = document.getElementById("soluong").value;
            $.ajax({
                url: 'Controllers/cartComtroller.php?action=add',
                data:{
                    mavt: MaVT,
                    soluong: inputVal
                },
                success:function(result){
                console.log(result.abc);
                } 
            })
        }
        
        function getInputValue(){
            // Lấy số lượng vật tư
            var inputVal = document.getElementById("soluong").value;
            return inputVal;
        }
    </script>
