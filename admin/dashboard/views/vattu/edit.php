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
                <a href="dashboard.php?controller=vattu&action=update">Cập nhật vật tư</a>
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
            Cập nhật vật tư
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="mt-2 font-weight-bold text-primary float-left">Cập nhật vật tư</h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-4">
                            <label for="}" class="col-form-label">Mã vật tư: </label>
                            <input class="form-control" type="text" id="" name="" placeholder="" value="" />
                            <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                        </div>
                        <div class="form-group mb-4">
                            <label for="}" class="col-form-label">Tên vật tư: </label>
                            <input class="form-control" type="text" id="" name="" placeholder="" value="" />
                            <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="}" class="col-form-label">Giá: </label>
                                <input class="form-control" type="text" id="" name="" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label">Đơn vị tính: </label>
                                <input class="form-control" type="text" id="" name="" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" class="col-form-label">Số lượng: </label>
                                <input class="form-control" type="text" id="" name="" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                            <div class="col" style="margin-top: 10px;">
                                <div class="form-group mb-4">
                                    <label for="">Nhà sản xuất:</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Chọn nhà sản xuất</option>
                                        <?php for ($i = 0; $i<10;$i++) {?>
                                        <option value="$i"><?php echo 'nhà sản xuất '.$i?></option>
                                        <?php }?>
                                    </select>
                                    <!-- <div class="invalid-feedback">{{ $message }}</div> -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Chọn hình: </label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="" data-preview="holder"
                                        class="btn btn-primary" style="z-index: 0">
                                        <i class="fas fa-upload"></i> Chọn
                                    </a>
                                </span>
                                <input id="" class="form-control" type="text"
                                    name="" value="" />
                            </div>
                            <img id="holder" style="margin-top:15px;max-height:100px;">
                            <!-- <span class="text-danger">{{ $message }}</span> -->
                        </div>
                        <div class="form-group my-3">
                            <button class="btn btn-success text-white" type="submit">Cập nhật</button>
                            <button type="reset" class="btn btn-warning text-white">Xoá</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>