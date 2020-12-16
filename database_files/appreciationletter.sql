-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 06:00 AM
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
(5, '232323734V', 'J.K.L. Piyadasa', '2020-12-08', 'promotion', 'No', '1/E/23'),
(6, '577234567V', 'J.K.L. Piyadasa', '2020-12-02', 'Service admiration', 'No', '2/B/2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appreciationletter`
--
ALTER TABLE `appreciationletter`
  ADD PRIMARY KEY (`letter_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appreciationletter`
--
ALTER TABLE `appreciationletter`
  MODIFY `letter_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
