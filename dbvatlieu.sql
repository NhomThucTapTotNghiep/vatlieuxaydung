-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 02:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvatlieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ct_banhang`
--

CREATE TABLE `ct_banhang` (
  `MaDDH` varchar(5) NOT NULL,
  `MaVT` varchar(5) NOT NULL,
  `DonGia` float NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ct_banhang`
--

INSERT INTO `ct_banhang` (`MaDDH`, `MaVT`, `DonGia`, `SoLuong`) VALUES
('DDH01', 'CX01', 350000, 10),
('DDH03', 'N3626', 130000, 12),
('DDH02', 'TC06', 17900, 8),
('DDH05', 'UB304', 150000, 5),
('DDH04', 'XM2', 75000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDDH` varchar(5) NOT NULL,
  `MaKH` varchar(5) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `NgayLapDDH` datetime NOT NULL,
  `NgayGiaoHang` datetime NOT NULL,
  `ThanhTien` float NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `VAT` float NOT NULL,
  `CongNo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaDDH`, `MaKH`, `MaNV`, `NgayLapDDH`, `NgayGiaoHang`, `ThanhTien`, `TrangThai`, `VAT`, `CongNo`) VALUES
('DDH01', 'KH002', 'NV001', '2021-12-21 00:00:00', '2022-01-22 00:00:00', 5000000, 1, 150000, 250000),
('DDH02', 'KH004', 'NV003', '2022-01-21 00:00:00', '2022-02-22 00:00:00', 4500000, 1, 100000, 200000),
('DDH03', 'KH001', 'NV001', '2021-02-12 00:00:00', '2022-02-22 00:00:00', 3200000, 0, 120000, 150000),
('DDH04', 'KH002', 'NV004', '2021-12-01 00:00:00', '2022-01-22 00:00:00', 4250000, 0, 50000, 500000),
('DDH05', 'KH005', 'NV002', '2021-03-01 00:00:00', '2022-03-22 00:00:00', 3350000, 1, 50000, 250000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` char(5) NOT NULL,
  `MaKH` char(5) NOT NULL,
  `ThanhTien` float NOT NULL,
  `SoTienTTT` float NOT NULL,
  `CongNo` float NOT NULL,
  `VAT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `ThanhTien`, `SoTienTTT`, `CongNo`, `VAT`) VALUES
('HD001', 'KH002', 5000000, 2000000, 500000, 30000),
('HD003', 'KH005', 8000000, 5500000, 300000, 15000),
('HD004', 'KH001', 7500000, 4200000, 380000, 22000),
('HD005', 'KH004', 6600000, 3100000, 190000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(5) NOT NULL,
  `TenKH` varchar(100) NOT NULL,
  `GioiTinh` bit(1) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `GhiChu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `GioiTinh`, `DiaChi`, `GhiChu`) VALUES
('KH001', 'Nguyen Thanh Loc', b'0', '1084 Bien Hoa p10 q3', 'HuHahu'),
('KH002', 'Nguyen Cong Duong', b'0', '104 Pham The Hien p10 q8', 'Ghi chu'),
('KH003', 'Le Ngoc Van', b'1', '178 Nguyen Tri Phuong p1 q5', 'Hi'),
('KH004', 'Le Thi Ngoc', b'1', '541 Hong Bang p4 q5', 'Okee'),
('KH005', 'Phan Nhat Tuan', b'0', '851 Le Loi p6 q4', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(5) NOT NULL,
  `TenNV` varchar(100) NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `GioiTinh` bit(1) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Role` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Email`, `Password`, `Role`) VALUES
