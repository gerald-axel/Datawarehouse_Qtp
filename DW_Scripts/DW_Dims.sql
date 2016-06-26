-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para qtp_dw
CREATE DATABASE IF NOT EXISTS `qtp_dw` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `qtp_dw`;


-- Volcando estructura para tabla qtp_dw.dim_assistants_by_region
CREATE TABLE IF NOT EXISTS `dim_assistants_by_region` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Region` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `AssistansNumber` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_assistants_by_region: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_assistants_by_region` DISABLE KEYS */;
INSERT INTO `dim_assistants_by_region` (`Id`, `Region`, `Country`, `AssistansNumber`) VALUES
	(1, 'Arkansas', 'USA', 2),
	(2, 'San Diego', 'USA', 1),
	(3, 'Cd. Juarez', 'Mexico', 1),
	(4, 'Guerrero', 'Mexico', 1),
	(5, 'DF', 'Mexico', 1),
	(6, 'Manzanillo', 'Mexico', 1),
	(7, 'GDL', 'Mexico', 1),
	(8, 'Salt Lake City', 'USA', 1),
	(9, 'Acapulco', 'Mexico', 1),
	(10, 'L.A', 'Mexico', 1),
	(11, 'Morelia', 'Mexico', 1),
	(12, 'Puebla', 'Mexico', 1),
	(13, 'Monterrey', 'Mexico', 1),
	(14, 'Nevada', 'USA', 1),
	(15, 'Vallarta', 'Mexico', 1);
/*!40000 ALTER TABLE `dim_assistants_by_region` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_categories_courses
CREATE TABLE IF NOT EXISTS `dim_categories_courses` (
  `1` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`1`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_categories_courses: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_categories_courses` DISABLE KEYS */;
INSERT INTO `dim_categories_courses` (`1`, `CategoryName`, `CourseName`) VALUES
	(1, 'ADMINISTRATION', 'c#'),
	(2, 'ARDUINO', 'Arduino'),
	(3, 'CMMI', 'PHP'),
	(4, 'ITL FOUNDATION', 'JAVA'),
	(5, 'LABVIEW', 'Labview'),
	(6, 'LEARNING', 'python'),
	(7, 'MICROSOFT', 'c++'),
	(8, 'NATIONAL INSTRUMENTS', 'Javascript'),
	(9, 'PROGRAMMING', 'ruby'),
	(10, 'PROUD MEMBER', 'android'),
	(11, 'PSP', '.NET'),
	(12, 'R PROGRAMMING', 'R'),
	(13, 'RASPBERRY', 'Raspberry'),
	(14, 'RASPBERRY', 'Raspberry'),
	(15, 'STADITICS', 'Scientific'),
	(16, 'UNIT TESTING', 'IOS');
/*!40000 ALTER TABLE `dim_categories_courses` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_categories_courses_number
CREATE TABLE IF NOT EXISTS `dim_categories_courses_number` (
  `1` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseNumber` int(11) DEFAULT '0',
  PRIMARY KEY (`1`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_categories_courses_number: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_categories_courses_number` DISABLE KEYS */;
INSERT INTO `dim_categories_courses_number` (`1`, `CategoryName`, `CourseNumber`) VALUES
	(32, 'RASPBERRY', 2),
	(33, 'MICROSOFT', 1),
	(34, 'UNIT TESTING', 1),
	(35, 'R PROGRAMMING', 1),
	(36, 'ITL FOUNDATION', 1),
	(37, 'LEARNING', 1),
	(38, 'PROUD MEMBER', 1),
	(39, 'STADITICS', 1),
	(40, 'CMMI', 1),
	(41, 'PROGRAMMING', 1),
	(42, 'NATIONAL INSTRUMENTS', 1),
	(43, 'ARDUINO', 1),
	(44, 'ADMINISTRATION', 1),
	(45, 'PSP', 1),
	(46, 'LABVIEW', 1);
/*!40000 ALTER TABLE `dim_categories_courses_number` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_categories_with_courses_actives
CREATE TABLE IF NOT EXISTS `dim_categories_with_courses_actives` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_categories_with_courses_actives: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_categories_with_courses_actives` DISABLE KEYS */;
INSERT INTO `dim_categories_with_courses_actives` (`Id`, `CategoryName`, `CourseName`) VALUES
	(31, 'UNIT TESTING', 'IOS'),
	(32, 'STADITICS', 'Scientific'),
	(33, 'R PROGRAMMING', 'R'),
	(34, 'PSP', '.NET'),
	(35, 'PROUD MEMBER', 'android'),
	(36, 'MICROSOFT', 'c++'),
	(37, 'ITL FOUNDATION', 'JAVA'),
	(38, 'CMMI', 'PHP');
/*!40000 ALTER TABLE `dim_categories_with_courses_actives` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_categories_with_courses_inactives
CREATE TABLE IF NOT EXISTS `dim_categories_with_courses_inactives` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_categories_with_courses_inactives: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_categories_with_courses_inactives` DISABLE KEYS */;
INSERT INTO `dim_categories_with_courses_inactives` (`Id`, `CategoryName`, `CourseName`) VALUES
	(16, 'RASPBERRY', 'Raspberry'),
	(17, 'RASPBERRY', 'Raspberry'),
	(18, 'PROGRAMMING', 'ruby'),
	(19, 'NATIONAL INSTRUMENTS', 'Javascript'),
	(20, 'LEARNING', 'python'),
	(21, 'LABVIEW', 'Labview'),
	(22, 'ARDUINO', 'Arduino'),
	(23, 'ADMINISTRATION', 'c#');
