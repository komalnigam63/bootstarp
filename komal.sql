-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: komal
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `MyGuests`
--

DROP TABLE IF EXISTS `MyGuests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MyGuests` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MyGuests`
--

LOCK TABLES `MyGuests` WRITE;
/*!40000 ALTER TABLE `MyGuests` DISABLE KEYS */;
INSERT INTO `MyGuests` VALUES (32,'komal','nigam','hittan','moluli','2019-10-11 06:35:03'),(34,'admin','nobi','plk','sasdt','2019-10-15 06:48:41');
/*!40000 ALTER TABLE `MyGuests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Register`
--

DROP TABLE IF EXISTS `Register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Register`
--

LOCK TABLES `Register` WRITE;
/*!40000 ALTER TABLE `Register` DISABLE KEYS */;
INSERT INTO `Register` VALUES (1,'komal','komalnigam@gmail.com','komal@1245',' b2 466 harsh vihar'),(2,'ghhx','admin@123','admin@123',' b/2 466 hv'),(3,'ghhx','admin@123','admin@123',' b/2 466 hv'),(4,'ghhx','admin@123','admin@123',' b/2 466 hv'),(5,'komal','komal@123','admin@123',' b/2334 hv '),(6,'komal','komal@123','admin@123',' b/2334 hv '),(7,'komal','komalnigam@gmail.com','123-45-678',' qwrty'),(8,'komal','komal@gmail.com','',' dkfjithkg'),(9,'komal','komalnigam@gmail.com','','koblhlll '),(10,'komal','komalnigam@gmail.com','',' ohyyjhgffklghl'),(11,'komal','komalnigam@gmail.com','',' ohyyjhgffklghl'),(12,'komal','komalnigam@gmail.com','',' ohyyjhgffklghl'),(13,'komal','ozair@fourtek.com','',' klj;lkjl'),(14,'komal','ozair@fourtek.com','',' '),(15,'komal','ozair@fourtek.com','',' '),(16,'','ozair@fourtek.com','',' '),(17,'','ozair@fourtek.com','',' '),(18,'','ozair@fourtek.com','',' '),(19,'','ozair@fourtek.com','',' '),(20,'','ozair@fourtek.com','',' '),(21,'','ozair@fourtek.com','',' '),(22,'','ozair@fourtek.com','',' '),(23,'','ozair@fourtek.com','',' '),(24,'','ozair@fourtek.com','',' '),(25,'','ozair@fourtek.com','',' '),(26,'','ozair@fourtek.com','',' ');
/*!40000 ALTER TABLE `Register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Registerstudent`
--

DROP TABLE IF EXISTS `Registerstudent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Registerstudent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Registerstudent`
--

LOCK TABLES `Registerstudent` WRITE;
/*!40000 ALTER TABLE `Registerstudent` DISABLE KEYS */;
/*!40000 ALTER TABLE `Registerstudent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Social_Category_Details`
--

DROP TABLE IF EXISTS `Social_Category_Details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Social_Category_Details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BC` varchar(32) NOT NULL,
  `OC` varchar(32) NOT NULL,
  `SC` varchar(32) NOT NULL,
  `ST` varchar(32) NOT NULL,
  `Other` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Social_Category_Details`
--

