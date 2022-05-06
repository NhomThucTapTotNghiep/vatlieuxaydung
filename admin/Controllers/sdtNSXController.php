<?php
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
$sdt_nsx=new SDTNhaSanXuat();
$nhaSX = new nhaSanXuat();

if($action =='index'){
    $dataSDTNSX = $sdt_nsx->allSDTNSX();
    include '../dashboard/views/SDTNhaSanXuat/index.php';
}
if($action =='delete'){
    $maNSX = Utilities::post('MaNSX','');
    //$message1=$nhaSX->xoaSDTKH($makh);
    $message2=$sdt_nsx->xoaSDTNSX($maNSX);
    $dataSDTNSX = $sdt_nsx->allSDTNSX();
    include '../dashboard/views/SDTNhaSanXuat/index.php';
}
if($action =='add'){
    $dataSDTNSX = $sdt_nsx->allSDTNSX();
    include '../dashboard/views/SDTNhaSanXuat/create.php';
}
if($action =='addSDTNSX'){
    $maNSX = Utilities::post('MaNSX','');
    $SDT = Utilities::post('SDT','');
    $message=$sdt_nsx->themSDTNSX($maNSX,$SDT);
        //$khachhang->themSDT($makh, $sdt);
        $dataSDTNSX = $sdt_nsx->allSDTNSX();
        include '../dashboard/views/SDTNhaSanXuat/index.php';
    }
if($action =='xem'){
    $dataNSX = $nhaSX->detail($id);
    include '../dashboard/views/nhasanxuat/detail';
}
if($action == 'update'){
    $dataNSX = $nhaSX->detail($id);
    include '../dashboard/views/nhasanxuat/edit.php';
}
if($action =='updateNSX'){
    $maNSX = Utilities::post('MaNSX','');
    $tenNSX = Utilities::post('TenNSX','');
    $diachi = Utilities::post('DiaChi','');

    $message = $nhaSX->suaNSX($maNSX,$tenNSX,$diachi);
    $dataNSX = $nhaSX->allNSX();
    include '../dashboard/views/nhasanxuat/index.php';
}