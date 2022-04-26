<?php 
    $columns = [
        'MaHD' => 'Mã hóa đơn',
        'MaKH' => 'Mã khách hàng',
        'ThanhTien' => 'Thành tiền',
        'CongNo' => 'Công nợ',
        'VAT' => 'VAT',
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
                <a href="dashboard.php?controller=khachhang">Danh sách hóa đơn</a>
            </li>
        </ol>
    </nav>
   
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="mt-2 font-weight-bold text-primary float-left">Danh sách hóa đơn</h6>
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
                    foreach($dataHD as $item)
                    {
                        ?>
                    <tr>
                        <td><?php echo $item['MaHD']; ?></td>
                        <td><?php echo $item['MaKH']; ?></td>
                        <td><?php echo $item['ThanhTien']; ?></td>
                        <td><?php echo $item['CongNo']; ?></td>
                        <td><?php echo $item['VAT']; ?></td>

                       
                        <!-- <td>
                            @if ($product->status == 'active')
                            <span class="badge badge-sm bg-success ms-1">Hiển thị</span>
                            <span class="badge badge-sm bg-warning ms-1">Ẩn</span>
                        </td> -->
                        
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
<?php  
    include '../dashboard/alert/alert.php'; 
    if(!empty($message)){
        echo '<script type="text/javascript">alert();</script>';
    }       

?>