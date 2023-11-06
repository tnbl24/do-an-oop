-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 09:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanoop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cho`
--

CREATE TABLE `cho` (
  `MaC` varchar(8) NOT NULL,
  `MaDM` varchar(8) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(3) NOT NULL,
  `MauSac` varchar(30) NOT NULL,
  `CanNang` varchar(15) NOT NULL,
  `TinhTrangTiemChung` varchar(13) NOT NULL,
  `TinhTrangSucKhoe` varchar(50) NOT NULL,
  `GiaTien` varchar(30) NOT NULL,
  `MoTa` varchar(100) DEFAULT NULL,
  `HinhAnh` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cho`
--

INSERT INTO `cho` (`MaC`, `MaDM`, `NgaySinh`, `GioiTinh`, `MauSac`, `CanNang`, `TinhTrangTiemChung`, `TinhTrangSucKhoe`, `GiaTien`, `MoTa`, `HinhAnh`) VALUES
('SP0001', 'A01', '2023-04-09', 'DUC', 'NAU DO', '13KG', 'DA TIEM 1 MUI', 'TOT', '15.000.000VND', 'THUAN CHUNG', NULL),
('SP0002', 'A01', '2023-05-05', 'CAI', 'DEN TRANG', '14KG', 'DA TIEM 1 MUI', 'TOT', '17.000.000VND', 'THUAN CHUNG', NULL),
('SP0003', 'A02', '2023-01-03', 'DUC', 'NAU TRANG', '5KG', 'DA TIEM 1 MUI', 'TOT', '22.000.000VND', 'THUAN CHUNG', NULL),
('SP0004', 'A02', '2023-02-03', 'CAI', 'NAU TRANG', '5.5KG', 'DA TIEM 1 MUI', 'TOT', '25.000.000VND', 'THUAN CHUNG', NULL),
('SP0005', 'A02', '2023-04-19', 'DUC', 'NAU TRANG', '6KG', 'DA TIEM 1 MUI', 'TOT', '25.000.000VND', 'THUAN CHUNG', NULL),
('SP0006', 'A03', '2023-05-23', 'DUC', 'TRANG', '13KG', 'DA TIEM 1 MUI', 'TOT', '13.000.000VND', 'THUAN CHUNG', NULL),
('SP0007', 'A03', '2023-03-12', 'DUC', 'TRANG', '13.5KG', 'DA TIEM 1 MUI', 'TOT', '14.000.000VND', 'THUAN CHUNG', NULL),
('SP0008', 'A04', '2023-05-15', 'CAI', 'VANG NHAT', '13KG', 'DA TIEM 1 MUI', 'TOT', '12.000.000VND', 'THUAN CHUNG', NULL),
('SP0009', 'A04', '2023-03-17', 'CAI', 'VANG NHAT', '13.5KG', 'DA TIEM 1 MUI', 'TOT', '13.000.000VND', 'THUAN CHUNG', NULL),
('SP0010', 'A04', '2023-03-14', 'DUC', 'VANG DAM', '14KG', 'DA TIEM 1 MUI', 'TOT', '14.000.000VND', 'THUAN CHUNG', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` varchar(8) NOT NULL,
  `TenDM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
('A01', 'ALASKA'),
('A02', 'CORGI'),
('A03', 'SAMOYED'),
('A04', 'GOLDEN');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(8) NOT NULL,
  `MaC` varchar(8) NOT NULL,
  `MaKH` varchar(8) NOT NULL,
  `SoLuong` int(2) NOT NULL,
  `NgayLapHD` timestamp NULL DEFAULT current_timestamp(),
  `TinhTrangHD` varchar(18) NOT NULL,
  `PTTT` varchar(8) NOT NULL,
  `TongTien` varchar(30) NOT NULL,
  `GhiChu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaC`, `MaKH`, `SoLuong`, `NgayLapHD`, `TinhTrangHD`, `PTTT`, `TongTien`, `GhiChu`) VALUES