LOCK TABLES `Social_Category_Details` WRITE;
/*!40000 ALTER TABLE `Social_Category_Details` DISABLE KEYS */;
INSERT INTO `Social_Category_Details` VALUES (11,'55553265','40929319','27032248','6032248','5032248'),(12,'55553265','40929319','27032248','6032248','5032248');
/*!40000 ALTER TABLE `Social_Category_Details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin@123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creataccount`
--

DROP TABLE IF EXISTS `creataccount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creataccount` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creataccount`
--

LOCK TABLES `creataccount` WRITE;
/*!40000 ALTER TABLE `creataccount` DISABLE KEYS */;
INSERT INTO `creataccount` VALUES (8,'Mickey','Mouse','itsupport@fourtek.com','admin13','8888888888','12/8/1999','b/2hv','123456','delhi','2019-10-14 11:40:59'),(9,'komal','nigam','komalnigam63@gmail.com','12345','8888888888','12/56/88','test','123456','delhi','2019-10-14 08:10:00'),(10,'jacy','jone','itsupport@fourtek.com','ashujfh','9734567899','12aug2019','b/7jhlk','110093','delhi','2019-10-14 09:33:29'),(12,'mouli','sinha','owner@dodo.com','admin13','9734567899','12aug2019','h/6jhn','12346','delhi','2019-10-14 09:44:08');
/*!40000 ALTER TABLE `creataccount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mgt`
--

DROP TABLE IF EXISTS `mgt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mgt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Manager` varchar(32) NOT NULL,
  `full_time` text NOT NULL,
  `image` text NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mgt`
--

LOCK TABLES `mgt` WRITE;
/*!40000 ALTER TABLE `mgt` DISABLE KEYS */;
INSERT INTO `mgt` VALUES (91,'Manager','full time','room_banner.png','2019-10-09 10:37:24'),(96,'Manager','full time','Admin.png','2019-10-09 11:27:22'),(97,'Designer','part time','room_banner.png','2019-10-09 11:29:09'),(99,'Designer','full time','81bTcE4SpxL._SL1500_.jpg','2019-10-15 06:52:59'),(102,'Designer','full time','2019-02-20.jpg','2019-10-15 06:54:25');
/*!40000 ALTER TABLE `mgt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_family_gallery`
--

DROP TABLE IF EXISTS `my_family_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_family_gallery` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `me` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `father` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_family_gallery`
--

LOCK TABLES `my_family_gallery` WRITE;
/*!40000 ALTER TABLE `my_family_gallery` DISABLE KEYS */;
INSERT INTO `my_family_gallery` VALUES (28,'rdplast_data.sql.tar.gz','','','2019-10-09 11:39:30',NULL),(29,'room_banner.png','','','2019-10-15 06:50:05',NULL);
/*!40000 ALTER TABLE `my_family_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (6,'admin23','itsupport@fourtek.com','admin@123'),(11,'admin234566','exmple@gmail.com','admin@123'),(12,'admin','admin@123','admin@123'),(13,'adminjo','komalnigam63@gmail.com','admin@123');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `registrationDate` datetime NOT NULL,
  `classes` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentdetails`
--

LOCK TABLES `studentdetails` WRITE;
/*!40000 ALTER TABLE `studentdetails` DISABLE KEYS */;
INSERT INTO `studentdetails` VALUES (1,'komal','nigam','komalnigam@gmail.com','20','f','singing','b/1hv','2019-10-10 00:00:00','class1',NULL),(2,'sumi','sharma','ozair@fourtek.com','19','f','dancing','n/2scd','2019-10-10 00:00:00','class1',NULL),(3,'mansi ','pathak','itsupport@fourtek.com','12','f','dancing','h/2 kv','2019-10-10 00:00:00','class1',NULL),(4,'nobi','susntu','owner@dodo.com','23','m','cricket','kl/7 northnkh','2019-10-10 00:00:00','class1',NULL),(5,'admin','kosik','exmiple@gmail.com','14','m','cricket','shuutgji','2019-10-10 00:00:00','class1',NULL),(6,'mayan','jaiswal','jaiswal@gmail.com','14','m','cricket','pmkog/4','2019-10-10 00:00:00','class2',NULL),(7,'meha','sarst','ashu@gmail.com','22','m','cricket','honu nager 3.h','2019-10-10 00:00:00','class3',NULL),(8,'sumit','saudmr','aman@gmail.com','33','m','dancing','b/6 somihj','2019-10-10 00:00:00','class4',NULL),(9,'nayrat','kayra','kabir@gamil.com','26','m','cricket','kavi n b/6 ','2019-10-10 00:00:00','class5',NULL),(10,'priyank','mansh','man@gmail.com','27','m','cricket','b/9ashui','2019-10-10 00:00:00','class6',NULL),(11,'gori','jhaay','gori@gmail.com','30','','dancing','n/8 nortiy','2019-10-10 00:00:00','class7',NULL),(12,'rasmi','dhayi','rasmi@gmail.com','31','f','singing','d/8hbsd','2019-10-10 00:00:00','class7',NULL),(13,'sidd','shukil','koin@gmail.com','25','f','cricket','kl/6','2019-10-10 00:00:00','class8',NULL),(14,'deepa','monihk','ama@gmail.com','28','m','cricket','hui/rr','2019-10-10 00:00:00','class9',NULL),(15,'pyihk','mayanki','goli@gmail.com','29','f','singing','jk/7 skpjl','2019-10-10 00:00:00','class10',NULL),(16,'sagr','demhi','tyiu@gmail.com','33','f','cricket','bhu/65 dugyi','2019-10-10 00:00:00','class2',NULL),(17,'sona','rastiogi','rohit@gmail.com','21','m','cricket','ni/shuy','2019-10-10 00:00:00','class3',NULL),(19,'gufhti','yami','fudu@gmail.com','10','f','singing','bjkytul','2019-10-10 00:00:00','class9',NULL),(20,'renu','kant','fus@gmail.com','9','f','singing','jijlh;j','2019-10-10 00:00:00','class10',NULL);
/*!40000 ALTER TABLE `studentdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2019-10-15 14:14:02
