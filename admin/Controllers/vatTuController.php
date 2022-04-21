<?php 
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
$message='';
$vattu = new vatTu();
if($action =='index'){
    $dataVT = $vattu->allVatTu();
    include '../dashboard/views/vattu/index.php';
}
//Them
if($action =='add'){
    $dataNSX = $vattu->allNSX();
    include '../dashboard/views/vattu/create.php';
}
if($action =='addvt'){
    $mavt = Utilities::post('MaVT','');
    $tenvt = Utilities::post('TenVT','');
    $gia = Utilities::post('Gia','');
    $soluong = Utilities::post('SoLuong','');
    $mansx = Utilities::post('NSX','');
    $donvitinh = Utilities::post('DVTinh');
    $img = basename($_FILES["hinhVT"]["name"]);
    // var_dump($mavt,$tenvt,$gia,$mansx,$donvitinh,$soluong, $img);
    if(empty($vattu->detail($mavt))){
        move_uploaded_file($_FILES['hinhVT']['tmp_name'], IMG_SANPHAM.$img);
        $message=$vattu->themVT($mavt, $tenvt, $img, $donvitinh, $gia, $soluong, $mansx);
        $dataVT = $vattu->allVatTu();
        include '../dashboard/views/vattu/index.php';
    }else{
        $message='Trùng mã vật tư';
        include '../dashboard/views/khachhang/create.php';
    }
    // include '../dashboard/views/vattu/create.php';
}
//sua
if($action =='update'){
    $dataVT = $vattu->detail($id);
    $dataNSX = $vattu->allNSX();
    include '../dashboard/views/vattu/edit.php';
}
if($action =='updatevt'){
    $mavt = Utilities::post('MaVT','');
    $tenvt = Utilities::post('TenVT','');
    $gia = Utilities::post('Gia','');
    $soluong = Utilities::post('SoLuong','');
    $mansx = Utilities::post('NSX','');
    $donvitinh = Utilities::post('DVTinh');
    $img = basename($_FILES["hinhVT"]["name"]);
    // var_dump($mavt,$tenvt,$gia,$mansx,$donvitinh,$soluong, $img);
    if(empty($img)){
        $message=$vattu->suaVTkhongHinh($mavt, $tenvt, $donvitinh, $gia, $soluong, $mansx);
        $dataVT = $vattu->allVatTu();
        include '../dashboard/views/vattu/index.php';
    }else{
        $dataVT1 = $vattu->detail($mavt);
        $temp  ='';
        foreach($dataVT1 as $item){
            unlink(IMG_SANPHAM.$item['img']);
        };
        move_uploaded_file($_FILES['hinhVT']['tmp_name'], IMG_SANPHAM.$img);
        $message=$vattu->suaVT($mavt, $tenvt, $img, $donvitinh, $gia, $soluong, $mansx);
        $dataVT = $vattu->allVatTu();
        include '../dashboard/views/vattu/index.php';
    }
    // include '../dashboard/views/vattu/create.php';
}




//xoa
if ($action == 'delete'){
    $id = Utilities::post('mavt', '');
    $img = Utilities::post('img', '');
    if(empty($vattu->checkinf($id))){
        $message = $vattu->xoaVT($id);
        unlink(IMG_SANPHAM.$img);
        $dataVT = $vattu->allVatTu();
    }
    else{
        $dataVT = $vattu->allVatTu();
        $message ='Có liên kết không thể xóa';
        // include '../dashboard/alert/alert.php';
        include '../dashboard/views/vattu/index.php';
    }
}
//chi tiet
if($action == 'xem'){
    $dataVT = $vattu->detail($id);
    include '../dashboard/views/vattu/detailsVT.php';
}