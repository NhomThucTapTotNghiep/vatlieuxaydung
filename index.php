<?php 
    session_start();
    include 'config.php';
    include './class/Utilities.php';
    function loadClass($c)
    {
        include "./class/$c.php";
    }
    spl_autoload_register('loadClass');
    $controller = Utilities::get('controller', 'home');

?>
<!DOCTYPE html>
<html lang="en">
    <?php
    include 'view/layout/head.php';
    ?>
<body>
    <?php
        //header
        include  'view/layout/header.php';


        if($controller=='home')
        {

            //body
            include 'Controllers/homeController.php';
        }
        if($controller=='login')
        {
            // banner
            include  'view/body/banner.php';

            //login
            include 'Controllers/authController.php';
        }

        if($controller=='register')
        {
            // banner
            include  'Controllers/authController.php';

            //login
            include 'Controllers/authController.php';
        }


        if($controller == 'products'){
            //Show products
            include 'Controllers/productController.php';
        }
        if($controller == 'vattu'){
            include 'Controllers/productController.php';
        }

        if($controller == 'cart'){
            //Show products
            include 'Controllers/cartController.php';
        }

        if($controller == 'checkout'){
            include 'Controllers/cartController.php';
        }
        include 'view/body/bestseller.php';
        //footer
        include 'view/layout/footer.php';

        // scripts
        include 'view/layout/scripts.php';
    ?>
</body>
</html> 


