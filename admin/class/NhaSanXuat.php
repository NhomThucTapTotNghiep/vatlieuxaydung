<?php
if (!defined('HOST')) {
    exit;
}

class nhaSanXuat extends Database
{
    function allNSX()
    {
        return $this->selectQuery("Select *  from nhasanxuat");
    }
    // function sdtKhachHang($MaKH){
    //     return $this->selectQuery("Select SDT  from sdt_khachhang where sdt_khachhang.MaKH =?", [$MaKH]);
    // }
    // function laymaNSX($sdt){
    //     return $this->selectQuery("Select MaKH  from sdt_khachhang where sdt_khachhang.SDT =?", [$sdt]);
    // }


    //them
    function themNSX($maNSX, $tenNSX, $diachi){
        $sql_them = "INSERT INTO `nhasanxuat`(`MaNSX`, `TenNSX`, `DiaChi`) 
                    VALUES (?,?,?)";
        return $this->updateQuery($sql_them, [$maNSX, $tenNSX, $diachi]);
    }
    // function themSDT($makh, $sdt){
    //     $sql_them = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
    //     VALUES (?,?)";
    //     return $this->updateQuery($sql_them, [$makh, $sdt]);
    // }

    //sua
    function suaNSX($maNSX, $tenNSX, $diachi){
        $sql_sua = "UPDATE `nhasanxuat` SET TenNSX=?,DiaChi=? WHERE MaNSX =?";
        return $this->updateQuery($sql_sua, [$tenNSX, $diachi, $maNSX]);
    }
    // function suaSDT($makh, $sdt){
    //     $sql_sua = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
    //     VALUES (?,?)";
    //     return $this->updateQuery($sql_sua, [$makh, $sdt]);
    // }

    //xoa
    function xoaNSX($id)
    {
        return $this->updateQuery("DELETE FROM `nhasanxuat` WHERE nhasanxuat.MaNSX = ?", [$id]);
    }
    // function xoaSDTKH($id)
    // {
    //     return $this->updateQuery("DELETE FROM `sdt_khachhang` WHERE sdt_khachhang.MaKH = ?", [$id]);
    // }
    // function xoaSDT($sdt, $makh)
    // {
    //      return $this->updateQuery("DELETE FROM `sdt_khachhang` WHERE sdt_khachhang.SDT = ? and MaKH = ?", [$sdt, $makh]);
    // }


    //chi tiet
    function detail($id)
    {
        return $this->selectQuery("Select *  from nhasanxuat
                                    WHERE nhasanxuat.MaNSX = ?", [$id]);
    }

} 