<?php 
$action=Utilities::get('action', 'index');
$hoadon= new hoaDon();
if($action =='index'){
    $dataHD=$hoadon->allHD();
    include '../dashboard/views/hoadon/index.php';
}