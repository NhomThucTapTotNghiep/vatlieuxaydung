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
            <a href="dashboard.php?controller=vattu&action=add">Thêm phiếu thu</a>
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
            Thêm phiếu thu
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="mt-2 font-weight-bold text-primary float-left">Thêm phiếu thu </h6>
    </div>
    <div class="row">
        <div class="col-12 mb-4 mx-auto">
            <div class="card">
                <div class="card-body">
                <form method="POST" action="dashboard.php?controller=phieutthu&action=addPT">
                        <div class="form-group mb-4">
                            <label for="}" class="col-form-label">Mã phiếu thu: </label>
                            <input class="form-control" type="text" id="" name="MaPT" placeholder="" value="" />
                            <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                        </div>
                        <div class="form-group mb-4">
                            <label for="}" class="col-form-label">Ngày TT: </label>
                            <input class="form-control" type="text" id="" name="NgayTT" placeholder="YYYY-MM-DD" value="" />
                            <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="}" class="col-form-label">Đợt: </label>
                                <input class="form-control" type="text" id="" name="Dot" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                            <div class="col">
                                <label for="" class="col-form-label">Số tiền TT: </label>
                                <input class="form-control" type="text" id="" name="SoTienTT" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="" class="col-form-label">Mã Hóa đơn: </label>
                                <input class="form-control" type="text" id="" name="MaHD" placeholder="" value="" />
                                <!-- <div class="invalid-feedback"><?php $message ?></div> -->
                            </div>
                            <div class="col" style="margin-top: 10px;">
                                <div class="form-group mb-4">
                                <label for="">Ma NV:</label>
                                    <select name="MaNV" id="" class="form-control">
                                        <option value="">Chọn mã nhân viên</option>

                                        <?php foreach($nv as $item)
                                        {
                                        ?>
                                        <option value="<?php echo $item["MaNV"] ?>" ><?php echo $item["MaNV"] ?></option>
                                        <?php }?>
                                    </select>
                                    <!-- <div class="invalid-feedback">{{ $message }}</div> -->
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                    <label for="">Chọn trạng thái:</label>
                                    <select name="TrangThai" id="" class="form-control">
                                        <option value="">Chọn trạng thái:</option>
                                        <option value="1">1</option>
                                        <option value="0">0</option>
                                    </select>
                                    <!-- <div class="invalid-feedback">{{ $message }}</div> -->
                                </div>
                        </div>
                       
                        <div class="form-group my-3">
                        <button class="btn btn-success text-white" type="submit">Lập</button>
                            <button type="reset" class="btn btn-warning text-white">Xoá</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>