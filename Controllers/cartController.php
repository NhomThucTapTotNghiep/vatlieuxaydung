<?php
    $action=Utilities::post('action', 'index');
    $action=Utilities::get('id', '');
    if($action == "index"){
        include 'view/body/cart.php';
    }
    if($action == "checkout"){
        include 'view/body/checkout.php';
    }
    if($action = 'add'){
        echo '<script"> alert("sussess");</script>';
    }
   
?>