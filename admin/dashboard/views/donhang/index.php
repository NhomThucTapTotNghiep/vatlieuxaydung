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
        </ol>
    </nav>
    <div class="dropdown">
        <a href='dashboard.php?controller=vattu&action=add'
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
        <h6 class="mt-2 font-weight-bold text-primary float-left">Danh sách vật tư</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã đơn đặt hàng</th>
                        <th>Mã khách hàng</th>
                        <th>Mã nhân viên</th>
                        <th>Ngày lập đơn</th>
                        <th>Ngày giao hàng</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái</th>
                        <th>VAT</th>
                        <th>Công nợ</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <!-- {{-- @else
            <h6 class="text-center">Danh sách {{ $name }} trống.</h6>
            @endif --}} -->
        </div>

    </div>
</div>





<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable({


        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        'destroy': true,
        'pagging': true,
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
            'url': '../views/donhang/datatable.php',

        },
        'columns': [{
                data: 'MaDDH'
            },
            {
                data: 'MaKH'
            },
            {
                data: 'MaNV'
            },
            {
                data: 'NgayLapDDH'
            },
            {
                data: 'NgayGiaoHang'
            },
            {
                data: 'ThanhTien'
            },
            {
                data: 'TrangThai'
            },
            {
                data: 'VAT'
            },
            {
                data: 'CongNo'
            },
        ]
    }).clear();
});


$(document).ready(function() {
    $('#datatable').DataTable({
        dom: 'Bfrtip',
        retrieve: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>