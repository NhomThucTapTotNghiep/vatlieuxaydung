<?php
if (!defined('HOST')) {
    exit;
}

class vatTu extends Database
{
    function all()
    {
        return $this->selectQuery("Select *  from vattu, nhasanxuat WHERE vattu.MaNSX = nhasanxuat.MaNSX");
    }

    function random($n)
    {
        return $this->selectQuery("select * from , loaisanpham, nhasanxuat
        where sanpham.maloai = loaisanpham.maloai 
        and sanpham.mansx = nhasanxuat.mansx order by rand() limit 0, $n");
    }

    function detail($id)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx
                                        and sanpham.masp=?", [$id])[0];
    }

    function allGia($min,$max)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.gia>? and sanpham.gia<=? ",[$min,$max]);
    }

    function allGiaMin($min)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.gia>? ",[$min]);
    }

    function allGiaMax($max)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.gia<? ",[$max]);
    }

    function allByLoai($maloai)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.maloai=?",[$maloai]);
    }

    function allByNSX($mansx)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.mansx=?",[$mansx]);
    }

    function randomByLoai($n,$maloai)
    {
        return $this->selectQuery("Select * 
                                        from sanpham, loaisanpham, nhasanxuat
                                        where sanpham.maloai = loaisanpham.maloai
                                        and sanpham.mansx = nhasanxuat.mansx and sanpham.maloai=? order by rand() limit 0, $n",[$maloai]);
    }

    function tongsp()
    {
        $sql = "select COUNT(masp) from sanpham";
        return $this->selectQuery($sql);
    }

    function Search($kw)
    {
        $s ='Select * 
        from sanpham, loaisanpham, nhasanxuat
        where sanpham.maloai = loaisanpham.maloai
        and sanpham.mansx = nhasanxuat.mansx and sanpham.tensp like ?';
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    } 
}

