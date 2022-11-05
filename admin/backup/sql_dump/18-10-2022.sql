-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: onlinefoodphp
-- ------------------------------------------------------
-- Server version 	5.5.5-10.4.24-MariaDB
-- Date: Tue, 18 Oct 2022 07:56:44 +0200

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin@mail.com','','2022-10-04 07:08:55');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `admin` with 1 row(s)
--

--
-- Table structure for table `book`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Book_date` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Pref_food` varchar(255) NOT NULL,
  `Occasion` varchar(255) NOT NULL,
  `person_no` varchar(10) NOT NULL,
  `Booked_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `book` VALUES (10,'reden','09632357966','redgabrinez@gmail.com','baliangao','1998-01-27T19:30','0','chicken curry','Birthday','2','2022-10-09 12:05:58','2022-10-09 12:05:58'),(11,'Reden Gabrinez','09632357966','redengabrinez@gmail.com','fs','1998-01-27T19:30','0','dgfd','fds','12','2022-10-09 12:08:56','2022-10-09 12:12:55'),(12,'Jamaica','09632357966','redgabrinez@gmail.com','fsd','1998-01-27T19:30','0','dgfd','Birthday','12','2022-10-09 12:20:42','2022-10-09 12:20:42');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `book` with 3 row(s)
--

--
-- Table structure for table `dishes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL AUTO_INCREMENT,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dishes`
--

LOCK TABLES `dishes` WRITE;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `dishes` VALUES (17,5,'   Hot and Sour Soup ','Chinese hot and sour soup is a traditional northern Chinese favorite packed with the acidity of Zhenjiang vinegar, the white pepper’s spiciness, and the sesame oil’s nuttiness.',180.00,'633fe152ea17a.jpg'),(18,5,'   Stir Fry Pork in Oyster Sauce ','This Stir Fry Pork Recipe is Made Of Pork Belly/ Loin, Stir fry Pork with Oyster Sauce, Ketchup, Garlic, Onion, Water, Cooking Oil added with Salt and Pepper To Taste.',280.00,'633fe1ab5f325.jpg'),(19,5,'  Sichuan Peppered Fish Fillet','Tender fish fillet poached in seasoned water, then topped with spices, Sichuan boiled fish is tasty, pungent and super addictive. ',250.00,'633fe1dfc18e3.jpg'),(20,5,'    Four Season Vegetables  ','Four Season Vegetables is a Chinese Healthy dish that can help to body functions, the are loaded of vitamins and minerals, other than a source of fibers',180.00,'633fe2b060312.jpg'),(21,5,'Yangzhou Fried Rice ','Yangzhou fried rice from Jiangsu Province is the most famous variety of fried rice in China. Known for the fine knife work in cutting the ingredients, it has been the model for “special fried rice” or “house fried rice” di',200.00,'633fe2fdadddd.jpg');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `dishes` with 5 row(s)
--

--
-- Table structure for table `remark`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remark`
--

LOCK TABLES `remark` WRITE;
/*!40000 ALTER TABLE `remark` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `remark` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `remark` with 0 row(s)
--

--
-- Table structure for table `restaurant`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL AUTO_INCREMENT,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `restaurant` VALUES (5,0,'Chinese Menu','','','','','','','','633fdc97d44ea.png','2022-10-07 08:00:23'),(6,0,'Breakfast','','','','','','','','633fdd5eb5b4a.png','2022-10-07 08:03:42'),(7,0,'Main Dish','','','','','','','','633fdd94d5f9e.png','2022-10-07 08:04:36'),(8,0,'Rice Meal','','','','','','','','633fddcbe6627.png','2022-10-07 08:05:31'),(9,0,'Crepes','','','','','','','','633fddfb7e807.png','2022-10-07 08:06:19'),(10,0,'Olibanana','','','','','','','','633fde2ab99fc.png','2022-10-07 08:07:06'),(11,0,'Coffee and Tea','','','','','','','','633fde57c7c88.png','2022-10-07 08:07:51'),(12,0,'Frappe','','','','','','','','633fde8aed5e6.png','2022-10-07 08:08:42'),(13,0,'Drinks','','','','','','','','633fdebf5e098.png','2022-10-07 08:09:35'),(15,0,'Chefs Special','','','','','','','','633fe0313df43.png','2022-10-07 08:15:45');
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `restaurant` with 10 row(s)
--

--
-- Table structure for table `tables`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tables` VALUES (1,'Table 1','USED'),(2,'Table 2','USED'),(3,'Table 3','RESERVED'),(4,'Table 4','VACANT'),(5,'Table 5','VACANT'),(6,'Table 6','VACANT'),(7,'Table 7','USED'),(8,'Table 8','USED'),(9,'Table 9','RESERVED'),(10,'Table 10','RESERVED');
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tables` with 10 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `u_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (12,'reden','Reden','Gabrinez','redgabrinez@gmail.com','09632357966','cff54cf33240242b8e86d43727ff3c80','Baliangao',1,'2022-10-09 10:44:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Tue, 18 Oct 2022 07:56:44 +0200
