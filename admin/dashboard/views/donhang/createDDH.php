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
                <a href="dashboard.php?controller=ddh">Danh sách đơn đặt hàng</a>
            </li>
            <li class="breadcrumb-item">
                <a href="dashboard.php?controller=ddh&action=add">Thêm đơn đặt hàng</a>
            </li>
        </ol>
    </nav>
    <div class="dropdown">
        <a href='dashboard.php?controller=ddh&action=add'
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Thêm đơn đặt hàng
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="mt-2 font-weight-bold text-primary float-left">Thêm đơn đặt hàng </h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="dashboard.php?controller=ddh&action=addddh" class="needs-validation" enctype="multipart/form-data" novalidate>
                        <div class="form-group mb-4">
                            <label for="MaDDH" class="col-form-label">Mã đơn đặt hàng: </label>
                            <input class="form-control" type="text" id="MaDDH" name="MaDDH" placeholder="Mã đơn đặt hàng" value="" required/>
                            <div class="invalid-feedback">Không được bỏ trống mã</div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="MaKH" class="col-form-label">Mã khách hàng: </label>
                            <input class="form-control" type="text" id="MaKH" name="MaKH" placeholder="Mã khách hàng" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="MaNV" class="col-form-label">Mã nhân viên: </label>
                            <input class="form-control" type="text" id="MaNV" name="MaNV" placeholder="Mã nhân viên" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="NgayLapDDH" class="col-form-label">Ngày lập đơn: </label>
                            <input class="form-control" type="text" id="NgayLapDDH" name="NgayLapDDH" placeholder="YYYY-MM-DD" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="NgayGiaoHang" class="col-form-label">Ngày giao hàng: </label>
                            <input class="form-control" type="text" id="NgayGiaoHang" name="NgayGiaoHang" placeholder="YYYY-MM-DD" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="ThanhTien" class="col-form-label">Thành Tiền: </label>
                            <input class="form-control" type="text" id="ThanhTien" name="ThanhTien" placeholder="Thành tiền" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="TrangThai" class="col-form-label">Trạng thái: </label>
                            <input class="form-control" type="text" id="TrangThai" name="TrangThai" placeholder="Trạng thái" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="VAT" class="col-form-label">VAT: </label>
                            <input class="form-control" type="text" id="VAT" name="VAT" placeholder="VAT" value="" required/>
                        </div>
                        <div class="form-group mb-4">
                            <label for="CongNo" class="col-form-label">Công nợ: </label>
                            <input class="form-control" type="text" id="CongNo" name="CongNo" placeholder="Công nợ" value="" required/>
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-success text-white" type="submit">Thêm</button>
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