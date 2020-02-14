-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: ecomerce
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `carritos`
--

DROP TABLE IF EXISTS `carritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carritos` (
  `carId` int(11) NOT NULL,
  `carIdProducto` int(11) NOT NULL,
  `carUsuarios_usrId` int(11) NOT NULL,
  PRIMARY KEY (`carId`),
  KEY `carUsuarios_usrId` (`carUsuarios_usrId`),
  CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`carUsuarios_usrId`) REFERENCES `usuarios` (`usrId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritos`
--

LOCK TABLES `carritos` WRITE;
/*!40000 ALTER TABLE `carritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `carritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catNombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `empId` int(11) NOT NULL AUTO_INCREMENT,
  `empCuil` int(11) NOT NULL,
  `empNombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`empId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marcas`
--

DROP TABLE IF EXISTS `marcas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marcas` (
  `marId` int(11) NOT NULL AUTO_INCREMENT,
  `marNombre` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`marId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `prdId` int(11) NOT NULL AUTO_INCREMENT,
  `prdNombre` varchar(40) DEFAULT NULL,
  `prdModelo` varchar(40) DEFAULT NULL,
  `prdDescripcion` varchar(200) DEFAULT NULL,
  `prdPrecio` float DEFAULT NULL,
  `prdIdCategoria` int(11) DEFAULT NULL,
  `prdIdMarca` int(11) DEFAULT NULL,
  `prdIdUsuario` int(11) DEFAULT NULL,
  `prdImagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prdId`),
  KEY `prdIdCategoria` (`prdIdCategoria`),
  KEY `prdIdMarca` (`prdIdMarca`),
  KEY `prdIdUsuario` (`prdIdUsuario`),
  CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`prdIdCategoria`) REFERENCES `categorias` (`catId`),
  CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`prdIdMarca`) REFERENCES `marcas` (`marId`),
  CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`prdIdUsuario`) REFERENCES `usuarios` (`usrId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usrId` int(11) NOT NULL AUTO_INCREMENT,
  `usrNombre` varchar(40) DEFAULT NULL,
  `usrApellido` varchar(40) DEFAULT NULL,
  `usrEmail` varchar(40) DEFAULT NULL,
  `usrCelular` varchar(40) DEFAULT NULL,
  `usrFechaNacimiento` date DEFAULT NULL,
  `usrIdEmpresa` int(11) DEFAULT NULL,
  `usrPassword` varchar(100) DEFAULT NULL,
  `usrAvatar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usrId`),
  KEY `usrIdEmpresa` (`usrIdEmpresa`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`usrIdEmpresa`) REFERENCES `empresas` (`empId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `venId` int(11) NOT NULL AUTO_INCREMENT,
  `venIdProducto` int(11) DEFAULT NULL,
  `venIdUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`venId`),
  KEY `venIdProducto` (`venIdProducto`),
  KEY `venIdUsuario` (`venIdUsuario`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`venIdProducto`) REFERENCES `productos` (`prdId`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`venIdUsuario`) REFERENCES `usuarios` (`usrId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-13 22:58:27
