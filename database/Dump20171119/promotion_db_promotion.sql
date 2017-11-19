-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: promotion_db
-- ------------------------------------------------------
-- Server version	5.7.20-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotion` (
  `PRO_ID` int(5) NOT NULL,
  `PRO_NAME` varchar(45) NOT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `PRO_STARTDATE` date NOT NULL,
  `PRO_ENDDATE` date NOT NULL,
  `PRO_IMG` blob,
  `SHOP_ID` int(5) NOT NULL,
  `C_ID` int(5) NOT NULL,
  PRIMARY KEY (`PRO_ID`),
  KEY `SHOP_ID_idx` (`SHOP_ID`),
  KEY `C_ID_idx` (`C_ID`),
  CONSTRAINT `C_ID` FOREIGN KEY (`C_ID`) REFERENCES `category` (`C_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `SHOP_ID` FOREIGN KEY (`SHOP_ID`) REFERENCES `shop` (`SHOP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotion`
--

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
INSERT INTO `promotion` VALUES (10000,'JSteak double set discount 30%','รับส่วนลดเมื่อสั่งซื้อชุด double set ลดราคา30% โปรดูรายการที่ร่วมสิทธิ','2560-11-24','2560-11-30',NULL,10000,1),(10001,'Kitty Cat Café BUY 1 FREE 1','สิทธิพิเศษสำหรับลูกค้า Samsung Galaxy Jรับสิทธิ์ ซื้อซื้อเครื่องดื่มที่ Kitty Cat Café 1 ฟรี 1!  มี 3เมนูใหเลือก 1. ช็อกโกแลตเย็น \n2. กาแฟเย็นคาปูชิโน \n3. กาแฟเย็นมอคคา \n ','2560-11-11','2560-12-11',NULL,10002,2),(10002,'The Big Bucket','ใหม่!!! พบกับ “The Big Bucket” มันชกิ้น 36 ชิ้นเพียง 249 บาท ที่ Mr.Joe','2560-11-20','2560-12-20',NULL,10001,2),(10003,'BUY 1 FREE 1 !!!','โปรโมชั่นดีๆจากKitty Cat Caféกลับมาอีกแล้วค้า เครื่องดื่มเย็นหรือปั่นทุกรายการ ซื้อ 1 แถม 1','2560-12-01','2560-12-31',NULL,10002,2);
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-19 17:12:05
