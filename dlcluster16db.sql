-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 04:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlcluster16db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dlit`
--

CREATE TABLE `dlits` (
  `id` varchar(10) NOT NULL,
  `head_school_id` varchar(10) NOT NULL,
  `dlitP1` varchar(100) NOT NULL,
  `dlitP2` varchar(100) NOT NULL,
  `dlitP3` varchar(100) NOT NULL,
  `dlitP4` varchar(100) NOT NULL,
  `dlitP5` varchar(100) NOT NULL,
  `dlitP6` varchar(100) NOT NULL,
  `dlitm1` varchar(100) NOT NULL,
  `dlitm2` varchar(100) NOT NULL,
  `dlitm3` varchar(100) NOT NULL,
  `dlitm4` varchar(100) NOT NULL,
  `dlitm5` varchar(100) NOT NULL,
  `dlitm6` varchar(100) NOT NULL,
  `notDlit` varchar(100) NOT NULL,
  `classNum` int(11) NOT NULL,
  `tvNum` int(11) NOT NULL,
  `labtopNum` int(11) NOT NULL,
  `dlitWant` int(11) NOT NULL,
  `internetSystem` varchar(20) NOT NULL,
  `dlitProblem` varchar(100) NOT NULL,
  `dlitPicture1` varchar(50) NOT NULL,
  `dlitPicture2` varchar(50) NOT NULL,
  `dlitPicture3` varchar(50) NOT NULL,
  `dlitPicture4` varchar(50) NOT NULL,
  `saveUser` varchar(50) NOT NULL,
  `directerUser` varchar(50) NOT NULL,
  `telDirecter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dltv`
--

CREATE TABLE `dltvs` (
  `schoolid` varchar(10) NOT NULL,
  `head_school_id` varchar(10) NOT NULL,
  `dltvLevel` varchar(50) NOT NULL,
  `dltvLevelOther` varchar(100) NOT NULL,
  `dltvSatelliteNum` int(11) NOT NULL,
  `dltvSatelliteWant` varchar(20) NOT NULL,
  `dltvSatelliteWantNum` int(11) NOT NULL,
  `dltvLnbNum` int(11) NOT NULL,
  `dltvLnbWant` varchar(20) NOT NULL,
  `dltvLnbWantNum` int(11) NOT NULL,
  `dltvReceiverNum` int(11) NOT NULL,
  `dltvReceiverWant` varchar(20) NOT NULL,
  `dltvReceiverWantNum` int(11) NOT NULL,
  `dltvSatelliteProblem` varchar(20) NOT NULL,
  `dltvSatelliteProblemDetail` varchar(100) NOT NULL,
  `dltvPicture1` varchar(50) NOT NULL,
  `dltvPicture2` varchar(50) NOT NULL,
  `dltvPicture3` varchar(50) NOT NULL,
  `dltvPicture4` varchar(50) NOT NULL,
  `saveUser` varchar(50) NOT NULL,
  `directerUser` varchar(50) NOT NULL,
  `telDirecter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE `electricity` (
  `schoolid` varchar(10) NOT NULL,
  `electricityProblem` varchar(20) NOT NULL,
  `electricityProblemDetail` varchar(100) NOT NULL,
  `electricityProblemDetail2` varchar(100) NOT NULL,
  `electricitySystem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `head_schools`
--

CREATE TABLE `head_schools` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `head_schools`
--

INSERT INTO `head_schools` (`id`, `name`) VALUES
('00000000', 'เขตตรวจราชการ 16'),
('56010000', 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1'),
('56020000', 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 2');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` varchar(10) NOT NULL,
  `head_school_id` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `schoolName` varchar(100) NOT NULL,
  `no` varchar(5) NOT NULL,
  `moo` varchar(2) NOT NULL,
  `tambol` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `head_school_id`, `password`, `schoolName`, `no`, `moo`, `tambol`, `district`, `province`, `tel`, `email`, `permission`) VALUES
