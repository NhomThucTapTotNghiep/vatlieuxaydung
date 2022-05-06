<?php 
$action=Utilities::get('action', 'index');
$dataPT=new PhieuThu();
$id=Utilities::get('id', '');
$nhaSX = new nhaSanXuat();
if($action =='index'){
    $dataPthu=$dataPT->allPhieuThu();
    include '../dashboard/views/phieuthu/index.php';
}
if($action =='add'){
    $nv=$dataPT->layNhanVien();
    include '../dashboard/views/phieuthu/create.php';
}
if($action =='addPT'){
    $maPT = Utilities::post('MaPT','');
    $ngayTT = Utilities::post('NgayTT','');
    $soTienTT = Utilities::post('SoTienTT','');
    $dot = Utilities::post('Dot','');
    $maNV = Utilities::post('MaNV','');
    $maHD = Utilities::post('MaHD','');
    $trangThai = Utilities::post('TrangThai','');
    //var_dump($maPT,$ngayTT,$soTienTT,$dot,$maNV,$maHD,$trangThai);

    if(empty($dataPT->detail($maPT))){
        $message=$dataPT->themPT($maPT,$ngayTT,$soTienTT,$dot,$maNV,$maHD,$trangThai);
       // var_dump($message);
        //$khachhang->themSDT($makh, $sdt);
        $dataPthu = $dataPT->allPhieuThu();
        include '../dashboard/views/phieuthu/index.php';
    }else{
        $message='Trùng mã phieu thu';
        include '../dashboard/views/phieuthu/create.php';
    }

}
if($action =='delete'){
    $maPT = Utilities::post('MaPT','');
    //$message1=$nhaSX->xoaSDTKH($makh);
    $message2=$dataPT->xoaPT($maPT);
    $dataPthu = $dataPT->allPhieuThu();
    include '../dashboard/views/phieuthu/index.php';
}

if($action == 'update'){
    $dataPthu = $dataPT->detail($id);
    $nv=$dataPT->layNhanVien();
    include '../dashboard/views/phieuthu/edit.php';
}
if($action =='updatePT'){
    $maPT = Utilities::post('MaPT','');
    $ngayTT = Utilities::post('NgayTT','');
    $soTienTT = Utilities::post('SoTienTT','');
    $dot = Utilities::post('Dot','');
    $maNV = Utilities::post('MaNV','');
    $maHD = Utilities::post('MaHD','');
    $trangThai = Utilities::post('TrangThai','');
    //var_dump($maPT,$ngayTT,$soTienTT,$dot,$maNV,$maHD,$trangThai);

    $message = $dataPT->suaPT($ngayTT,$soTienTT,$dot,$maNV,$maHD,$trangThai,$maPT);
    $dataPthu = $dataPT->allPhieuThu();
    include '../dashboard/views/phieuthu/index.php';
}
if($action=="xem"){
    $dataPthu = $dataPT->detail($id);
    $nv=$dataPT->layNhanVien();
    include '../dashboard/views/phieuthu/detail.php';
}