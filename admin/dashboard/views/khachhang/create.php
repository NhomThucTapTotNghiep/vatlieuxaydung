<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="dashboard.php"><svg class="icon icon-xxs" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg></a></li>
            <li class="breadcrumb-item">
                <a href="dashboard.php?controller=khachhang">Danh sách khách hàng</a>
            </li>
            <li class="breadcrumb-item">
                <a href="dashboard.php?controller=khachhang&action=add">Thêm khách hàng</a>
            </li>
        </ol>
    </nav>
    <div class="dropdown">
        <a href='dashboard.php?controller=khachhang&action=add'
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Thêm khách hàng
        </a>
        <a href='dashboard.php?controller=khachhang&action=addsdt'
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Thêm số điện thoại
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="mt-2 font-weight-bold text-primary float-left">Thêm khách hàng </h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="dashboard.php?controller=khachhang&action=addkh"
                        class="needs-validation" novalidate>
                        <div class="form-group mb-4">
                            <label for="makh" class="col-form-label">Mã khách hàng: </label>
                            <input class="form-control" <?php if(!empty(isset($message))){?> style ="border-color: #E11D48;" <?php }?> type="text" id="MaKH" name="MaKH" placeholder="Mã khách hàng"
                                value="" pattern="[K][H][0-9]{3}" required />
                            <div class="invalid-feedback">Đang trống hoặc mã không đúng (ví dụ: KH001)</div>
                            <?php if(!empty(isset($message))){?>
                            <div style="width: 100%; margin-top: 0.25rem; font-size: 0.875em; color: #E11D48;"><?php echo $message ?></div>
                            <?php } ?>
                        </div>
                        <div class="form-group mb-4">
                            <label for="validationKhachHangNam" class="col-form-label">Tên khách hàng: </label>
                            <input class="form-control" type="text" id="TenKH" name="TenKH" placeholder="Tên khách hàng"
                                value="" required />
                            <div class="invalid-feedback">Không được bỏ trống tên khách hàng</div>
                        </div>
                        <div class="form-group mb4">
                            <label for="validationKhachHangNam" class="col-form-label">Giới tính: </label><br>
                            <input checked="checked" id="gender" name="gender" type="radio" value="Nam" /> Nam
                            <input style="margin-left: 30px;" id='gender' name="gender" type="radio" value="Nữ" /> Nữ
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="sdt" class="col-form-label">số điện thoại: </label>
                                <input class="form-control" type="tel" id="SDTKH" name="SDTKH"
                                    placeholder="Số điện thoại" value="" pattern="[0-9]{10}" required />
                                <div class="invalid-feedback">Đang trống hoặc số điện thoại không đúng</div>
                            </div>
                            <div class="col">
                                <label for="diachi" class="col-form-label ">Địa chỉ: </label>
                                <input class="form-control" type="text" id="DiaChiKH" name="DiaChiKH"
                                    placeholder="Địa chỉ" value="" required />
                                <div class="invalid-feedback">Không được bỏ trống địa chỉ khách hàng</div>

                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="}" class="col-form-label">Ghi chú: </label>
                            <textarea class="form-control" type="text" id="ghichuKH" name="ghichuKH"
                                placeholder="Ghi chú" value="" rows="5"></textarea>
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-success text-white" type="submit">Thêm khách hàng</button>
                            <button type="reset" class="btn btn-warning text-white">Xoá</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

function getSDT() {
    var inputVal = document.getElementById("SDTKH").value;
    return inputVal;
}
</script>