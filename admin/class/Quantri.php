<?php 
class Quantri extends Database 
{
    protected $Email;
    protected $TenNV;
    protected $Role;
        
    //return true: neu dang nhap roi
    function isLogin()
    {   //dang nhap roi
        if (isset($_SESSION['quantri']))
        {
            $u = $_SESSION['quantri'];
            $this->Email = $u['Email'];
            $this->TenNV = $u['TenNV'];
            $this->Role=$u['Role'];
            return true;
        }
        return false;
    }

    function login($u, $p)
    {
        //$p = Utilities::encryption($p);
        $sql='select Email, TenNV, Role from nhanvien where Email=? and Password=? ';
        $arr=[$u, $p];
        $data = $this->selectQuery($sql, $arr);
        //ok
        if (Count($data)>0) 
        {
            // $_SESSION['quantri']=$data[0];
            // var_dump($_SESSION['quantri']);
            return true;
        }
        return false;


    }

    function logout()
    {
        // var_dump($_SESSION['quantri']);
        if (isset($_SESSION['quantri']))
        {
            unset($_SESSION['quantri']);
            return true;
        }
        return false;
    }
    function getInf($u){
        return $this->selectQuery("Select TenNV, Role from nhanvien where nhanvien.Email =?", [$u]);
    }
}