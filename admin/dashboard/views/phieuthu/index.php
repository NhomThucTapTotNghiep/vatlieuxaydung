<?php 
    $columns = [
        'id' => 'Mã Phiếu thu',
        'Ngày TT' => 'Ngày thu tiền',
        'SoTienTT' => 'Số tiền thu trước',
        'Dot' => 'Đợt',
        'MaNV' => 'Mã nhân viên',
        'MaHD' => 'Mã hóa đơn',
        'TrangThai' => 'Trạng thái',
        "option" => "Tùy chọn"
        ];
?>

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
<<<<<<< HEAD
            <a href="dashboard.php?controller=phieuthu">Danh sách phiếu thu</a>
=======
                <a href="dashboard.php?controller=vattu">Danh sách phiếu thu</a>
>>>>>>> remotes/origin/GiangDev
            </li>
        </ol>
    </nav>
    <div class="dropdown">
<<<<<<< HEAD
    <a href='dashboard.php?controller=phieutthu&action=add'
=======
        <a href='dashboard.php?controller=phieutthu&action=add'
>>>>>>> remotes/origin/GiangDev
            class="btn btn-gray-800 d-inline-flex align-items-center me-2" aria-haspopup="true" aria-expanded="false">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Lập phiếu thu
        </a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
<<<<<<< HEAD
    <h6 class="mt-2 font-weight-bold text-primary float-left">Danh sách phiếu thu</h6>
=======
        <h6 class="mt-2 font-weight-bold text-primary float-left">Danh sách phiếu thu</h6>
>>>>>>> remotes/origin/GiangDev
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0" id="datatable">
                <thead class="thead-light">
                    <tr>
                        <?php
                        foreach($columns as $column){ 
                        echo  '<th>'.$column.'</th>';
                        }?>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($dataPthu as $item)
                    {
                        ?>
                    <tr>
<<<<<<< HEAD
                    <td><?php echo $item['MaPT']; ?></td>
=======
                        <td><?php echo $item['MaPT']; ?></td>
>>>>>>> remotes/origin/GiangDev
                        <td><?php echo $item['NgayTT'] ?></td>
                        <td><?php echo $item['SoTienTT']; ?></td>
                        <td><?php echo $item['Dot'] ?></td>
                        <td><?php echo $item['MaNV']; ?></td>
                        <td><?php echo $item['MaHD'] ?></td>
                        <td><?php echo $item['TrangThai']; ?></td>
<<<<<<< HEAD
=======
                        
>>>>>>> remotes/origin/GiangDev
                        <!-- <td>
                            @if ($product->status == 'active')
                            <span class="badge badge-sm bg-success ms-1">Hiển thị</span>
                            <span class="badge badge-sm bg-warning ms-1">Ẩn</span>
                        </td> -->
                        <td class="col-sm-1">
                            <div class="d-flex justify-content-center align-items-center">
<<<<<<< HEAD
                            <a href="dashboard.php?controller=phieutthu&action=xem&id=<?php echo $item['MaPT']; ?>" class="btn btn-primary btn-sm float-left btn-circle" data-toggle="tooltip"
                                    title="Xem" data-placement="bottom"><i class="fas fa-info-circle"></i></a>
                                    <a href="dashboard.php?controller=phieutthu&action=update&id=<?php echo $item['MaPT']; ?>"
                                    class="btn btn-warning btn-sm float-left mx-2 btn-circle text-white"
                                    data-toggle="tooltip" title="Sửa" data-placement="bottom"><i
                                        class="fas fa-edit"></i></a>
                                        <form method="POST" action="dashboard.php?controller=phieutthu&action=delete">
=======
                                <a href="dashboard.php?controller=phieutthu&action=xem&id=<?php echo $item['MaPT']; ?>" class="btn btn-primary btn-sm float-left btn-circle" data-toggle="tooltip"
                                    title="Xem" data-placement="bottom"><i class="fas fa-info-circle"></i></a>
                                <a href="dashboard.php?controller=phieutthu&action=update&id=<?php echo $item['MaPT']; ?>"
                                    class="btn btn-warning btn-sm float-left mx-2 btn-circle text-white"
                                    data-toggle="tooltip" title="Sửa" data-placement="bottom"><i
                                        class="fas fa-edit"></i></a>
                                <form method="POST" action="dashboard.php?controller=phieutthu&action=delete">
>>>>>>> remotes/origin/GiangDev
                                    <button type="button" class="btn btn-danger btn-sm btn-circle btnDelete" data-id=""
                                        data-toggle="tooltip" data-placement="bottom" title="Xoá">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <input type="text" id="maNSX" name="MaPT" value="<?php echo $item['MaPT']; ?>" hidden>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
            <!-- {{-- @else
            <h6 class="text-center">Danh sách {{ $name }} trống.</h6>
            @endif --}} -->
        </div>

    </div>
</div>
