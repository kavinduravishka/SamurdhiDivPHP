-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 08:01 PM
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
-- Database: `projectdb`
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
  `w_op_number` int(7) NOT NULL,
  `member_type` varchar(3) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalfile`
--

INSERT INTO `personalfile` (`member_id`, `nic_number`, `name`, `designation`, `service`, `date_appointed`, `date_of_birth`, `date_of_pension`, `w_op_number`, `member_type`, `is_deleted`) VALUES
(1, '123456782V', 'Mr.J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 2)', '2019-01-10', '1990-12-05', '2050-12-05', 2222222, 'in', 0),
(2, '123456781V', 'Mrs.L.Madurangi', 'Public Management Assistant', 'PMA(Class 3)', '2018-01-10', '1990-03-05', '2050-03-05', 3338888, 'in', 1),
(3, '123456784V', 'Mr. abcd', 'Samurdhi Manager', 'PMA(Class 2)', '2020-04-03', '2020-04-03', '2020-04-03', 1234567, 'in', 1),
(4, '123456783V', 'Mr. J.C.Wijethunga', 'Samudhi Developement Officer', 'PMA', '2020-02-02', '1996-12-09', '2056-12-09', 2342342, 'in', 0),
(5, '123456789V', 'Mr.K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 3)', '2017-05-05', '1980-11-23', '2060-11-23', 1111178, 'in', 0),
(6, '123456785V', 'Mrs. D.Dharamsena', 'Clerk', 'PMA', '2020-05-13', '2020-04-28', '2020-05-06', 1234569, 'out', 1),
(7, '123456744V', 'Mr. Wijesekara', 'Samurdhi Manager', 'Samurdhi Developement Officer( Class 1)', '2018-05-16', '2000-02-12', '2060-01-12', 5656998, 'out', 0),
(8, '987654321V', 'Mr.Lal', 'Clerk', 'PPP', '2020-04-30', '2020-05-06', '2020-05-19', 7654321, 'in', 1),
(9, '9878767654V', 'Mr.Gunasekara', 'Samurdhi Developement Officer', 'Samurdhi Developement Officer( Class 1)', '2020-04-29', '2020-05-13', '2020-05-14', 3452342, 'out', 0);

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
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
