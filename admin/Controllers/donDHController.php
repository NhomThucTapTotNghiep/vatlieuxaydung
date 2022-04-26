<?php 
$action=Utilities::get('action', 'index');
$message ='';
$ddh = new donDatHang();
if($action =='index'){
    $dataDDH= $ddh->allDDH();
    include '../dashboard/views/donhang/index.php';
}
if($action =='add'){
    $dataNV = $ddh->allMaNV();
    $dataKH = $ddh->allMaKH();
    $dataHD =$ddh->allHD();
    include '../dashboard/views/donhang/createDDH.php';
}
if($action =='addddh'){
    $maddh = Utilities::post('MaDDH','');
    $makh = Utilities::post('MaKH','');
    $manv = Utilities::post('MaNV','');
    $ngayld = Utilities::post('NgayLapDDH','');
    $ngaygh = Utilities::post('NgayGiaoHang','');
    $thanhtien = Utilities::post('ThanhTien');
    $trangthai = Utilities::post('TrangThai');
    $vat = Utilities::post('VAT');
    $congno = Utilities::post('CongNo');
    if(empty($ddh->detail($maddh))){
        $message=$ddh->themDDH($maddh, $makh, $manv, $ngayld, $ngaygh, $thanhtien, $trangthai, $vat, $congno);
        $message=$ddh->themHD($mahd, $makh, $thanhtien, $congno,$vat);
        $dataDDH = $ddh->allDDH();
        $dataHD=$ddh->allHD();
        include '../dashboard/views/donhang/index.php';
    }else{
        $message='Trùng mã đơn';
        include '../dashboard/views/khachhang/create.php';
    }
    // include '../dashboard/views/vattu/create.php';
}