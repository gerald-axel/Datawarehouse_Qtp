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


-- Volcando estructura para tabla qtp_dw.dim_assistants
CREATE TABLE IF NOT EXISTS `dim_assistants` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Paternal_last_name` varchar(50) DEFAULT NULL,
  `Maternal_last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_assistants: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_assistants` DISABLE KEYS */;
INSERT INTO `dim_assistants` (`Id`, `Name`, `Paternal_last_name`, `Maternal_last_name`) VALUES
	(1, 'Gerald', 'Alba', 'Moriillon'),
	(2, 'Miguel', 'Ramirez', 'Ortiz'),
	(3, 'Juan', 'Sanchez', 'Hurtado'),
	(4, 'Jorge', 'Perales', 'Medina'),
	(5, 'Gabriel', 'Rivera', 'Morales'),
	(6, 'Manuel', 'Santos', 'Reyes'),
	(7, 'Victor', 'Castillo', 'Ortiz'),
	(8, 'Arturo', 'Gomez', 'Navarro'),
	(9, 'Eduardo', 'Cruz', 'Muñoz'),
	(10, 'Rodrigo', 'Alonso', 'Gutierrez'),
	(11, 'Christian', 'Jimenez', 'Gutierrez'),
	(12, 'Armando', 'Esparza', 'Ramirez'),
	(13, 'Luis', 'Perez', 'Estrada'),
	(14, 'Marco', 'Alonso', 'Gutierrez');
/*!40000 ALTER TABLE `dim_assistants` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_categories_courses
CREATE TABLE IF NOT EXISTS `dim_categories_courses` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  `CourseName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_categories_courses: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_categories_courses` DISABLE KEYS */;
INSERT INTO `dim_categories_courses` (`Id`, `CategoryName`, `CourseName`) VALUES
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
	(13, 'STADITICS', 'Scientific'),
	(14, 'UNIT TESTING', 'IOS');
/*!40000 ALTER TABLE `dim_categories_courses` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_emailing
CREATE TABLE IF NOT EXISTS `dim_emailing` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_emailing: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_emailing` DISABLE KEYS */;
INSERT INTO `dim_emailing` (`Id`, `Type`, `Description`) VALUES
	(1, 'Y', 'Si'),
	(2, 'N', 'No');
/*!40000 ALTER TABLE `dim_emailing` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_payment_type
CREATE TABLE IF NOT EXISTS `dim_payment_type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_payment_type: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_payment_type` DISABLE KEYS */;
INSERT INTO `dim_payment_type` (`Id`, `Type`) VALUES
	(1, 'Oxxo'),
	(2, 'Spei'),
	(3, 'Credit');
/*!40000 ALTER TABLE `dim_payment_type` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_promotions
CREATE TABLE IF NOT EXISTS `dim_promotions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Percent` char(50) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_promotions: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_promotions` DISABLE KEYS */;
INSERT INTO `dim_promotions` (`Id`, `Percent`, `Code`, `Author`) VALUES
	(1, '1', 'ALMOHADA', 'Gerald Alba'),
	(2, '100', 'ALBERCA', 'Cruz Eduardo'),
	(3, '3', 'DRAGON', 'Vanessa Madera'),
	(4, '4', 'LEGO', 'Rodrigo Alonso'),
	(5, '5', 'KIRBY', 'Miguel Grover'),
	(6, '6', 'CONTPAQ', 'Victor Castillo'),
	(7, '7', 'KILLER', 'Emilio Reos'),
	(8, '8', 'FRONT', 'Arturo Navarro'),
	(9, '9', 'CATS', 'Gabriel Rivera'),
	(10, '10', 'ANGILA', 'Luis Humberto'),
	(11, '11', 'CATS', 'Eduardo Yañex'),
	(12, '12', 'TATTOS', 'Erika Juarez'),
	(13, '13', 'BREAKING', 'Alex Rails'),
	(14, '14', 'RELOAD', 'Lupita Lupe'),
	(15, '15', 'CHEATS', 'Mario Antonio');
/*!40000 ALTER TABLE `dim_promotions` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_regions
CREATE TABLE IF NOT EXISTS `dim_regions` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Region` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_regions: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_regions` DISABLE KEYS */;
INSERT INTO `dim_regions` (`Id`, `Region`, `Country`) VALUES
	(1, 'Acapulco', 'Mexico'),
	(2, 'Cd. Juarez', 'Mexico'),
	(3, 'DF', 'Mexico'),
	(4, 'GDL', 'Mexico'),
	(5, 'Guerrero', 'Mexico'),
	(6, 'L.A', 'Mexico'),
	(7, 'Manzanillo', 'Mexico'),
	(8, 'Monterrey', 'Mexico'),
	(9, 'Morelia', 'Mexico'),
	(10, 'Nevada', 'USA'),
	(11, 'Puebla', 'Mexico'),
	(12, 'Salt Lake City', 'USA'),
	(13, 'San Diego', 'USA'),
	(14, 'Vallarta', 'Mexico');
