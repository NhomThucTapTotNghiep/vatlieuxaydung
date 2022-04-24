<?php foreach($dataNV as $item) ?>
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
                <a href="dashboard.php?controller=nhanvien">Danh sách nhân viên</a>
            </li>
            <li class="breadcrumb-item">
                <a href="dashboard.php?controller=nhanvien&action=update&id=<?php echo $item['MaNV'] ?>">Cập nhật nhân
                    viên</a>
            </li>
        </ol>
    </nav>
    <div class="dropdown">
        <a href='dashboard.php?controller=nhanvien&action=add'
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Thêm nhân viên
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
        <h4 class="mt-2 font-weight-bold text-primary float-left">Cập nhật nhân viên </h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="dashboard.php?controller=nhanvien&action=updatenv" class="needs-validation"
                        novalidate>
                        <div class="form-group mb-4">
                            <label for="makh" class="col-form-label">Mã nhân viên: </label>
                            <input class="form-control" <?php if(!empty(isset($message))){?>
                                style="border-color: #E11D48;" <?php }?> type="text" id="MaNV" name="MaNV"
                                placeholder="Mã nhân viên" value="<?php echo $item['MaNV']; ?>" pattern="[N][V][0-9]{3}"
                                required readonly />
                            <div class="invalid-feedback">Đang trống hoặc mã không đúng (ví dụ: NV001)</div>
                            <?php if(!empty(isset($message))){?>
                            <div style="width: 100%; margin-top: 0.25rem; font-size: 0.875em; color: #E11D48;">
                                <?php echo $message ?></div>
                            <?php } ?>
                        </div>
                        <div class="form-group mb-4">
                            <label for="validationKhachHangNam" class="col-form-label">Tên nhân viên: </label>
                            <input class="form-control" type="text" id="TenNV" name="TenNV" placeholder="Tên nhân viên"
                                value="<?php echo $item['TenNV']; ?>" required />
                            <div class="invalid-feedback">Không được bỏ trống tên nhân viên</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="validationKhachHangNam" class="col-form-label">Giới tính: </label><br>
                                <input checked="checked" id="gender" name="gender" type="radio" value="Nam" /> Nam
                                <input style="margin-left: 30px;" id='gender' name="gender" type="radio" value="Nữ"
                                    <?php if($item['GioiTinh'] == 1){echo 'checked="checked"';} ?> />
                                Nữ
                            </div>
                            <div class="col">
                                <label for="validationKhachHangNam" class="col-form-label">Ngày sinh: </label><br>
                                <input class="form-control" type="date" id="ngaysinh" name="ngaysinh"
                                    placeholder="Ngày sinh" value="<?php echo trim($item['NgaySinh'], ' 00:00:00'); ?>"
                                    required />
                                <div class="invalid-feedback">Không được bỏ trống ngày sinh</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <?php $dem=1; $sdt = $nhanvien->sdtNhanVien($item['MaNV']); 
                            foreach ($sdt as $tamp){ ?>
                                <div class="col">
                                    <label for="sdt" class="col-form-label">Số điện thoại <?php echo $dem;?>: </label>
                                    <input class="form-control" type="tel" id="cnSDTKH<?php echo $dem; ?>"
                                        name="cnSDTKH<?php echo $dem; ?>" placeholder="Số điện thoại"
                                        value="<?php echo $tamp['SDT'] ?>" pattern="[0-9]{10}" required />
                                    <div class="invalid-feedback">Đang trống hoặc số điện thoại không đúng</div>
                                </div><br>
                                <?php $dem++; } ?>
                                <input class="form-control" type="number" id="slsdt" name="slsdt" value="<?php echo $dem ?>" hidden />
                            </div>
                            <div class="col">
                                <label for="diachi" class="col-form-label ">Địa chỉ: </label>
                                <input class="form-control" type="text" id="DiaChiNV" name="DiaChiNV"
                                    placeholder="Địa chỉ" value="<?php echo $item['DiaChi'] ?>" required />
                                <div class="invalid-feedback">Không được bỏ trống địa chỉ khách hàng</div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="sdt" class="col-form-label">Email: </label>
                                <input class="form-control" type="email" id="Email" name="Email"
                                    placeholder="Email nhân viên"
                                    value="<?php echo $item['Email'] ?>" required />
                                <div class="invalid-feedback">Sai định dạng hoặc đăng trống</div>
                            </div>
                            <div class="col">
                                <label for="diachi" class="col-form-label ">Password: </label>
                                <input class="form-control" type="text" id="Password" name="Password"
                                    placeholder="Mật khẩu truy cập" value="<?php echo $item['Password'] ?>" required />
                                <div class="invalid-feedback">Không được bỏ trống</div>

                            </div>
                            <div class="form-group mb-4">
                                <label for="validationKhachHangNam" class="col-form-label">Quyền cho nhân viên: </label>
                                <select name="role" id="role" class="form-control" require>
                                    <option value="nhanvien" <?php if($item['Role'] == 'nhanvien'){echo 'selected';} ?>>Nhân viên</option>
                                    <option value="giamdoc"  <?php if($item['Role'] == 'giamdoc'){echo 'selected';}?> >Giám đốc</option>
                                </select>
                                <div class="invalid-feedback">Không được bỏ trống</div>
                            </div>
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-success text-white" type="submit">Cập nhật nhân viên</button>
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