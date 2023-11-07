CREATE DATABASE  IF NOT EXISTS `ranking` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ranking`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ranking
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contato` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `piloto`
--

DROP TABLE IF EXISTS `piloto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `piloto` (
  `id_pilotos` int NOT NULL AUTO_INCREMENT,
  `Nome_piloto` varchar(100) NOT NULL,
  `equipe_piloto` varchar(100) NOT NULL,
  `pais_piloto` varchar(100) NOT NULL,
  `numero_piloto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pilotos`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `piloto`
--

LOCK TABLES `piloto` WRITE;
/*!40000 ALTER TABLE `piloto` DISABLE KEYS */;
INSERT INTO `piloto` VALUES (1,'Max Vertappen','Red Bull','Holanda','1'),(2,'Sérgio Perez','Red Bull','México','11'),(3,'Lewis Hamilton','Petronas','Reino Unido','44'),(4,'Fernando Alonza','Aston Martin','Espanha','14'),(5,'Charles Leclerc','Ferrari','Mônaco','16'),(6,'Lando Norris','McLaren','Reino Unido','4'),(7,'Pierre Gasly','alpine','França','10'),(8,'Geoge Russel','Mercedes','Reino Unido','63'),(9,'Carlos Sainz','Ferrari','Espanha','55');
/*!40000 ALTER TABLE `piloto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'joao','123'),(2,'geovana','123'),(3,'endryl','123'),(4,'luiz','123'),(5,'voto1234','1234'),(6,'joaoluizr','1234'),(7,'123456789','123456789'),(16,'joaoteste1','1234'),(19,'joaoluiz123','1234'),(20,'joao luiz123','1234'),(23,'olhaoteste123','1234'),(24,'testecard','1234'),(25,'adsafaasfasf','1234'),(26,'dasfasfdasfd','1234'),(27,'efdasdfasdfs','1234'),(28,'1234567890','1234'),(29,'12345678901','12345'),(30,'lucaslucas','12345');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `v_comentario`
--

DROP TABLE IF EXISTS `v_comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `v_comentario` (
  `comentario` varchar(300) NOT NULL,
  `fk_usuario` int NOT NULL,
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `v_comentario_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `v_comentario`
--

LOCK TABLES `v_comentario` WRITE;
/*!40000 ALTER TABLE `v_comentario` DISABLE KEYS */;
INSERT INTO `v_comentario` VALUES ('yuri teste',2),('jhvjvjkb',1),('as',1),('',1),('hgjvjm n,.',1),('asa',1),('sd',1),('sdasadf',1),('olha',1),('teste',1),('jhon sena',1),('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasasaas',1),('meu deus',1),('hfcjhvjkhbkm',1),('voto feito bbelas',30);
/*!40000 ALTER TABLE `v_comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `votos`
--

DROP TABLE IF EXISTS `votos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `votos` (
  `fk_usuario` int NOT NULL,
  `fk_piloto` int NOT NULL,
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_piloto` (`fk_piloto`),
  CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`),
  CONSTRAINT `votos_ibfk_2` FOREIGN KEY (`fk_piloto`) REFERENCES `piloto` (`id_pilotos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `votos`
--

LOCK TABLES `votos` WRITE;
/*!40000 ALTER TABLE `votos` DISABLE KEYS */;
INSERT INTO `votos` VALUES (2,2),(1,3),(2,2),(4,3),(3,4),(1,6),(1,8),(2,1),(4,2),(3,3),(1,4),(1,5),(1,6),(1,8),(1,7),(1,3),(1,2),(1,2),(1,2),(1,1),(1,1),(1,2),(6,2),(7,2),(30,5);
/*!40000 ALTER TABLE `votos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-07 15:04:43
