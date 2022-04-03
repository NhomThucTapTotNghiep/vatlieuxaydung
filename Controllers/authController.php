<?php
    $action=Utilities::get('action', 'index');
    if($action == "index"){
        include 'view/body/loginForm.php';
    }
    if($action == "dangky"){
        include 'view/body/register.php';
    }
?>