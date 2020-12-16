-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:58 AM
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
(1, '123456785V', 'D.Dharamsena', 'Clerk', 'DDD', '2020-05-13', '2020-04-28', '2020-05-06', 1234567, 'in', 0),
(2, '123123456V', 'Lalkantha', 'Samurdhi Developement Officer', 'SDO', '2020-05-20', '2020-05-12', '2020-05-13', 7657657, 'out', 0),
(3, '232323234V', 'Alankulama', 'Public Management Assistant', 'PMA(Class 3)', '2020-04-29', '2020-05-05', '2020-05-20', 2343455, 'in', 0),
(4, '123456789V', 'L.Madurangi', 'Public Management Assistant', 'PMA(Class 3)', '2018-01-10', '1990-03-05', '2050-03-05', 3333377, 'in', 0),
(5, '232323734V', 'K.D.Hasaranaga', 'Public Management Assistant', 'PMA(Class 1)', '2020-04-22', '2020-05-03', '2020-05-29', 2343477, 'in', 0),
(6, '123456787V', 'K.K.Amarasinghe', 'Public Management Assistant', 'PMA(Class 2)', '2017-05-05', '1980-11-23', '2060-11-23', 1111122, 'in', 0),
(7, '567234567V', 'J.Kanuradasa', 'Public Management Assistant', 'PMA(Class 3)', '2019-01-10', '1990-12-05', '2050-12-05', 2222333, 'in', 0),
(25, '577234567V', 'J.K.L. Piyadasa', 'Samurdhi Developement Officer', 'PDO', '2019-11-05', '1988-12-13', '2021-01-20', 8657657, 'in', 0),
(26, '117234567V', 'A.N. Wijethilaka', 'Samurdhi Developement Officer', 'SDO', '2020-12-01', '2020-12-03', '2020-12-17', 7657651, 'out', 0),
(27, '567888567V', 'D.D. Rathnayake', 'Samurdhi Developement Officer', 'SDO', '2020-12-25', '2020-12-02', '2020-12-11', 7659957, 'out', 0),
(28, '997234567V', 'R.M. Wijeweera', 'Samurdhi Developement Officer', 'SDO', '2020-12-16', '2020-12-02', '2020-12-10', 9997657, 'out', 0),
(29, '897234567V', 'I.J.K. Bandara', 'Samurdhi Developement Officer', 'SDO', '2020-12-09', '2020-12-03', '2020-12-04', 7657111, 'out', 0),
(30, '867834567V', 'Y.N. Dilshan', 'Public Management Assistant', 'PMA(Class 3)', '2020-12-01', '2020-12-20', '2030-12-31', 7659887, 'in', 0),
(31, '567333567V', 'U.D. Manel', 'Samurdhi Developement Officer', 'SDO', '2020-12-03', '2020-11-30', '2020-12-13', 9877657, 'out', 0),
(32, '859234567V', 'C.K. Vidumina', 'Public Management Assistant', 'PMA(Class 2)', '2020-12-09', '2020-12-03', '2020-12-18', 9957625, 'in', 0),
(33, '337234567V', 'R.C.Kamala', 'Samurdhi Developement Officer', 'SDO', '2020-12-08', '2020-11-30', '2020-12-01', 234566, 'in', 0),
(34, '987878589V', 'T.M.Nirmani', 'Samurdhi Developement Officer', 'SDO', '2020-12-08', '2020-12-09', '2020-12-01', 898988, 'out', 0);

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
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
