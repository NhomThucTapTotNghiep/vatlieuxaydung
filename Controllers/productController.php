<?php
$vattu = new vatTu();
$action=Utilities::get('action', 'index');
if($action == "index"){
    include 'view/body/product.php';
}
?>