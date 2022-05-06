<?php
if (!defined('HOST')) {
    exit;
}

class SDTNhaSanXuat extends Database
{
    function allSDTNSX()
    {
        return $this->selectQuery("Select *  from nhasanxuat join sdt_nsx on nhasanxuat.MaNSX=sdt_nsx.MaNSX");
    }
    // function sdtKhachHang($MaKH){
    //     return $this->selectQuery("Select SDT  from sdt_khachhang where sdt_khachhang.MaKH =?", [$MaKH]);
    // }
    // function laymaNSX($sdt){
    //     return $this->selectQuery("Select MaKH  from sdt_khachhang where sdt_khachhang.SDT =?", [$sdt]);
    // }


    //them
    function themSDTNSX($maNSX, $SDT){
        $sql_them = "INSERT INTO `sdt_nsx`(`SDT`, `MaNSX`)
                    VALUES (?,?)";
        return $this->updateQuery($sql_them, [$SDT,$maNSX]);
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
    function xoaSDTNSX($id)
    {
        return $this->updateQuery("DELETE FROM `sdt_nsx` WHERE sdt_nsx.MaNSX = ?", [$id]);
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