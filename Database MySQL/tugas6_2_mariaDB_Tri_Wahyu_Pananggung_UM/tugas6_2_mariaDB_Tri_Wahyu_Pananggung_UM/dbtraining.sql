-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbtraining
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `kategori_kursus`
--

DROP TABLE IF EXISTS `kategori_kursus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_kursus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori_kursus` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_kursus`
--

LOCK TABLES `kategori_kursus` WRITE;
/*!40000 ALTER TABLE `kategori_kursus` DISABLE KEYS */;
INSERT INTO `kategori_kursus` VALUES (1,'Pemrograman'),(2,'Jaringan'),(3,'Office'),(4,'Design Grafis'),(5,'Bahasa');
/*!40000 ALTER TABLE `kategori_kursus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_pengajar`
--

DROP TABLE IF EXISTS `kategori_pengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_pengajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_pengajar`
--

LOCK TABLES `kategori_pengajar` WRITE;
/*!40000 ALTER TABLE `kategori_pengajar` DISABLE KEYS */;
INSERT INTO `kategori_pengajar` VALUES (1,'Internal'),(2,'External'),(3,'Freelancer');
/*!40000 ALTER TABLE `kategori_pengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_training`
--

DROP TABLE IF EXISTS `kategori_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_training`
--

LOCK TABLES `kategori_training` WRITE;
/*!40000 ALTER TABLE `kategori_training` DISABLE KEYS */;
INSERT INTO `kategori_training` VALUES (1,'Public'),(2,'In House'),(3,'Private');
/*!40000 ALTER TABLE `kategori_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kursus`
--

DROP TABLE IF EXISTS `kursus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kursus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_kursus_id` int(11) NOT NULL,
  `nama_kursus` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kursus_kategori_kursus_idx` (`kategori_kursus_id`),
  CONSTRAINT `fk_kursus_kategori_kursus` FOREIGN KEY (`kategori_kursus_id`) REFERENCES `kategori_kursus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kursus`
--

LOCK TABLES `kursus` WRITE;
/*!40000 ALTER TABLE `kursus` DISABLE KEYS */;
INSERT INTO `kursus` VALUES (1,1,'PHP'),(2,2,'LAN'),(3,3,'Outlook'),(4,4,'Blender 3D'),(5,5,'Bahasa Inggris');
/*!40000 ALTER TABLE `kursus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengajar`
--

DROP TABLE IF EXISTS `pengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengajar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_pengajar_id` int(11) NOT NULL,
  `nama_pengajar` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pengajar_kategori_pengajar1_idx` (`kategori_pengajar_id`),
  CONSTRAINT `fk_pengajar_kategori_pengajar1` FOREIGN KEY (`kategori_pengajar_id`) REFERENCES `kategori_pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengajar`
--

LOCK TABLES `pengajar` WRITE;
/*!40000 ALTER TABLE `pengajar` DISABLE KEYS */;
INSERT INTO `pengajar` VALUES (1,2,'Asep','asep@gmail.com','081234567891','Malang'),(2,1,'Ucup','ucup@gmail.com','081234567892','Bogor'),(3,3,'Agus','agus@gmail.com','081234567893','Jakarta'),(4,1,'Udin','udin@gmail.com','081234567894','Jakarta'),(5,3,'Indri','indri@gmail.com','081234567895','Makassar');
/*!40000 ALTER TABLE `pengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peserta`
--

DROP TABLE IF EXISTS `peserta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(45) NOT NULL,
  `no_hp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peserta`
--

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` VALUES (1,'Ahmad','089876543219','ahmad@gmail.com','Jakarta'),(2,'Yoga','089876543218','yoga@gmail.com','Palu'),(3,'Ajis','089876543217','ajis@gmail.com','Makassar'),(4,'Rahul','089876543216','rahul@gmail.com','Surabaya'),(5,'Eko','089876543215','eko@gmail.com','Bandung');
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training` (
  `id` varchar(45) NOT NULL,
  `peserta_id` int(11) NOT NULL,
  `pengajar_id` int(11) NOT NULL,
  `kategori_training_id` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tempat` varchar(45) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `peserta_id_UNIQUE` (`peserta_id`),
  UNIQUE KEY `pengajar_id_UNIQUE` (`pengajar_id`),
  KEY `fk_peserta_has_pengajar_pengajar1_idx` (`pengajar_id`),
  KEY `fk_peserta_has_pengajar_peserta1_idx` (`peserta_id`),
  KEY `fk_training_kategori_training1_idx` (`kategori_training_id`),
  CONSTRAINT `fk_peserta_has_pengajar_pengajar1` FOREIGN KEY (`pengajar_id`) REFERENCES `pengajar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peserta_has_pengajar_peserta1` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_training_kategori_training1` FOREIGN KEY (`kategori_training_id`) REFERENCES `kategori_training` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training`
--

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
INSERT INTO `training` VALUES ('1',1,1,3,'2022-01-01','2023-01-01','PT Nurul Fikri','Berjalan'),('2',2,2,1,'2020-01-01','2021-01-01','Universitas Indonesia','Berakhir'),('3',3,3,2,'2021-01-01','2023-01-01','PT Nurul Fikri','Berjalan'),('4',4,4,3,'2022-04-01','2023-01-01','PT Nurul Fikri','Berjalan'),('5',5,5,1,'2022-02-01','2022-09-01','Universitas Indonesia','Berjalan');
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-24 22:57:59
