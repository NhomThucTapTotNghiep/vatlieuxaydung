<?php 
$action=Utilities::get('action', 'index');
if($action =='index'){
    include '../dashboard/body/quanly.php';
}