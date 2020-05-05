
-- --------------------------------------------------------

--
-- Table structure for table `CBOMemberDetailes`
--

CREATE TABLE `CBOMemberDetailes` (
  `CBORegNo` char(12) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Post` enum('Presidet','Vice president','Secratary','Vice secratary','Treasurer','Internal auditor','Member') NOT NULL,
  `Telephone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `NIC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
