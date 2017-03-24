-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 09:06 AM
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
-- Table structure for table `dltvs`
--

CREATE TABLE `dltvs` (
  `id` varchar(10) NOT NULL,
  `head_school_id` varchar(10) NOT NULL,
  `dltvLevel` varchar(50) NOT NULL,
  `dltvLevelDetail` varchar(100) NOT NULL,
  `dltvSatelliteNum` int(11) NOT NULL,
  `dltvSatelliteWant` varchar(20) DEFAULT NULL,
  `dltvSatelliteWantNum` int(11) NOT NULL,
  `dltvLnbNum` int(11) NOT NULL,
  `dltvLnbWant` varchar(20) DEFAULT NULL,
  `dltvLnbWantNum` int(11) NOT NULL,
  `dltvReceiverNum` int(11) NOT NULL,
  `dltvReceiverWant` varchar(20) DEFAULT NULL,
  `dltvReceiverWantNum` int(11) NOT NULL,
  `dltvProblem` varchar(20) DEFAULT NULL,
  `dltvProblemDetail` varchar(100) NOT NULL,
  `dltvProblemFix` varchar(100) NOT NULL,
  `dltvPicture1` varchar(50) NOT NULL,
  `dltvPicture2` varchar(50) NOT NULL,
  `dltvPicture3` varchar(50) NOT NULL,
  `dltvPicture4` varchar(50) NOT NULL,
  `dltvPictureDetail1` varchar(50) NOT NULL,
  `dltvPictureDetail2` varchar(50) NOT NULL,
  `dltvPictureDetail3` varchar(50) NOT NULL,
  `dltvPictureDetail4` varchar(50) NOT NULL,
  `saveUser` varchar(50) NOT NULL,
  `directerUser` varchar(50) NOT NULL,
  `telDirecter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dltvs`
--

INSERT INTO `dltvs` (`id`, `head_school_id`, `dltvLevel`, `dltvLevelDetail`, `dltvSatelliteNum`, `dltvSatelliteWant`, `dltvSatelliteWantNum`, `dltvLnbNum`, `dltvLnbWant`, `dltvLnbWantNum`, `dltvReceiverNum`, `dltvReceiverWant`, `dltvReceiverWantNum`, `dltvProblem`, `dltvProblemDetail`, `dltvProblemFix`, `dltvPicture1`, `dltvPicture2`, `dltvPicture3`, `dltvPicture4`, `dltvPictureDetail1`, `dltvPictureDetail2`, `dltvPictureDetail3`, `dltvPictureDetail4`, `saveUser`, `directerUser`, `telDirecter`) VALUES
('56010002', '56010000', 'อื่นๆ:', '', 0, NULL, 0, 0, NULL, 0, 0, NULL, 0, NULL, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('56010007', '56010000', 'ป.1-ป.6', '-', 10, NULL, 5, 10, NULL, 5, 10, NULL, 5, NULL, 'ปัญหาเกี่ยวกับระบบรับสัญญาณดาวเทียม', 'วิธีการ/ความต้องการในการแก้ปัญหาระบบรับสัญญาณดาวเทียม', 'upload/QeyMZFa7MHr2PHY4AVIY.png', 'upload/0IyY0y7GvNOWvBd1wrlz.png', 'upload/G6ouIsD1WD5PKikKFfqm.png', 'upload/ATTfvnuf3H4K0z9WlSs0.png', 'คำบรรยายภาพที่1', 'คำบรรยายภาพที่2', 'คำบรรยายภาพที่3', 'คำบรรยายภาพที่4', 'ลงชื่อ ผู้บันทึกข้อมูล', 'ลงชื่อ ผู้อำนวยการโรงเรียน', 'หมายเลขโทร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dltvs`
--
ALTER TABLE `dltvs`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
