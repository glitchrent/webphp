-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 12:21 AM
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

--
-- Dumping data for table `cuspo`
--

INSERT INTO `cuspo` (`poID`, `poDate`, `name`, `surname`, `tel`, `address`, `cusID`, `postatus`, `slip`) VALUES
(55, '2021-09-26 23:10:07', 'narakorn', 'suapet', '0888888888', 'bangkok', 8, 'จัดส่งเสร็จสิ้น', '6.png'),
(56, '2021-09-26 23:17:44', 'narakorn', 'suapet', '0888888888', 'bangkok', 8, 'จัดส่งเสร็จสิ้น', 'qfxl0r5t7zWsuc4XCm2A-o.jpg'),
(57, '2021-09-26 23:30:20', 'narakorn', 'suapet', '0888888888', 'bangkok', 8, 'จัดส่งเสร็จสิ้น', '8.png'),
(58, '2021-09-26 23:54:15', 'narakorn', 'suapet', '0888888888', 'bangkok', 8, 'ยืนยันแล้ว', '156434.jpg'),
(59, '2021-09-27 23:46:52', 'narakornz', 'suapetz', '0888888999', '8/688', 8, 'รอการตรวจสอบ', '8.png'),
(60, '2021-09-28 00:43:54', 'narakorn', 'suapet', '0888888888', '8/62 ', 8, 'รอการตรวจสอบ', '156434.jpg');

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

--
-- Dumping data for table `cuspo_detail`
--

INSERT INTO `cuspo_detail` (`podetailID`, `poID`, `productID`, `qty`) VALUES
(105, 55, 54, 1),
(106, 56, 54, 2),
(107, 56, 55, 4),
(108, 56, 56, 5),
(109, 57, 54, 5),
(110, 58, 54, 1),
(111, 58, 55, 5),
(112, 59, 52, 2),
(113, 59, 54, 7),
(114, 59, 55, 5),
(115, 59, 56, 1),
(116, 60, 52, 4),
(117, 60, 54, 2);

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
(1, 'customer', 'customer', 'realname', 'realsurname', '088888888', 'realaddress'),
(2, 'customer2', 'customer2', 'realname2', 'realsurname2', '088888888', 'realaddress2'),
(3, 'customer3', 'customer3', 'realname3', 'realsurname3', '088888888', 'realaddress3'),
(7, 'customer4', 'customer4', 'rrrrrr', 'ssss', '08888', 'aaaaa'),
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

--
-- Dumping data for table `orderbill`
--

INSERT INTO `orderbill` (`orderID`, `date`, `total`) VALUES
(97, '2021-09-26 23:50:50', 2300),
(98, '2021-10-04 02:29:51', 4560),
(99, '2021-10-04 04:57:23', 2035);

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
  `price` int(255) NOT NULL,
  `productDetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productPic`, `productCategory`, `remainUnit`, `unit`, `price`, `productDetail`) VALUES
