
-- --------------------------------------------------------

--
-- Table structure for table `SSFundPayments`
--

CREATE TABLE `SSFundPayments` (
  `Date` date NOT NULL,
  `SerialNo` int NOT NULL,
  `BeneficiaryNo` int NOT NULL,
  `BenifName` text NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `NameAssured` text,
  `GNDiv` text,
  `Reason` enum('Death','Birth','Marrige','Hospitalization','Scholarship') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
