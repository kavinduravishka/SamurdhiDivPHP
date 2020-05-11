
-- --------------------------------------------------------

--
-- Table structure for table `CommunityBasedOrganizations`
--

CREATE TABLE `CommunityBasedOrganizations` (
  `RegNo` char(12) NOT NULL,
  `DistSecNo` char(2) NOT NULL,
  `DivSecNo` char(2) NOT NULL,
  `ZoneNo` char(2) NOT NULL,
  `SequenceNo` char(3) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Telephone` varchar(12) NOT NULL,
  `EMail` text NOT NULL,
  `Village` text NOT NULL,
  `GNDomain` text NOT NULL,
  `Zone` text NOT NULL,
  `DivisionalSec` char(12) NOT NULL DEFAULT 'Divulapitiya',
  `DistrictSec` char(7) NOT NULL DEFAULT 'Gampaha',
  `NoOfMemPrev` int NOT NULL,
  `NoOfMemNew` int NOT NULL,
  `AnnualMeetingDate` date DEFAULT NULL,
  `BankName` text NOT NULL,
  `AccountNo` text NOT NULL,
  `AccountOpenDate` date DEFAULT NULL,
  `Balance` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
