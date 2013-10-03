-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.41-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema odesk2
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ odesk2;
USE odesk2;

--
-- Table structure for table `odesk2`.`client_model_use`
--

DROP TABLE IF EXISTS `client_model_use`;
CREATE TABLE `client_model_use` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL DEFAULT '',
  `symbol` varchar(45) NOT NULL DEFAULT '',
  `model` varchar(45) NOT NULL DEFAULT '',
  `capital` varchar(45) NOT NULL DEFAULT '',
  `summary` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odesk2`.`client_model_use`
--

/*!40000 ALTER TABLE `client_model_use` DISABLE KEYS */;
INSERT INTO `client_model_use` (`id`,`email`,`symbol`,`model`,`capital`,`summary`) VALUES 
 (1,'nihaosoft@gmail.com','AAPL','OCC','50000','summary');
/*!40000 ALTER TABLE `client_model_use` ENABLE KEYS */;


--
-- Table structure for table `odesk2`.`client_registration`
--

DROP TABLE IF EXISTS `client_registration`;
CREATE TABLE `client_registration` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(256) NOT NULL DEFAULT '',
  `client_email` varchar(256) NOT NULL DEFAULT '',
  `client_url` varchar(256) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odesk2`.`client_registration`
--

/*!40000 ALTER TABLE `client_registration` DISABLE KEYS */;
INSERT INTO `client_registration` (`id`,`client_name`,`client_email`,`client_url`) VALUES 
 (1,'quant','nihaosoft@gmail.com','http://www.google.com');
/*!40000 ALTER TABLE `client_registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
