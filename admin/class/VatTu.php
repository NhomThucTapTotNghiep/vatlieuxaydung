<?php
if (!defined('HOST')) {
    exit;
}

class vatTu extends Database
{
    function allVatTu()
    {
        return $this->selectQuery("SELECT * FROM vattu, nhasanxuat WHERE vattu.MaNSX = nhasanxuat.MaNSX");
    }
    function layNSX($id){
        return $this->selectQuery("Select MaVT  from vattu where vattu.MaVT =?", [$id]);
    }
    function allNSX(){
        return $this->selectQuery("SELECT MaNSX, TenNSX FROM nhasanxuat");
    }


    //them
    function themVT($makh, $tenvt, $img, $donvt, $dongia, $soluong, $mansx){
        $sql_them = "INSERT INTO `vattu`(`MaVT`, `TenVT`, `img`, `DVTinh`, `DonGia`, `SoLuong`, `MaNSX`) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)";
        return $this->updateQuery($sql_them, [$makh, $tenvt, $img, $donvt, $dongia, $soluong, $mansx]);
    }
    function themSDT($makh, $sdt){
        $sql_them = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_them, [$makh, $sdt]);
    }

    //sua
    function suaVT($mavt, $tenvt, $img, $dvtinh, $gia, $soluong, $mansx){
        $sql_sua = "UPDATE `vattu` SET `TenVT`=?,`img`=?,`DVTinh`=?,`DonGia`=?,`SoLuong`=?,`MaNSX`=?
                    WHERE MaVT =?";
        return $this->updateQuery($sql_sua, [$tenvt, $img, $dvtinh, $gia, $soluong, $mansx, $mavt]);
    }
    function suaVTkhongHinh($mavt, $tenvt, $dvtinh, $gia, $soluong, $mansx){
        $sql_sua = "UPDATE `vattu` SET `TenVT`=?,`DVTinh`=?,`DonGia`=?,`SoLuong`=?,`MaNSX`=?
                    WHERE MaVT =?";
        return $this->updateQuery($sql_sua, [$tenvt, $dvtinh, $gia, $soluong, $mansx, $mavt]);
    }


    //xoa
    function xoaVT($id)
    {
        return $this->updateQuery("DELETE FROM `vattu` WHERE vattu.MaVT = ?", [$id]);
    }
    
    //check 
    function checkinf($id)
    {
        return $this->selectQuery("Select *  from ct_banhang
                                    WHERE MaVT = ?", [$id]);
    }

    //chi tiet
    function detail($id)
    {
        return $this->selectQuery("Select *  from vattu
                                    WHERE MaVT = ?", [$id]);
    }
    function detailNSX($id)
    {
        return $this->selectQuery("Select *  from nhasanxuat
                                    WHERE MaNSX = ?", [$id]);
    }

}