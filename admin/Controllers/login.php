<?php 
//include ('./config.php');
//CRUD: R: getAll, R: detail
$action=Utilities::get('action','login');
$quantri= new Quantri();

if($action=='login'){
    include ('../index.php');
}

if($action=='KiemTraLogin'){
    $u=isset($_POST['email'])? $_POST['email']:'';
    $p=isset($_POST['password'])? $_POST['password']:'';
    
    $check=$quantri->login($u,$p);
    if($check==false){
        //$quantri->login($u,$p);
       
         print_r("email hoac pass sai");
         
        // echo '<script>alert("login success");</script>';
        // $_SESSION['quantri']=$quantri;
        //header('Location: ./index.php');
        
    }
    else{
        $_SESSION["quantri"] = $u;
        $dataNV = $quantri->getInf($u);
        foreach ($dataNV as $item)
        $_SESSION['tennv'] = $item['TenNV'];
        $_SESSION['role'] = $item['Role'];
        $quantri->login($u,$p);
        echo 'success';
        ?>
        <script>
            window.location='../dashboard/dashboard.php';
        </script>
        <?php

    }
    
}
if($action=='logout'){
    if($quantri->logout()==true){
        ?>
        <script>
            window.location='../index.php';
        </script>
        <?php

    }

}

