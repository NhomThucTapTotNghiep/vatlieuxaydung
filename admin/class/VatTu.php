<?php
if (!defined('HOST')) {
    exit;
}

class khachHang extends Database
{
    function allKhachHang()
    {
        return $this->selectQuery("Select *  from khachhang");
    }
    function sdtKhachHang($MaKH){
        return $this->selectQuery("Select SDT  from sdt_khachhang where sdt_khachhang.MaKH =?", [$MaKH]);
    }
    function laymakh($sdt){
        return $this->selectQuery("Select MaKH  from sdt_khachhang where sdt_khachhang.SDT =?", [$sdt]);
    }


    //them
    function themKH($makh, $tenkh, $gioitinh, $diachi, $ghichu){
        $sql_them = "INSERT INTO `khachhang`(`MaKH`, `TenKH`, `GioiTinh`, `DiaChi`, `GhiChu`) 
                    VALUES (?,?,?,?,?)";
        return $this->updateQuery($sql_them, [$makh, $tenkh, $gioitinh, $diachi, $ghichu]);
    }
    function themSDT($makh, $sdt){
        $sql_them = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_them, [$makh, $sdt]);
    }

    //sua
    function suaKH($makh, $tenkh, $gioitinh, $diachi, $ghichu){
        $sql_sua = "UPDATE `khachhang` SET TenKH=?,GioiTinh=?,DiaChi=?,GhiChu=? WHERE MaKH =?";
        return $this->updateQuery($sql_sua, [$tenkh, $gioitinh, $diachi, $ghichu, $makh]);
    }
    function suaSDT($makh, $sdt){
        $sql_sua = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_sua, [$makh, $sdt]);
    }

    //xoa
    function xoaKH($id)
    {
        return $this->updateQuery("DELETE FROM `khachhang` WHERE khachhang.MaKH = ?", [$id]);
    }
    function xoaSDTKH($id)
    {
        return $this->updateQuery("DELETE FROM `sdt_khachhang` WHERE sdt_khachhang.MaKH = ?", [$id]);
    }
    function xoaSDT($sdt, $makh)
    {
         return $this->updateQuery("DELETE FROM `sdt_khachhang` WHERE sdt_khachhang.SDT = ? and MaKH = ?", [$sdt, $makh]);
    }
    

    //chi tiet
    function detail($id)
    {
        return $this->selectQuery("Select *  from khachhang
                                    WHERE khachhang.MaKH = ?", [$id]);
    }

}