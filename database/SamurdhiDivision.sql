-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2020 at 07:42 PM
-- Server version: 8.0.20
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SamurdhiDivision`
--

-- --------------------------------------------------------

--
-- Table structure for table `CBOMemberDetailes`
--

CREATE TABLE `CBOMemberDetailes` (
  `CBORegNo` char(12) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Post` enum('Presidet','Vice president','Secratary','Vice secratary','Treasurer','Internal auditor','Member') NOT NULL,
  `Telephone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `NIC` varchar(15) NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CommunityBasedOrganizations`
--

CREATE TABLE `CommunityBasedOrganizations` (
  `RegNo` char(12) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Telephone` varchar(12) NOT NULL,
  `EMail` text NOT NULL,
  `Village` text NOT NULL,
  `GNDomain` text NOT NULL,
  `Zone` text NOT NULL,
  `DivisionalSec` char(12) NOT NULL DEFAULT 'Divulapitiya',
  `DistrictSec` char(7) NOT NULL DEFAULT 'Gampaha',
  `NoOfMemPrev` int NOT NULL,
  `NoOfMemNew` int NOT NULL,
  `AnnualMeetingDate` date DEFAULT NULL,
  `BankName` text NOT NULL,
  `AccountNo` text NOT NULL,
  `AccountOpenDate` date DEFAULT NULL,
  `Balance` decimal(10,0) NOT NULL,
  `RenewedDate` date NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailsofbenificiaries`
--

CREATE TABLE `detailsofbenificiaries` (
  `Serial_No` int NOT NULL,
  `Divisional_Secretariat` varchar(100) NOT NULL,
  `Bank_Zonal` varchar(100) NOT NULL,
  `GN_Division` varchar(100) NOT NULL,
  `GN_Code_Mapping` varchar(100) NOT NULL,
  `Householder_Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Noof_Family_Members` int NOT NULL,
  `Bank_Account_No` varchar(50) NOT NULL,
  `Relief_Amount` int NOT NULL,
  `Starting_Year` varchar(30) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailsofbenificiaries`
--

INSERT INTO `detailsofbenificiaries` (`Serial_No`, `Divisional_Secretariat`, `Bank_Zonal`, `GN_Division`, `GN_Code_Mapping`, `Householder_Name`, `Address`, `NIC`, `Noof_Family_Members`, `Bank_Account_No`, `Relief_Amount`, `Starting_Year`, `is_deleted`) VALUES
(2, 'Divulapitiya', 'Badalgama', '41-Paranahalpe', '1-2-09-1-420', 'T.L.P.Dissnayake', '280/7,Yatigaha,Diulapitiya', '1998092156V', 4, '456-789-456', 420, '2001-09-23', 0),
(3, 'Diulapitiya', 'Divulapitiya', '41A-Paranahalpe', '1-2-34-768', 'Y.L.M.Bassnayake', '234/5,Madagama,Meerigama', '199809893V', 5, '134-890-837', 1320, '2009-09-08', 0),
(4, 'Diulapitiya', 'Yatigaha', '42-Halpe', '1-3-08-456', 'P.L.kariayawasam', '234/5,Yatigaha,Diulapitiya', '12345654V', 6, '123-654-890', 1220, '2008-07-14', 0),
(5, 'Divulapitiya', 'Yatigaha', '42A-Nariyamulla', '1-2-09-1-420', 'H.Y.Dilshan', '248/5,Yatigaha,Meerigama.', '123245567V', 4, '123-123-123', 420, '1998', 0),
(6, 'Dovulapitiya', 'Yatigaha', '41-Paranahalpe', '1-02-09-420', 'K.M.Kariyawasam', '234/5,Divulapitiya.', '123456543V', 4, '123-123-123', 420, '1998-09-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `LottaryFundRecord`
--

CREATE TABLE `LottaryFundRecord` (
  `NIC` varchar(13) NOT NULL,
  `Name` text NOT NULL,
  `Address` text,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `MandatoryFundRequests`
--

CREATE TABLE `MandatoryFundRequests` (
  `SerialNo` int NOT NULL,
  `Date` date NOT NULL,
  `GNDomain` text NOT NULL,
  `BenefName` text NOT NULL,
  `AcceptedBy` text NOT NULL,
  `AppDate` date NOT NULL,
  `AppBank` text NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personalfile`
--

CREATE TABLE `personalfile` (
  `member_id` int NOT NULL,
  `nic_number` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date_appointed` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_pension` date NOT NULL,
  `w_op_number` int NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `personalfile`
--

INSERT INTO `personalfile` (`member_id`, `nic_number`, `name`, `designation`, `service`, `date_appointed`, `date_of_birth`, `date_of_pension`, `w_op_number`, `is_deleted`) VALUES
(1, '', 'Mr.J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 2)', '2019-01-10', '1990-12-05', '2050-12-05', 2222222, 0),
(2, '', 'Mrs.L.Madurangi', 'Public Management Assistant', 'PMA(Class 3)', '2018-01-10', '1990-03-05', '2050-03-05', 3333333, 0),
(3, '1234', 'abcd', 'abcd', 'abcd', '2020-04-03', '2020-04-03', '2020-04-03', 1234, 0),
(4, '', 'Mr. J.C.Wijethunga', 'Management Assistant', 'PMA', '2020-02-02', '1996-12-09', '2056-12-09', 2342342, 0),
(5, '', 'Mr.K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 3)', '2017-05-05', '1980-11-23', '2060-11-23', 1111111, 0),
(6, '123456785V', 'Mrs. D.Dharamsena', 'Clerk', 'PMA', '2020-05-13', '2020-04-28', '2020-05-06', 1234567, 0);

-- --------------------------------------------------------

--
-- Table structure for table `SipdoraScholarship`
--

CREATE TABLE `SipdoraScholarship` (
  `SerialNo` int NOT NULL,
  `Name` text NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Ethnicity` enum('Sinhala','Tamil','Muslim','Burger') NOT NULL,
  `Guardian` text NOT NULL,
  `SpeciallyAbled` enum('True','False') NOT NULL,
  `Stream` enum('Biology','Maths','ICT','Commerce','Art','Technology','Agri') NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `School` text NOT NULL,
  `Address` text NOT NULL,
  `Bank` text NOT NULL,
  `SisurakaAcNo` varchar(10) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SSFAppFamMem`
--

CREATE TABLE `SSFAppFamMem` (
  `OwnershipNo` varchar(40) NOT NULL,
  `Name` text NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `MaritialState` tinyint(1) NOT NULL,
  `BDay` date NOT NULL,
  `Age` int NOT NULL,
  `RelToBenif` varchar(30) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `Profession` varchar(30) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  `Dead` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SSFundApplicants`
--

CREATE TABLE `SSFundApplicants` (
  `SerialNo` int NOT NULL,
  `District` varchar(10) NOT NULL DEFAULT 'Gampaha',
  `DivSec` varchar(20) NOT NULL DEFAULT 'Divulapitiya',
  `Zone` text NOT NULL,
  `ForceNo` int NOT NULL,
  `Village` text NOT NULL,
  `GNDomain` text NOT NULL,
  `SSOwnershipNo` text NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Successer` text NOT NULL,
  `HomeNo` text NOT NULL,
  `Banned` tinyint(1) NOT NULL DEFAULT '0',
  `Deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SSFundPayments`
--

CREATE TABLE `SSFundPayments` (
  `Date` date NOT NULL,
  `SerialNo` int NOT NULL,
  `BeneficiaryNo` int NOT NULL,
  `BenifName` text NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `NameAssured` text,
  `GNDiv` text,
  `Reason` enum('Death','Birth','Marrige','Hospitalization','Scholarship') NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'officer4', 'officer4@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-05-04 17:16:21', 0),
(2, 'officer1', 'officer1@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-05-13 00:00:00', 0),
(3, 'officer2', 'officer2@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-05-13 00:00:00', 0),
(4, 'officer3', 'officer3@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-05-13 00:00:00', 0),
(5, 'officer5', 'officer5@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-05-13 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CBOMemberDetailes`
--
ALTER TABLE `CBOMemberDetailes`
  ADD PRIMARY KEY (`NIC`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `CommunityBasedOrganizations`
--
ALTER TABLE `CommunityBasedOrganizations`
  ADD PRIMARY KEY (`RegNo`),
  ADD UNIQUE KEY `RegNo` (`RegNo`);

--
-- Indexes for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `LottaryFundRecord`
--
ALTER TABLE `LottaryFundRecord`
  ADD PRIMARY KEY (`NIC`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `personalfile`
--
ALTER TABLE `personalfile`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `SipdoraScholarship`
--
ALTER TABLE `SipdoraScholarship`
  ADD UNIQUE KEY `SerialNo` (`SerialNo`);

--
-- Indexes for table `SSFundApplicants`
--
ALTER TABLE `SSFundApplicants`
  ADD UNIQUE KEY `SerialNo` (`SerialNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  MODIFY `Serial_No` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `personalfile`
--
ALTER TABLE `personalfile`
  MODIFY `member_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `SipdoraScholarship`
--
ALTER TABLE `SipdoraScholarship`
  MODIFY `SerialNo` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `SSFundApplicants`
--
ALTER TABLE `SSFundApplicants`
  MODIFY `SerialNo` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
