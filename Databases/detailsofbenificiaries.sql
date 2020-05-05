-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 10:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailsofbenificiaries`
--

CREATE TABLE `detailsofbenificiaries` (
  `Serial_No` int(11) NOT NULL,
  `Divisional_Secretariat` varchar(100) NOT NULL,
  `Bank_Zonal` varchar(100) NOT NULL,
  `GN_Division` varchar(100) NOT NULL,
  `GN_Code_Mapping` varchar(100) NOT NULL,
  `Householder_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Noof_Family_Members` int(30) NOT NULL,
  `Bank_Account_No` varchar(50) NOT NULL,
  `Relief_Account` int(200) NOT NULL,
  `Starting_Year` varchar(30) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailsofbenificiaries`
--

INSERT INTO `detailsofbenificiaries` (`Serial_No`, `Divisional_Secretariat`, `Bank_Zonal`, `GN_Division`, `GN_Code_Mapping`, `Householder_Name`, `Address`, `NIC`, `Noof_Family_Members`, `Bank_Account_No`, `Relief_Account`, `Starting_Year`, `is_deleted`) VALUES
(2, 'Divulapitiya', 'Badalgama', '41-Paranahalpe', '1-2-09-1-420', 'T.L.P.Dissnayake', '280/7,Yatigaha,Diulapitiya', '1998092156V', 4, '456-789-456', 420, '2001-09-23', 0),
(3, 'Diulapitiya', 'Divulapitiya', '41A-Paranahalpe', '1-2-34-768', 'Y.L.M.Bassnayake', '234/5,Madagama,Meerigama', '199809893V', 5, '134-890-837', 1320, '2009-09-08', 0),
(4, 'Diulapitiya', 'Yatigaha', '42-Halpe', '1-3-08-456', 'P.L.kariayawasam', '234/5,Yatigaha,Diulapitiya', '12345654V', 6, '123-654-890', 1220, '2008-07-14', 0),
(5, 'Divulapitiya', 'Yatigaha', '42A-Nariyamulla', '1-2-09-1-420', 'H.Y.Dilshan', '248/5,Yatigaha,Meerigama.', '123245567V', 4, '123-123-123', 420, '1998', 0),
(6, 'Dovulapitiya', 'Yatigaha', '41-Paranahalpe', '1-02-09-420', 'K.M.Kariyawasam', '234/5,Divulapitiya.', '123456543V', 4, '123-123-123', 420, '1998-09-12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  ADD PRIMARY KEY (`Serial_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
