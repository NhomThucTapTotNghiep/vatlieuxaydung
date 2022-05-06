<?php
if (!defined('HOST')) {
    exit;
}

class PhieuThu extends Database
{
    function allPhieuThu()
    {
        return $this->selectQuery("Select *  from phieuthu");
    }
    function sdtKhachHang($MaKH){
        return $this->selectQuery("Select SDT  from sdt_khachhang where sdt_khachhang.MaKH =?", [$MaKH]);
    }
    function laymakh($sdt){
        return $this->selectQuery("Select MaKH  from sdt_khachhang where sdt_khachhang.SDT =?", [$sdt]);
    }
    function layNhanVien()
    {
        return $this->selectQuery("Select *  from nhanvien");
    }

    //them
    function themPT($maPT, $ngayTT, $sotienTT, $dot, $maNV,$maHD,$trangthai){
        $sql_them = "INSERT INTO `phieuthu`(`MaPT`, `NgayTT`, `SoTienTT`, `Dot`, `MaNV`,`MaHD`,`TrangThai`) 
                    VALUES (?,?,?,?,?,?,?)";
        return $this->updateQuery($sql_them, [$maPT, $ngayTT, $sotienTT, $dot, $maNV,$maHD,$trangthai]);
    }
    function themSDT($makh, $sdt){
        $sql_them = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_them, [$makh, $sdt]);
    }

    //sua
    function suaPT( $ngayTT, $sotienTT, $dot, $maNV,$maHD,$trangthai,$maPT){
        $sql_sua = "UPDATE `phieuthu` SET NgayTT=?,SoTienTT=?,Dot=?,MaNV=?,MaHD=?,TrangThai=? WHERE MaPT =?";
        return $this->updateQuery($sql_sua, [ $ngayTT, $sotienTT, $dot, $maNV,$maHD,$trangthai, $maPT]);
    }
    function suaSDT($makh, $sdt){
        $sql_sua = "INSERT INTO `sdt_khachhang`(`MaKH`, `SDT`) 
        VALUES (?,?)";
        return $this->updateQuery($sql_sua, [$makh, $sdt]);
    }

    //xoa
    function xoaPT($id)
    {
        return $this->updateQuery("DELETE FROM `phieuthu` WHERE phieuthu.MaPT = ?", [$id]);
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
        return $this->selectQuery("Select *  from phieuthu
                                    WHERE phieuthu.MaPT = ?", [$id]);
    }

}