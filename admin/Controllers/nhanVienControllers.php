<?php 
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
$nhanvien = new nhanVien();
if($action =='index'){
    $dataNV = $nhanvien->allNhanVien();
    include '../dashboard/views/nhanvien/index.php';
}
if($action =='add'){
    include '../dashboard/views/nhanvien/create.php';
}
if($action =='addnv'){
    $manv = Utilities::post('MaNV','');
    $tennv = Utilities::post('TenNV','');
    $sdt = Utilities::post('SDTNV','');
    $diachi = Utilities::post('DiaChiNV','');
    $gt = Utilities::post('gender');
    $role = Utilities::post('role');
    $password = Utilities::post('Password');
    $email = Utilities::post('Email');
    $ngaysinh = Utilities::post('ngaysinh');
    if($gt = 'Nam'){
        $gioitinh = 0;
    }
    else{
        $gioitinh = 1;
    }
    // var_dump($manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role);
    if(empty($nhanvien->detail($manv))){
        $message1=$nhanvien->themNV($manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role);
        $nhanvien->themSDTNV($manv, $sdt);
        $dataNV = $nhanvien->allNhanVien();
        include '../dashboard/views/nhanvien/index.php';
    }else{
        $message='Trùng mã nhân viên';
        include '../dashboard/views/nhanvien/create.php';
    }
    
}
if($action=='addsdt'){
    $dataNV = $nhanvien->allNhanVien();
    include '../dashboard/views/nhanvien/createSDT.php';
}
if($action=='addSdt'){
    $manv = Utilities::post('maNV','');
    $sdt = Utilities::post('SDTNV','');
    //var_dump($manv, $sdt);
    $message1 = $nhanvien->themSDTNV($manv, $sdt);
    $dataNV = $nhanvien->allNhanVien();
    include '../dashboard/views/nhanvien/index.php';
}

//sua
if($action == 'update'){
    $dataNV = $nhanvien->detail($id);
    include '../dashboard/views/nhanvien/edit.php';
}
if($action =='updatenv'){
    $manv = Utilities::post('MaNV','');
    $tennv = Utilities::post('TenNV','');
    $sdt = Utilities::post('SDTNV','');
    $diachi = Utilities::post('DiaChiNV','');
    $gt = Utilities::post('gender');
    $role = Utilities::post('role');
    $password = Utilities::post('Password');
    $email = Utilities::post('Email');
    $ngaysinh = Utilities::post('ngaysinh');
    $dem = Utilities::post('slsdt', 0);
    if($gt = 'Nam'){
        $gioitinh = 0;
    }
    else{
        $gioitinh = 1;
    }
    // var_dump($manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role, $dem);
    if($dem != 0){
        $message1 = $nhanvien->xoaSDTNV($manv);
        for($i=1;$i<$dem;$i++){
            $sdt = Utilities::post('cnSDTKH'.$i,'');
            $message1  = $nhanvien->themSDTNV($manv, $sdt);
        }
    }
    $ngaySinh  = $ngaysinh.' 00:00:00';
    $message1 = $nhanvien->suaNV($manv, $tennv, $ngaySinh, $gioitinh, $diachi, $email, $password, $role);
    $dataNV = $nhanvien->allNhanVien();
    include '../dashboard/views/nhanvien/index.php';
}
if($action =='delete'){
    $manv = Utilities::post('manv','');

    if(!empty($nhanvien->checkINfDDH($manv))){
        $message = 'Có ràng buộc với đơn đặt hàng';
        $dataNV = $nhanvien->allNhanVien();
        include '../dashboard/views/nhanvien/index.php';
    }
    else{
        $message1=$nhanvien->xoaSDTNV($manv);
        $message2=$nhanvien->xoaNV($manv);
        $dataNV = $nhanvien->allNhanVien();
        include '../dashboard/views/nhanvien/index.php';
        
    }
}
if($action =='deletesdt'){
    $sdt = Utilities::post('sdtnv','');
    $manv = Utilities::post('manv','');
    $message = $nhanvien->xoaSDT($sdt, $manv);
    $dataNV = $nhanvien->detail($manv);
    include '../dashboard/views/nhanvien/detailsNV.php';
}

if($action =='xem'){
    $dataNV = $nhanvien->detail($id);
    include '../dashboard/views/nhanvien/detailsNV.php';
}