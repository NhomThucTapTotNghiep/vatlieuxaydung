<?php
$vattu = new vatTu();
$action=Utilities::get('action', 'index');
if($action =='index'){
    $dataVatTu = $vattu->all();
    include  'view/body/banner.php';
    include 'view/body/mainpage.php';
}