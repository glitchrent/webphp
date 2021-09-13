-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 08:16 PM
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
-- Database: `warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `remainUnit` int(255) NOT NULL,
  `numcart` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderbill`
--

CREATE TABLE `orderbill` (
  `orderID` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderbill`
--

INSERT INTO `orderbill` (`orderID`, `date`, `total`) VALUES
(80, '2021-09-12 19:32:59', 14000),
(81, '2021-09-12 19:33:57', 100),
(82, '2021-09-12 19:34:36', 1100),
(83, '2021-09-13 01:04:16', 12350);

-- --------------------------------------------------------

--
-- Table structure for table `pdcategory`
--

CREATE TABLE `pdcategory` (
  `cateID` int(10) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdcategory`
--

INSERT INTO `pdcategory` (`cateID`, `categoryName`) VALUES
(1, 'เครื่องมือช่าง'),
(6, 'ไฟฟ้าและอุปกรณ์ไฟฟ้า'),
(7, 'ประปาและเกษตร '),
(8, 'เครื่องใช้ไฟฟ้า'),
(9, 'เบ็ตเตล็ด'),
(10, 'อุปกรณ์เซฟตี้'),
(11, 'สีและเคมีภัณฑ์');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPic` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `remainUnit` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productPic`, `productCategory`, `remainUnit`, `unit`, `price`) VALUES
(14, 'หมวกเซฟตี้ 3m', 'original.gif', 'อุปกรณ์เซฟตี้', 25, 'ใบ', 200),
(15, 'เลื่อยไฟฟ้า', 'AW3920799_23.gif', 'เครื่องใช้ไฟฟ้า', 35, 'อัน', 150),
(16, 'ปูนยิบซั่ม พีระมิด', 'anime-girl-and-boy-halloween-pumpkin-lolita-animal-ears-horns.jpeg', 'สีและเคมีภัณฑ์', 10, 'กล่อง', 1000),
(19, 'ไขควงวัดไฟ', '1.png', 'เครื่องมือช่าง', 10, 'ชิ้น', 100),
(50, 'ไขควงปากแบน', 'menhera-chan-eating.gif', 'เครื่องมือช่าง', 15, 'ชิ้น', 20);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productCategory` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `imstatus` varchar(255) NOT NULL,
  `exportunit` int(255) NOT NULL,
  `totalunp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportID`, `productID`, `productName`, `productCategory`, `date`, `imstatus`, `exportunit`, `totalunp`) VALUES
(266, 14, 'หมวกเซฟตี้ 3m', '', '2021-09-12 19:32:43', 'นำเข้า', 10, 0),
(267, 15, 'เลื่อยไฟฟ้า', '', '2021-09-12 19:32:43', 'นำเข้า', 20, 0),
(268, 16, 'ปูนยิบซั่ม พีระมิด', '', '2021-09-12 19:32:43', 'นำเข้า', 5, 0),
(269, 14, 'หมวกเซฟตี้ 3m', 'อุปกรณ์เซฟตี้', '2021-09-12 19:32:59', 'ส่งออก', 5, 1000),
(270, 15, 'เลื่อยไฟฟ้า', 'เครื่องใช้ไฟฟ้า', '2021-09-12 19:32:59', 'ส่งออก', 20, 3000),
(271, 16, 'ปูนยิบซั่ม พีระมิด', 'สีและเคมีภัณฑ์', '2021-09-12 19:32:59', 'ส่งออก', 10, 10000),
(272, 50, 'ไขควงปากแบน', 'เครื่องมือช่าง', '2021-09-12 19:33:57', 'ส่งออก', 5, 100),
(273, 19, 'ไขควงวัดไฟ', 'เครื่องมือช่าง', '2021-09-12 19:34:36', 'ส่งออก', 10, 1000),
(274, 50, 'ไขควงปากแบน', 'เครื่องมือช่าง', '2021-09-12 19:34:36', 'ส่งออก', 5, 100),
(275, 14, 'หมวกเซฟตี้ 3m', 'อุปกรณ์เซฟตี้', '2021-09-13 01:04:16', 'ส่งออก', 5, 1000),
(276, 15, 'เลื่อยไฟฟ้า', 'เครื่องใช้ไฟฟ้า', '2021-09-13 01:04:16', 'ส่งออก', 5, 750),
(277, 16, 'ปูนยิบซั่ม พีระมิด', 'สีและเคมีภัณฑ์', '2021-09-13 01:04:16', 'ส่งออก', 10, 10000),
(278, 19, 'ไขควงวัดไฟ', 'เครื่องมือช่าง', '2021-09-13 01:04:16', 'ส่งออก', 5, 500),
(279, 50, 'ไขควงปากแบน', 'เครื่องมือช่าง', '2021-09-13 01:04:16', 'ส่งออก', 5, 100);

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
('admin', 'admin', 'testt', 'testt', '0999', 'tee', '1'),
('member', 'member', 'test', 'test', '087777', 'teetee', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`numcart`);

--
-- Indexes for table `orderbill`
--
ALTER TABLE `orderbill`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `pdcategory`
--
ALTER TABLE `pdcategory`
  ADD PRIMARY KEY (`cateID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `numcart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `orderbill`
--
ALTER TABLE `orderbill`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pdcategory`
--
ALTER TABLE `pdcategory`
  MODIFY `cateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
