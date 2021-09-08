-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:46 PM
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
-- Database: `samurdhidivision`
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
(1, 'Divulapitiya', 'Koongodamulla', 'Koongodamulla-East', '12-56-75', 'Ravindu Gamage', '234/5, Dvilapitiya', '678987654345', 3, '777-000-666', 1320, '2020-02-20', 0),
(2, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '12-12-11', 'Akila Niroshan', '244/5,Batapotha,Madelgamuwa,Gampaha.', '323123213123', 2, '777-000-999', 420, '2020-08-13', 1),
(3, 'Divulapitiya', 'Koongodamulla', 'Koongodamulla-South', '12-56-75', 'Charitha Dissanayake', '244/5, Divulapitiya', '213213213123', 2, '777-000-990', 1320, '2020-07-09', 0),
(4, 'Divulapitiya', 'Yatigaha', '46A-Pahala-Madithiyawala', '12-12-11', 'Dulaj Kavinda', '434/5, Divulapitiya', '213213123123', 2, '777-000-995', 1320, '2019-08-22', 0),
(6, 'Divulapitiya', 'Badalgama', 'Godigamuwa-West', '12-12-11', 'Kavindu Adikari', '123/7, Divulapitiya', '127798765434', 4, '777-000-900', 2120, '2020-05-19', 0),
(7, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '15-14-12', 'Lakshan Senanayake', '122/4, Divulapitiya.', '123123123123', 5, '777-000-994', 1220, '2020-07-09', 0),
(73, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '12-12-14', 'Kavindu Madushan', '666/4, Divulapitiya', '409876543456', 2, '777-000-900', 1220, '2020-08-07', 0),
(74, 'Divulapitiya', 'Katuwelgama', 'Dagonna-East', '15-14-12', 'Tharaka Dissanayake', '324/4, Divlapitiya', '767674345645', 3, '777-444-994', 1320, '2020-12-04', 0),
(75, 'Divulapitiya', 'Divulapitiya', 'Bomugammana-South', '12-12-14', 'Sagara Hewage', '343/5, Naivala.', '898989874773', 5, '777-000-331', 1320, '2019-10-23', 0),
(76, 'Divulapitiya', 'Kotadeniyawa', 'Poragoda-South', '12-12-11', 'Chaminda Priyadarshana', '234/4, Naivala.', '859685965060', 3, '777-000-441', 1320, '2020-07-30', 0),
(77, 'Divulapitiya', 'Welangana', 'Kalumada', '14-15-16', 'Roneth Hemsara', '343/1, Naivala', '243467890777', 2, '777-888-888', 1220, '2020-07-24', 0),
(78, 'Divulapitiya', 'Yatigaha', '47-Hangawaththa', '12-56-75', 'Ruwan Dharshana', '555/7, Divulapitiya', '787685785785', 4, '777-000-890', 1320, '2020-02-04', 0),
(79, 'Divulapitiya', 'Yatigaha', '41-Paranahalpe', '12-12-11', 'Charitha Dissanayake', '248/5,Batapotha,Madelgamuwa,Gampaha.', '13213213V', 4, '999-999-991', 420, '2021-02-18', 1);

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
  MODIFY `Serial_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
