CREATE DATABASE /*!32312 IF NOT EXISTS*/ `visitor_data` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `visitor_data`;

--
-- Table structure for table `waiver_data`
--

DROP TABLE IF EXISTS `waiver_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waiver_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `assent1` tinyint(1) NOT NULL,
  `assent2` tinyint(1) NOT NULL,
  `assent3` tinyint(1) NOT NULL,
  `assent4` tinyint(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ec_name` varchar(60) NOT NULL,
  `ec_phone` varchar(20) NOT NULL,
  `ec_relate` varchar(30) NOT NULL,
  `signature` mediumtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1816 DEFAULT CHARSET=utf8;

