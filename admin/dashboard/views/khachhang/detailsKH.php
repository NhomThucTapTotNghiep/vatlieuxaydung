<?php foreach($dataKH as $item) ?>
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
                <a href="dashboard.php?controller=khachhang&action=xem&id=<?php echo $item['MaKH'] ?>">Chi tiết khách
                    hàng</a>
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mt-2 font-weight-bold text-primary float-left">Thông tin khách hàng
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
                                <td>Mã khách hàng</td>
                                <td><?php echo $item['MaKH'] ?></td>
                            </tr>
                            <tr>
                                <td>Tên khách hàng</td>
                                <td><?php echo $item['TenKH'] ?></td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td><?php if($item['GioiTinh']==0){echo "Nam";} else {echo "Nữ";} ?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><?php $sdt = $khachhang->sdtKhachHang($item['MaKH']);
                                    foreach($sdt as $tamp){ ?>
                                    <form method="POST" action="dashboard.php?controller=khachhang&action=deletesdt">
                                        <?php echo $tamp['SDT']; ?>
                                        <button type="button" class="btn btn-sm btnDelete"
                                            data-id="" data-toggle="tooltip" data-placement="bottom" title="Xoá">
                                            <i class="fas fa-trash"> Xóa</i>
                                        </button>
                                        <input type="text" id="makh" name="makh" value="<?php echo $item['MaKH']; ?>" hidden>
                                        <input type="text" id="sdtkh" name="sdtkh" value="<?php echo $tamp['SDT']; ?>" hidden>
                                    </form>
                                    <br>
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><?php echo $item['DiaChi'] ?></td>
                            </tr>

                            <tr>
                                <td>Ghi chú</td>
                                <td><?php echo $item['GhiChu'] ?> </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="card-footer d-flex">
                    <x-Dashboard.Shared.ButtonDetail :id="$product->id" edit="product.edit" delete="product.destroy" />
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