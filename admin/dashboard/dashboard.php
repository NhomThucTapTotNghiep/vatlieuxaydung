<?php 

    include '../configAdmin.php';
    include '../class/Utilities.php';
    function loadClass($c)
    {
        include "./class/$c.php";
    }
    spl_autoload_register('loadClass');
    $controller = Utilities::get('controller', 'home');
?>
<!DOCTYPE html>
<html lang="en">
<?php include'layout/head.php'; ?>

<body>

    <?php include'layout//sidebar.php'; ?>

    <main class="content">
        <?php include'layout//header.php'; 
        
        if($controller == 'home'){
          include '../Controllers/adminController.php';
          // include '../body/quanly.php';
        }
        if($controller =='ddh'){
            include '../Controllers/donDHController.php';
        }
        if($controller =='phieutthu'){
            include '../Controllers/phieuThuControlles.php';
        }
        if($controller =='vattu'){
            include '../Controllers/vatTuController.php';
        }
        if($controller =='nsx'){
            include '../Controllers/nsxController.php';
        }
        if($controller =='sdtnsx'){
            include '../Controllers/nsxController.php';
        }
        if($controller =='nhanvien'){
            include '../Controllers/nhanVienControllers.php';
        }
        if($controller =='khachhang'){
            include '../Controllers/khachhangController.php';
        }
        if($controller =='taikhoan'){
            include '../Controllers/taiKhoanControllers.php';
        }

        
        include 'layout/footer.php' ?>
    </main>
    <?php include 'layout/scripts.php' ?>


</body>

</html>