(52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', '2m.jpg', 'สีและเคมีภัณฑ์', 123, 'โหล', 140, '<h3>คุณสมบัติ</h3>\r\n\r\n<h5>+ กาวซีเมนต์ปูกระเบื้องมาตรฐาน</h5>\r\n\r\n<h5>+ เหมาะสำหรับปูกระเบื้องที่ดูดซึมน้ำสูงถึงต่ำ เช่น เซรามิก ดินเผา และแกรนิตโต้ ขนาดกว้างได้มากถึง 60 x 60 ซม.</h5>\r\n\r\n<h5>+ มีค่าการยึดเกาะที่ดี ติดแน่น ทนทาน</h5>\r\n\r\n<h5>+ ใช้เทคโนโลยีไร้ฝุ่น ที่ลดฝุ่นได้มากถึง 80% เมื่อเปรียบเทียบกับกาวซีเมนต์ทั่วไป ปลอดภัยต่อสุขภาพผู้ใช้</h5>\r\n\r\n<h5>+ สามารถใช้งานบนพื้นที่ได้ทั้งภายนอกและภายใน</h5>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>วิธีใช้งาน</h3>\r\n\r\n<h5>+ ใช้เกรียงหวีปาดกาวซีเมนต์ลงบนพื้นผิว</h5>\r\n\r\n<h5>+ นำกระเบื้องปูบนกาวซีเมนต์ เคาะกระเบื้องให้ติดแน่นกับกาวซีเมนต์</h5>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>ข้อควรระวัง</h3>\r\n\r\n<h5>+ อุณหภูมิที่เหมาะสมในการทํางาน 5 - 35 องศาเซลเซียส</h5>\r\n\r\n<h5>+ ใช้ด้านเรียบของเกรียงหวีที่เหมาะสมในการปาดกาวซีเมนต์บนพื้นผิวให้เรียบ ใช้ด้านที่เป็นรอยหยักของเกรียงหวี ในการสร้างร่องที่มีความหนาที่เท่ากัน</h5>\r\n\r\n<h5>+ สําหรับปูกระเบื้อง - งานพื้น มีความหนาอย่างน้อย 2 มม.</h5>\r\n\r\n<h5>+ สำหรับงานผนัง มีความหนาอย่างน้อย 3 มม. (ขนาดของเกรียงหวีขึ้นอยู่กับขนาดกระเบื้องที่ใช้)</h5>\r\n\r\n<h5>+ ควรตรวจสอบเพื่อให้มั่นใจว่า กาวซีเมนต์ต้องเปียก และถูกตําแหน่งขณะปูกระเบื้อง พื้นผิวด้านหลังกระเบื้องต้องติดกับกาวซีเมนต์ทั้งแผ่น อย่าปาดกาวซีเมนต์มากกว่า 1 ตร.ม.</h5>\r\n\r\n<h5>+ เมื่อปูกระเบื้องเสร็จแล้ว ทิ้งไว้ประมาณ 24 ชั่วโมง ก่อนใช้กาวยาแนวเดพโก้ หรือเมื่อกาวซีเมนต์ แห้งแล้วจึงจะสามารถยาแนวได้</h5>\r\n\r\n<h5>+ สําหรับความปลอดภัย ให้อ้างอิงถึงเอกสารความปลอดภัย</h5>\r\n'),
(53, 'Simple-Green No.13406 Extreme Concentrate Cleaner Bottle size 1gallon ทำความสะอาดขจัดคราบไขมัน', 'oc.jpg', 'สีและเคมีภัณฑ์', 23, 'ขวด', 1850, ''),
(54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'un.jpg', 'สีและเคมีภัณฑ์', 118, 'ขวด', 180, '<p>คุณสมบัติ</p>\r\n\r\n<p>+ เหมาะสำหรับทำความสะอาดพื้นผิวแข็งภายในอาคารทุกชนิด เช่น พื้นปาร์เก้ หินอ่อน หินขัด หินแกรนิต เซรามิก กระเบื้องโมเสก กระเบื้องยาง</p>\r\n\r\n<p>+ ขจัดคราบสกปรก และกลิ่นไม่พึงประสงค์</p>\r\n\r\n<p>+ ให้กลิ่นหอมดอกกุหลาบประทับใจ</p>\r\n\r\n<p>+ สำหรับการฆ่าเชื้อแบคทีเรีย ผสม 1 ส่วน ต่อน้ำ 60 ส่วน แล้วเทลงบนพื้นผิวให้ชุ่ม ทิ้งไว้ 10 นาที แล้วใช้ผ้าหรือฟองน้ำเช็ดทำความสะอาดให้แห้งสนิท</p>\r\n\r\n<p>วิธีใช้งาน&nbsp;</p>\r\n\r\n<p>+ สำหรับการฆ่าเชื้อแบคทีเรีย ผสม 1 ส่วน ต่อน้ำ 60 ส่วน แล้วเทลงบนพื้นผิวให้ชุ่ม ทิ้งไว้ 10 นาที แล้วใช้ผ้าหรือฟองน้ำเช็ดทำความสะอาดให้แห้งสนิท</p>\r\n\r\n<p>คำแนะนำ</p>\r\n\r\n<p>+ ควรเก็บให้พ้นจากเด็ก และสัตว์เลี้ยง</p>\r\n\r\n<p>+ ระวังอย่าให้เข้าตา หากเข้าตาให้รีบล้างออกด้วยน้ำสะอาด จนอาการระคายเคืองทุเลา</p>\r\n\r\n<p>ข้อควรระวัง</p>\r\n\r\n<p>+ ห้ามรับประทาน</p>\r\n\r\n<p>+ ห้ามทิ้งภาชนะบรรจุลงในแม่น้ำคูคลอง แหล่งน้ำสาธารณะ</p>\r\n\r\n<p>+ ภายหลังการใช้ควรล้างมือด้วยน้ำ และสบู่ทุกครั้ง ผู้ที่แพ้สารเคมีง่ายควรสวมถุงมือยาง</p>\r\n'),
(55, '3A สามตาฉาก ขนาด 18 1/2', 'xs.jpg', 'ประปาและเกษตร ', 78, 'ชิ้น', 5, ''),
(56, '3A งอหนา 45 องศา ขนาด 100 (4) สีฟ้า', '38.jpg', 'ประปาและเกษตร ', 81, 'ชิ้น', 200, ''),
(57, '3A สามตาฉากลด ขนาด 2.1/2 x1.1/2  สีฟ้า', '62.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 75, ''),
(58, '3A ข้องอเกลียวใน ขนาด 20 (3/4) สีฟ้า', 'if.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 10, ''),
(59, 'PHOENIX ประแจแหวนข้างปากตาย 48 มิล', 'gi.jpg', 'เครื่องมือช่าง', 0, 'ชิ้น', 725, ''),
(60, 'TTC คีมปากแหลม 6 RP-150', 'jj.jpg', 'เครื่องมือช่าง', 4, 'ชิ้น', 175, ''),
(61, 'WorldskimPlus อะครีลิคโป้วรอยแตกยืดหยุ่นสูง 1กล.', 'hi.jpg', 'สีและเคมีภัณฑ์', 0, 'ถัง', 550, ''),
(62, 'ดร.ฟิคสิท ยาแนวรอยต่อ เอ็มเอส 25 ขนาด 600 มล.', '2y.jpg', 'สีและเคมีภัณฑ์', 0, 'หลอด', 205, ''),
(63, 'ท่อน้ำไทย สี่ทางตั้งฉาก ขนาด 25 (1) สีฟ้า', 'pf.jpg', 'ประปาและเกษตร ', 0, 'ชิ้น', 30, '');

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
(370, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-09-26 23:30:29', 'ส่งออก', 1, 180),
(371, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-09-26 23:50:50', 'ส่งออก', 5, 900),
(372, 56, '3A งอหนา 45 องศา ขนาด 100 (4) สีฟ้า', 'ประปาและเกษตร ', '2021-09-26 23:50:50', 'ส่งออก', 7, 1400),
(373, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', '', '2021-09-27 00:57:03', 'นำเข้า', 100, 0),
(374, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-09-27 01:03:16', 'ส่งออก', 2, 360),
(375, 55, '3A สามตาฉาก ขนาด 18 1/2', 'ประปาและเกษตร ', '2021-09-27 01:03:16', 'ส่งออก', 4, 20),
(376, 56, '3A งอหนา 45 องศา ขนาด 100 (4) สีฟ้า', 'ประปาและเกษตร ', '2021-09-27 01:03:16', 'ส่งออก', 5, 1000),
(377, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-10-01 22:59:45', 'ส่งออก', 5, 900),
(378, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', '', '2021-10-03 03:11:21', 'นำเข้า', 10, 0),
(379, 53, 'Simple-Green No.13406 Extreme Concentrate Cleaner Bottle size 1gallon ทำความสะอาดขจัดคราบไขมัน', '', '2021-10-03 03:11:21', 'นำเข้า', 20, 0),
(380, 60, 'TTC คีมปากแหลม 6 RP-150', '', '2021-10-03 03:11:26', 'นำเข้า', 5, 0),
(381, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', 'สีและเคมีภัณฑ์', '2021-10-04 02:29:51', 'ส่งออก', 1, 140),
(382, 53, 'Simple-Green No.13406 Extreme Concentrate Cleaner Bottle size 1gallon ทำความสะอาดขจัดคราบไขมัน', 'สีและเคมีภัณฑ์', '2021-10-04 02:29:51', 'ส่งออก', 2, 3700),
(383, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-10-04 02:29:51', 'ส่งออก', 4, 720),
(384, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-10-04 02:56:36', 'ส่งออก', 1, 180),
(385, 55, '3A สามตาฉาก ขนาด 18 1/2', 'ประปาและเกษตร ', '2021-10-04 02:56:36', 'ส่งออก', 5, 25),
(386, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', '', '2021-10-04 02:59:13', 'นำเข้า', 10, 0),
(387, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', '', '2021-10-04 03:00:04', 'นำเข้า', 15, 0),
(388, 53, 'Simple-Green No.13406 Extreme Concentrate Cleaner Bottle size 1gallon ทำความสะอาดขจัดคราบไขมัน', '', '2021-10-04 03:00:12', 'นำเข้า', 5, 0),
(389, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', '', '2021-10-04 03:00:12', 'นำเข้า', 2, 0),
(391, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', '', '2021-10-04 04:36:02', 'นำเข้า', 60, 0),
(392, 52, 'LANKO ปูนกาวซีเมนต์ เดฟโก้ แกรนิตโต้ 20 Kg.', 'สีและเคมีภัณฑ์', '2021-10-04 04:57:23', 'ส่งออก', 5, 700),
(393, 56, '3A งอหนา 45 องศา ขนาด 100 (4) สีฟ้า', 'ประปาและเกษตร ', '2021-10-04 04:57:23', 'ส่งออก', 4, 800),
(394, 54, '3M น้ำยาทำความสะอาดพื้นและฆ่าเชื้อโรค 3.8L', 'สีและเคมีภัณฑ์', '2021-10-04 04:57:23', 'ส่งออก', 2, 360),
(395, 60, 'TTC คีมปากแหลม 6 RP-150', 'เครื่องมือช่าง', '2021-10-04 04:57:23', 'ส่งออก', 1, 175);

-- --------------------------------------------------------

--
-- Table structure for table `testdexctrip`
--

CREATE TABLE `testdexctrip` (
  `despo` text NOT NULL,
  `descID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testdexctrip`
--

INSERT INTO `testdexctrip` (`despo`, `descID`) VALUES
('<p>asdasdasdasdasdasd;asd</p>', 11),
('<p><span style=\"background-color: #e03e2d;\"><strong>asdasdasd</strong></span></p>\r\n<p><span style=\"background-color: #e03e2d;\"><strong><span style=\"text-decoration: line-through;\">asdasdasdas</span></strong></span></p>\r\n<h1><em>dasdasda</em></h1>\r\n<p><em>sdasdasdasd</em></p>', 12),
('<h2>รายละเอียดสินค้า</h2>\r\n\r\n<p>คุณสมบัติ</p>\r\n\r\n<ul>\r\n	<li>ชั้นคว่ำจาน ผลิตจากสเตนเลสเกรด 304 แข็งแรงทนทาน และง่ายต่อการดูแลทำความสะอาด</li>\r\n	<li>สามารถใช้คว่ำวางภาชนะได้หลากหลาย อาทิ จาน, ชาม, ถ้วย, แก้ว ฯลฯ</li>\r\n	<li>ด้านล่างชั้นตะแกรงมาพร้อมตะขอเสริมเพื่อใช้แขวนอุปกรณ์งานครัวต่าง ๆ ให้หยิบใช้งานได้สะดวกยิ่งขึ้น</li>\r\n	<li>ดีไซน์สวยงามทันสมัย และประหยัดพื้นที่ใช้สอยด้วยรูปแบบการติดตั้งที่สามารถยึดผนังหรือตั้งพื้นได้</li>\r\n</ul>\r\n\r\n<p>วิธีใช้งาน</p>\r\n\r\n<ul>\r\n	<li>สำหรับจัดเก็บภาชนะเครื่องครัว</li>\r\n	<li>ติดตั้งบริเวณพื้นผิวที่มีความแข็งแรง และราบเรียบเสมอกัน</li>\r\n</ul>\r\n\r\n<p>คำแนะนำ</p>\r\n\r\n<ul>\r\n	<li>วัดระยะของสินค้าให้แน่ชัดก่อนทำการติดตั้ง</li>\r\n	<li>ตรวจสอบการประกอบติดตั้งให้แข็งแรงแน่นหนาก่อนเริ่มใช้งาน</li>\r\n</ul>\r\n\r\n<p>ข้อควรระวัง</p>\r\n\r\n<ul>\r\n	<li>ติดตั้งใช้งานร่วมกับอุปกรณ์ยึดที่ได้มาตรฐานเท่านั้น</li>\r\n	<li>ห้ามใช้จัดวางหรือแขวนสิ่งของที่น้ำหนักมาก เพราะอาจทำให้สินค้าและทรัพย์สินชำรุดเสียหายได้</li>\r\n	<li>ห้ามติดตั้งใช้งานบริเวณที่มีความร้อนและเปลวไฟ</li>\r\n	<li>ห้ามเช็ดทำความสะอาดด้วยวัสดุผิวหยาบและน้ำยาที่มีสารเคมีกัดกร่อน</li>\r\n</ul>\r\n', 13),
('<h2 style=\"text-align:center\">รายละเอียดสินค้า</h2>\r\n\r\n<p>คุณสมบัติ</p>\r\n\r\n<ul>\r\n	<li>ชั้นคว่ำจาน ผลิตจากสเตนเลสเกรด 304 แข็งแรงทนทาน และง่ายต่อการดูแลทำความสะอาด</li>\r\n	<li>สามารถใช้คว่ำวางภาชนะได้หลากหลาย อาทิ จาน, ชาม, ถ้วย, แก้ว ฯลฯ</li>\r\n	<li>ด้านล่างชั้นตะแกรงมาพร้อมตะขอเสริมเพื่อใช้แขวนอุปกรณ์งานครัวต่าง ๆ ให้หยิบใช้งานได้สะดวกยิ่งขึ้น</li>\r\n	<li>ดีไซน์สวยงามทันสมัย และประหยัดพื้นที่ใช้สอยด้วยรูปแบบการติดตั้งที่สามารถยึดผนังหรือตั้งพื้นได้</li>\r\n</ul>\r\n\r\n<p>วิธีใช้งาน</p>\r\n\r\n<ul>\r\n	<li>สำหรับจัดเก็บภาชนะเครื่องครัว</li>\r\n	<li>ติดตั้งบริเวณพื้นผิวที่มีความแข็งแรง และราบเรียบเสมอกัน</li>\r\n</ul>\r\n\r\n<p>คำแนะนำ</p>\r\n\r\n<ul>\r\n	<li>วัดระยะของสินค้าให้แน่ชัดก่อนทำการติดตั้ง</li>\r\n	<li>ตรวจสอบการประกอบติดตั้งให้แข็งแรงแน่นหนาก่อนเริ่มใช้งาน</li>\r\n</ul>\r\n\r\n<p>ข้อควรระวัง</p>\r\n\r\n<ul>\r\n	<li>ติดตั้งใช้งานร่วมกับอุปกรณ์ยึดที่ได้มาตรฐานเท่านั้น</li>\r\n	<li>ห้ามใช้จัดวางหรือแขวนสิ่งของที่น้ำหนักมาก เพราะอาจทำให้สินค้าและทรัพย์สินชำรุดเสียหายได้</li>\r\n	<li>ห้ามติดตั้งใช้งานบริเวณที่มีความร้อนและเปลวไฟ</li>\r\n	<li>ห้ามเช็ดทำความสะอาดด้วยวัสดุผิวหยาบและน้ำยาที่มีสารเคมีกัดกร่อน</li>\r\n</ul>\r\n', 14);

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
-- Indexes for table `testdexctrip`
--
ALTER TABLE `testdexctrip`
  ADD PRIMARY KEY (`descID`);

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
  MODIFY `poID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cuspo_detail`
--
ALTER TABLE `cuspo_detail`
  MODIFY `podetailID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

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
  MODIFY `productID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `testdexctrip`
--
ALTER TABLE `testdexctrip`
  MODIFY `descID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
