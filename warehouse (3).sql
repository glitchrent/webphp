-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 11:36 PM
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
-- Table structure for table `cuspo`
--

CREATE TABLE `cuspo` (
  `poID` int(10) NOT NULL,
  `poDate` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cusID` int(10) NOT NULL,
  `postatus` varchar(255) NOT NULL,
  `slip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cuspo_detail`
--

CREATE TABLE `cuspo_detail` (
  `podetailID` int(10) NOT NULL,
  `poID` int(10) NOT NULL,
  `productID` int(10) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusID` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusID`, `username`, `password`, `name`, `surname`, `tel`, `address`) VALUES
(8, 'narakorn', '123456', 'narakorn', 'suapet', '0888888888', '8/62 ');

-- --------------------------------------------------------

--
-- Table structure for table `orderbill`
--

CREATE TABLE `orderbill` (
  `orderID` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `price` int(255) NOT NULL,
  `productDetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productPic`, `productCategory`, `remainUnit`, `unit`, `price`, `productDetail`) VALUES
(70, 'STANLEY ตลับเมตร 5m/16', 'n0.jpg', 'เครื่องมือช่าง', 0, 'อัน', 90, ''),
(71, 'Stanley ตลับเมตร POWER LOCK 5m', '2e.jpg', 'เครื่องมือช่าง', 0, 'อัน', 200, ''),
(72, 'STANLEY ระดับน้ำ 48 นิ้ว รุ่น IBEAM PRO 180', 'mc.jpg', 'เครื่องมือช่าง', 0, 'ชิ้น', 750, ''),
(73, 'PUMPKIN ระดับน้ำ รุ่นซุปเปอร์ฮิต 24', 'qp.jpg', 'เครื่องมือช่าง', 0, 'ชิ้น', 170, ''),
(74, 'INGCO ระดับน้ำแม่เหล็ก 24', 's5.png', 'เครื่องมือช่าง', 0, 'อัน', 250, ''),
(75, 'PHOENIX ประแจแหวนข้างปากตาย 35 มิล', 'iq.jpg', 'เครื่องมือช่าง', 0, 'อัน', 420, ''),
(76, 'PHOENIX ประแจแหวนข้างปากตาย 50 มิล', 'iq.jpg', 'เครื่องมือช่าง', 0, 'อัน', 720, ''),
(77, 'HANS แหวนข้างปากตาย 16611M 11ตัว', '1i.jpg', 'เครื่องมือช่าง', 0, 'ชุด', 1220, ''),
(78, 'HANS ประแจแหวน 75องศา 12ตัวชุด 16012M', 'qa.jpg', 'เครื่องมือช่าง', 0, 'ชุด', 2560, ''),
(79, 'E-Mark ประแจหกเหลี่ยม (9ตัว/ชุด) ', 'eh.jpg', 'เครื่องมือช่าง', 0, 'ชุด', 180, ''),
(80, 'หกเหลี่ยม หัวท็อคยาวพิเศษ MASTER TOOL 9 ตัว / ชุด', '40.jpg', 'เครื่องมือช่าง', 0, 'ชุด', 160, ''),
(81, 'HOBAYASHI ประแจแหวนฟรี-ปากตาย # 8', 'fs.jpg', 'เครื่องมือช่าง', 0, 'อัน', 150, ''),
(82, 'HOBAYASHI ประแจแหวนฟรี-ปากตาย # 12', 'sv.jpg', 'เครื่องมือช่าง', 0, 'อัน', 165, ''),
(83, 'Phoenix แหวน DIN 45 องศา 30X32', 'u1.jpg', 'เครื่องมือช่าง', 0, 'อัน', 175, ''),
(84, 'Phoenix แหวน DIN 45 องศา 22X24', 'v9.jpg', 'เครื่องมือช่าง', 0, 'อัน', 100, ''),
(85, 'Phoenix แหวน DIN 45 องศา 10X13', '2s.jpg', 'เครื่องมือช่าง', 0, 'อัน', 40, ''),
(86, 'Phoenix แหวน DIN 45 องศา 10X12', 't7.jpg', 'เครื่องมือช่าง', 0, 'อัน', 35, ''),
(87, 'Phoenix ปากตาย DIN 24x26', 'px.jpg', 'เครื่องมือช่าง', 0, 'อัน', 125, ''),
(88, 'Phoenix ปากตาย DIN 18x19', 'my.jpg', 'เครื่องมือช่าง', 0, 'อัน', 60, ''),
(89, 'Phoenix ประแจแหวนข้างปากตาย DIN 23 มิล', '94.jpg', 'เครื่องมือช่าง', 0, 'อัน', 90, ''),
(90, 'Phoenix ประแจแหวนข้างปากตาย DIN 22 มิล', 'ou.jpg', 'เครื่องมือช่าง', 0, 'อัน', 82, ''),
(91, 'ACT ประแจแหวนฟรี-ปากตาย # 19', 'q0.jpg', 'เครื่องมือช่าง', 0, 'อัน', 245, ''),
(92, 'HOBAYASHI ประแจแหวนฟรี-ปากตาย # 17', '91.jpg', 'เครื่องมือช่าง', 0, 'อัน', 220, ''),
(93, 'HANS ประแจแหวนผ่า 1105 14x17mm', '91.jpg', 'เครื่องมือช่าง', 0, 'อัน', 185, ''),
(94, 'HANS ประแจแหวนผ่า 1105 12x14mm', '91.jpg', 'เครื่องมือช่าง', 0, 'อัน', 150, ''),
(95, 'PHOENIX ปากตาย DIN 16x17', 'ui.jpg', 'เครื่องมือช่าง', 0, 'อัน', 55, ''),
(96, 'PHOENIX ปากตาย DIN 22x24', 'ui.jpg', 'เครื่องมือช่าง', 0, 'อัน', 85, ''),
(97, 'BONDHUS ประแจ L ชุบขาว - หัวบอลยาว ชนิดมิล 9', 'ra.jpg', 'เครื่องมือช่าง', 0, 'อัน', 230, ''),
(98, 'BONDHUS ประแจ L ชุบขาว - หัวบอลยาว ชนิดมิล 7', 'ra.jpg', 'เครื่องมือช่าง', 0, 'อัน', 170, ''),
(99, 'HANS คีมปากแหลม 1835-6', 'le.jpg', 'เครื่องมือช่าง', 0, 'อัน', 175, ''),
(100, 'HANS คีมปากแหลม 1835-8', 'xr.jpg', 'เครื่องมือช่าง', 0, 'อัน', 215, ''),
(101, 'TTC คีมถอดปั๊มน้ำรุ่นงานหนัก 12', 'q5.jpg', 'เครื่องมือช่าง', 0, 'อัน', 530, ''),
(102, 'TTC คีมตัดสายเคเบิ้ล 8', 'zh.jpg', 'เครื่องมือช่าง', 0, 'อัน', 300, ''),
(103, 'TSUNODA คีมปากจิ้งจกด้ามหนา 8', 'i7.jpg', 'เครื่องมือช่าง', 0, 'อัน', 385, ''),
(104, 'TTC คีมปากจิ้งจกด้ามหนา 6', 'q1.jpg', 'เครื่องมือช่าง', 0, 'อัน', 235, ''),
(105, 'TTC คีมปากจิ้งจก 8', 'g5.jpg', 'เครื่องมือช่าง', 0, 'อัน', 250, ''),
(106, 'HANS คีมตัดสาย 6', 'vp.jpg', 'เครื่องมือช่าง', 0, 'อัน', 345, ''),
(107, 'HANS คีมปากจิ้งจก 1820 7', 'bh.jpg', 'เครื่องมือช่าง', 0, 'อัน', 250, ''),
(108, 'CHAMPION ไขควงแกนดำทลุ ปากแฉก 130K 5', 'ji.jpg', 'เครื่องมือช่าง', 0, 'อัน', 90, ''),
(109, 'CHAMPION ไขควงแกนดำทลุ ปากแฉก 130K 10', 'wn.jpg', '', 0, 'อัน', 170, ''),
(110, 'CHAMPION ไขควงแกนดำไม่ทะลุ ปากแฉก 6', 'vt.jpg', 'เครื่องมือช่าง', 0, 'อัน', 125, ''),
(111, 'CHAMPION ไขควงแกนดำไม่ทะลุ ปากแฉก 3', 'tp.jpg', 'เครื่องมือช่าง', 0, 'อัน', 60, ''),
(112, 'CHAMPION ไขควงแกนดำไม่ทะลุ ปากแบน 3', 'pt.jpg', 'เครื่องมือช่าง', 0, 'อัน', 55, ''),
(113, 'CHAMPION ไขควงแกนดำไม่ทะลุ ปากแฉก 8', 'n5.jpg', 'เครื่องมือช่าง', 0, 'อัน', 135, ''),
(114, 'LUMAX หลอด LED 1150LM/830/12W', 'x8.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'กล่อง', 55, ''),
(115, 'LUMAX หลอด LED 865/12W', 'b0.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'กล่อง', 54, ''),
(116, 'หลอดปิงปอง LED ขั้ว วอมไลท์ขุ่น', 'mn.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'อัน', 20, ''),
(117, 'NANO ฝาครอบกันน้ำ แนวนอน/ฝาใส', 'jq.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'ชิ้น', 35, ''),
(118, 'PANASONIC ฝาพลาสติกกันน้ำ 2 ช่องกลาง', 'jn.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'ชิ้น', 305, ''),
(119, 'PANASONIC ฝาพลาสติกสีขาว 2 ช่อง', '64.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'อัน', 20, ''),
(120, 'PANASONIC ฝาพลาสติก สีขาว2 ช่อง', 'c0.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'อัน', 18, ''),
(121, 'SONIC รางปลั๊กไฟมาตรฐาน 6 ช่อง 2 สวิทซ์ สายยาว 3 เมตร', 'iu.jpg', 'ไฟฟ้าและอุปกรณ์ไฟฟ้า', 0, 'ชิ้น', 245, ''),
(122, 'SONIC รางปลั๊กไฟมาตรฐาน 3 ช่อง 1 สวิทซ์ สายยาว 5 เมตร', 'dn.jpg', 'เครื่องมือช่าง', 0, 'ชิ้น', 225, ''),
(123, 'SAKURA สายยางเด้ง PVC Sakura 5/8 x 30 ม. สีฟ้า', 'uc.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 445, ''),
(124, 'สายยางใส 5/8x30 ม.', '2b.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 590, ''),
(125, 'สายยางใส 5/8 x 15 ม.', '52.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 255, ''),
(126, 'สายยางใส 5/8 x10 ม.', '5j.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 205, ''),
(127, 'สายยางใส 5/8x20 ม', 'to.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 360, ''),
(128, 'สายยางเขียวริ้ว 2 ชั้น หนา 5/8x20 ม.', '8h.jpg', 'ประปาและเกษตร ', 0, 'ม้วน', 260, ''),
(129, '3A งอฉาก ขนาด 20 3/4 สีฟ้า', 'ls.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 5, ''),
(130, '3A งอฉาก ขนาด 25 1 สิฟ้า', 'ls.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 10, ''),
(131, 'ท่อน้ำไทย สี่ทางตั้งฉาก ขนาด 25 1 สีฟ้า', 'f5.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 25, ''),
(132, '3A งอหนา 45 องศา ขนาด 25 1 สีฟ้า', '38.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 10, ''),
(133, '3A งอหนา 45 องศา ขนาด 20 3/4 สีฟ้า', '38.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 6, ''),
(134, '3A ข้อต่อเกลียวนอก ขนาด 55 2 สีฟ้า', 'vr.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 16, ''),
(136, '3A ข้องอเกลียวในทองเหลือง ขนาด 1/2 สีฟ้า', '2x.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 35, ''),
(137, '3A ข้อต่อเกลียวในทองเหลือง ขนาด 3/4 สีฟ้า', 'go.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 34, ''),
(139, 'M-MAX หมวกมีมอก แบบหมุน', '8t.jpg', 'อุปกรณ์เซฟตี้', 0, 'ใบ', 120, ''),
(140, '3M หมวกนิรภัย มอก', 'av.png', 'อุปกรณ์เซฟตี้', 0, 'ใบ', 330, ''),
(141, 'หมวกโม่งสีดำ รุ่น-SP', 'fi.png', 'อุปกรณ์เซฟตี้', 0, 'ชิ้น', 65, ''),
(142, 'หมวกโม่งแบบมีกรอง M2-C', 'gh.png', 'อุปกรณ์เซฟตี้', 0, 'ชิ้น', 105, ''),
(143, 'ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 กก.', '2m.jpg', 'สีและเคมีภัณฑ์', 0, 'ถุง', 140, ''),
(144, 'จระเข้ แอดฮีซีพ เนล ขนาด 300 มล. สีเบจ', 'uk.jpg', 'สีและเคมีภัณฑ์', 0, 'หลอด', 135, ''),
(145, 'เคมีโป๊วผนัง ภายใน-นอก 5 กก.', 'gw.jpg', 'สีและเคมีภัณฑ์', 0, 'ถัง', 195, ''),
(146, 'JOTUN อัลตร้า ไพรเมอร์ ขนาด 18L รองพื้นปูนใหม่', '2z.jpg', 'สีและเคมีภัณฑ์', 0, 'ถัง', 2390, ''),
(147, 'กาวยาแนว จระเข้ พรีเมี่ยม พลัสเงิน', 'hz.jpg', 'สีและเคมีภัณฑ์', 0, 'ชิ้น', 50, ''),
(148, 'TOA กาวซีเมนต์ โปรไทล์ 20กก.', 'u7.jpg', 'สีและเคมีภัณฑ์', 0, 'ถุง', 120, ''),
(149, 'TOA กาวซีเมนต์ ซุปเปอร์ไทล์ 20 กก.', 'be.jpg', 'สีและเคมีภัณฑ์', 0, 'ถุง', 135, ''),
(150, 'กาวซีเมนต์ จระเข้ 20 กก.', 'nb.jpg', 'สีและเคมีภัณฑ์', 0, 'ถุง', 160, ''),
(151, 'BEGER Cool All Plus สีน้ำอะคริลิก ชนิดด้าน', 'nv.jpg', 'สีและเคมีภัณฑ์', 0, 'ถัง', 1520, ''),
(152, 'TOA โฟร์ซีซั่นส์ สีน้ำด้าน เบส 1 แกลลอน', '89.jpg', 'สีและเคมีภัณฑ์', 0, 'แกลลอน', 235, ''),
(153, 'JOTUN เอสเซ้นส์ อีซี่คลีน เซมิกลอส เบสA 9 ลิตร', '06.jpg', 'สีและเคมีภัณฑ์', 0, 'ถัง', 1000, '');

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
-- Indexes for table `cuspo`
--
ALTER TABLE `cuspo`
  ADD PRIMARY KEY (`poID`);

--
-- Indexes for table `cuspo_detail`
--
ALTER TABLE `cuspo_detail`
  ADD PRIMARY KEY (`podetailID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusID`,`username`);

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
  MODIFY `numcart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;

--
-- AUTO_INCREMENT for table `cuspo`
--
ALTER TABLE `cuspo`
  MODIFY `poID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `cuspo_detail`
--
ALTER TABLE `cuspo_detail`
  MODIFY `podetailID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orderbill`
--
ALTER TABLE `orderbill`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `pdcategory`
--
ALTER TABLE `pdcategory`
  MODIFY `cateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
