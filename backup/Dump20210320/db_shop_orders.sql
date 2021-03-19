-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: db_shop
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `total` int NOT NULL,
  `payment_id` int NOT NULL,
  `delivery_id` int NOT NULL,
  `comment` varchar(256) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` int DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,0,1,1,'qwerty','ali','+992989082202','sodir1201@mail.ru',0,'2021-03-03 08:31:16','2021-03-03 08:31:16'),(2,1,0,1,1,'qwrwq214','Sodirjon Bokiev','+992989082202','sodir1201@mail.ru',0,'2021-03-03 10:00:42','2021-03-03 10:00:42'),(3,1,0,1,1,'qwrwq214','Sodirjon Bokiev','+992989082202','sodir1201@mail.ru',0,'2021-03-03 10:03:06','2021-03-03 10:03:06'),(4,1,0,1,1,'qwrwq214','Sodirjon Bokiev','+992989082202','sodir1201@mail.ru',0,'2021-03-03 10:04:27','2021-03-03 10:04:27'),(5,1,0,2,1,'1334','Alii','+992989082202','sodir1201@mail.ru',0,'2021-03-03 10:05:38','2021-03-03 10:05:38'),(6,1,0,2,1,'1334','Alii','+992989082202','sodir1201@mail.ru',0,'2021-03-03 10:07:33','2021-03-03 10:07:33'),(7,0,0,2,2,'Comment111','Aliiii','123-123-123','mail@mail.ru',0,'2021-03-05 14:07:29','2021-03-05 14:07:29'),(8,1,0,2,3,'kergeoogime','Sodirjon Bokiev1212','+992989082202','sodir1201@mail.ru',0,'2021-03-05 18:33:56','2021-03-05 18:33:56'),(9,1,0,1,2,'qwertyuop\r\n1224\r\nqwerty','Sodirjon2 Bokiev','+992989082202','sodir1201@mail.ru',0,'2021-03-18 18:41:50','2021-03-18 18:41:50');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-20  0:53:23
