<?php
$vattu = new vatTu();
$nhasanxuat = new nhaSanXuat();
$action=Utilities::get('action', 'index');
$id=Utilities::get('id', '');
if($action == "index"){
    if($id == ''){
        $dataNXS = $nhasanxuat->all();
        $dataVT = $vattu->all();
        $dataVatTu1 = $vattu->random(8);
        include 'view/body/product.php';
    }
    else if (!empty($id)){
        $dataNXS = $nhasanxuat->all();
        $dataVT = $vattu->allByNSX($id);
        $dataVatTu1 = $vattu->random(8);
        include 'view/body/product.php';
    }
    
}
if ($action =='chitiet'){
    if($id =='')
    {

    }
    else{
        $chitiet = $vattu->detail($id);
        $dataVatTu1 = $vattu->random(8);
        include 'view/body/productDetails.php';
    }
    
}
?>