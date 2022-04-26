<?php
   // Kết nối Database
   include 'connect.php'; 

   // Lấy dữ liệu
   $stmt = $conn->prepare("SELECT * FROM dondathang ");
    $stmt->execute();
   $empRecords = $stmt->fetchAll();
   
   $vt = $conn->prepare("SELECT * FROM vattu ");
   $vt->execute();
  $countvt = $vt->fetchAll();

  $nsx = $conn->prepare("SELECT * FROM nhasanxuat ");
  $nsx->execute();
 $countnsx = $nsx->fetchAll();

 $nv = $conn->prepare("SELECT * FROM nhanvien ");
  $nv->execute();
 $countnv = $nv->fetchAll();

 $kh = $conn->prepare("SELECT * FROM khachhang");
 $kh->execute();
$countkh = $kh->fetchAll();

$hd = $conn->prepare("SELECT * FROM hoadon");
$hd->execute();
$counthd = $hd->fetchAll();
   ?>

   

   