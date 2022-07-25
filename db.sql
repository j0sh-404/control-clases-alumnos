-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: examen
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `login_usuario`
--

DROP TABLE IF EXISTS `login_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login_usuario` (
  `id_login` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_usuario`
--

LOCK TABLES `login_usuario` WRITE;
/*!40000 ALTER TABLE `login_usuario` DISABLE KEYS */;
INSERT INTO `login_usuario` VALUES (1,'admin@mail.com','admin','clave');
/*!40000 ALTER TABLE `login_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_alumno`
--

DROP TABLE IF EXISTS `modelo_alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo_alumno` (
  `id_modelo_alumno` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `rol` varchar(100) DEFAULT NULL,
  `clase` longtext,
  `id_modelo_grupo` int NOT NULL,
  PRIMARY KEY (`id_modelo_alumno`),
  KEY `fk_id_modelo_grupo_idx` (`id_modelo_grupo`),
  CONSTRAINT `fk_id_modelo_grupo` FOREIGN KEY (`id_modelo_grupo`) REFERENCES `modelo_grupo` (`id_modelo_grupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_alumno`
--

LOCK TABLES `modelo_alumno` WRITE;
/*!40000 ALTER TABLE `modelo_alumno` DISABLE KEYS */;
INSERT INTO `modelo_alumno` VALUES (1,'Jose','Nochbeuena','jose@mail.com','Subjefe','[{\"id\":\"1\",\"nombre\":\"Español\"},{\"id\":\"5\",\"nombre\":\"Historia\"}]',4),(2,'Araceli','Hernandez','cheli@mail.com','Ordinario','[{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"8\",\"nombre\":\"Fisica\"},{\"id\":\"7\",\"nombre\":\"Base de datos\"},{\"id\":\"6\",\"nombre\":\"Programacion\"},{\"id\":\"5\",\"nombre\":\"Historia\"}]',5),(3,'Oliverio','Urbano ','oliveriooxxo.com','Ordinario','[{\"id\":\"1\",\"nombre\":\"Español\"},{\"id\":\"8\",\"nombre\":\"Fisica\"},{\"id\":\"7\",\"nombre\":\"Base de datos\"}]',7),(4,'Jorge','Hernandez','jorge@mail.com','Subjefe','[{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"5\",\"nombre\":\"Historia\"},{\"id\":\"7\",\"nombre\":\"Base de datos\"}]',11),(5,'Jorge','Hernandez','jorge@mail.com','Subjefe','[{\"id\":\"5\",\"nombre\":\"Historia\"},{\"id\":\"7\",\"nombre\":\"Base de datos\"},{\"id\":\"3\",\"nombre\":\"Ciencias Naturales\"},{\"id\":\"6\",\"nombre\":\"Programacion\"}]',1),(6,'juanito','meneses','meneses@mail.com','Subjefe','[{\"id\":\"3\",\"nombre\":\"Ciencias Naturales\"},{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"5\",\"nombre\":\"Historia\"}]',7),(7,'bertha','meneses','bertha@mail.com','Jefe de grupo','[{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"5\",\"nombre\":\"Historia\"},{\"id\":\"3\",\"nombre\":\"Ciencias Naturales\"}]',4),(8,'Nuevo alumno','ejemplo','ejemplo@mail.com','Subjefe','[{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"7\",\"nombre\":\"Base de datos\"}]',10),(9,'Cinthya','hernandez','cinthya@mail.com','Jefe de grupo','[{\"id\":\"3\",\"nombre\":\"Ciencias Naturales\"},{\"id\":\"6\",\"nombre\":\"Programacion\"},{\"id\":\"5\",\"nombre\":\"Historia\"},{\"id\":\"1\",\"nombre\":\"Español\"},{\"id\":\"9\",\"nombre\":\"Derecho\"},{\"id\":\"8\",\"nombre\":\"Fisica\"}]',12),(10,'','','','Subjefe','[{\"id\":\"3\",\"nombre\":\"Ciencias Naturales\"},{\"id\":\"2\",\"nombre\":\"Matematicas\"},{\"id\":\"4\",\"nombre\":\"Inglés\"},{\"id\":\"6\",\"nombre\":\"Programacion\"}]',13);
/*!40000 ALTER TABLE `modelo_alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_clase`
--

DROP TABLE IF EXISTS `modelo_clase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo_clase` (
  `id_modelo_clase` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_modelo_clase`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_clase`
--

LOCK TABLES `modelo_clase` WRITE;
/*!40000 ALTER TABLE `modelo_clase` DISABLE KEYS */;
INSERT INTO `modelo_clase` VALUES (1,'Español'),(2,'Matematicas'),(3,'Ciencias Naturales'),(4,'Inglés'),(5,'Historia'),(6,'Programacion'),(7,'Base de datos'),(8,'Fisica'),(9,'Derecho');
/*!40000 ALTER TABLE `modelo_clase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelo_grupo`
--

DROP TABLE IF EXISTS `modelo_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo_grupo` (
  `id_modelo_grupo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_modelo_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo_grupo`
--

LOCK TABLES `modelo_grupo` WRITE;
/*!40000 ALTER TABLE `modelo_grupo` DISABLE KEYS */;
INSERT INTO `modelo_grupo` VALUES (1,'grupo a'),(2,'grupo a'),(3,'grupo b'),(4,'grupo b'),(5,'0000'),(6,'0000'),(7,'11'),(8,'lll'),(9,'as'),(10,'my gruó'),(11,'grupo c tarde'),(12,'grupo primero secundaria'),(13,'ejemplo de mi grupo');
/*!40000 ALTER TABLE `modelo_grupo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-24 20:38:17
