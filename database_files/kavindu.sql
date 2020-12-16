
DROP TABLE IF EXISTS `CBOMemberDetailes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CBOMemberDetailes` (
  `SerialNo` int NOT NULL AUTO_INCREMENT,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  `Expired` tinyint(1) NOT NULL DEFAULT '0',
  `NIC` varchar(15) NOT NULL,
  `CBORegNo` char(12) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text NOT NULL,
  `Post` enum('President','Vice president','Secratary','Vice secratary','Treasurer','Internal auditor','Member') NOT NULL,
  `Telephone` varchar(12) DEFAULT NULL,
  UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`),
  KEY `fk_CboRegno_regno_idx` (`CBORegNo`),
  CONSTRAINT `fk_CboRegno_regno` FOREIGN KEY (`CBORegNo`) REFERENCES `CommunityBasedOrganizations` (`RegNo`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CBOMemberDetailes`
--

LOCK TABLES `CBOMemberDetailes` WRITE;
/*!40000 ALTER TABLE `CBOMemberDetailes` DISABLE KEYS */;
INSERT INTO `CBOMemberDetailes` VALUES (1,0,0,'653635744','454356CBO343','gfsdggfg','sfhfsdfsh\r\nsdhfdhfdh\r\nsdhdsfhs','President','2454424646'),(2,0,0,'266664325','454356CBO343','Dulaj','erwqtrgts\r\ndgergfgf\r\nmirigama','Vice president','425462643'),(3,0,0,'524665575','454356CBO343','Kavindu','45465\r\n26623636\r\nGampaha','Secratary','45643266'),(4,1,1,'983333333v','654321CBO321','kavindu','malwatta\r\nkalagedihena','President','0332243523'),(5,1,1,'987474252v','654321CBO321','dulaj','kotadeniyawa\r\nmeerigama','Secratary','0332244444'),(6,1,1,'9854354344v','654321CBO321','yasindu','batapotha\r\ngampaha','Vice president','0334544533'),(7,1,1,'9842324422v','654321CBO321','dhanuka','colombo','Treasurer','01122222222'),(8,1,1,'5454545245v','654321CBO321','unknown','unknown','Internal auditor','45454545245'),(9,1,1,'1243444241v','654321CBO321','Dulaj','kotodeniyawa\r\nmeerigama','President','431443141'),(10,1,1,'413435131v','654321CBO321','kavinda','wgffgq','Vice president','2542554235'),(11,1,1,'454325352v','654321CBO321','dasanayaka','fsgfsgasfgf','Secratary','542523453'),(12,1,1,'14344134v','654321CBO321','Kavindu','malwatta\r\nthihariya','Vice secratary','0334342412'),(13,1,1,'25455425v','654321CBO321','Ravishka','wrwqdfgs','Treasurer','4324512'),(14,0,0,'4144324234v','654321CBO321','y7azindu','batapotha','President','43234225'),(15,0,0,'76535355225v','434241CBO423','kamal sooriyaarachchi','32/31,\r\nEluwapitiya,\r\nVeyangodaa','Vice secratary','0332255555');
/*!40000 ALTER TABLE `CBOMemberDetailes` ENABLE KEYS */;
UNLOCK TABLES;

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
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CommunityBasedOrganizations`
--

LOCK TABLES `CommunityBasedOrganizations` WRITE;
/*!40000 ALTER TABLE `CommunityBasedOrganizations` DISABLE KEYS */;
INSERT INTO `CommunityBasedOrganizations` VALUES (1,0,'123456789010','malwatt CBO','333\nmalwatt','0332222222','ggfsggsg@gmail.com','malwatta','thihariya','123','attanagalla','gampaha',10,20,'2020-02-02','nittambuwa','134515451','2015-03-09',3242,'2020-02-02'),(2,0,'123456789011','malwatt CBO','333\nmalwatt','0332222222','ggfsggsg@gmail.com','malwatta','thihariya','123','attanagalla','gampaha',10,20,'2020-02-02','nittambuwa','134515451','2015-03-09',3242,'2020-02-02'),(3,0,'123456789012','malwatt CBO','333\nmalwatt','0332222222','ggfsggsg@gmail.com','malwatta','thihariya','123','attanagalla','gampaha',10,20,'2020-02-02','nittambuwa','134515451','2015-03-09',3242,'2020-02-02'),(4,0,'123456CBO789','fdasfjdll','igfdsgisjgisj','653776277','sfsdf@mail.com','fdgjfdig','iggsidgiu','oiggifdsoi','Divulapitiya','Gampaha',12,32,'2020-08-15','weqrtregtr','42546656','2020-08-02',100,'2020-08-19'),(20,0,'434241CBO423','Eluwapitiya CBO','Eluwanpitiya,\r\nVeyangoda','0332255555','eluwapitiyacbo@mail.com','Eluwapitiya','Eluwapitiya','1323','Divulapitiya','Gampaha',32,23,'2020-10-20','Eluwapitiya','432423434','2020-10-04',324,'2020-10-04'),(6,0,'454356CBO343','gfgsgergfdg','wetertgerw\r\nwegrewyhetw\r\newyewryheyewy\r\nwyy','25464326234','fggf@maql.com','fdgjfdig','trewtre','rewywrewy','Divulapitiya','Gampaha',12,10,'2020-08-13','wteryewy','yweyewtyewty','2020-08-05',65327,'2020-08-19'),(7,0,'654321CBO321','eqewfewqfg','gwergerg','432424','rwef@m.com','fweqfwf','rewgerg','gweg','Divulapitiya','Gampaha',34,43,'2020-09-17','fwfgggwg','42315','2020-09-17',431242,'2020-09-02'),(5,0,'987654CBO321','gsfgfsg','agfdgafsgfg,\r\nfagfsgfgfasg,a\r\ngagagfg','4356623662','gfgs@mail.com','gtaqgsdg','gsdhfh','gdsfhdh','Divulapitiya','Gampaha',33,43,'2020-08-10','efegfdsagsdf','5365474','2020-08-22',4324,'2020-08-19');
/*!40000 ALTER TABLE `CommunityBasedOrganizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LottaryFundRecord`
--

DROP TABLE IF EXISTS `LottaryFundRecord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `LottaryFundRecord` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NIC` varchar(13) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Address` text,
  `Date` date NOT NULL,
  UNIQUE KEY `SerialNo_UNIQUE` (`ID`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LottaryFundRecord`
--

LOCK TABLES `LottaryFundRecord` WRITE;
/*!40000 ALTER TABLE `LottaryFundRecord` DISABLE KEYS */;
INSERT INTO `LottaryFundRecord` VALUES (1,'123456789v','kavindu','thihariya','2020-08-01'),(2,'123456788v','dulaj','thihariya','2020-08-01'),(3,'123456787v','yasindu','thihariya','2020-08-01'),(4,'987654321v','Kavindu','malwatta','2020-08-03'),(5,'123456789v','Kavindu','thihariyq','2020-08-10'),(6,'123456789v','dfawggas','gawgawgsfdg','2020-07-30'),(7,'123456789v','etqwetweqtwq','qtwrtrwtrwt','2020-08-14'),(8,'123456789v','Kavindu','43231rr323','2020-08-21'),(9,'123456789','Kavindu','rtqwgwrgds','2020-08-14');
/*!40000 ALTER TABLE `LottaryFundRecord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MandatoryFundRequests`
--

DROP TABLE IF EXISTS `MandatoryFundRequests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MandatoryFundRequests` (
  `SerialNo` int NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  `Date` date NOT NULL,
  `GNDomain` text NOT NULL,
  `BenefName` text NOT NULL,
  `AcceptedBy` text NOT NULL,
  `AppDate` date NOT NULL,
  `AppBank` text NOT NULL
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MandatoryFundRequests`
--

LOCK TABLES `MandatoryFundRequests` WRITE;
/*!40000 ALTER TABLE `MandatoryFundRequests` DISABLE KEYS */;
INSERT INTO `MandatoryFundRequests` VALUES (24,0,'2020-08-07','yatigaha','kavindu','Yasindu','2020-08-21','yatigaha');
/*!40000 ALTER TABLE `MandatoryFundRequests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SSFAppFamMem`
--

DROP TABLE IF EXISTS `SSFAppFamMem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SSFAppFamMem` (
  `OwnershipNo` varchar(40) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  `Name` text NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `MaritialState` tinyint(1) NOT NULL,
  `BDay` date NOT NULL,
  `Age` int NOT NULL,
  `RelToBenif` varchar(30) NOT NULL,
  `Profession` varchar(30) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `Dead` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `OwnershipNo` (`OwnershipNo`,`Name`(10),`BDay`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SSFAppFamMem`
--

LOCK TABLES `SSFAppFamMem` WRITE;
/*!40000 ALTER TABLE `SSFAppFamMem` DISABLE KEYS */;
INSERT INTO `SSFAppFamMem` VALUES ('12346',0,'Geeshapathi Ekanayake','Male',1,'1986-01-12',34,'self','Self employee','86345469v',0),('12346',0,'Malaka Ekanayake','Male',0,'2008-01-23',12,'son','student','',0),('12346',0,'Sanduni Ekanayake','Female',1,'1988-11-22',32,'wife','','88736564v',0),('12346',0,'Kaveesha Ekanayake','Female',0,'2010-02-05',10,'daughter','student','',0),('12345',0,'Amarabandu Gunathilaka','Male',1,'1986-02-04',32,'self','Self employee','86344354v',0),('12345',0,'Sahan Gunathilaka','Male',0,'0208-02-05',12,'son','student','',0),('12345',0,'Sarada Gunathilaka','Female',1,'1988-02-05',32,'wife','','88536576v',0),('12345',0,'Sewumi Gunathilaka','Female',0,'2010-02-05',10,'daughter','student','',0),('12347',0,'Ravinath Kannangara','Male',1,'1986-01-12',34,'self','Self employee','83346989v',0),('12347',0,'Aloka Kannangara','Male',0,'2008-01-23',12,'son','student','',0),('12347',0,'Madavi Kannangara','Female',1,'1988-11-22',32,'wife','','88746768v',0),('12347',0,'Supuni Kannangara','Female',0,'2010-02-05',10,'daughter','student','',0),('12348',0,'Wanninayaka Kumarage','Male',1,'1986-03-06',32,'self','Self employee','86374573v',0),('12348',0,'Tharindu Kumarage','Male',0,'2008-02-05',12,'son','student','',0),('12348',0,'Sarani Kumarage','Female',1,'1988-02-05',32,'wife','','88584793v',0),('12348',0,'Pawani Kumarage','Female',0,'2010-02-05',10,'daughter','student','',0);
/*!40000 ALTER TABLE `SSFAppFamMem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SSFundApplicants`
--

DROP TABLE IF EXISTS `SSFundApplicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SSFundApplicants` (
  `SerialNo` int NOT NULL AUTO_INCREMENT,
  `District` varchar(10) NOT NULL DEFAULT 'Gampaha',
  `DivSec` varchar(20) NOT NULL DEFAULT 'Divulapitiya',
  `Zone` varchar(30) NOT NULL,
  `ForceNo` int NOT NULL,
  `Village` varchar(30) NOT NULL,
  `GNDomain` varchar(30) NOT NULL,
  `SSOwnershipNo` varchar(40) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` text NOT NULL,
  `Successer` varchar(200) NOT NULL,
  `HomeNo` varchar(8) NOT NULL,
  `Banned` tinyint(1) NOT NULL DEFAULT '0',
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`),
  UNIQUE KEY `SSOwnershipNo_UNIQUE` (`SSOwnershipNo`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SSFundApplicants`
--

LOCK TABLES `SSFundApplicants` WRITE;
/*!40000 ALTER TABLE `SSFundApplicants` DISABLE KEYS */;
INSERT INTO `SSFundApplicants` VALUES (1,'Gampaha','Divulapitiya','1234',12,'yatigaha','yatigaha north','12345','Amarabandu Gunathilaka','155/A,Malmawata,yatigaha','Sahan Gunathilaka','25',0,0),(2,'Gampaha','Divulapitiya','1234',12,'yatigaha','yatigaha north','12346','Geeshapathi Ekanayake','156/A,Malmawata,yatigaha','Malaka Ekanayake','26',0,0),(3,'Gampaha','Divulapitiya','1234',12,'yatigaha','yatigaha north','12347','Ravinath Kannangara','157/A,Malmawata,yatigaha','Aloka Kannangara','27',0,0),(4,'Gampaha','Divulapitiya','1234',12,'yatigaha','yatigaha north','12348','Wanninayaka Kumarage','158/A,Malmawata,yatigaha','Tharindu Kumarage','28',0,0);
/*!40000 ALTER TABLE `SSFundApplicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SSFundPayments`
--

DROP TABLE IF EXISTS `SSFundPayments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SSFundPayments` (
  `SerialNo` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `BeneficiaryNo` int NOT NULL,
  `BenifName` text NOT NULL,
  `Amount` decimal(10,0) NOT NULL,
  `NameAssured` text,
  `GNDiv` text,
  `Reason` enum('Death','Birth','Marrige','Hospitalization','Scholarship') NOT NULL,
  `Expired` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `SerialNo_UNIQUE` (`SerialNo`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SSFundPayments`
--

LOCK TABLES `SSFundPayments` WRITE;
/*!40000 ALTER TABLE `SSFundPayments` DISABLE KEYS */;
INSERT INTO `SSFundPayments` VALUES (1,'2020-08-04',4324,'namal',255255,'officer','yatigaha','Marrige',0),(2,'2020-08-26',34224,'sgewgljg',252345,'gdsfhdsghdh','sdfoghodhdsh','Marrige',0),(3,'2020-04-08',30393,'Mason Cain',68904,'Shea Sampson','Grand Rapids','Scholarship',0),(4,'2021-05-27',49505,'Basil Nieves',34152,'Sopoline Turner','Tyumen','Death',1),(5,'2021-03-16',99875,'Lane Berry',53568,'Nomlanga Mcpherson','Guaymas','Birth',1),(6,'2021-10-15',46591,'Zachary Wade',45337,'Christine Chavez','Gasp','Marrige',1),(7,'2021-11-13',84516,'Buckminster Anthony',27399,'Melyssa Rowland','Plato','Scholarship',0),(8,'2021-02-14',45597,'Kevin Frank',4478,'Kaye Tran','Cambridge Bay','Marrige',0),(9,'2020-02-10',36754,'Aristotle Burke',47772,'Ingrid Odom','Neder-Over-Heembeek','Death',1),(10,'2020-12-29',61030,'Hamish Carney',9209,'Scarlett Leach','Barasat','Scholarship',0),(11,'2021-06-02',36484,'Oren Gilmore',80962,'Maris Vazquez','Santa Vittoria in Matenano','Birth',1),(12,'2021-03-08',43220,'Kirk Gonzalez',75055,'Kylie Marquez','Saint-Pierre','Marrige',1),(13,'2021-11-24',68901,'Addison Wilkinson',74457,'Jillian Davenport','Bassano in Teverina','Scholarship',1),(14,'2021-03-06',21310,'Fitzgerald Harding',74065,'Alika Marks','Campotosto','Hospitalization',0),(15,'2021-07-23',90015,'Jordan Chen',64158,'Mia James','Bad Homburg v. d. Höhe','Death',0),(16,'2020-12-09',90382,'Yardley Avila',81465,'Brielle Adkins','Goutroux','Birth',1),(17,'2021-04-19',73327,'Hakeem Meyers',66814,'Keely Wilcox','Seattle','Death',1),(18,'2020-01-21',72073,'Chandler Hopper',39644,'Adara Case','Forgaria nel Friuli','Scholarship',0),(19,'2020-04-15',49916,'Chester Jordan',8566,'Fay Rasmussen','Molino dei Torti','Scholarship',1),(20,'2021-04-12',39588,'Tanner Blankenship',54937,'Dacey Hansen','Calvi Risorta','Hospitalization',0),(21,'2020-03-10',48104,'Allen Gonzales',95031,'Sydney Maynard','Bangalore','Marrige',1),(22,'2020-04-17',27670,'Cedric Harrington',38058,'Erin West','Vergemoli','Death',1),(23,'2020-07-17',77026,'Ferris Gordon',80135,'Joy Becker','Hattiesburg','Scholarship',0),(24,'2021-06-15',23192,'Justin Stanton',72698,'Mia Dudley','Yeotmal','Death',0),(25,'2021-05-16',84411,'Hashim Gould',19898,'Cameran Nieves','Roccabruna','Marrige',0),(26,'2020-02-01',36651,'Uriah Wong',36637,'Sara Hurst','Toba Tek Singh','Death',0),(27,'2020-03-02',12388,'Hall Burch',20230,'Nomlanga Blanchard','Rock Springs','Death',0),(28,'2020-10-19',61220,'Abbot Mayo',93919,'Leilani Mcmillan','Badajoz','Scholarship',0),(29,'2021-07-31',10771,'Aidan Madden',95797,'Rylee Orr','Newport','Death',1),(30,'2020-02-07',51388,'Matthew Weaver',42027,'Rhea Mullen','Buckingham','Marrige',0),(31,'2020-01-02',19361,'Kuame Frederick',54897,'Geraldine Vang','Canora','Scholarship',1),(32,'2020-05-23',78297,'Guy Hensley',58426,'Aspen Grant','Cereté','Birth',0),(33,'2020-09-28',91380,'Ryan Hurst',36546,'Mira Stark','Gressan','Birth',0),(34,'2021-06-08',90875,'Nissim Dunlap',46952,'Lacy Potter','Pettoranello del Molise','Hospitalization',0),(35,'2021-10-18',49360,'Chaim Peters',14000,'Fallon Valentine','Basingstoke','Death',1),(36,'2021-10-10',19085,'Kenneth Mooney',18162,'Amity Acosta','Wha Ti','Scholarship',1),(37,'2020-06-16',62796,'Keith Byers',81193,'Claudia Figueroa','Pike Creek','Death',0),(38,'2020-08-13',80816,'Oleg Wiggins',25147,'Brielle Hancock','Solihull','Death',0),(39,'2020-06-26',53308,'Edan Summers',29614,'Tamara Love','Aprelevka','Scholarship',1),(40,'2020-02-28',67844,'Laith Goodman',79382,'Jocelyn Bell','Champlain','Hospitalization',0),(41,'2020-03-18',90143,'Valentine Oneal',65461,'Xyla Holcomb','White Rock','Marrige',1),(42,'2021-07-09',60592,'Branden Kramer',59821,'Cathleen Reese','Pali','Marrige',1),(43,'2020-06-28',54502,'Declan Ellison',67883,'Leila Haynes','Hof','Hospitalization',0),(44,'2021-07-14',55505,'Neville Holmes',91667,'Isabella Douglas','Martigues','Hospitalization',0),(45,'2021-06-06',52258,'Herrod Mccarty',75755,'Taylor Greene','Ipís','Marrige',1),(46,'2020-07-17',61521,'Kenneth Shaw',14408,'Roary Clark','Vysokovsk','Hospitalization',1),(47,'2021-11-15',49360,'Ahmed Mckinney',87419,'Paula Yang','Rochester','Death',0),(48,'2021-01-06',19601,'Finn Meyer',96904,'Venus Beck','Hattiesburg','Birth',1),(49,'2021-02-28',15276,'Sawyer Church',28640,'Quemby Espinoza','Bolzano Vicentino','Hospitalization',0),(50,'2021-11-02',80171,'Tyler Zimmerman',2843,'Imani Oneil','Snezhinsk','Death',0),(51,'2021-08-11',43111,'Tanek Daugherty',57944,'Scarlett Cole','Banff','Hospitalization',1),(52,'2021-02-20',18326,'Isaac Charles',28628,'Genevieve Stewart','Reading','Marrige',0),(53,'2020-10-03',89777,'Mohammad Alexander',93380,'April Austin','Thunder Bay','Death',1),(54,'2021-02-22',80879,'Charles Villarreal',55775,'Uta Acosta','Kirov','Scholarship',1),(55,'2021-05-23',11565,'Honorato Ewing',94567,'Urielle Mays','Tumaco','Birth',0),(56,'2021-02-03',78005,'Igor Kemp',24418,'Avye Bates','Spiere','Hospitalization',0),(57,'2020-07-21',62744,'Zachary Barker',38517,'Bo Bass','Selva di Cadore','Marrige',0),(58,'2021-05-22',10325,'Drew Price',72565,'Naomi Oneill','Rampur','Death',1),(59,'2021-11-09',54630,'Orlando Roth',97385,'Ava Schneider','Saint-Denis','Death',1),(60,'2021-10-17',35169,'Brian Roman',75003,'Moana Donaldson','Massimino','Birth',0),(61,'2020-05-18',82679,'Zachery Hardy',83139,'Audrey Horne','Medicine Hat','Marrige',1),(62,'2020-10-01',70749,'Buckminster Barry',67748,'Idola Beard','Castel di Tora','Hospitalization',1),(63,'2021-05-03',49921,'Leroy Knowles',84665,'Ori Talley','Northallerton','Hospitalization',0),(64,'2020-06-27',87194,'Abel Mendez',71413,'Raya Weeks','Emden','Marrige',1),(65,'2020-04-03',64009,'Kirk Mccarty',32858,'Cheryl Hoffman','Bourlers','Marrige',0),(66,'2020-08-28',23211,'Malik Fields',4182,'Anjolie Dickerson','Cambrai','Hospitalization',0),(67,'2021-02-14',63864,'Quentin Snyder',99006,'Madaline Mccarty','Lozzo Atestino','Scholarship',0),(68,'2021-08-14',12718,'Cole Duffy',40707,'Nina Booth','Morpeth','Birth',0),(69,'2021-11-01',28965,'Nathaniel Dawson',49816,'Kaye Reed','Yurzhnouralsk','Marrige',0),(70,'2021-09-17',61578,'Wesley Curry',47726,'Kathleen Buck','Schwalbach','Scholarship',0),(71,'2020-09-18',83847,'Callum Byrd',77585,'Emi Weeks','Sant\'Angelo a Fasanella','Marrige',0),(72,'2020-08-28',42153,'Eagan Fischer',39561,'Faith Norman','Kubinka','Marrige',0),(73,'2021-10-09',18614,'Ian Morales',71054,'Iris Farrell','Llandrindod Wells','Birth',1),(74,'2021-02-15',52571,'Finn Mccormick',47623,'Leilani Hardin','Kimberly','Hospitalization',0),(75,'2021-11-26',61496,'Amal Hardy',44076,'Nita Downs','Osogbo','Death',1),(76,'2021-08-05',26738,'Curran Fuentes',83257,'Mariam Neal','Langford','Birth',0),(77,'2020-03-17',18726,'Jack Gregory',2817,'Quin Montoya','Isnes','Marrige',1),(78,'2020-08-02',69723,'Carter Pugh',28987,'Gail Irwin','Sint-Pieters-Woluwe','Hospitalization',0),(79,'2020-06-24',11680,'Rajah Jennings',63939,'Kelly Guthrie','Watford','Death',1),(80,'2021-11-02',88210,'Lucius Barnes',82769,'Janna Gregory','San Nicolás','Death',1),(81,'2021-07-30',82964,'Hall Fuller',9993,'Kathleen Hebert','Gore','Hospitalization',1),(82,'2020-05-21',57904,'Ferdinand Williamson',79824,'Shay Carney','Navadwip','Death',1),(83,'2021-08-11',87642,'Hayden Love',81070,'Darryl English','Manavgat','Scholarship',1),(84,'2020-01-22',94615,'Martin Duke',42557,'Kai Thompson','Marano Lagunare','Hospitalization',1),(85,'2021-11-26',75170,'Donovan Barker',45692,'Gail Booth','Oudegem','Hospitalization',0),(86,'2020-04-19',21542,'Thor Dominguez',57985,'Rachel Ortiz','Miramichi','Death',0),(87,'2021-07-03',11581,'Damon Clarke',89466,'Paloma Melendez','Wiesbaden','Birth',1),(88,'2021-06-05',89830,'Edward Paul',2667,'Clare Holt','Meerle','Marrige',1),(89,'2021-03-19',18937,'Sawyer Carver',96251,'Hyacinth Rowland','Goyang','Hospitalization',1),(90,'2020-12-28',11951,'Harlan Wilkinson',61967,'Kiara Wilkinson','Jauchelette','Scholarship',1),(91,'2021-08-20',60952,'Daquan Moore',2018,'Irma Mason','Kalisz','Death',1),(92,'2021-06-14',76358,'Giacomo Fields',17575,'Althea Parrish','Salem','Birth',0),(93,'2021-09-22',19558,'Micah Cantu',50275,'Tatum Knapp','Coalhurst','Death',1),(94,'2020-12-26',96536,'Avram Gregory',65019,'Buffy Pitts','Florencia','Death',0),(95,'2020-02-13',58668,'Scott Emerson',51230,'September Knapp','Murree','Scholarship',0),(96,'2019-12-14',55469,'Byron Pacheco',5327,'Lara Boone','Owensboro','Scholarship',1),(97,'2021-01-28',90119,'Gareth Dale',13889,'Lillian Combs','Newbury','Birth',0),(98,'2020-03-31',94146,'Edward Todd',21698,'Keiko Hodge','Le Cannet','Hospitalization',1),(99,'2021-03-13',17147,'Garrison Garcia',96277,'Alma Bright','Torreón','Birth',1),(100,'2021-07-06',43265,'Castor Phelps',24914,'Moana Knapp','Olmué','Scholarship',1),(101,'2020-07-16',17855,'Vincent Faulkner',31426,'Medge Bennett','Zaragoza','Hospitalization',0),(102,'2020-11-11',79580,'Ryder Holcomb',80834,'Adria Everett','Calais','Scholarship',0);
/*!40000 ALTER TABLE `SSFundPayments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SipdoraScholarship`
--

DROP TABLE IF EXISTS `SipdoraScholarship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `SipdoraScholarship` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Deleted` tinyint(1) NOT NULL DEFAULT '0',
  `NIC` varchar(15) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Ethnicity` enum('Sinhala','Tamil','Muslim','Burger') NOT NULL,
  `Guardian` varchar(300) NOT NULL,
  `SpeciallyAbled` enum('YES','NO') NOT NULL,
  `Stream` enum('Biology','Maths','ICT','Commerce','Art','Technology','Agri') NOT NULL,
  `School` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `Bank` varchar(150) NOT NULL,
  `SisurakaAcNo` varchar(10) NOT NULL,
  `PeriodID` int NOT NULL,
  UNIQUE KEY `ID_UNIQUE` (`ID`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SipdoraScholarship`
--

LOCK TABLES `SipdoraScholarship` WRITE;
/*!40000 ALTER TABLE `SipdoraScholarship` DISABLE KEYS */;
INSERT INTO `SipdoraScholarship` VALUES (2,0,'983456789v','Kavindu','Male','Sinhala','nimal','YES','Biology','bandaraneyaka college','yakkala','gampaha','154616',2),(3,0,'985556677v','Sirimal Bandara','Male','Sinhala','Rupasiri Bandara','NO','Biology','Kirindivela Secondry college','115/2\r\nmal mawatha\r\nKirindivela','Kirindiwela BOC','124455',3),(4,0,'992434252v','Samar Galagedara','Male','Sinhala','Namal Galagedara','NO','Maths','Bandaraneyaka college','323/3,seewali mawatha,yatigaha','Kirindiwela BOC','545455',3),(5,0,'975234542v','Nilmi Fernando','Female','Sinhala','Kamal Fernando','NO','Art','Holly Cross College','42/3,dola para,Yatigaha','Kirindiwela BOC','653654',3),(6,0,'984354543v','Tharindu  Sirisena','Male','Sinhala','Nimal Sirisena','NO','Maths','Bandaraneyake college','242/2,batapotha','gampaha boc','234325',4),(7,0,'974523442v','Gihani pathirana','Female','Sinhala','Saman Pathirama','NO','Biology','Rathnawali college','423/4,Bataptha','gampaha boc','545454',4),(8,0,'980978698v','Sawumika Dharmasiri','Male','Sinhala','Ruwan Dharmasiri','NO','Maths','Mirigama central','55/2,Batapotha','Divulapitiya BOC','563453',3),(9,0,'971333240v','Janaka Siril','Male','Sinhala','Surendra Siril','NO','Maths','Bandaranayeke college','432/A,Divulapitiya','Divulapitiya BOC','986960',3),(10,0,'982466414v','Kamal Addaraarachchi','Male','Sinhala','Sunil AAddaraarachchi','NO','Maths','Bandaraneyake college','43/S,Batapotha','Divulapitiya BOC','253466',3),(11,0,'425456731v','Ruwan Batapotha','Female','Sinhala','Namal Batapothsa','NO','Biology','Mirigama central','423/24,Divulapitiya','Divulapitiya BOC','265725',3);
/*!40000 ALTER TABLE `SipdoraScholarship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Support_SipdoraScholar_Period`
--

DROP TABLE IF EXISTS `Support_SipdoraScholar_Period`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Support_SipdoraScholar_Period` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PeriodID` int NOT NULL,
  `Period` varchar(10) NOT NULL,
  `From` varchar(4) NOT NULL,
  `To` varchar(4) NOT NULL,
  PRIMARY KEY (`PeriodID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Support_SipdoraScholar_Period`
--

LOCK TABLES `Support_SipdoraScholar_Period` WRITE;
/*!40000 ALTER TABLE `Support_SipdoraScholar_Period` DISABLE KEYS */;
/*!40000 ALTER TABLE `Support_SipdoraScholar_Period` ENABLE KEYS */;
UNLOCK TABLES;