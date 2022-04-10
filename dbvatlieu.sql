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
('NSX01', 'Tổng công ty Viglacera - CTCP', 'Tòa nhà Viglacera, Số 1 Đại lộ Thăng Long, Hà Nội'),
('NSX02', 'Công ty cổ phần Vicostone', 'Khu công nghệ cao Hòa Lạc, Thạch Hoà, Thạch Thất, Hà Nội'),
('NSX03', 'Công ty cổ phần Nhựa Thiếu niên Tiền Phong', '222 Mạc Đăng Doanh, Hưng Đạo, Dương Kinh, Hải Phòng'),
('NSX04', 'Công ty CP Tập đoàn Hoa Sen', '183 Nguyễn Văn Trỗi, Phường 10, Quận Phú Nhuận, TP. Hồ Chí Minh'),
('NSX05', 'Công ty cổ phần gỗ An Cường', 'Đường ĐT 747B, Khu phố Phước Hải, Thái Hòa, Tân Uyên, Bình Dương'),
('NSX06', 'Công ty CP Nhựa Bình Minh', '240 Hậu Giang, Phường 9, Quận 6, TP. Hồ Chí Minh'),
('NSX07', 'Công ty CP Xi Măng Hà Tiên 1', '360 Bến Chương Dương, Cầu Kho, Quận 1, TP. Hồ Chí Minh'),
('NSX08', 'Công ty CP Đầu tư Phan Vũ', 'Số A2 Trường Sơn, Phường 2, Tân Bình, TP. Hồ Chí Minh'),
('NSX09', 'Công ty TNHH Siam City Cement (Việt Nam)', 'Tầng 12-14, Tòa Nhà E-Town Central 11 Đường Đoàn Văn Bơ, Phường 12, Quận 4, TP. HCM'),
('NSX10', 'Công ty cổ phần thép Hòa Phát, tập đoàn Hòa Phát', '183 Nguyễn Văn Trỗi, Phường 10, Quận Phú Nhuận, TP. Hồ Chí Minh'),
('NSX11', 'CÔNG TY CỔ PHẦN ĐẦU TƯ & XÂY DỰNG TÂN KỲ', 'Số Nhà 123, Đường N2, Khu Khang Điền Mega Village, P. Phú Hữu, Quận 9, TP. Hồ Chí Minh');

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
('CX01', 'Cát Bê Tông', 'CatXayDung.jpg', 'M3', 350000, 100, 'NSX11'),
('CX02', 'Cát Xây Tô', 'bang-bao-gia-cat-xay-to.jpg', 'M3', 170000, 100, 'NSX11'),
('CX03', 'Cát San Lấp', 'bang-bao-gia-cat-san-lap-tai-cong-ty-sgcmc.jpg', 'M3', 140000, 1, 'NSX11'),
('ECO-803', 'Gạch lát nền Viglacera ECO-803 (80x80 cm)', 'Gach-lat-nen-Viglacera-ECO-803.jpg', 'VIÊN', 422000, 100, 'NSX01'),
('GF301', 'Gạch lát nền Viglacera GF301 (30x30cm)', 'Gach-lat-nen-viglacera-GF301.jpg', 'VIÊN', 125000, 100, 'NSX01'),
('N3626', 'Gạch lát nền Viglacera N3626 (30x30cm)', 'Gach-lat-nen-Viglacera-N3626.jpg', 'VIÊN', 130000, 1000, 'NSX01'),
('T10', 'Thép Ø 10', 'Thep-10.jpg', 'CÂY', 129, 100, 'NSX10'),
('T12', 'Thép Ø 12', 'Thep-12.jpg', 'CÂY', 185, 100, 'NSX10'),
('T14', 'Thép Ø 14', 'thep_xay_dung_14.jpg', 'CÂY', 253, 100, 'NSX10'),
('TC06', 'Thép cuộn Ø 6', 'thep-cuon-6.jpg', 'Kg', 17900, 100, 'NSX10'),
('TC08', 'Thép cuộn Ø 8', 'thep-cuon-8.jpg', 'Kg', 17900, 100, 'NSX10'),
('UB304', 'Gạch lát nền Viglacera UB304 (30x30cm)', 'Gach-lat-nen-viglacera-UB304.jpg', 'VIÊN', 150000, 100, 'NSX01'),
('UB3604A', 'Gạch ốp tường Viglacera UB3604A (30 x 60 cm)', 'Gach-op-tuong-viglacera-UB3604A.jpg', 'VIÊN', 220000, 100, 'NSX01'),
('XM1', 'Xi măng Vicem Hà Tiên PCB40 Premium', '340_crop_premium_bao.jpg', 'BAO', 70000, 100, 'NSX07'),
('XM2', 'Xi măng Vicem Hà Tiên xây tô', '340_crop_VHT-xay_tobao.jpg', 'BAO', 75000, 100, 'NSX07'),
('XM3', 'Xi măng Vicem Hà Tiên PCB50', 'pcb50_t-768x1247.jpg', 'BAO', 70000, 100, 'NSX07'),
('XM4', 'Xi măng Hà Tiên PCB4', 'xi-mang-ha-tien-duoc-ua-chuong.jpg', 'BAO', 80000, 100, 'NSX07'),
('XM5', 'Xi măng Portland', 'Ximang-pooclang-trungson.jpg', 'BAO', 75000, 100, 'NSX07');

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
