-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 08:12 PM
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
-- Table structure for table `mandatoryfundrequests`
--
DROP TABLE IF EXISTS `mandatoryfundrequests`;
CREATE TABLE `mandatoryfundrequests` (
  `SerialNo` int(11) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `Date` date NOT NULL,
  `GNDomain` text NOT NULL,
  `BenefName` text NOT NULL,
  `AcceptedBy` text NOT NULL,
  `AppDate` date NOT NULL,
  `AppBank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mandatoryfundrequests`
--

INSERT INTO `mandatoryfundrequests` (`SerialNo`, `Deleted`, `Date`, `GNDomain`, `BenefName`, `AcceptedBy`, `AppDate`, `AppBank`) VALUES
(21, 0, '2020-11-05', 'Yatigaha', 'Kavindu', 'Yasindu', '2020-11-18', 'Yatigaha'),
(22, 0, '2020-11-11', 'Welangana', 'Roneth', 'Yasindu', '2020-11-20', 'Welangana'),
(27, 0, '2020-11-14', 'Yatigaha', 'Lakshan', 'Yasindu', '2020-11-29', 'Yatigaha'),
(18, 0, '2020-11-02', 'Yatigaha', 'Ruwan', 'Yasindu', '2020-11-17', 'Yatigaha'),
(21, 0, '2020-11-18', 'Yatigaha', 'Charitha', 'Yasindu', '2020-11-24', 'Yatigaha'),
(28, 0, '2020-11-15', 'Kotadeniyawa', 'Chamindu', 'Yasindu', '2020-11-26', 'Kotadeniyawa'),
(28, 0, '2020-11-18', 'Divulapitiya', 'Sagara', 'Yasindu', '2020-11-29', 'Divulapitiya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
