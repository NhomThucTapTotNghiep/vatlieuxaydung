<?php
    session_start();
    require_once("../config.php");
    require_once("../class/Database.php");
    require_once("../class/vatTu.php");
    require_once("../class/Utilities.php");
    $vattu = new vatTu();
    // var_dump($_POST["action"]);
    // session_unset();
    // die;
    if($_POST['action'] == 'add'){
            $_SESSION['cart_item'][$_POST['mavt']] = $vattu->detail($_POST['mavt']);
            $_SESSION['cart_item'][$_POST['mavt']]["quantity"] = $_POST["quantity"];
            var_dump($_SESSION["cart_item"]);
    } 
    if($_POST['action'] == 'delete'){
        if(!empty($_SESSION['cart_item'])) {
			foreach($_SESSION["cart_item"] as $item) {
                    var_dump($_POST["mavt"].'   ==  '.$item['MaVT']);
					if($_POST["mavt"] == $item['MaVT'])
						unset($_SESSION["cart_item"][$item['MaVT']]);
			}
		}
    };
    if($_POST['action'] == 'update'){
        $_SESSION['cart_item'][$_POST['mavt']]["quantity"] = $_POST["quantity"];
    };
?>