<?php
$vattu = new vatTu();
$action=Utilities::get('action', 'index');
if($action =='index'){
    $dataVatTu1 = $vattu->random(8);
    $dataVatTu2 = $vattu->random(8);
    include  'view/body/banner.php';
    include 'view/body/mainpage.php';
}
if($action =='cart'){
    $dataVatTu1 = $vattu->random(8);
    include 'view/body/cart.php';
}