<?php 
$action=Utilities::get('action', 'index');
if($action =='index'){
    include '../dashboard/views/vattu/index.php';
}
if($action =='add'){
    include '../dashboard/views/vattu/create.php';
}
if($action =='update'){
    include '../dashboard/views/vattu/edit.php';
}