/*!40000 ALTER TABLE `dim_regions` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_status
CREATE TABLE IF NOT EXISTS `dim_status` (
  `Id` int(11) NOT NULL,
  `Type` char(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_status: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_status` DISABLE KEYS */;
INSERT INTO `dim_status` (`Id`, `Type`, `Description`) VALUES
	(1, 'ac', 'activo'),
	(2, 'in', 'inactivo');
/*!40000 ALTER TABLE `dim_status` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.dim_time
CREATE TABLE IF NOT EXISTS `dim_time` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.dim_time: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `dim_time` DISABLE KEYS */;
INSERT INTO `dim_time` (`Id`, `StartDate`, `StartYear`, `StartQuarter`, `StartMonth`, `StartWeek`, `EndDate`, `EndYear`, `EndQuarter`, `EndMonth`, `EndWeek`) VALUES
	(1, '2013-09-08', '2013', 3, 'September', 36, '2014-09-16', '2014', 3, 'September', 37),
	(2, '2014-04-08', '2014', 2, 'April', 14, '2014-05-10', '2014', 2, 'May', 18),
	(3, '2014-07-08', '2014', 3, 'July', 27, '2014-12-09', '2014', 4, 'December', 49),
	(4, '2014-07-26', '2014', 3, 'July', 29, '2014-08-29', '2014', 3, 'August', 34),
	(5, '2014-09-08', '2014', 3, 'September', 36, '2014-10-07', '2014', 4, 'October', 40),
	(6, '2014-09-08', '2014', 3, 'September', 36, '2014-12-09', '2014', 4, 'December', 49),
	(7, '2014-09-22', '2014', 3, 'September', 38, '2014-12-28', '2014', 4, 'December', 52),
	(8, '2015-07-08', '2015', 3, 'July', 27, '2015-08-09', '2015', 3, 'August', 32),
	(9, '2015-09-09', '2015', 3, 'September', 36, '2015-10-10', '2015', 4, 'October', 40),
	(10, '2015-10-11', '2015', 4, 'October', 41, '2015-12-09', '2015', 4, 'December', 49);
/*!40000 ALTER TABLE `dim_time` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_dw.facts
CREATE TABLE IF NOT EXISTS `facts` (
  `CategoryCourseID` int(11) NOT NULL,
  `StatusID` int(11) NOT NULL,
  `TimeID` int(11) NOT NULL,
  `AssistantID` int(11) NOT NULL,
  `EmalingID` int(11) NOT NULL,
  `PromotionID` int(11) NOT NULL,
  `PaymentType` int(11) NOT NULL,
  `RegionID` int(11) NOT NULL,
  `MoneyLoose` float NOT NULL,
  PRIMARY KEY (`CategoryCourseID`,`StatusID`,`TimeID`,`AssistantID`,`EmalingID`,`PromotionID`,`PaymentType`,`RegionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_dw.facts: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `facts` DISABLE KEYS */;
INSERT INTO `facts` (`CategoryCourseID`, `StatusID`, `TimeID`, `AssistantID`, `EmalingID`, `PromotionID`, `PaymentType`, `RegionID`, `MoneyLoose`) VALUES
	(1, 2, 8, 3, 1, 0, 3, 3, 0),
	(2, 2, 5, 14, 2, 0, 3, 10, 0),
	(3, 1, 10, 2, 2, 0, 2, 8, 0),
	(4, 1, 9, 1, 1, 1, 1, 4, 1),
	(5, 2, 5, 11, 2, 0, 2, 6, 0),
	(6, 2, 7, 5, 2, 5, 2, 2, 3400),
	(7, 1, 6, 4, 2, 4, 1, 9, 2680),
	(8, 2, 5, 10, 2, 10, 1, 5, 545),
	(9, 2, 3, 6, 1, 0, 1, 1, 0),
	(10, 1, 2, 9, 2, 0, 2, 11, 0),
	(11, 1, 1, 7, 1, 7, 1, 14, 4830),
	(12, 1, 5, 12, 2, 10, 3, 13, 644),
	(13, 1, 5, 13, 2, 0, 2, 12, 0),
	(14, 1, 4, 8, 1, 0, 3, 7, 0);
/*!40000 ALTER TABLE `facts` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
