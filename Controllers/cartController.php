<?php
    $action=Utilities::get('action', 'index');
    if($action == "index"){
        include 'view/body/cart.php';
    }
    if($action == "checkout"){
        include 'view/body/checkout.php';
    }

?>