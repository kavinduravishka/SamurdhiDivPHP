-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 01:52 PM
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
  MODIFY `letter_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
