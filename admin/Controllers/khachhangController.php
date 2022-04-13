<?php 
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
$khachhang = new khachHang();
if($action =='index'){
    $dataKH = $khachhang->allKhachHang();
    $khachhang;
    include '../dashboard/views/khachhang/index.php';
}
if($action =='add'){
    include '../dashboard/views/khachhang/create.php';
}
if($action =='addkh'){
    $makh = Utilities::post('MaKH','');
    $tenkh = Utilities::post('TenKH','');
    $sdt = Utilities::post('SDTKH','');
    $diachi = Utilities::post('DiaChiKH','');
    $ghichu = Utilities::post('ghichuKH','');
    $gt = Utilities::post('gender');
    if($gt = 'Nam'){
        $gioitinh = 0;
    }
    else{
        $gioitinh = 1;
    }
    if(empty($khachhang->detail($makh))){
        $message=$khachhang->themKH($makh,$tenkh,$gioitinh,$diachi,$ghichu);
        $khachhang->themSDT($makh, $sdt);
        $dataKH = $khachhang->allKhachHang();
        $khachhang;
        include '../dashboard/views/khachhang/index.php';
    }else{
        $message='Trùng mã khách hàng';
        include '../dashboard/views/khachhang/create.php';
    }
    
}
if($action=='addsdt'){
    $dataKH = $khachhang->allKhachHang();
    include '../dashboard/views/khachhang/createSDT.php';
}
if($action=='addSdt'){
    $makh = Utilities::post('maKH','');
    $sdt = Utilities::post('SDTKH','');
    $message = $khachhang->themSDT($makh, $sdt);
    $dataKH = $khachhang->allKhachHang();
    include '../dashboard/views/khachhang/index.php';
}

//sua
if($action == 'update'){
    $dataKH = $khachhang->detail($id);
    $khachhang;
    include '../dashboard/views/khachhang/edit.php';
}
if($action =='updatekh'){
    $makh = Utilities::post('cnMaKH','');
    $tenkh = Utilities::post('cnTenKH','');
    $diachi = Utilities::post('cnDiaChiKH','');
    $ghichu = Utilities::post('cnghichuKH','');
    $gt = Utilities::post('cngender');
    $dem = Utilities::post('slsdt', 0);
    if($gt = 'Nam'){
        $gioitinh = 0;
    }
    else{
        $gioitinh = 1;
    }
    // var_dump($makh.' '.$tenkh.' '.$diachi.' '.$ghichu.' '.$gioitinh);
    if($dem != 0){
        $message1 = $khachhang->xoaSDTKH($makh);
        for($i=1;$i<$dem;$i++){
            $sdt = Utilities::post('cnSDTKH'.$i,'');
            $message1  = $khachhang->themSDT($makh, $sdt);
        }
    }
    $message = $khachhang->suaKH($makh,$tenkh,$gioitinh,$diachi,$ghichu);
    $dataKH = $khachhang->allKhachHang();
    include '../dashboard/views/khachhang/index.php';
}
if($action =='delete'){
    $makh = Utilities::post('makh','');
    $message1=$khachhang->xoaSDTKH($makh);
    $message2=$khachhang->xoaKH($makh);
    $dataKH = $khachhang->allKhachHang();
    include '../dashboard/views/khachhang/index.php';
}
if($action =='deletesdt'){
    $sdt = Utilities::post('sdtkh','');
    $makh = Utilities::post('makh','');
    $message = $khachhang->xoaSDT($sdt, $makh);
    $dataKH = $khachhang->detail($makh);
    include '../dashboard/views/khachhang/detailsKH.php';
}

if($action =='xem'){
    $dataKH = $khachhang->detail($id);
    include '../dashboard/views/khachhang/detailsKH.php';
}