-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 06:01 AM
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
(10101, 'J.Kanuradasa', 'Public Management Assistant', 'peoples', '898987', 25000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 44070, 0),
(11111, 'D.Dharamsena', 'Clerk', 'nsb', '589558', 25000, 12000, 5000, 2500, 250, 350, 280, 350, 4000, 1200, 38070, 0),
(12121, 'A.N. Wijethilaka', 'Samurdhi Developement Officer', 'boc', '89845', 25000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 44070, 0),
(22222, 'K.D.Hasaranaga', 'Public Management Assistant', 'boc', '585858', 25000, 2000, 2500, 2500, 250, 200, 280, 234, 234, 200, 30602, 0),
(33333, 'U.D. Manel', 'Samurdhi Developement Officer', 'nsb', '585858', 25000, 12000, 5000, 3000, 250, 350, 280, 565, 4000, 1200, 38355, 0),
(44444, 'Y.N. Dilshan', 'Public Management Assistant', 'peoples', '898989', 20000, 12000, 5000, 2500, 250, 350, 280, 350, 4000, 1200, 33070, 0),
(55555, 'I.J.K. Bandara', 'Samurdhi Developement Officer', 'boc', '858878', 30000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 49070, 0),
(66666, 'R.M. Wijeweera', 'Samurdhi Developement Officer', 'nsb', '363636', 25000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 44070, 0),
(77777, 'D.D. Rathnayake', 'Samurdhi Developement Officer', 'nsb', '585878', 56000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 75070, 0),
(88888, 'K.K.Amarasinghe', 'Public Management Assistant', 'nsb', '987899', 23000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 1200, 42070, 0),
(99999, 'Lalkantha', 'Samurdhi Developement Officer', 'nsb', '787878', 25000, 12000, 5000, 8500, 250, 350, 280, 350, 4000, 125, 45145, 0);

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
