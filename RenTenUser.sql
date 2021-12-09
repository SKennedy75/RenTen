-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: rentenuser
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userinfo` (
  `userID` int NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `accounttype` varchar(40) DEFAULT NULL,
<<<<<<< HEAD
  `password` varchar(40) DEFAULT NULL,
=======
>>>>>>> 7e48b222eac5b7cc2159f6a42accf8e756d5a771
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `userinfo` VALUES (137694,'Todd961','Renter','ApartmentSeeker123'),(337612,'TiaSmith9','Rentee','B1ackSm1th'),(380047,'Bob123','Rentee','Bob\'sBurgers904'),(500842,'Pat604','Renter','HouseWanter904'),(782150,'SamHollins57','Rentee','Bu$ine$$'),(893441,'MariaBaskins3','Renter','B@sk1nR0b1ns');
=======
INSERT INTO `userinfo` VALUES (137694,'Todd961','Renter'),(337612,'TiaSmith9','Rentee'),(380047,'Bob123','Rentee'),(500842,'Pat604','Renter'),(782150,'SamHollins57','Rentee'),(893441,'MariaBaskins3','Renter');
>>>>>>> 7e48b222eac5b7cc2159f6a42accf8e756d5a771
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

<<<<<<< HEAD
-- Dump completed on 2021-12-08 15:09:20
=======
-- Dump completed on 2021-12-06 22:05:17
>>>>>>> 7e48b222eac5b7cc2159f6a42accf8e756d5a771
