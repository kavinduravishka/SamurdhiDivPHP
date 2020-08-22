-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 01:53 PM
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
(1, 'abcd', 'abcd', 'nsb', '123456789', 12000, 1000, 1000, 1000, 200, 100, 300, 100, 100, 100, 14100, 0),
(2, 'aakr', 'efgh', 'peoples', '987654', 13000, 1000, 1500, 2500, 560, 200, 350, 123, 2500, 1234, 13033, 1),
(5, 'Mr.Kodithuwakku', 'PDA', 'boc', '1234234', 56000, 8900, 890, 8765, 890, 765, 456, 4556, 456, 667, 66765, 0),
(6, 'Mrs. Amayangi', 'PDA', 'boc', '3456545', 56787, 2345, 2345, 2345, 234, 2345, 2345, 234, 523, 45, 58096, 0),
(7, 'Mr.Kamal', 'Management Assistant', 'nsb', '12345678901', 23777.9, 12234, 123, 123, 123, 345, 345, 34, 534, 56, 34820.9, 0),
(22, 'hbjnj', 'fjngj', 'peoples', '9876543', 87654, 98765, 98765, 987, 876, 876, 9, 87, 9876, 98, 274349, 1),
(987654, 'kavindu', 'ppp', 'nsb', '9898987', 30000, 2000, 2500, 3000, 1234, 500, 450, 345, 345, 125, 34501, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salarydetails`
--
ALTER TABLE `salarydetails`
  ADD PRIMARY KEY (`emp_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
