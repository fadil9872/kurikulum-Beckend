-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: blogmvc
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) DEFAULT NULL,
  `penulis` varchar(40) DEFAULT NULL,
  `kategori` varchar(40) DEFAULT NULL,
  `artikel` text,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (1,'Cahaya  Ilahiyah','Mukhamad Fadil','','Setelah terbit munculah terang'),(46,'Merapi Di Jawa Barat','Romi Frediyanto','Umum','Saat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luasSaat ada hujan datang aku berada di tepi pantai yg luas\r\n'),(50,'Makananku','Tedy','Teknologi','Perlahan Makananku Hilang');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'adian281r@gmail.com','azka9871','cirebon'),(6,'diannurhidayah@ymail.com','azka9871','Cirebon');
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

-- Dump completed on 2020-10-19  9:23:39
