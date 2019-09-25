-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.38 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for web2
CREATE DATABASE IF NOT EXISTS `web2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `web2`;

-- Dumping structure for table web2.angajati
CREATE TABLE IF NOT EXISTS `angajati` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL COMMENT 'First name',
  `tele` varchar(50) NOT NULL,
  `group_id` tinyint(3) unsigned NOT NULL COMMENT 'Group ID',
  PRIMARY KEY (`id`),
  KEY `FK_students_groups` (`group_id`),
  CONSTRAINT `FK_students_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='List of angajati';

-- Dumping data for table web2.angajati: ~6 rows (approximately)
/*!40000 ALTER TABLE `angajati` DISABLE KEYS */;
INSERT INTO `angajati` (`id`, `name`, `tele`, `group_id`) VALUES
	(2, 'Eminescu MihAI', '37378555555', 2),
	(3, 'Alecsandri VaSi', '+37378555555', 1),
	(4, 'Matcovski Dumit', '+37378555555', 2),
	(5, 'Matcovski Dumit', '+37378555555', 2),
	(6, 'Vieru Grigore', '+37378555555', 2);
/*!40000 ALTER TABLE `angajati` ENABLE KEYS */;

-- Dumping structure for table web2.Books
CREATE TABLE IF NOT EXISTS `Books` (
  `Name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Year` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Books for books';

-- Dumping data for table web2.Books: ~7 rows (approximately)
/*!40000 ALTER TABLE `Books` DISABLE KEYS */;
INSERT INTO `Books` (`Name`, `Author`, `Year`) VALUES
	('Master i Margarita', 'Bulgakov', 1922),
	('принцесса мононоке', 'хаяо миядзаки', 1997),
	('Преступление и Наказание', 'Достоевский', 1866),
	('Унесенные призраками ', 'Хаяо Миядзаки', 2006),
	('Ходячий Замок', 'Хаяо Миядзаки', 2004),
	('вф', 'фыв', 5),
	('45', '45', 45);
/*!40000 ALTER TABLE `Books` ENABLE KEYS */;

-- Dumping structure for table web2.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT 'Group name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table web2.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`) VALUES
	(1, 'IT'),
	(2, 'AGRO');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table web2.lucrulDeControl
CREATE TABLE IF NOT EXISTS `lucrulDeControl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Text` text,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='#lucrulDeControl';

-- Dumping data for table web2.lucrulDeControl: ~0 rows (approximately)
/*!40000 ALTER TABLE `lucrulDeControl` DISABLE KEYS */;
/*!40000 ALTER TABLE `lucrulDeControl` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