/*!40000 ALTER TABLE `dim_categories_with_courses_inactives` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_courses_less_assistants
CREATE TABLE IF NOT EXISTS `dim_courses_less_assistants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  `NumberOfAssistant` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_courses_less_assistants: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_courses_less_assistants` DISABLE KEYS */;
INSERT INTO `dim_courses_less_assistants` (`Id`, `CategoryName`, `CourseName`, `NumberOfAssistant`) VALUES
	(1, 'PSP', '.NET', 1),
	(2, 'ARDUINO', 'Arduino', 1),
	(3, 'LEARNING', 'python', 1),
	(4, 'R PROGRAMMING', 'R', 1),
	(5, 'ADMINISTRATION', 'c#', 1),
	(6, 'NATIONAL INSTRUMENTS', 'Javascript', 1),
	(7, 'ITL FOUNDATION', 'JAVA', 1),
	(8, 'UNIT TESTING', 'IOS', 1),
	(9, 'PROGRAMMING', 'ruby', 1),
	(10, 'STADITICS', 'Scientific', 1),
	(11, 'MICROSOFT', 'c++', 1),
	(12, 'LABVIEW', 'Labview', 1),
	(13, 'CMMI', 'PHP', 1),
	(14, 'PROUD MEMBER', 'android', 1),
	(15, 'RASPBERRY', 'Raspberry', 2);
/*!40000 ALTER TABLE `dim_courses_less_assistants` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_courses_promotions
CREATE TABLE IF NOT EXISTS `dim_courses_promotions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(50) DEFAULT NULL,
  `MoneyLoose` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_courses_promotions: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_courses_promotions` DISABLE KEYS */;
INSERT INTO `dim_courses_promotions` (`Id`, `CourseName`, `MoneyLoose`) VALUES
	(1, '.NET', 4830),
	(2, 'android', 1215),
	(3, 'Arduino', 222),
	(4, 'c#', 1800),
	(5, 'c++', 2680),
	(6, 'IOS', 296),
	(7, 'JAVA', 1),
	(8, 'Javascript', 545),
	(9, 'Labview', 377),
	(10, 'PHP', 1600),
	(11, 'python', 3400),
	(12, 'R', 644),
	(13, 'Raspberry', 654),
	(14, 'ruby', 3960),
	(15, 'Scientific', 387);
/*!40000 ALTER TABLE `dim_courses_promotions` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_courses_time
CREATE TABLE IF NOT EXISTS `dim_courses_time` (
  `1` int(11) NOT NULL AUTO_INCREMENT,
  `CourseName` varchar(50) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `StartYear` year(4) DEFAULT NULL,
  `StartQuarter` int(11) DEFAULT NULL,
  `StartMonth` varchar(50) DEFAULT NULL,
  `StartWeek` int(11) DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `EndYear` year(4) DEFAULT NULL,
  `EndQuarter` int(11) DEFAULT NULL,
  `EndMonth` varchar(50) DEFAULT NULL,
  `EndWeek` int(11) DEFAULT NULL,
  PRIMARY KEY (`1`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_courses_time: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_courses_time` DISABLE KEYS */;
INSERT INTO `dim_courses_time` (`1`, `CourseName`, `StartDate`, `StartYear`, `StartQuarter`, `StartMonth`, `StartWeek`, `EndDate`, `EndYear`, `EndQuarter`, `EndMonth`, `EndWeek`) VALUES
	(1, 'JAVA', '2015-09-09', '2015', 3, 'September', 36, '2015-10-10', '2015', 4, 'October', 40),
	(2, 'PHP', '2015-10-11', '2015', 4, 'October', 41, '2015-12-09', '2015', 4, 'December', 49),
	(3, 'c#', '2015-07-08', '2015', 3, 'July', 27, '2015-08-09', '2015', 3, 'August', 32),
	(4, 'c++', '2014-09-08', '2014', 3, 'September', 36, '2014-12-09', '2014', 4, 'December', 49),
	(5, 'python', '2014-09-22', '2014', 3, 'September', 38, '2014-12-28', '2014', 4, 'December', 52),
	(6, 'ruby', '2014-07-08', '2014', 3, 'July', 27, '2014-12-09', '2014', 4, 'December', 49),
	(7, '.NET', '2013-09-08', '2013', 3, 'September', 36, '2014-09-16', '2014', 3, 'September', 37),
	(8, 'IOS', '2014-07-26', '2014', 3, 'July', 29, '2014-08-29', '2014', 3, 'August', 34),
	(9, 'android', '2014-04-08', '2014', 2, 'April', 14, '2014-05-10', '2014', 2, 'May', 18),
	(10, 'Javascript', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(11, 'Labview', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(12, 'R', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(13, 'Scientific', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(14, 'Arduino', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(15, 'Raspberry', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(16, 'Raspberry', '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40);
/*!40000 ALTER TABLE `dim_courses_time` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
