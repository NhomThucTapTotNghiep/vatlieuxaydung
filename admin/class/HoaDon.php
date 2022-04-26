<?php
if (!defined('HOST')) {
    exit;
}

class hoaDon extends Database
{
    function allHD()
    {
        return $this->selectQuery("SELECT * FROM hoadon ");
    }
}