-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: granja
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

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
-- Current Database: `granja`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `granja` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `granja`;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `codarea` varchar(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codarea`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES ('01','Gestacion','Cerdas en estado de gestacion'),('02','Parideras','Lugar para las cerdas dar a luz'),('03','Precebo','Cerdos en proceso de engorde'),('04','Ceba','Cerdos para la venta');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cerdo`
--

DROP TABLE IF EXISTS `cerdo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cerdo` (
  `codcerdo` int(11) NOT NULL DEFAULT 0,
  `fechanacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT '',
  `precio` decimal(10,0) NOT NULL,
  `codcorral` varchar(10) NOT NULL,
  PRIMARY KEY (`codcerdo`),
  KEY `FK_cerdo_corral` (`codcorral`),
  CONSTRAINT `FK_cerdo_corral` FOREIGN KEY (`codcorral`) REFERENCES `corral` (`codcorral`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cerdo`
--

LOCK TABLES `cerdo` WRITE;
/*!40000 ALTER TABLE `cerdo` DISABLE KEYS */;
INSERT INTO `cerdo` VALUES (1,'2020-05-12','macho','vivo',900000,'01'),(2,'2020-05-07','hembra','vivo',50,'02'),(3,'2020-04-28','macho','vivo',0,'03'),(4,'2020-05-05','hembra','vivo',80,'04'),(5,'2020-02-25','macho','muerto',0,'02'),(6,'2019-05-08','macho','vivo',0,'03'),(7,'2020-05-08','macho','momia',0,'02'),(8,'2020-05-05','hembra','vivo',49998,'04'),(9,'2020-04-29','hembra','vivo',250000,'01'),(10,'2020-05-05','macho','vivo',320000,'03'),(11,'2020-05-04','macho','vivo',97999,'01');
/*!40000 ALTER TABLE `cerdo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` varchar(15) NOT NULL,
  `nombre/razonsocial` varchar(50) NOT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES ('001-210','Cerdo Paisa','Carrera 42 #21-91','32541748','cerdo12@gmail.com'),('002-124','mekecerdo','calle50','3145784210','andres@gmail.com'),('003-457','carnes or','calle vieja','0342154784','patiño41@hotmail.com'),('004-014','cardiso S.A.S','avenida 32','2014587','cardiso76@hotmail.com');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `corral`
--

DROP TABLE IF EXISTS `corral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `corral` (
  `codcorral` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `codmodulo` varchar(5) NOT NULL,
  PRIMARY KEY (`codcorral`),
  KEY `FK_corral_modulo` (`codmodulo`),
  CONSTRAINT `FK_corral_modulo` FOREIGN KEY (`codmodulo`) REFERENCES `modulo` (`codmodulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `corral`
--

LOCK TABLES `corral` WRITE;
/*!40000 ALTER TABLE `corral` DISABLE KEYS */;
INSERT INTO `corral` VALUES ('01','C01',50,'01'),('02','c02',50,'02'),('03','C03',30,'03'),('04','C04',75,'04');
/*!40000 ALTER TABLE `corral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalleventa`
--

DROP TABLE IF EXISTS `detalleventa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalleventa` (
  `IdDetalle` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `valorunitario` decimal(10,0) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL DEFAULT 0,
  `codventa` varchar(10) NOT NULL,
  `codcerdo` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`IdDetalle`),
  KEY `codventa` (`codventa`),
  KEY `codcerdo` (`codcerdo`),
  CONSTRAINT `FK_detalleventa_cerdo` FOREIGN KEY (`codcerdo`) REFERENCES `cerdo` (`codcerdo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`codventa`) REFERENCES `venta` (`codventa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalleventa`
--

LOCK TABLES `detalleventa` WRITE;
/*!40000 ALTER TABLE `detalleventa` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalleventa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleado`
--

DROP TABLE IF EXISTS `empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleado` (
  `idempleado` varchar(12) NOT NULL,
  `nombre1` varchar(15) NOT NULL,
  `nombre2` varchar(15) DEFAULT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) DEFAULT NULL,
  `estadocivil` set('soltero','casado','divorcido','viudo') DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleado`
--

LOCK TABLES `empleado` WRITE;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` VALUES ('102457','Andres','felipe','Vasquez','valdez','soltero','2321450'),('1037546','camilo','jose','velez','cardona','casado','3147840232'),('12045','antonio','arcadio','perea','murillo','casado','23254798'),('2101444','juan','carlos','jaramillo','torres','divorcido','587445'),('21547852','Antonio','zamir','perez','hoyos','casado','3201545'),('248577','carlos','Mario','jimenez','vargas','viudo','241578'),('32524','piedad','maria','mercado','corrales','divorcido','3210498'),('5878774','eduardo','antonio','marin','jaramillo','viudo','5245775'),('782454','carla','maria','perez','osorbo','divorcido','55775'),('987541','leidy','viviana','palacio','muñoz','casado','310722236');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo` (
  `codmodulo` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `codarea` varchar(15) NOT NULL,
  PRIMARY KEY (`codmodulo`),
  KEY `FK_modulo_area` (`codarea`),
  CONSTRAINT `FK_modulo_area` FOREIGN KEY (`codarea`) REFERENCES `area` (`codarea`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES ('01','M01',250,'01'),('02','M02',100,'01'),('03','M03',150,'01'),('04','M04',100,'01'),('05','M06',250,'02'),('06','M06',250,'02');
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `idPerfil` varchar(5) NOT NULL DEFAULT '',
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES ('01','Administrador'),('02','Supervisor'),('03','Vendedor');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` longblob NOT NULL,
  `idPerfil` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `FK_usuario_perfil` (`idPerfil`),
  CONSTRAINT `FK_usuario_perfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (18,'Carlos Vera','monovera501@gmail.com','monitovera','123',NULL),(19,'juan carlos','juan10382@hotmail.com','juanca43','juan',NULL),(20,'maria bedoya','maria292@gmail.com','mariabedoya','456',NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `codventa` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `idcliente` varchar(15) NOT NULL,
  `idUsuario` varchar(10) NOT NULL,
  PRIMARY KEY (`codventa`),
  KEY `FK_venta_cliente` (`idcliente`),
  KEY `FK_venta_usuario` (`idUsuario`),
  CONSTRAINT `FK_venta_cliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-23  9:45:20
