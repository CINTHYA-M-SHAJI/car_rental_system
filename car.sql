-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: car_rental
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `bookid` int(4) NOT NULL AUTO_INCREMENT,
  `carid` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `f_date` date NOT NULL,
  `t_date` date NOT NULL,
  `status` varchar(150) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (2,28,34,'2022-07-19','2022-07-19','booked'),(35,28,41,'2022-07-26','2022-07-27','booked'),(38,28,53,'2022-07-26','2022-07-26','cancelled'),(41,28,55,'2022-07-27','2022-07-27','booked');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car` (
  `carid` int(4) NOT NULL AUTO_INCREMENT,
  `brand` varchar(200) NOT NULL,
  `model` varchar(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `seat` varchar(150) NOT NULL,
  `fuel` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `stock` varchar(150) NOT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car`
--

LOCK TABLES `car` WRITE;
/*!40000 ALTER TABLE `car` DISABLE KEYS */;
INSERT INTO `car` VALUES (27,'Maruti Suzuki','Alto800','hatchback','4','Petrol','20121010073232_Autocar-India_Maruti-Alto-800-Review-Photos.jpg','2500','7'),(28,'Maruti Suzuki','Waganor','SUV','5','Petrol','wagon-r-2022-exterior-right-front-three-quarter.webp','2000','12'),(29,'Chevrolet ','Volt','sedan','5','Petrol','2019_chevrolet_volt_4dr-hatchback_lt_fq_oem_1_1600.jpg','1500','8'),(37,'Maruti Suzhi','Baleno 1.2 ','hatchback','5','Petrol','20190422115225_Maruti-Baleno-Smart-Hybrid-.jpg','5000','6'),(38,'Mercedes-Benz ','C-Class','SUV','5','Petrol','download (1).jpeg','6000','7'),(40,'Renault','Triber','MUV','7','Petrol','195efcfd6b023f7399bff2c11ad7b633.jpg','6000','4');
/*!40000 ALTER TABLE `car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payid` int(4) NOT NULL AUTO_INCREMENT,
  `bookid` int(4) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `licence` varchar(150) NOT NULL,
  `licenceProof` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `usertype` varchar(150) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin@gmail.com','KL 07 56 2018','fghjm.jpg\r\n','Kottayam','957614875','Admin@123','admin'),(2,'Honey','honey@gmail.com','KL 09 78658','','Chanagcherry','7894561235','23456','user'),(5,'Shamnad','shamnad@gmail.com','KL 07 78658789','','Alapuzha','7456981238','123456','user'),(34,'shincy','shincy@gmail.com','KL37672019','','Shincy House','9873214568','shincy','user'),(41,'celin','celin@gmail.com','KL3700 BG 52 019','download.jpeg','Kottayam','7418956123','789456','user'),(44,'shamnadsherief','shamnadsherief@pm.me','KL3708052019','download.jpeg','Alapuzha','7894561236','1234','user'),(45,'Rajesh','rajesh@gmail.com','KL370052019','download.jpeg','Kottayam','7894545612','741852','user'),(46,'shinumol','shinumol@gmail.com','KL370052019','download (1).jpeg','Alappuzha','7894561238','123','user'),(52,'aswathy','aswathy@gmail.com','KL3 76 72019','download (1).jpeg','kattapanna','1234567890','1234','user'),(53,'Mannu','mannu@gmail.com','KL370052019','download.jpeg','kattapanna','7411223678','741852','user'),(55,'Emily Thomas','emily@gmail.com','1203456','download.jpeg','Kumily','6547891235','963','user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-26 10:21:34
