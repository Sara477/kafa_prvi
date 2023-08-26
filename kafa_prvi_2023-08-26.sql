# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.33)
# Database: kafa_prvi
# Generation Time: 2023-08-26 11:27:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kafa
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kafa`;

CREATE TABLE `kafa` (
  `kafa_id` int unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci,
  `cena` double DEFAULT NULL,
  `tip_id` int DEFAULT NULL,
  `zemlja_porekla_id` int DEFAULT NULL,
  PRIMARY KEY (`kafa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `kafa` WRITE;
/*!40000 ALTER TABLE `kafa` DISABLE KEYS */;

INSERT INTO `kafa` (`kafa_id`, `naziv`, `opis`, `cena`, `tip_id`, `zemlja_porekla_id`)
VALUES
	(1,'Ristreto','RISTRETTO JE MLADJI BRAT ESPRESSA',160,1,2),
	(2,'Espresso','Najbolji pokretac dana',170,2,2);

/*!40000 ALTER TABLE `kafa` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tip_kafe
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tip_kafe`;

CREATE TABLE `tip_kafe` (
  `tip_kafe_id` int unsigned NOT NULL AUTO_INCREMENT,
  `tip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tip_kafe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `tip_kafe` WRITE;
/*!40000 ALTER TABLE `tip_kafe` DISABLE KEYS */;

INSERT INTO `tip_kafe` (`tip_kafe_id`, `tip`)
VALUES
	(1,'Jaka'),
	(2,'Srednja'),
	(3,'Slaba'),
	(4,'Slatka'),
	(5,'Bez kofeina');

/*!40000 ALTER TABLE `tip_kafe` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table zemlja_porekla
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zemlja_porekla`;

CREATE TABLE `zemlja_porekla` (
  `zemlja_id` int unsigned NOT NULL AUTO_INCREMENT,
  `zemlja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`zemlja_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `zemlja_porekla` WRITE;
/*!40000 ALTER TABLE `zemlja_porekla` DISABLE KEYS */;

INSERT INTO `zemlja_porekla` (`zemlja_id`, `zemlja`)
VALUES
	(1,'Srbija'),
	(2,'Brazil'),
	(3,'Etiopija'),
	(4,'Kolumbija');

/*!40000 ALTER TABLE `zemlja_porekla` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
