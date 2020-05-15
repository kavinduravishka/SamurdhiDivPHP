-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 08:03 AM
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
(1, '', 'Mr.J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 2)', '2019-01-10', '1990-12-05', '2050-12-05', 2222222, '', 0),
(2, '', 'Mrs.L.Madurangi', 'Public Management Assistant', 'PMA(Class 3)', '2018-01-10', '1990-03-05', '2050-03-05', 3333333, '', 0),
(3, '123443215V', 'Mr. Rukmantha', 'abcd', 'abcd', '2020-04-03', '2020-04-03', '2020-04-03', 1234, '', 1),
(4, '', 'Mr. J.C.Wijethunga', 'Management Assistant', 'PMA', '2020-02-02', '1996-12-09', '2056-12-09', 2342342, '', 1),
(5, '', 'Mr.K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 3)', '2017-05-05', '1980-11-23', '2060-11-23', 1111111, '', 0),
(6, '123456785V', 'Mrs. D.Dharamsena', 'Clerk', 'PMA', '2020-05-13', '2020-04-28', '2020-05-06', 1234567, '', 0),
(7, '123123456V', 'Mr.Lalkantha', 'Samurdhi Developement Officer', 'BBB', '2020-05-20', '2020-05-12', '2020-05-13', 7657657, 'out', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalfile`
--
ALTER TABLE `personalfile`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalfile`
--
ALTER TABLE `personalfile`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
