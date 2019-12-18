-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 07:49 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`) VALUES
(1, 'Mon chien'),
(2, NULL),
(3, 'mon kho'),
(4, 'mon xao'),
(5, 'nuoc ngot'),
(6, 'lau'),
(7, 'mon goi'),
(8, 'mon man'),
(9, 'Mon tay'),
(10, 'mon a');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `mamon` int(11) NOT NULL,
  `tenmon` varchar(20) DEFAULT NULL,
  `madanhmuc` int(11) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`mamon`, `tenmon`, `madanhmuc`, `size`, `gia`) VALUES
(16, 'bo ham', 1, 'nho', 74000),
(17, 'ga kho sa ot', 1, 'lon', 23000),
(18, 'ga kho sa ot', 1, 'lon', 74000),
(19, 'ga kho sa ot', 1, 'lon', 74000),
(20, 'sushi ca hoi', 10, 'lon', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(50) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sdt` varchar(50) DEFAULT NULL,
  `vitri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `ngaysinh`, `diachi`, `sdt`, `vitri`) VALUES
(1, 'Do Van Cuong', '1987-09-10', 'Ninh Binh', '0452617843', 'Tong Giam Doc'),
(2, 'Nguyen Ngoc Ngoc', '1998-05-07', 'Nha Trang', '023568766', 'quanly'),
(4, 'Nguyen Ngoc Thien', '1999-06-04', 'Ninh Hoa', '0452617846', 'Ban hang'),
(5, 'Vo Van Toan', '1987-09-12', 'TP HCM', '0563517263', 'Giam Doc'),
(6, 'Nguyen Ngoc Thien', '1987-09-12', 'Nha Trang', '027364817128', 'NV ban hang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`mamon`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `mamon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
