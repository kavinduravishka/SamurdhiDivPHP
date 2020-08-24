-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: SamurdhiDivision
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CommunityBasedOrganizations`
--

DROP TABLE IF EXISTS `CommunityBasedOrganizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CommunityBasedOrganizations` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Expired` tinyint(1) NOT NULL DEFAULT '0',
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
  `NoOfMemPrev` int NOT NULL,
  `NoOfMemNew` int NOT NULL,
  `AnnualMeetingDate` date NOT NULL,
  `BankName` varchar(50) NOT NULL,
  `AccountNo` varchar(50) NOT NULL,
  `AccountOpenDate` date DEFAULT NULL,
  `Balance` decimal(10,0) NOT NULL,
  `RenewedDate` date NOT NULL,
  PRIMARY KEY (`RegNo`),
  UNIQUE KEY `SerialNo_UNIQUE` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-25  0:08:55
