-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 08:12 PM
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
-- Table structure for table `appreciationletter`
--

CREATE TABLE `appreciationletter` (
  `letter_index` int(11) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `particulars` varchar(500) NOT NULL,
  `punishment` varchar(300) NOT NULL,
  `ref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appreciationletter`
--

INSERT INTO `appreciationletter` (`letter_index`, `nic`, `name`, `date`, `particulars`, `punishment`, `ref`) VALUES
(1, '123456787V12', 'Mrs.L.Madurangi', '2020-07-08', 'abcd', 'no', 'abcd'),
(3, '123456787V12', 'Mrs.L.Madurangi', '2020-08-04', 'derf', 'yes', 'derf'),
(4, '123456789V', 'Mrs.L.Madurangi', '2020-07-26', 'දෝෂ දර්ශනයක් කළ සෑම විටකම ඒ බව නිළදාරියා වෙත දැනුම් දිය යුතුය.දෝෂ දර්ශනය සටහන් කළ යුත්තේ රතු තීන්තෙනි. නිළදාරියාට දන්වන ලද බවටද, ඔහු විසින් ඊට විරෝධය පළකරන ලද්දේ නම් , එය සලකාබලන බවට සහ නිෂ්ප්‍රභා කරන ලද බවට ද සටහන් කළ යුතුය', 'ok', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `cbomemberdetailes`
--

CREATE TABLE `cbomemberdetailes` (
  `SerialNo` int(11) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `Expired` tinyint(1) NOT NULL DEFAULT 0,
  `NIC` varchar(15) NOT NULL,
  `CBORegNo` char(12) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text NOT NULL,
  `Post` enum('President','Vice president','Secratary','Vice secratary','Treasurer','Internal auditor','Member') NOT NULL,
  `Telephone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `communitybasedorganizations`
--

CREATE TABLE `communitybasedorganizations` (
  `ID` int(11) NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT 0,
  `RegNo` char(12) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text NOT NULL,
  `Telephone` varchar(12) NOT NULL,
  `EMail` varchar(100) DEFAULT NULL,
  `Village` varchar(50) NOT NULL,
  `GNDomain` varchar(50) NOT NULL,
  `Zone` varchar(50) NOT NULL,
  `DivisionalSec` char(12) NOT NULL DEFAULT 'Divulapitiya',
  `DistrictSec` char(7) NOT NULL DEFAULT 'Gampaha',
  `NoOfMemPrev` int(11) NOT NULL,
  `NoOfMemNew` int(11) NOT NULL,
  `AnnualMeetingDate` date NOT NULL,
  `BankName` varchar(50) NOT NULL,
  `AccountNo` varchar(50) NOT NULL,
  `AccountOpenDate` date DEFAULT NULL,
  `Balance` decimal(10,0) NOT NULL,
  `RenewedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communitybasedorganizations`
--

INSERT INTO `communitybasedorganizations` (`ID`, `Expired`, `RegNo`, `Name`, `Address`, `Telephone`, `EMail`, `Village`, `GNDomain`, `Zone`, `DivisionalSec`, `DistrictSec`, `NoOfMemPrev`, `NoOfMemNew`, `AnnualMeetingDate`, `BankName`, `AccountNo`, `AccountOpenDate`, `Balance`, `RenewedDate`) VALUES
(7, 0, '1234', 'abcd', 'abcd', '1234567890', 'sdf@gmail.com', 'abcd', 'abcd', 'abcd', 'Divulapitiya', 'Gampaha', 2, 1, '2020-08-12', 'abcd', '1234567', '2020-08-20', '1234567', '2020-08-19');

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
  `Noof_Family_Members` int(11) NOT NULL,
  `Bank_Account_No` varchar(50) NOT NULL,
  `Relief_Amount` int(11) NOT NULL,
  `Starting_Year` varchar(30) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailsofbenificiaries`
--

INSERT INTO `detailsofbenificiaries` (`Serial_No`, `Divisional_Secretariat`, `Bank_Zonal`, `GN_Division`, `GN_Code_Mapping`, `Householder_Name`, `Address`, `NIC`, `Noof_Family_Members`, `Bank_Account_No`, `Relief_Amount`, `Starting_Year`, `is_deleted`) VALUES
(2, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '1-2-09-1-420', 'T.L.P.Dissnayake', '280/7,Yatigaha,Diulapitiya', '1998092156V', 4, '456-789-456', 420, '2001-09-23', 0),
(3, 'Diulapitiya', 'Divulapitiya', '41A-Paranahalpe', '1-2-34-768', 'Y.L.M.Bassnayake', '234/5,Madagama,Meerigama', '199809893V', 5, '134-890-837', 1320, '2009-09-08', 0),
(4, 'Diulapitiya', 'Yatigaha', '42-Halpe', '1-3-08-456', 'P.L.kariayawasam', '234/5,Yatigaha,Diulapitiya', '12345654V', 6, '123-654-890', 1220, '2008-07-14', 0),
(5, 'Divulapitiya', 'Yatigaha', '42A-Nariyamulla', '1-2-09-1-420', 'H.Y.Dilshan', '248/5,Yatigaha,Meerigama.', '123245567V', 4, '123-123-123', 420, '1998', 0),
(6, 'Dovulapitiya', 'Yatigaha', '41-Paranahalpe', '1-02-09-420', 'K.M.Kariyawasam', '234/5,Divulapitiya.', '123456543V', 4, '123-123-123', 420, '1998-09-12', 0),
(7, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '1-9-09-1-420', 'K.K.A.R.Adhikari', '20,Temple Road,Paranahalpe', '987878671V', 3, '01-1888', 3500, '2000', 0),
(8, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '1-9-09-1-420', 'K.K.A.R.Adhikari', '10,AA,AA', '987878671V', 2, '01-1888', 3500, '2000', 1),
(9, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '1-9-09-1-422', 'AAAAAAAAA', 'BBBBBBBBB', '123456789V', 4, '01-1899', 2500, '2005', 0),
(10, 'Divulapitiya', 'Yatigaha', '42-Halpe', '1-9-09-1-424', 'K.D.B.Abesinghe', '1,AB,Halpe.', '876543216V', 3, '01-1887', 3500, '2005', 0),
(11, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '1-9-09-1-428', 'ABCD', 'ASDE', '987567654V', 2, '01-1834', 3500, '2002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lottaryfundrecord`
--

CREATE TABLE `lottaryfundrecord` (
  `ID` int(11) NOT NULL,
  `NIC` varchar(13) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lottaryfundrecord`
--

INSERT INTO `lottaryfundrecord` (`ID`, `NIC`, `Name`, `Address`, `Date`) VALUES
(10, '1234567890', 'sdfg', 'asdf', '2020-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `mandatoryfundrequests`
--

CREATE TABLE `mandatoryfundrequests` (
  `SerialNo` int(11) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `Date` date NOT NULL,
  `GNDomain` text NOT NULL,
  `BenefName` text NOT NULL,
  `AcceptedBy` text NOT NULL,
  `AppDate` date NOT NULL,
  `AppBank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandatoryfundrequests`
--

INSERT INTO `mandatoryfundrequests` (`SerialNo`, `Deleted`, `Date`, `GNDomain`, `BenefName`, `AcceptedBy`, `AppDate`, `AppBank`) VALUES
(1234, 0, '2020-08-04', '1234', '12', 'asdf', '2020-08-18', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `personalfile`
--

CREATE TABLE `personalfile` (
  `member_id` int(11) NOT NULL,
  `nic_number` varchar(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `service` varchar(100) NOT NULL,
  `date_appointed` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_pension` date NOT NULL,
  `w_op_number` int(11) NOT NULL,
  `member_type` varchar(5) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personalfile`
--

INSERT INTO `personalfile` (`member_id`, `nic_number`, `name`, `designation`, `service`, `date_appointed`, `date_of_birth`, `date_of_pension`, `w_op_number`, `member_type`, `is_deleted`) VALUES
(1, '567234567V', 'Mr.J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 3)', '2019-01-10', '1990-12-05', '2050-12-05', 2222222, 'in', 1),
(2, '123456789V', 'Mrs.L.Madurangi', 'Public Management Assistant', 'PMA(Class 4)', '2018-01-10', '1990-03-05', '2050-03-05', 3333344, 'in', 0),
(3, '123443215V', 'Mr. Rukmantha', 'abcd', 'abcd', '2020-04-03', '2020-04-03', '2020-04-03', 1234, 'in', 1),
(4, '', 'Mr. J.C.Wijethunga', 'Management Assistant', 'PMA', '2020-02-02', '1996-12-09', '2056-12-09', 2342342, 'in', 1),
(5, '123456787V', 'Mr.K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 4)', '2017-05-05', '1980-11-23', '2060-11-23', 1111333, 'in', 0),
(6, '123456785V', 'Mrs. D.Dharamsena', 'Clerk', 'DDD', '2020-05-13', '2020-04-28', '2020-05-06', 1234567, 'in', 1),
(7, '123123456V', 'Mr.Lalkantha', 'Samurdhi Developement Officer', 'SDO', '2020-05-20', '2020-05-12', '2020-05-13', 7657657, 'out', 1),
(8, '678765654V', 'Mr. Kavindu', 'Samurdhi Manager', 'SMDB', '2020-05-12', '2020-05-04', '2020-05-19', 3459871, 'out', 1),
(9, '876765654V', 'Mr. Weerasooriya', 'Samurdhi Developement Officer', 'PDO', '2020-05-15', '2020-05-18', '2020-05-20', 4565445, 'out', 0),
(10, '123987345V', 'Mrs. Priyanwada', 'Samurdhi Developement Officer', 'PDO', '2020-05-06', '2020-05-13', '2020-05-12', 4545453, 'out', 1),
(11, '232323234V', 'Mrs. Alankulama', 'Public Management Assistant', 'PMA(Class 3)', '2020-04-29', '2020-05-05', '2020-05-20', 2343455, 'in', 0),
(12, '1234', 'a', 'a', 'a', '2020-06-15', '2020-06-09', '2020-06-22', 1234, 'in', 1),
(13, '34', 's', 's', 's', '2020-06-02', '2020-06-09', '2020-06-17', 34, 'in', 1),
(14, '56', 'f', 'f', 'f', '2020-06-02', '2020-06-02', '2020-06-10', 0, 'in', 1),
(15, '123456789V', 'Mrs.L.Madurangi', 'Public Management Assistant', 'PMA(Class 3)', '2018-01-10', '1990-03-05', '2050-03-05', 3333377, 'in', 1),
(16, '232323234V', 'Mrs. Alankulama', 'Public Management Assistant', 'PMA(Class 2)', '2020-04-29', '2020-05-05', '2020-05-20', 2343455, 'in', 1),
(17, '123987345V', 'Mrs. Priyanwada', 'Samurdhi Developement Officer', 'PDO', '2020-05-06', '2020-05-13', '2020-05-12', 4545453, 'out', 1),
(18, '876765654V', 'Mr. Weerasooriya', 'Samurdhi Developement Officer', 'PDO', '2020-05-15', '2020-05-18', '2020-05-20', 4565445, 'out', 1),
(19, '123987345V', 'Mrs. Priyanwada', 'Samurdhi Manager', 'PDO', '2020-05-06', '2020-05-13', '2020-05-12', 4545453, 'out', 1),
(20, '123456787V', 'Mr.K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 2)', '2017-05-05', '1980-11-23', '2060-11-23', 1111122, 'in', 1),
(21, '567234567V', 'Mr.J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 3)', '2019-01-10', '1990-12-05', '2050-12-05', 2222333, 'in', 1),
(22, '676767676V', 'Mr.Kamal', 'BACD', 'ABCD', '2020-07-01', '2020-07-01', '2020-06-28', 676767, 'out', 0),
(23, '876765654V', 'Mr.Wishwanadan', 'Samurdhi Devlopment Officer', 'Class 2', '2020-07-13', '2020-07-05', '2020-07-21', 8767656, 'out', 1),
(24, '9876543', 'vgt', 'vvg', 'eee', '2020-08-04', '2020-08-04', '2020-08-12', 123456, 'out', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salarydetails`
--

CREATE TABLE `salarydetails` (
  `emp_no` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `basic_salary` float NOT NULL,
  `interim_allo` float NOT NULL,
  `language_allo` float NOT NULL,
  `living_cost` float NOT NULL,
  `w_op` float NOT NULL,
  `agrahara` float NOT NULL,
  `stamp_value` float NOT NULL,
  `union_value` float NOT NULL,
  `other_loan` float NOT NULL,
  `special_advance` float NOT NULL,
  `net_pay` float NOT NULL,
  `is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salarydetails`
--

INSERT INTO `salarydetails` (`emp_no`, `name`, `designation`, `bank`, `acc_no`, `basic_salary`, `interim_allo`, `language_allo`, `living_cost`, `w_op`, `agrahara`, `stamp_value`, `union_value`, `other_loan`, `special_advance`, `net_pay`, `is_deleted`) VALUES
(1, 'abcd', 'abcd', 'nsb', '123456789', 12000, 1000, 1000, 1000, 200, 100, 300, 100, 100, 100, 14100, 1),
(2, 'aakr', 'efgh', 'peoples', '987654', 13000, 1000, 1500, 2500, 560, 200, 350, 123, 2500, 1234, 13033, 1),
(5, 'Mr.Kodithuwakku', 'PDA', 'boc', '1234234', 56000, 8900, 890, 8765, 890, 765, 456, 4556, 456, 667, 66765, 0),
(6, 'Mrs. Amayangi', 'PDA', 'boc', '3456545', 56787, 2345, 2345, 2345, 234, 2345, 2345, 234, 523, 45, 58096, 0),
(7, 'Mr.Kamal', 'Management Assistant', 'nsb', '12345678901', 23777.9, 12234, 123, 123, 123, 345, 345, 34, 534, 56, 34820.9, 0),
(22, 'hbjnj', 'fjngj', 'peoples', '9876543', 87654, 98765, 98765, 987, 876, 876, 9, 87, 9876, 98, 274349, 1),
(987654, 'kavindu', 'ppp', 'nsb', '9898987', 30000, 2000, 2500, 3000, 1234, 500, 450, 345, 345, 125, 34501, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sipdorascholarship`
--

CREATE TABLE `sipdorascholarship` (
  `ID` int(11) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `NIC` varchar(15) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Ethnicity` enum('Sinhala','Tamil','Muslim','Burger') NOT NULL,
  `Guardian` varchar(300) NOT NULL,
  `SpeciallyAbled` enum('YES','NO') NOT NULL,
  `Stream` enum('Biology','Maths','ICT','Commerce','Art','Technology','Agri') NOT NULL,
  `School` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `Bank` varchar(150) NOT NULL,
  `SisurakaAcNo` varchar(10) NOT NULL,
  `PeriodID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sipdorascholarship`
--

INSERT INTO `sipdorascholarship` (`ID`, `Deleted`, `NIC`, `Name`, `Gender`, `Ethnicity`, `Guardian`, `SpeciallyAbled`, `Stream`, `School`, `Address`, `Bank`, `SisurakaAcNo`, `PeriodID`) VALUES
(3, 0, '123456789', 'asd', 'Male', 'Sinhala', 'asdf', 'YES', 'Maths', 'sdfg', 'sdf', 'sdfg', '234', 6);

-- --------------------------------------------------------

--
-- Table structure for table `ssfappfammem`
--

CREATE TABLE `ssfappfammem` (
  `OwnershipNo` varchar(40) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `Name` text NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `MaritialState` tinyint(1) NOT NULL,
  `BDay` date NOT NULL,
  `Age` int(11) NOT NULL,
  `RelToBenif` varchar(30) NOT NULL,
  `Profession` varchar(30) NOT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `Dead` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssfappfammem`
--

INSERT INTO `ssfappfammem` (`OwnershipNo`, `Deleted`, `Name`, `Gender`, `MaritialState`, `BDay`, `Age`, `RelToBenif`, `Profession`, `NIC`, `Dead`) VALUES
('12345', 0, 'asdfgsdfghj', 'Male', 1, '2020-08-12', 234, 'sdfgsdfg', 'dfg', '1234567890', 0),
('12345', 0, 'hgfds', 'Male', 1, '2020-08-06', 65, 'kjhgf', 'kjhgf', '1234560', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ssfundapplicants`
--

CREATE TABLE `ssfundapplicants` (
  `SerialNo` int(11) NOT NULL,
  `District` varchar(10) NOT NULL DEFAULT 'Gampaha',
  `DivSec` varchar(20) NOT NULL DEFAULT 'Divulapitiya',
  `Zone` text NOT NULL,
  `ForceNo` int(11) NOT NULL,
  `Village` text NOT NULL,
  `GNDomain` text NOT NULL,
  `SSOwnershipNo` text NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Successer` text NOT NULL,
  `HomeNo` text NOT NULL,
  `Banned` tinyint(1) NOT NULL DEFAULT 0,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssfundapplicants`
--

INSERT INTO `ssfundapplicants` (`SerialNo`, `District`, `DivSec`, `Zone`, `ForceNo`, `Village`, `GNDomain`, `SSOwnershipNo`, `Name`, `Address`, `Successer`, `HomeNo`, `Banned`, `Deleted`) VALUES
(6, 'Gampaha', 'Divulapitiya', 'asdf', 12345, 'asdf', 'asdfg', '12345', 'asdf', 'dfgh', 'sdfgh', 'sdfg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ssfundpayments`
--

CREATE TABLE `ssfundpayments` (
  `SerialNo` int(11) NOT NULL,
  `Date` date NOT NULL,
  `BeneficiaryNo` int(11) NOT NULL,
  `BenifName` text NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `NameAssured` text DEFAULT NULL,
  `GNDiv` text DEFAULT NULL,
  `Reason` enum('Death','Birth','Marrige','Hospitalization','Scholarship') NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssfundpayments`
--

INSERT INTO `ssfundpayments` (`SerialNo`, `Date`, `BeneficiaryNo`, `BenifName`, `Amount`, `NameAssured`, `GNDiv`, `Reason`, `Expired`) VALUES
(3, '2020-08-19', 9876543, 'kjhgf', '57654', 'kjh', 'uytr', 'Birth', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'officer1', 'Yasindu', 'Dilshan', 'officer1@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-09-04 23:07:24', 0),
(2, 'officer2', 'Yasindu', 'Dilshan', 'officer2@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-09-04 23:07:14', 0),
(3, 'officer3', '', '', 'officer3@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-09-04 15:50:00', 0),
(4, 'officer4', 'Kavinda', 'Dasanayake', 'officer4@gmail.com', 'a9993e364706816aba3e25717850c26c9cd0d89d', '2020-09-04 15:57:56', 0),
(5, 'officer5', 'Dulaj', 'Dasanayake', 'officer5@gmail.com', '37fa265330ad83eaa879efb1e2db6380896cf639', '2020-09-04 23:11:09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appreciationletter`
--
ALTER TABLE `appreciationletter`
  ADD PRIMARY KEY (`letter_index`);

--
-- Indexes for table `cbomemberdetailes`
--
ALTER TABLE `cbomemberdetailes`
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`),
  ADD KEY `fk_CBOMemDet_CBOrg_idx` (`CBORegNo`);

--
-- Indexes for table `communitybasedorganizations`
--
ALTER TABLE `communitybasedorganizations`
  ADD PRIMARY KEY (`RegNo`),
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`ID`);

--
-- Indexes for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `lottaryfundrecord`
--
ALTER TABLE `lottaryfundrecord`
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`ID`);

--
-- Indexes for table `personalfile`
--
ALTER TABLE `personalfile`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `salarydetails`
--
ALTER TABLE `salarydetails`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `sipdorascholarship`
--
ALTER TABLE `sipdorascholarship`
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- Indexes for table `ssfundapplicants`
--
ALTER TABLE `ssfundapplicants`
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`);

--
-- Indexes for table `ssfundpayments`
--
ALTER TABLE `ssfundpayments`
  ADD UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appreciationletter`
--
ALTER TABLE `appreciationletter`
  MODIFY `letter_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cbomemberdetailes`
--
ALTER TABLE `cbomemberdetailes`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `communitybasedorganizations`
--
ALTER TABLE `communitybasedorganizations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detailsofbenificiaries`
--
ALTER TABLE `detailsofbenificiaries`
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lottaryfundrecord`
--
ALTER TABLE `lottaryfundrecord`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personalfile`
--
ALTER TABLE `personalfile`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sipdorascholarship`
--
ALTER TABLE `sipdorascholarship`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ssfundapplicants`
--
ALTER TABLE `ssfundapplicants`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ssfundpayments`
--
ALTER TABLE `ssfundpayments`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cbomemberdetailes`
--
ALTER TABLE `cbomemberdetailes`
  ADD CONSTRAINT `fk_CBOMemDet_CBOrg` FOREIGN KEY (`CBORegNo`) REFERENCES `communitybasedorganizations` (`RegNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
