-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samurdhidivision`
--

-- --------------------------------------------------------

--
-- Table structure for table `lottaryfundrecord`
--
DROP TABLE IF EXISTS `lottaryfundrecord`;
CREATE TABLE `lottaryfundrecord` (
  `ID` int(11) NOT NULL,
  `NIC` varchar(13) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lottaryfundrecord`
--

INSERT INTO `lottaryfundrecord` (`ID`, `NIC`, `Name`, `Address`, `Date`) VALUES
(1, '983173412v', 'Kavindu', '123/7, Divulapitiya', '2020-08-01'),
(2, '974561234v', 'Dulaj', '434/5, Divulapitiya', '2020-08-01'),
(3, '987645123v', 'Yasindu', '244/5, Batapotha', '2020-08-01'),
(4, '987654321v', 'Kavindu', '234/4, Naivala', '2020-08-03'),
(5, '984567413v', 'Ravindu', '230/4, Naivala', '2020-08-10'),
(6, '984565127v', 'Sagara', '343/5, Naivala', '2020-07-30'),
(7, '982132654v', 'Lakshan', '122/4, Divulapitiya', '2020-08-14'),
(8, '983265871v', 'Ruwan', '555/7, Divulapitiya', '2020-08-21'),
(9, '986591628v', 'Akila', '220/5, Batapotha', '2020-08-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lottaryfundrecord`
--
ALTER TABLE `lottaryfundrecord`
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lottaryfundrecord`
--
ALTER TABLE `lottaryfundrecord`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