('HD001', 'SP0001', '1002', 1, '2023-08-07 17:00:00', 'DA GIAO', 'TIEN MAT', '17.000.000VND', NULL),
('HD002', 'SP0005', '1003', 1, '2023-08-02 17:00:00', 'DANG CHUAN BI HANG', 'VNPAY', '25.000.000VND', NULL),
('HD003', 'SP0002', '1001', 1, '2023-07-18 17:00:00', 'DANG GIAO', 'TIEN MAT', '16.000.000VND', NULL),
('HD004', 'SP0004', '1010', 1, '2023-08-12 17:00:00', 'DA GIAO', 'TIEN MAT', '12.000.000VND', NULL),
('HD005', 'SP0003', '1008', 1, '2023-07-23 17:00:00', 'DA GIAO', 'VNPAY', '9.500.000VND', NULL),
('HD006', 'SP0006', '1009', 1, '2023-06-15 17:00:00', 'DANG GIAO', 'VNPAY', '15.000.000VND', NULL),
('HD007', 'SP0009', '1007', 1, '2023-06-21 17:00:00', 'DANG CHUAN BI HANG', 'VNPAY', '12.000.000VND', NULL),
('HD008', 'SP0007', '1005', 1, '2023-07-29 17:00:00', 'DA GIAO', 'TIEN MAT', '10.000.000VND', NULL),
('HD009', 'SP0010', '1004', 1, '2023-07-10 17:00:00', 'DANG GIAO', 'VNPAY', '25.000.000VND', NULL),
('HD010', 'SP0008', '1006', 1, '2023-07-24 17:00:00', 'DA GIAO', 'TIEN MAT', '16.000.000VND', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(8) NOT NULL,
  `TenKH` varchar(40) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` varchar(3) DEFAULT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` int(15) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `TKNH` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SDT`, `Email`, `TKNH`) VALUES
('1001', 'DO DUY MANH', '1999-05-02', 'NAM', '100 Thái Hà- Hà Nội', 95738452, 'manhdo02@gmail.com', 2147483647),
('1002', 'NGUYEN VAN TOAN', '2000-04-12', 'NAM', '42 Vị Hoàng- Nam Định', 93632221, 'toan1204@gmail.com', 2147483647),
('1003', 'TRAN NGOC ANH', '1995-11-03', 'NU', '13 Sầm Sơn -Thanh Hóa', 97235632, 'anhanh11@gmail.com', 2147483647),
('1004', 'NGUYEN THI HANH', '1999-05-22', 'NU', '82 An Dương Hải Phòng', 82534378, 'hanhnguyen@gmail.com', 2147483647),
('1005', 'PHAN VAN TRUNG', '1998-06-03', 'NAM', '38 Nguyên Xá - Thái Bình', 38236567, 'vantrung1998@gmail.com', 2147483647),
('1006', 'LUU THI MY HOA', '2001-07-16', 'NU', '48 Tây Hồ - Hà Nội', 97636466, 'myhoa2001@gmail.com', 2147483647),
('1007', 'BUI THI GIANG', '2002-12-24', 'NU', '29 Lê Thanh Nghị-Hà Nội', 84766481, 'giangbui24@gmail.com', 2147483647),
('1008', 'TRAN THI THUY NGA', '1998-11-09', 'NU', '53 Thái Thịnh-Hà Nội', 87543323, 'trannga0911@gmail.com', 2147483647),
('1009', 'LE TRONG DAT', '2000-12-25', 'NAM', '583 Đê La Thành - Hà Nội', 87375355, 'datle2512@gmail.com', 2147483647),
('1010', 'LE THI HANH', '1999-07-05', 'NU', '93 Cẩm Đình - Hà Nội', 96364431, 'hanh517@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cho`
--
ALTER TABLE `cho`
  ADD PRIMARY KEY (`MaC`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaC` (`MaC`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cho`
--
ALTER TABLE `cho`
  ADD CONSTRAINT `cho_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaC`) REFERENCES `cho` (`MaC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