('NV001', 'Nguyen Loc Thanh', '1998-02-15 00:00:00', b'0', '1084 Pham Hung p10 q8', 'nhanvien@gmail.com', '81462175', 'nhanvien'),
('NV002', 'Nguyen Thanh Cong', '1999-08-25 00:00:00', b'0', '104 Bui Thi Xuan p9 q2', 'beti@gmail.com', '213457841', 'nhanvien'),
('NV003', 'Ngo Bao Vy', '1999-08-14 00:00:00', b'1', '205 Nguyen Van Linh p12 q8', 'giangduong@gmail.com', 'nfuwy5478', 'giamdoc'),
('NV004', 'Le Thao Van', '2000-09-05 00:00:00', b'1', '4847 An Duong Vuong p7 q8', 'chauduck@gmail.com', 'wfwef874', 'nhanvien'),
('NV005', 'Tran Thanh Loc', '1997-02-28 00:00:00', b'0', '213 Nguyen Hue p10 q1', 'khoaanh@gmail.com', 'efwe788', 'giamdoc');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MaNSX` varchar(5) NOT NULL,
  `TenNSX` varchar(100) NOT NULL,
  `DiaChi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MaNSX`, `TenNSX`, `DiaChi`) VALUES
('NSX01', 'T???ng c??ng ty Viglacera - CTCP', 'T??a nh?? Viglacera, S??? 1 ?????i l??? Th??ng Long, H?? N???i'),
('NSX02', 'C??ng ty c??? ph???n Vicostone', 'Khu c??ng ngh??? cao H??a L???c, Th???ch Ho??, Th???ch Th???t, H?? N???i'),
('NSX03', 'C??ng ty c??? ph???n Nh???a Thi???u ni??n Ti???n Phong', '222 M???c ????ng Doanh, H??ng ?????o, D????ng Kinh, H???i Ph??ng'),
('NSX04', 'C??ng ty CP T???p ??o??n Hoa Sen', '183 Nguy???n V??n Tr???i, Ph?????ng 10, Qu???n Ph?? Nhu???n, TP. H??? Ch?? Minh'),
('NSX05', 'C??ng ty c??? ph???n g??? An C?????ng', '???????ng ??T 747B, Khu ph??? Ph?????c H???i, Th??i H??a, T??n Uy??n, B??nh D????ng'),
('NSX06', 'C??ng ty CP Nh???a B??nh Minh', '240 H???u Giang, Ph?????ng 9, Qu???n 6, TP. H??? Ch?? Minh'),
('NSX07', 'C??ng ty CP Xi M??ng H?? Ti??n 1', '360 B???n Ch????ng D????ng, C???u Kho, Qu???n 1, TP. H??? Ch?? Minh'),
('NSX08', 'C??ng ty CP ?????u t?? Phan V??', 'S??? A2 Tr?????ng S??n, Ph?????ng 2, T??n B??nh, TP. H??? Ch?? Minh'),
('NSX09', 'C??ng ty TNHH Siam City Cement (Vi???t Nam)', 'T???ng 12-14, T??a Nh?? E-Town Central 11 ???????ng ??o??n V??n B??, Ph?????ng 12, Qu???n 4, TP. HCM'),
('NSX10', 'C??ng ty c??? ph???n th??p H??a Ph??t, t???p ??o??n H??a Ph??t', '183 Nguy???n V??n Tr???i, Ph?????ng 10, Qu???n Ph?? Nhu???n, TP. H??? Ch?? Minh'),
('NSX11', 'C??NG TY C??? PH???N ?????U T?? & X??Y D???NG T??N K???', 'S??? Nh?? 123, ???????ng N2, Khu Khang ??i???n Mega Village, P. Ph?? H???u, Qu???n 9, TP. H??? Ch?? Minh');

-- --------------------------------------------------------

--
-- Table structure for table `phieuthu`
--

CREATE TABLE `phieuthu` (
  `MaPT` varchar(5) NOT NULL,
  `NgayTT` datetime NOT NULL,
  `SoTienTT` float NOT NULL,
  `Dot` int(11) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `MaHD` varchar(5) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phieuthu`
--

