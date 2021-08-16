-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 10:38 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `remainUnit` int(255) NOT NULL,
  `costprice` varchar(255) NOT NULL,
  `saleprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productCategory`, `remainUnit`, `costprice`, `saleprice`) VALUES
(23, 'เชือกไนล่อน', 'เชือก', 20, '60', '100'),
(24, 'เชือกใยยักษ์ ', 'เชือก', 30, '65', '85'),
(25, 'เชือกลูกเสือ เนื้อเหนียว', 'เชือก', 10, '85', '100'),
(26, 'เชือกอเนกประสงค์', 'เชือก', 10, '80', '100'),
(27, 'สายยางเขียวริ้ว 2 ชั้น หนา 5/8x10 ม.', 'สายยาง', 10, '120', '140'),
(28, 'สายยางเขียวริ้ว 2 ชั้น หนา 5/8x20 ม.', 'สายยาง', 10, '230', '240'),
(29, 'สายยางใส 5/8x20 เมตร', 'สายยาง', 10, '360', '380'),
(30, 'สายยางใส 5/8 x10 เมตร', 'สายยาง', 10, '210', '230'),
(31, 'สายยางใส 5/8 x 15 เมตร', 'สายยาง', 10, '260', '280'),
(32, 'สายยางใส 5/8x30 เมตร', 'สายยาง', 10, '480', '500'),
(33, 'สายยางเขียวริ้ว 2ชั้น หนา 5/8x15 ม.', 'สายยาง', 10, '160', '180'),
(34, 'OKURA สายส่งน้ำ 1.1/2\" 100เมตร', 'สายยาง', 10, '1750', '1900'),
(35, 'OKURA สายส่งน้ำ 2\" 100เมตร', 'สายยาง', 10, '1900', '2000'),
(36, 'OKURA สายส่งน้ำ 3\" 100เมตร', 'สายยาง', 10, '3000', '3200'),
(37, 'TAKARA สายยางใยด้าย สีเขียว ทาการ่า การ์เด้น 5/8\"x15 เมตร', 'สายยาง', 10, '360', '380'),
(38, 'TAKARA สายยางใยด้าย สีเขียว ทาการ่า การ์เด้น 5/8\"x20 เมตร', 'สายยาง', 10, '460', '480'),
(39, 'เทปกาวอเนกประสงค์ กันน้ำซึมผ่าน Sika MultiSeal AP gray (30cm.x10m.)', 'เคมีภัณฑ์', 10, '1500', '1600'),
(40, 'เทปกาวอเนกประสงค์ กันน้ำซึมผ่าน Sika MultiSeal AP gray (30cm.x3m.)', 'เคมีภัณฑ์', 10, '690', '700'),
(41, 'กาวยาง ตราหมา X-66 1P', 'เคมีภัณฑ์', 10, '45', '50'),
(42, 'ซีเมนต์พิเศษสำหรับอุดรอยรั่วน้ำ Sika-102 Waterplug (4.5Kg.)', 'เคมีภัณฑ์', 10, '580', '600'),
(43, 'TEMCO สีน้ำมันเคลือบเงา สีขาว (3ลิตร)', 'สี', 20, '320', '350'),
(44, 'TEMCO สีน้ำมันเคลือบเงา สีดำ (3ลิตร)', 'สี', 20, '320', '350'),
(45, 'TEMCO สีพ่นอุตสาหกรรม สีดำ (3ลิตร)', 'สี', 30, '400', '420'),
(46, 'TEMCO สีพ่นอุตสาหกรรม สีขาว (3ลิตร)', 'สี', 40, '410', '430');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `surname`, `tel`, `address`, `role`) VALUES
('admin', '1234', 'admin', 'admin', '0000', 'page', '1'),
('member', '1234', 'member', 'member', '0001', 'store', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
