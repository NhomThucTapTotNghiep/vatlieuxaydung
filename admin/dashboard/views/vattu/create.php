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
                <a href="dashboard.php?controller=vattu">Danh sách vật tư</a>
            </li>
            <li class="breadcrumb-item">
                <a href="dashboard.php?controller=vattu&action=add">Thêm vật tư</a>
            </li>
        </ol>
    </nav>
    <div class="dropdown">
        <a href='dashboard.php?controller=vatu&action=add'
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Thêm vật tư
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="mt-2 font-weight-bold text-primary float-left">Thêm vật tư </h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="dashboard.php?controller=vattu&action=addvt" class="needs-validation" enctype="multipart/form-data" novalidate>
                        <div class="form-group mb-4">
                            <label for="MaVT" class="col-form-label">Mã vật tư: </label>
                            <input class="form-control" type="text" id="MaVT" name="MaVT" placeholder="Mã vật tư" value="" required/>
                            <div class="invalid-feedback">Không được bỏ trống mã</div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="TenVT" class="col-form-label">Tên vật tư: </label>
                            <input class="form-control" type="text" id="TenVT" name="TenVT" placeholder="Tên vật tư" value="" required/>
                            <div class="invalid-feedback">Không được bỏ trống tên vật tư</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="Gia" class="col-form-label">Giá: </label>
                                <input class="form-control" type="number" min="100" max="1000000" id="Gia" name="Gia" placeholder="Giá" value="" required/>
                                <div class="invalid-feedback">Không được bỏ trống giá</div>
                            </div>
                            <div class="col">
                                <label for="DVTinh" class="col-form-label">Đơn vị tính: </label>
                                <input class="form-control" type="text" id="DVTinh" name="DVTinh" placeholder="Đơn vị tính" value="" required/>
                                <div class="invalid-feedback">Không được bỏ trống đơn vị tính</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="SoLuong" class="col-form-label">Số lượng: </label>
                                <input class="form-control" type="number" min="0" max = "1000"id="SoLuong" name="SoLuong" placeholder="Số lượng" value="" required/>
                                <div class="invalid-feedback">Không được bỏ trống số lượng</div>
                            </div>
                            <div class="col" style="margin-top: 10px;">
                                <div class="form-group mb-4">
                                    <label for="NSX">Chọn nhà sản xuất:</label>
                                    <select name="NSX" id="NSX" class="form-control" require>
                                        <?php foreach ($dataNSX as $item) {?>
                                        <option value="<?php echo $item['MaNSX'];?>"><?php echo $item['TenNSX'];?></option>
                                        <?php }?>
                                    </select>
                                    <div class="invalid-feedback">{{ $message }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Chọn hình" class="col-form-label">Chọn hình: </label>
                            <div class="input-group">
                                <!-- <span class="input-group-btn">
                                    <a id="lfm" data-input="file" data-preview="holder"
                                        class="btn btn-primary" style="z-index: 0">
                                        <i class="fas fa-upload"></i> Chọn
                                    </a>
                                </span> -->
                                <input id="hinhVT" class="form-control" type="file"
                                    name="hinhVT" required/>
                                    <div class="invalid-feedback">Chưa chọn hình</div>
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
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