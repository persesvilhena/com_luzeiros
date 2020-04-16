-- MySQL dump 10.16  Distrib 10.2.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u580251358_luz
-- ------------------------------------------------------
-- Server version	10.2.16-MariaDB

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
-- Table structure for table `anon`
--

DROP TABLE IF EXISTS `anon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anon` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ticket` int(255) NOT NULL,
  `msg` longtext COLLATE utf8_unicode_ci NOT NULL,
  `data` int(255) NOT NULL,
  `resposta` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `viz` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ticket` (`ticket`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anon`
--

/*!40000 ALTER TABLE `anon` DISABLE KEYS */;
INSERT INTO `anon` VALUES (1,65057,'mensagem',1485861300,'resposta',1),(2,88643,'Leo gay',1485974571,'Resposta',1);
/*!40000 ALTER TABLE `anon` ENABLE KEYS */;

--
-- Table structure for table `com`
--

DROP TABLE IF EXISTS `com`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `com` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `msg` varchar(255) CHARACTER SET latin1 NOT NULL,
  `data` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `com`
--

/*!40000 ALTER TABLE `com` DISABLE KEYS */;
/*!40000 ALTER TABLE `com` ENABLE KEYS */;

--
-- Table structure for table `fralda`
--

DROP TABLE IF EXISTS `fralda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fralda` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bebes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fralda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alergia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viz` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fralda`
--

/*!40000 ALTER TABLE `fralda` DISABLE KEYS */;
INSERT INTO `fralda` VALUES (1,'nome','endreco','sdfsdfsdf','idade','asdasd','relefonew','email','sdfsdfsdfsdfsdfsdf',1);
/*!40000 ALTER TABLE `fralda` ENABLE KEYS */;

--
-- Table structure for table `leite`
--

DROP TABLE IF EXISTS `leite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leite` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `membros` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intolerante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `viz` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leite`
--

/*!40000 ALTER TABLE `leite` DISABLE KEYS */;
INSERT INTO `leite` VALUES (1,'nome','endreco','criancas','idade','asdasdasdasdasdasdasdasdasdasd','relefonew','email',1);
/*!40000 ALTER TABLE `leite` ENABLE KEYS */;

--
-- Table structure for table `oracao`
--

DROP TABLE IF EXISTS `oracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oracao` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `msg` longtext COLLATE utf8_unicode_ci NOT NULL,
  `viz` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oracao`
--

/*!40000 ALTER TABLE `oracao` DISABLE KEYS */;
INSERT INTO `oracao` VALUES (1,'teste',1);
/*!40000 ALTER TABLE `oracao` ENABLE KEYS */;

--
-- Table structure for table `ore`
--

DROP TABLE IF EXISTS `ore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ore` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `oracao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ore`
--

/*!40000 ALTER TABLE `ore` DISABLE KEYS */;
INSERT INTO `ore` VALUES (1,2),(2,1);
/*!40000 ALTER TABLE `ore` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sobrenome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(255) CHARACTER SET latin1 NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `data_nasc` int(255) DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `epp` int(10) NOT NULL,
  `hash_recup` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `hash_ativa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adm` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'perses@p','Perses','Vilhena','698dc19d489c4e4db73e28a713eab07b','75265512ac4736e4d58b574024d4bad9.jpg',0,'','asdasd','','','','teste',NULL,98,NULL,NULL,'',1),(15,'leo@leo','Leonardo','Guida','0b733845fec79731ee5755211cb8cd47','new/new.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Dumping routines for database 'u580251358_luz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-09  3:24:15
