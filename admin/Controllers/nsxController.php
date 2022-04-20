<?php 
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
$nhaSX = new nhaSanXuat();
if($action =='index'){
    $dataNSX = $nhaSX->allNSX();
    $nhaSX;
    include '../dashboard/views/nhasanxuat/index.php';
}
if($action =='delete'){
    $maNSX = Utilities::post('maNSX','');
    //$message1=$nhaSX->xoaSDTKH($makh);
    $message2=$nhaSX->xoaNSX($maNSX);
    $dataNSX = $nhaSX->allNSX();
    include '../dashboard/views/nhasanxuat/index.php';
}
if($action =='add'){
    include '../dashboard/views/nhasanxuat/create.php';
}
if($action =='addNSX'){
    $maNSX = Utilities::post('MaNSX','');
    $tenNSX = Utilities::post('TenNSX','');
    $diachi = Utilities::post('DiaChi','');
    if(empty($nhaSX->detail($maNSX))){
        $message=$nhaSX->themNSX($maNSX,$tenNSX,$diachi);
        //$khachhang->themSDT($makh, $sdt);
        $dataNSX = $nhaSX->allNSX();
        $khachhang;
        include '../dashboard/views/nhasanxuat/index.php';
    }else{
        $message='Trùng mã khách hàng';
        include '../dashboard/views/nhasanxuat/create.php';
    }
    
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