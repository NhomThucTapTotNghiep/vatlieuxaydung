<?php
    $action=Utilities::post('action', 'index');
    $action=Utilities::get('id', '');
    if($action == "index"){
        var_dump($_POST['item_id'],$_POST['item_soluong']);
        include 'view/body/cart.php';
    }
    if($action == "checkout"){
        include 'view/body/checkout.php';
    }
    if($action = 'add'){
        var_dump($_POST['mavt'], $_POST['soluong']);
        echo '<script"> alert("sussess");</script>';
    }

?>