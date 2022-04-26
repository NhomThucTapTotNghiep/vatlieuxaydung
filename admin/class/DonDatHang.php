<?php
if (!defined('HOST')) {
    exit;
}

class donDatHang extends Database
{
    function allDDH()
    {
        return $this->selectQuery("SELECT * FROM dondathang,nhanvien,khachhang WHERE dondathang.MaNV = nhanvien.MaNV AND dondathang.MaKH=dondathang.MaKH ");
    }
    function allMaNV(){
        return $this->selectQuery("SELECT MaNV FROM nhanvien");
    }
    function allMaKH(){
        return $this->selectQuery("SELECT MaKH FROM khachhang");
    }
    function allHD(){
        return $this->selectQuery("SELECT * FROM hoadon");
    }
    function themDDH($maddh, $makh, $manv, $ngayld, $ngaygh, $thanhtien, $trangthai, $vat, $congno){
        $sql_them = "INSERT INTO `dondathang`(`MaDDH`, `MaKH`, `MaNV`, `NgayLapDDH`, `NgayGiaoHang`, `ThanhTien`, `TrangThai`, `VAT`,`CongNo`) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        return $this->updateQuery($sql_them, [$maddh, $makh, $manv, $ngayld, $ngaygh, $thanhtien, $trangthai, $vat, $congno]);
        
    }
    function themHD($mahd, $makh, $thanhtien, $congno, $vat){
        $sql_themHD = "INSERT INTO `hoadon`(`MaHD`,`MAKH`,`ThanhTien`,`CongNo`,`VAT`) VALUES(?,?,?,?,?)";
        return $this->updateQuery($sql_themHD, [$mahd,$makh,$thanhtien,$congno,$vat]);
    }
    function detail($id)
    {
        return $this->selectQuery("Select *  from dondathang
                                    WHERE MaDDH = ?", [$id]);
    }
}