
-- --------------------------------------------------------

--
-- Table structure for table `MandatoryFundRequests`
--

CREATE TABLE `MandatoryFundRequests` (
  `SerialNo` int NOT NULL,
  `Date` date NOT NULL,
  `GNDomain` text NOT NULL,
  `BenefName` text NOT NULL,
  `AcceptedBy` text NOT NULL,
  `AppDate` date NOT NULL,
  `AppBank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