INSERT INTO `phieuthu` (`MaPT`, `NgayTT`, `SoTienTT`, `Dot`, `MaNV`, `MaHD`, `TrangThai`) VALUES
('PT001', '2021-09-21 00:00:00', 5000000, 2, 'NV003', 'HD005', 1),
('PT002', '2022-02-11 00:00:00', 5450000, 1, 'NV002', 'HD004', 1),
('PT003', '2021-11-16 00:00:00', 3650000, 3, 'NV001', 'HD003', 0),
('PT004', '2021-10-20 00:00:00', 2100000, 4, 'NV004', 'HD001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sdt_khachhang`
--

CREATE TABLE `sdt_khachhang` (
  `MaKH` varchar(5) NOT NULL,
  `SDT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdt_khachhang`
--

INSERT INTO `sdt_khachhang` (`MaKH`, `SDT`) VALUES
('KH001', '0924685127'),
('KH003', '0965821325'),
('KH001', '0821320503'),
('KH004', '0961320047'),
('KH002', '0989013078'),
('KH002', '0485791025'),
('KH004', '0941278947'),
('KH005', '0799874512');

-- --------------------------------------------------------

--
-- Table structure for table `sdt_nhanvien`
--

CREATE TABLE `sdt_nhanvien` (
  `MaNV` varchar(5) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdt_nhanvien`
--

INSERT INTO `sdt_nhanvien` (`MaNV`, `SDT`) VALUES
('NV001', 659874512),
('NV004', 656214512),
('NV005', 557874512),
('NV002', 934578120),
('NV001', 914756328),
('NV003', 614785412),
('NV004', 701650489),
('NV003', 841874682);

-- --------------------------------------------------------

--
-- Table structure for table `sdt_nsx`
--

CREATE TABLE `sdt_nsx` (
  `MaNSX` varchar(5) NOT NULL,
  `SDT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdt_nsx`
--

INSERT INTO `sdt_nsx` (`MaNSX`, `SDT`) VALUES
('NSX10', '1800 1515'),
('NSX01', '1900 0136'),
('NSX02', '1800 6766'),
('NSX03', '0225 3813 979'),
('NSX04', '1800 1515'),
('NSX05', '1900 6944'),
('NSX06', '028 3969 0973'),
('NSX07', '02838 368 363'),
('NSX08', '028 222 008 846'),
('NSX09', '1800 1718'),
('NSX11', '0799 079 990');

-- --------------------------------------------------------

--
-- Table structure for table `vattu`
--

CREATE TABLE `vattu` (
  `MaVT` varchar(10) NOT NULL,
  `TenVT` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `DVTinh` varchar(5) NOT NULL,
  `DonGia` float NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MaNSX` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vattu`
--

INSERT INTO `vattu` (`MaVT`, `TenVT`, `img`, `DVTinh`, `DonGia`, `SoLuong`, `MaNSX`) VALUES
('CX01', 'C??t B?? T??ng', 'CatXayDung.jpg', 'M3', 350000, 100, 'NSX11'),
('CX02', 'C??t X??y T??', 'bang-bao-gia-cat-xay-to.jpg', 'M3', 170000, 100, 'NSX11'),
('CX03', 'C??t San L???p', 'bang-bao-gia-cat-san-lap-tai-cong-ty-sgcmc.jpg', 'M3', 140000, 1, 'NSX11'),
('ECO-803', 'G???ch l??t n???n Viglacera ECO-803 (80x80 cm)', 'Gach-lat-nen-Viglacera-ECO-803.jpg', 'VI??N', 422000, 100, 'NSX01'),
('GF301', 'G???ch l??t n???n Viglacera GF301 (30x30cm)', 'Gach-lat-nen-viglacera-GF301.jpg', 'VI??N', 125000, 100, 'NSX01'),
('N3626', 'G???ch l??t n???n Viglacera N3626 (30x30cm)', 'Gach-lat-nen-Viglacera-N3626.jpg', 'VI??N', 130000, 1000, 'NSX01'),
('T10', 'Th??p ?? 10', 'Thep-10.jpg', 'C??Y', 129, 100, 'NSX10'),
('T12', 'Th??p ?? 12', 'Thep-12.jpg', 'C??Y', 185, 100, 'NSX10'),
('T14', 'Th??p ?? 14', 'thep_xay_dung_14.jpg', 'C??Y', 253, 100, 'NSX10'),
('TC06', 'Th??p cu???n ?? 6', 'thep-cuon-6.jpg', 'Kg', 17900, 100, 'NSX10'),
('TC08', 'Th??p cu???n ?? 8', 'thep-cuon-8.jpg', 'Kg', 17900, 100, 'NSX10'),
('UB304', 'G???ch l??t n???n Viglacera UB304 (30x30cm)', 'Gach-lat-nen-viglacera-UB304.jpg', 'VI??N', 150000, 100, 'NSX01'),
('UB3604A', 'G???ch ???p t?????ng Viglacera UB3604A (30 x 60 cm)', 'Gach-op-tuong-viglacera-UB3604A.jpg', 'VI??N', 220000, 100, 'NSX01'),
('XM1', 'Xi m??ng Vicem H?? Ti??n PCB40 Premium', '340_crop_premium_bao.jpg', 'BAO', 70000, 100, 'NSX07'),
('XM2', 'Xi m??ng Vicem H?? Ti??n x??y t??', '340_crop_VHT-xay_tobao.jpg', 'BAO', 75000, 100, 'NSX07'),
('XM3', 'Xi m??ng Vicem H?? Ti??n PCB50', 'pcb50_t-768x1247.jpg', 'BAO', 70000, 100, 'NSX07'),
('XM4', 'Xi m??ng H?? Ti??n PCB4', 'xi-mang-ha-tien-duoc-ua-chuong.jpg', 'BAO', 80000, 100, 'NSX07'),
('XM5', 'Xi m??ng Portland', 'Ximang-pooclang-trungson.jpg', 'BAO', 75000, 100, 'NSX07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ct_banhang`
--
ALTER TABLE `ct_banhang`
  ADD KEY `MaVT` (`MaVT`),
  ADD KEY `MaDDH` (`MaDDH`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDDH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Indexes for table `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MaNSX`);

--
-- Indexes for table `phieuthu`
--
ALTER TABLE `phieuthu`
  ADD PRIMARY KEY (`MaPT`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Indexes for table `sdt_khachhang`
--
ALTER TABLE `sdt_khachhang`
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `sdt_nhanvien`
--
ALTER TABLE `sdt_nhanvien`
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `sdt_nsx`
--
ALTER TABLE `sdt_nsx`
  ADD KEY `MaNSX` (`MaNSX`);

--
-- Indexes for table `vattu`
--
ALTER TABLE `vattu`
  ADD PRIMARY KEY (`MaVT`),
  ADD KEY `MaNSX` (`MaNSX`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ct_banhang`
--
ALTER TABLE `ct_banhang`
  ADD CONSTRAINT `ct_banhang_ibfk_1` FOREIGN KEY (`MaVT`) REFERENCES `vattu` (`MaVT`),
  ADD CONSTRAINT `ct_banhang_ibfk_2` FOREIGN KEY (`MaDDH`) REFERENCES `dondathang` (`MaDDH`);

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `dondathang` (`MaKH`);

--
-- Constraints for table `phieuthu`
--
ALTER TABLE `phieuthu`
  ADD CONSTRAINT `phieuthu_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `phieuthu_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Constraints for table `sdt_khachhang`
--
ALTER TABLE `sdt_khachhang`
  ADD CONSTRAINT `sdt_khachhang_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `sdt_nhanvien`
--
ALTER TABLE `sdt_nhanvien`
  ADD CONSTRAINT `sdt_nhanvien_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Constraints for table `sdt_nsx`
--
ALTER TABLE `sdt_nsx`
  ADD CONSTRAINT `sdt_nsx_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`);

--
-- Constraints for table `vattu`
--
ALTER TABLE `vattu`
  ADD CONSTRAINT `vattu_ibfk_1` FOREIGN KEY (`MaNSX`) REFERENCES `nhasanxuat` (`MaNSX`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
