<?php foreach($dataVT as $item) ?>
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
                <a href="dashboard.php?controller=vattu&action=xem&id=<?php echo $item['MaVT'] ?>">Chi tiết vật tư</a>
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mt-2 font-weight-bold text-primary float-left">Thông tin vật tư
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="col-sm-3">#</th>
                                <th class="col-sm-9">Thông tin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mã vật tư</td>
                                <td><?php echo $item['MaVT'] ?></td>
                            </tr>
                            <tr>
                                <td>Tên vật tư</td>
                                <td><?php echo $item['TenVT'] ?></td>
                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td><img src="<?php echo IMG_SANPHAM.$item['img'] ;?>" alt=""></td>
                            </tr>
                            <tr>
                                <td>Đơn vị tính</td>
                                <td><?php echo $item['DVTinh'] ; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Đơn giá</td>
                                <td><?php echo $item['DonGia'] ?></td>
                            </tr>

                            <tr>
                                <td>Số lượng</td>
                                <td><?php echo $item['SoLuong'] ?> </td>
                            </tr>

                            <tr>
                                <td>Nhà sản xuất</td>
                                <td>
                                    <?php $nsx =  $vattu->detailNSX($item['MaNSX']);
                                        foreach ($nsx as $tamp){
                                            echo $tamp['TenNSX'];
                                        };
                                        
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="form-group my-3">
                    <a href="dashboard.php?controller=vattu&action=update&id=<?php echo $item['MaVT'] ?>" style="margin-left: 40px; color: white;" class="btn btn-success">Sửa</a>
                    <a href="dashboard.php?controller=vattu" style="margin-left: 10px; color: white;" class="btn btn-warning">Trở về</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#readmore {
    color: #434c57;
    font-size: 14px;
    font-weight: 500;
}
</style>

<script>
$(document).ready(function() {
    const content = $("#content_readmore");
    content.hide();
    $("#readmore").on("click", function() {
        $("#dot").text(content.is(':visible') ? '...' : '')
        $(this).text(content.is(':visible') ? 'Xem thêm' : '[Thu gọn]');
        content.slideToggle(300);
    });
});
</script>