('56010000', '00000000', '56010000', 'สำนักงานเขตพื้นที่การศึกษาประถมศึกษาพะเยา เขต 1', '589', '-', 'ต๋อม', 'เมือง', 'พะเยา', '054-887204', 'phayao1@pyo1.go.th', 1),
('56010001', '', '56010001', 'บ้านจำป่าหวาย', '', '', '', '', '', '', '', 0),
('56010002', '', '56010002', 'บ้านดาวเรือง(ธนาคารกรุงเทพ17)', '', '', '', '', '', '', '', 0),
('56010007', '', '56010007', 'บ้านดอกบัว (บุญมานุเคราะห์)', '', '', '', '', '', '', '', 0),
('56010008', '', '56010008', 'บ้านศาลา', '', '', '', '', '', '', '', 0),
('56010009', '', '56010009', 'บ้านต๋อม', '', '', '', '', '', '', '', 0),
('56010011', '', '56010011', 'ตำบลสันป่าม่วง', '', '', '', '', '', '', '', 0),
('56010012', '', '56010012', 'บ้านร่องห้า', '', '', '', '', '', '', '', 0),
('56010013', '', '56010013', 'บ้านต๊ำพระแล', '', '', '', '', '', '', '', 0),
('56010015', '', '56010015', 'ชุมชนบ้านตุ้มท่า', '', '', '', '', '', '', '', 0),
('56010016', '', '56010016', 'บ้านต๊ำเหล่า', '', '', '', '', '', '', '', 0),
('56010019', '', '56010019', 'บ้านดอกบัว(ราษฏร์บำรุง)', '', '', '', '', '', '', '', 0),
('56010020', '', '56010020', 'บ้านสันกว๊านทุ่งกิ่ว', '', '', '', '', '', '', '', 0),
('56010021', '', '56010021', 'บ้านตุ่น', '', '', '', '', '', '', '', 0),
('56010022', '', '56010022', 'บ้านสันเวียงใหม่', '', '', '', '', '', '', '', 0),
('56010024', '', '56010024', 'บ้านสาง', '', '', '', '', '', '', '', 0),
('56010025', '', '56010025', 'บ้านโป่ง', '', '', '', '', '', '', '', 0),
('56010026', '', '56010026', 'บ้านใหม่', '', '', '', '', '', '', '', 0),
('56010028', '', '56010028', 'บ้านแม่กา', '', '', '', '', '', '', '', 0),
('56010029', '', '56010029', 'บ้านแม่กา สาขาบ้านแม่ต๋ำน้อย', '', '', '', '', '', '', '', 0),
('56010030', '', '56010030', 'บ้านห้วยเคียน', '', '', '', '', '', '', '', 0),
('56010031', '', '56010031', 'บ้านแม่ต๋ำบุญโยง', '', '', '', '', '', '', '', 0),
('56010032', '', '56010032', 'อนุบาลเมืองพะเยาบ้านโทกหวาก', '', '', '', '', '', '', '', 0),
('56010034', '', '56010034', 'บ้านร่องคำ', '', '', '', '', '', '', '', 0),
('56010035', '', '56010035', 'บ้านสันป่าสัก', '', '', '', '', '', '', '', 0),
('56010036', '', '56010036', 'บ้านแม่นาเรือ', '', '', '', '', '', '', '', 0),
('56010037', '', '56010037', 'บ้านไร่', '', '', '', '', '', '', '', 0),
('56010038', '', '56010038', 'บ้านแม่นาเรือใต้', '', '', '', '', '', '', '', 0),
('56010039', '', '56010039', 'บ้านภูเงิน', '', '', '', '', '', '', '', 0),
('56010040', '', '56010040', 'บ้านห้วยบง', '', '', '', '', '', '', '', 0),
('56010041', '', '56010041', 'บ้านป่าคา', '', '', '', '', '', '', '', 0),
('56010044', '', '56010044', 'บ้านต๊ำดอนมูล', '', '', '', '', '', '', '', 0),
('56010045', '', '56010045', 'บ้านต๊ำม่อน', '', '', '', '', '', '', '', 0),
('56010048', '', '56010048', 'ชุมชนบ้านแม่ใส', '', '', '', '', '', '', '', 0),
('56010049', '', '56010049', 'บ้านบ่อแฮ้วสันช้างหิน', '', '', '', '', '', '', '', 0),
('56010050', '', '56010050', 'บ้านสันป่าถ่อน', '', '', '', '', '', '', '', 0),
('56010051', '', '56010051', 'อนุบาลพะเยา', '', '', '', '', '', '', '', 0),
('56010053', '', '56010053', 'บ้านต๋อมดง', '', '', '', '', '', '', '', 0),
('56010056', '', '56010056', 'บ้านหนองหล่ม', '', '', '', '', '', '', '', 0),
('56010057', '', '56010057', 'บ้านแม่พริก', '', '', '', '', '', '', '', 0),
('56010058', '', '56010058', 'บ้านใหม่', '', '', '', '', '', '', '', 0),
('56010059', '', '56010059', 'บ้านดง', '', '', '', '', '', '', '', 0),
('56010061', '', '56010061', 'บ้านสันโค้ง', '', '', '', '', '', '', '', 0),
('56010062', '', '56010062', 'บ้านจำไก่', '', '', '', '', '', '', '', 0),
('56010063', '', '56010063', 'บ้านห้วยทรายเลื่อน', '', '', '', '', '', '', '', 0),
('56010065', '', '56010065', 'บ้านดอกคำใต้', '', '', '', '', '', '', '', 0),
('56010066', '', '56010066', 'ไทยรัฐวิทยา 46(ดอกคำใต้)', '', '', '', '', '', '', '', 0),
('56010067', '', '56010067', 'บ้านถ้ำประชาบำรุง', '', '', '', '', '', '', '', 0),
('56010068', '', '56010068', 'บ้านถ้ำประชานุเคราะห์', '', '', '', '', '', '', '', 0),
('56010069', '', '56010069', 'บ้านปางงุ้น', '', '', '', '', '', '', '', 0),
('56010071', '', '56010071', 'บ้านทุ่งหลวง', '', '', '', '', '', '', '', 0),
('56010072', '', '56010072', 'บ้านสันจกปก', '', '', '', '', '', '', '', 0),
('56010073', '', '56010073', 'บ้านค่า', '', '', '', '', '', '', '', 0),
('56010074', '', '56010074', 'บ้านค่าบน', '', '', '', '', '', '', '', 0),
('56010076', '', '56010076', 'บ้านร่องจว้า', '', '', '', '', '', '', '', 0),
('56010077', '', '56010077', 'อนุบาลดอกคำใต้(ชุมชนสันช้างหิน)', '', '', '', '', '', '', '', 0),
('56010078', '', '56010078', 'บ้านสันป่าหนาด', '', '', '', '', '', '', '', 0),
('56010079', '', '56010079', 'บ้านบุญเรือง(อินทะวงศานุเคราะห์)', '', '', '', '', '', '', '', 0),
('56010080', '', '56010080', 'บ้านปาง', '', '', '', '', '', '', '', 0),
('56010082', '', '56010082', 'บ้านโพธิ์ทอง', '', '', '', '', '', '', '', 0),
('56010083', '', '56010083', 'บ้านปิน', '', '', '', '', '', '', '', 0),
('56010084', '', '56010084', 'บ้านปินเหนือ', '', '', '', '', '', '', '', 0),
('56010085', '', '56010085', 'บ้านวังขอนแดง', '', '', '', '', '', '', '', 0),
('56010086', '', '56010086', 'ชุมชนบ้านห้วยลาน', '', '', '', '', '', '', '', 0),
('56010088', '', '56010088', 'บ้านทุ่งต้นศรี', '', '', '', '', '', '', '', 0),
('56010089', '', '56010089', 'บ้านเนินสมบูรณ์', '', '', '', '', '', '', '', 0),
('56010091', '', '56010091', 'บ้านสันต้นม่วง', '', '', '', '', '', '', '', 0),
('56010093', '', '56010093', 'บ้านป่าแฝกเหนือ', '', '', '', '', '', '', '', 0),
('56010094', '', '56010094', 'บ้านดงอินตา', '', '', '', '', '', '', '', 0),
('56010096', '', '56010096', 'บ้านดงบุญนาค', '', '', '', '', '', '', '', 0),
('56010098', '', '56010098', 'บ้านเหล่า', '', '', '', '', '', '', '', 0),
('56010099', '', '56010099', 'บ้านไร่อ้อย', '', '', '', '', '', '', '', 0),
('56010101', '', '56010101', 'บ้านห้วยเจริญราษฎร์', '', '', '', '', '', '', '', 0),
('56010102', '', '56010102', 'ชุมชนบ้านป่าแฝกสามัคคี', '', '', '', '', '', '', '', 0),
('56010103', '', '56010103', 'บ้านหนองสระ', '', '', '', '', '', '', '', 0),
('56010105', '', '56010105', 'บ้านป่าตึง', '', '', '', '', '', '', '', 0),
('56010106', '', '56010106', 'บ้านแม่ใจ(แม่ใจเพาะวิทยาการ)', '', '', '', '', '', '', '', 0),
('56010107', '', '56010107', 'ชุมชนบ้านแม่สุก', '', '', '', '', '', '', '', 0),
('56010108', '', '56010108', 'บ้านแม่จว้า', '', '', '', '', '', '', '', 0),
('56010109', '', '56010109', 'บ้านแม่จว้าใต้', '', '', '', '', '', '', '', 0),
('56010110', '', '56010110', 'บ้านสันขวาง', '', '', '', '', '', '', '', 0),
('56010112', '', '56010112', 'อนุบาลแม่ใจ(บ้านศรีถ้อย)', '', '', '', '', '', '', '', 0),
('56010113', '', '56010113', 'บ้านป่าสักสามัคคี', '', '', '', '', '', '', '', 0),
('56010114', '', '56010114', 'บ้านทุ่งป่าข่า', '', '', '', '', '', '', '', 0),
('56010115', '', '56010115', 'เจริญใจ', '', '', '', '', '', '', '', 0),
('56010116', '', '56010116', 'บ้านป่าแฝกใต้', '', '', '', '', '', '', '', 0),
('56010117', '', '56010117', 'บ้านเจน(เจนจันทรานุกูล)', '', '', '', '', '', '', '', 0),
('56010118', '', '56010118', 'อนุบาลภูกามยาว', '', '', '', '', '', '', '', 0),
('56010119', '', '56010119', 'บ้านแม่อิง', '', '', '', '', '', '', '', 0),
('56010120', '', '56010120', 'บ้านกว้านเหนือ(สุทัศน์อุปถัมภ์)', '', '', '', '', '', '', '', 0),
('56010121', '', '56010121', 'บ้านร่องปอ', '', '', '', '', '', '', '', 0),
('56010122', '', '56010122', 'บ้านร้อง', '', '', '', '', '', '', '', 0),
('56010124', '', '56010124', 'บ้านสันป่างิ้ว', '', '', '', '', '', '', '', 0),
('56010125', '', '56010125', 'บ้านสันต้นผึ้ง', '', '', '', '', '', '', '', 0),
('56010126', '', '56010126', 'บ้านอิงโค้ง', '', '', '', '', '', '', '', 0),
('56010127', '', '56010127', 'บ้านห้วยแก้ว', '', '', '', '', '', '', '', 0),
('56010128', '', '56010128', 'บ้านม่วงคำ', '', '', '', '', '', '', '', 0),
('56010129', '', '56010129', 'บ้านกาดถี', '', '', '', '', '', '', '', 0),
('56010130', '', '56010130', 'บ้านสันต้นแหน', '', '', '', '', '', '', '', 0),
('56010131', '', '56010131', 'บ้านหนองลาว', '', '', '', '', '', '', '', 0),
('56010132', '', '56010132', 'บ้านห้วยทรายขาว', '', '', '', '', '', '', '', 0),
('56020001', '', '56020001', 'บ้านสร้อยศรี', '', '', '', '', '', '', '', 0),
('56020002', '', '56020002', 'บ้านดอนมูล', '', '', '', '', '', '', '', 0),
('56020003', '', '56020003', 'บ้านจุน', '', '', '', '', '', '', '', 0),
('56020004', '', '56020004', 'บ้านห้วยกั้ง', '', '', '', '', '', '', '', 0),
('56020005', '', '56020005', 'บ้านร่องแมด', '', '', '', '', '', '', '', 0),
('56020006', '', '56020006', 'บ้านสันหลวง', '', '', '', '', '', '', '', 0),
('56020007', '', '56020007', 'บ้านห้วยไคร้', '', '', '', '', '', '', '', 0),
('56020008', '', '56020008', 'ชุมชนบ้านห้วยงิ้ว', '', '', '', '', '', '', '', 0),
('56020009', '', '56020009', 'บ้านแม่ทะลาย', '', '', '', '', '', '', '', 0),
('56020010', '', '56020010', 'บ้านธาตุขิงแกง', '', '', '', '', '', '', '', 0),
('56020011', '', '56020011', 'บ้านแม่วังช้าง', '', '', '', '', '', '', '', 0),
('56020012', '', '56020012', 'บ้านร่องย้าง', '', '', '', '', '', '', '', 0),
('56020013', '', '56020013', 'บ้านเวียงลอ', '', '', '', '', '', '', '', 0),
('56020014', '', '56020014', 'บ้านศรีเมืองชุม', '', '', '', '', '', '', '', 0),
('56020015', '', '56020015', 'บ้านน้ำจุน', '', '', '', '', '', '', '', 0),
('56020017', '', '56020017', 'บ้านพวงพยอม', '', '', '', '', '', '', '', 0),
('56020019', '', '56020019', 'บ้านสักลอ', '', '', '', '', '', '', '', 0),
('56020020', '', '56020020', 'บ้านสักทุ่ง', '', '', '', '', '', '', '', 0),
('56020021', '', '56020021', 'อนุบาลจุน(บ้านบัวสถาน)', '', '', '', '', '', '', '', 0),
('56020022', '', '56020022', 'ชุมชนบ้านทุ่ง (อินมีอุปถัมภ์)', '', '', '', '', '', '', '', 0),
('56020023', '', '56020023', 'บ้านกิ่วแก้ว', '', '', '', '', '', '', '', 0),
('56020024', '', '56020024', 'บ้านปงสนุก', '', '', '', '', '', '', '', 0),
('56020025', '', '56020025', 'บ้านยางขาม', '', '', '', '', '', '', '', 0),
('56020026', '', '56020026', 'บ้านหัวขัว', '', '', '', '', '', '', '', 0),
('56020029', '', '56020029', 'บ้านวังเค็มใหม่', '', '', '', '', '', '', '', 0),
('56020030', '', '56020030', 'บ้านดอนลาว', '', '', '', '', '', '', '', 0),
('56020031', '', '56020031', 'ปัวพิทยา', '', '', '', '', '', '', '', 0),
('56020032', '', '56020032', 'บ้านร่องค้อม', '', '', '', '', '', '', '', 0),
('56020033', '', '56020033', 'บ้านปัวศรีพรม', '', '', '', '', '', '', '', 0),
('56020034', '', '56020034', 'บ้านฝายกวาง', '', '', '', '', '', '', '', 0),
('56020035', '', '56020035', 'บ้านแม่ต๋ำ', '', '', '', '', '', '', '', 0),
('56020036', '', '56020036', 'บ้านแวน', '', '', '', '', '', '', '', 0),
('56020037', '', '56020037', 'บ้านสันปูเลย', '', '', '', '', '', '', '', 0),
('56020038', '', '56020038', 'บ้านปางมดแดง', '', '', '', '', '', '', '', 0),
('56020039', '', '56020039', 'ชุมชนบ้านเชียงบาน', '', '', '', '', '', '', '', 0),
('56020040', '', '56020040', 'บ้านทุ่งมอก "ราษฎร์อนุกูล"', '', '', '', '', '', '', '', 0),
('56020041', '', '56020041', 'บ้านปางวัว', '', '', '', '', '', '', '', 0),
('56020042', '', '56020042', 'บ้านผาฮาว', '', '', '', '', '', '', '', 0),
('56020043', '', '56020043', 'บ้านหัวทุ่ง', '', '', '', '', '', '', '', 0),
('56020044', '', '56020044', 'บ้านร่องส้าน', '', '', '', '', '', '', '', 0),
('56020045', '', '56020045', 'บ้านสบสา(สายใจ ดาลาล์ อนุสรณ์)', '', '', '', '', '', '', '', 0),
('56020046', '', '56020046', 'บ้านโจ้โก้', '', '', '', '', '', '', '', 0),
('56020047', '', '56020047', 'บ้านโจ้โก้ สาขาบ้านห้วยสา', '', '', '', '', '', '', '', 0),
('56020048', '', '56020048', 'บ้านใหม่ร่มเย็น', '', '', '', '', '', '', '', 0),
('56020049', '', '56020049', 'บ้านปางถ้ำ', '', '', '', '', '', '', '', 0),
('56020050', '', '56020050', 'บ้านทุ่งเย็น', '', '', '', '', '', '', '', 0),
('56020051', '', '56020051', 'บ้านสบทุ "คีรีราษฎร์สงเคราะห์"', '', '', '', '', '', '', '', 0),
('56020052', '', '56020052', 'บ้านถ้ำผาลาด', '', '', '', '', '', '', '', 0),
('56020053', '', '56020053', 'บ้านต้นผึ้ง', '', '', '', '', '', '', '', 0),
('56020054', '', '56020054', 'บ้านคะแนง', '', '', '', '', '', '', '', 0),
('56020055', '', '56020055', 'บ้านน้ำมิน', '', '', '', '', '', '', '', 0),
('56020056', '', '56020056', 'บ้านแฮะ', '', '', '', '', '', '', '', 0),
('56020057', '', '56020057', 'บ้านไชยพรม', '', '', '', '', '', '', '', 0),
('56020058', '', '56020058', 'บ้านปี้', '', '', '', '', '', '', '', 0),
('56020059', '', '56020059', 'บ้านพระนั่งดิน', '', '', '', '', '', '', '', 0),
('56020060', '', '56020060', 'บ้านหย่วน(เชียงคำนาคโรวาท)', '', '', '', '', '', '', '', 0),
('56020061', '', '56020061', 'อนุบาลเชียงคำ(วัดพระธาตุสบแวน)', '', '', '', '', '', '', '', 0),
('56020062', '', '56020062', 'อนุบาลเชียงคำฯ สาขาบ้านแดนเมือง', '', '', '', '', '', '', '', 0),
('56020063', '', '56020063', 'บ้านแวนโค้ง', '', '', '', '', '', '', '', 0),
('56020064', '', '56020064', 'บ้านทุ่งหล่ม', '', '', '', '', '', '', '', 0),
('56020065', '', '56020065', 'บ้านหนองบัวเงิน', '', '', '', '', '', '', '', 0),
('56020066', '', '56020066', 'บ้านจำบอน', '', '', '', '', '', '', '', 0),
('56020067', '', '56020067', 'บ้านผาลาด', '', '', '', '', '', '', '', 0),
('56020068', '', '56020068', 'ชัยชุมภู', '', '', '', '', '', '', '', 0),
('56020069', '', '56020069', 'บ้านไชยสถาน', '', '', '', '', '', '', '', 0),
('56020070', '', '56020070', 'บ้านท่าม่าน', '', '', '', '', '', '', '', 0),
('56020071', '', '56020071', 'ชุมชนบ้านหลวง', '', '', '', '', '', '', '', 0),
('56020072', '', '56020072', 'บ้านหล่ายทุ่ง', '', '', '', '', '', '', '', 0),
('56020073', '', '56020073', 'บ้านปงสนุก', '', '', '', '', '', '', '', 0),
('56020074', '', '56020074', 'บ้านป่าแขม', '', '', '', '', '', '', '', 0),
('56020075', '', '56020075', 'บ้านบ่อเบี้ย', '', '', '', '', '', '', '', 0),
('56020076', '', '56020076', 'อนุบาลเชียงม่วน', '', '', '', '', '', '', '', 0),
('56020078', '', '56020078', 'บ้านท่าฟ้าใต้', '', '', '', '', '', '', '', 0),
('56020079', '', '56020079', 'บ้านนาบัว', '', '', '', '', '', '', '', 0),
('56020080', '', '56020080', 'บ้านทุ่งมอก', '', '', '', '', '', '', '', 0),
('56020081', '', '56020081', 'บ้านสระ', '', '', '', '', '', '', '', 0),
('56020082', '', '56020082', 'บ้านทุ่งหนอง', '', '', '', '', '', '', '', 0),
('56020083', '', '56020083', 'บ้านท่าฟ้าเหนือ', '', '', '', '', '', '', '', 0),
('56020084', '', '56020084', 'บ้านวังบง', '', '', '', '', '', '', '', 0),
('56020085', '', '56020085', 'บ้านใหม่น้ำเงิน', '', '', '', '', '', '', '', 0),
('56020086', '', '56020086', 'ชุมชนบ้านดอนไชย', '', '', '', '', '', '', '', 0),
('56020087', '', '56020087', 'บ้านควร', '', '', '', '', '', '', '', 0),
('56020088', '', '56020088', 'บ้านเลี้ยว', '', '', '', '', '', '', '', 0),
('56020089', '', '56020089', 'บ้านแบ่ง', '', '', '', '', '', '', '', 0),
('56020092', '', '56020092', 'บ้านปัว', '', '', '', '', '', '', '', 0),
('56020093', '', '56020093', 'บ้านปางผักหม', '', '', '', '', '', '', '', 0),
('56020094', '', '56020094', 'บ้านสีพรม', '', '', '', '', '', '', '', 0),
('56020095', '', '56020095', 'บ้านป่าคา', '', '', '', '', '', '', '', 0),
('56020096', '', '56020096', 'บ้านใหม่พัฒนา', '', '', '', '', '', '', '', 0),
('56020097', '', '56020097', 'บ้านควรดง', '', '', '', '', '', '', '', 0),
('56020098', '', '56020098', 'บ้านดอนแก้ว', '', '', '', '', '', '', '', 0),
('56020099', '', '56020099', 'บ้านดอนเงิน', '', '', '', '', '', '', '', 0),
('56020100', '', '56020100', 'บ้านหลวง', '', '', '', '', '', '', '', 0),
('56020101', '', '56020101', 'บ้านดอนไชยป่าแขม', '', '', '', '', '', '', '', 0),
('56020102', '', '56020102', 'บ้านหล่ายฝายแก้ว', '', '', '', '', '', '', '', 0),
('56020103', '', '56020103', 'บ้านสันกลางนาดอ', '', '', '', '', '', '', '', 0),
('56020105', '', '56020105', 'บ้านแฮะ', '', '', '', '', '', '', '', 0),
('56020106', '', '56020106', 'บ้านทุ่งแต', '', '', '', '', '', '', '', 0),
('56020108', '', '56020108', 'บ้านหนองท่าควาย', '', '', '', '', '', '', '', 0),
('56020109', '', '56020109', 'อนุบาลปง', '', '', '', '', '', '', '', 0),
('56020110', '', '56020110', 'บ้านบุญยืน', '', '', '', '', '', '', '', 0),
('56020111', '', '56020111', 'บ้านห้วยแม่แดง', '', '', '', '', '', '', '', 0),
('56020112', '', '56020112', 'บ้านหมุ้น', '', '', '', '', '', '', '', 0),
('56020113', '', '56020113', 'บ้านดู่', '', '', '', '', '', '', '', 0),
('56020114', '', '56020114', 'ชุมชนบ้านบอน', '', '', '', '', '', '', '', 0),
('56020115', '', '56020115', 'บ้านหนุน', '', '', '', '', '', '', '', 0),
('56020116', '', '56020116', 'บ้านม่วง', '', '', '', '', '', '', '', 0),
('56020117', '', '56020117', 'บ้านบุญเรือง', '', '', '', '', '', '', '', 0),
('56020118', '', '56020118', 'บ้านห้วยสิงห์', '', '', '', '', '', '', '', 0),
('56020120', '', '56020120', 'ราชานุเคราะห์', '', '', '', '', '', '', '', 0),
('56020121', '', '56020121', 'บ้านใหม่ปางค่า(ภูลังกาอนุสรณ์)', '', '', '', '', '', '', '', 0),
('56020122', '', '56020122', 'บ้านแม่ทาย', '', '', '', '', '', '', '', 0),
('56020125', '', '56020125', 'บ้านใหม่ปางค่าสาขาบ้านห้วยกอก', '', '', '', '', '', '', '', 0),
('56020128', '', '56020128', 'บ้านขุนกำลัง', '', '', '', '', '', '', '', 0),
('56020129', '', '56020129', 'บ้านสันติสุข', '', '', '', '', '', '', '', 0),
('56020131', '', '56020131', 'บ้านนาอ้อม', '', '', '', '', '', '', '', 0),
('56020132', '', '56020132', 'บ้านสบขาม', '', '', '', '', '', '', '', 0),
('56020133', '', '56020133', 'บ้านผาตั้ง', '', '', '', '', '', '', '', 0),
('56020134', '', '56020134', 'บ้านน้ำปุก', '', '', '', '', '', '', '', 0),
('56020135', '', '56020135', 'บ้านดอนมูล', '', '', '', '', '', '', '', 0),
('56020136', '', '56020136', 'บ้านสะแล่ง', '', '', '', '', '', '', '', 0),
('56020137', '', '56020137', 'บ้านร้องเชียงแรง', '', '', '', '', '', '', '', 0),
('56020138', '', '56020138', 'บ้านน้ำเปื๋อย', '', '', '', '', '', '', '', 0),
('56020139', '', '56020139', 'บ้านดอนไชย', '', '', '', '', '', '', '', 0),
('56020140', '', '56020140', 'บ้านก๊อน้อย', '', '', '', '', '', '', '', 0),
('56020141', '', '56020141', 'บ้านทุ่งกล้วย', '', '', '', '', '', '', '', 0),
('56020142', '', '56020142', 'บ้านก๊อหลวง', '', '', '', '', '', '', '', 0),
('56020143', '', '56020143', 'บ้านแกใหม่นิคม', '', '', '', '', '', '', '', 0),
('56020144', '', '56020144', 'บ้านสา', '', '', '', '', '', '', '', 0),
('56020147', '', '56020147', 'ชุมชนบ้านหนองเลา', '', '', '', '', '', '', '', 0),
('56020148', '', '56020148', 'บ้านป่าสัก', '', '', '', '', '', '', '', 0),
('56020149', '', '56020149', 'บ้านสถาน', '', '', '', '', '', '', '', 0),
('56020152', '', '56020152', 'บ้านทุ่งติ้ว', '', '', '', '', '', '', '', 0),
('56020153', '', '56020153', 'บ้านแก', '', '', '', '', '', '', '', 0),
('56020154', '', '56020154', 'บ้านสบบง', '', '', '', '', '', '', '', 0),
('56020155', '', '56020155', 'บ้านปง', '', '', '', '', '', '', '', 0),
('56020156', '', '56020156', 'บ้านฮวก', '', '', '', '', '', '', '', 0),
('56020157', '', '56020157', 'อนุบาลภูซาง(บ้านดอนตัน)', '', '', '', '', '', '', '', 0),
('56020158', '', '56020158', 'บ้านปงใหม่', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `schoolid` varchar(10) NOT NULL,
  `mo1` int(11) NOT NULL,
  `mo2` int(11) NOT NULL,
  `fo1` int(11) NOT NULL,
  `fo2` int(11) NOT NULL,
  `mp1` int(11) NOT NULL,
  `mp2` int(11) NOT NULL,
  `mp3` int(11) NOT NULL,
  `mp4` int(11) NOT NULL,
  `mp5` int(11) NOT NULL,
  `mp6` int(11) NOT NULL,
  `fp1` int(11) NOT NULL,
  `fp2` int(11) NOT NULL,
  `fp3` int(11) NOT NULL,
  `fp4` int(11) NOT NULL,
  `fp5` int(11) NOT NULL,
  `fp6` int(11) NOT NULL,
  `fm1` int(11) NOT NULL,
  `fm2` int(11) NOT NULL,
  `fm3` int(11) NOT NULL,
  `fm4` int(11) NOT NULL,
  `fm5` int(11) NOT NULL,
  `fm6` int(11) NOT NULL,
  `mm1` int(11) NOT NULL,
  `mm2` int(11) NOT NULL,
  `mm3` int(11) NOT NULL,
  `mm4` int(11) NOT NULL,
  `mm5` int(11) NOT NULL,
  `mm6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `schoolid` varchar(10) NOT NULL,
  `mDirector` int(11) NOT NULL,
  `fDirector` int(11) NOT NULL,
  `mDeputy` int(11) NOT NULL,
  `fDeputy` int(11) NOT NULL,
  `mRegular` int(11) NOT NULL,
  `fRegular` int(11) NOT NULL,
  `mRate` int(11) NOT NULL,
  `fRate` int(11) NOT NULL,
  `mJanitor` int(11) NOT NULL,
  `fJanitor` int(11) NOT NULL,
  `mTemp` int(11) NOT NULL,
  `fTemp` int(11) NOT NULL,
  `sumteacher` int(11) NOT NULL,
  `childteacher` int(11) NOT NULL,
  `primaryteacher` int(11) NOT NULL,
  `juniorhighschool` int(11) NOT NULL,
  `highschoolteacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(10) NOT NULL,
  `user_type_id` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type_id`, `name`, `username`, `password`) VALUES
('1', '1', 'user1', 'user1', '1234'),
('2', '2', 'user2', 'user2', '1234'),
('3', '3', 'user3', 'user3', '1234'),
('5', '4', 'admin', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `name`) VALUES
('1', 'ฝ่ายเลี้ยงไก่'),
('2', 'ฝ่ายจัดซื้อ'),
('3', 'ผู้บริหาร'),
('4', 'ผู้ดูแลระบบ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dlit`
--
ALTER TABLE `dlit`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `dltv`
--
ALTER TABLE `dltv`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `electricity`
--
ALTER TABLE `electricity`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `head_schools`
--
ALTER TABLE `head_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
