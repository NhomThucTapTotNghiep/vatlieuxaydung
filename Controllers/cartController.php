<?php
    $vattu = new vatTu();
    $nhasanxuat = new nhaSanXuat();
    $action=Utilities::post('action', 'index');
    if($action == "index"){
        $dataVatTu1 = $vattu->random(8);
        include 'view/body/checkout.php';
    }
   
   
?>