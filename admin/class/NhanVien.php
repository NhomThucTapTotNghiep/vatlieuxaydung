<?php
if (!defined('HOST')) {
    exit;
}

class nhanVien extends Database
{
    function allNhanVien()
    {
        return $this->selectQuery("Select *  from nhanvien");
    }
    function sdtNhanVien($MaNV){
        return $this->selectQuery("Select SDT from sdt_nhanvien where sdt_nhanvien.MaNV =?", [$MaNV]);
    }
    function laymanv($sdt){
        return $this->selectQuery("Select MaKH  from sdt_nhanvien where sdt_nhanvien.SDT =?", [$sdt]);
    }


    //them
    function themNV($manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role){
        $sql_them = "INSERT INTO `nhanvien`(`MaNV`, `TenNV`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Email`, `Password`, `Role`)
                    VALUES (?,?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [$manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role]);
    }
    function themSDTNV($manv, $sdt){
        $sql_them = "INSERT INTO `sdt_nhanvien`(`MaNV`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_them, [$manv, $sdt]);
    }

    //sua
    function suaNV($manv, $tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role){
        $sql_sua = "UPDATE `nhanvien` SET TenNV=?,NgaySinh=?,GioiTinh=?,DiaChi=?,Email=?,`Password`=?,`Role`=? WHERE MaNV=?";
        return $this->updateQuery($sql_sua, [$tennv, $ngaysinh, $gioitinh, $diachi, $email, $password, $role, $manv]);
    }
    function suaSDT($manv, $sdt){
        $sql_sua = "INSERT INTO `sdt_nhanvien`(`MaNV`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_sua, [$manv, $sdt]);
    }

    //xoa
    function xoaNV($id)
    {
        return $this->updateQuery("DELETE FROM `nhanvien` WHERE nhanvien.MaNV = ?", [$id]);
    }
    function xoaSDTNV($id)
    {
        return $this->updateQuery("DELETE FROM `sdt_nhanvien` WHERE sdt_nhanvien.MaNV = ?", [$id]);
    }
    function xoaSDT($sdt, $manv)
    {
         return $this->updateQuery("DELETE FROM `sdt_nhanvien` WHERE sdt_nhanvien.SDT = ? and MaNV = ?", [$sdt, $manv]);
    }
    

    //chi tiet
    function detail($id)
    {
        return $this->selectQuery("Select *  from nhanvien
                                    WHERE nhanvien.MaNV = ?", [$id]);
    }
    //Check inf
    function checkINfDDH($id)
    {
        return $this->selectQuery("Select *  from dondathang
                                    WHERE MaNV = ?", [$id]);
    }
    function checkINfHD($id)
    {
        return $this->selectQuery("Select *  from hoadon
                                    WHERE MaKH = ?", [$id]);
    }

}