<?php 
$action=Utilities::get('action', 'index');
$message ='';
if($action =='index'){
    include '../dashboard/views/donhang/index.php';
}