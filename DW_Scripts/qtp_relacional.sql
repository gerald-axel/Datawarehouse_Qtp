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

-- Volcando estructura de base de datos para qtp_proyecto
CREATE DATABASE IF NOT EXISTS `qtp_proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `qtp_proyecto`;


-- Volcando estructura para tabla qtp_proyecto.assistants
CREATE TABLE IF NOT EXISTS `assistants` (
  `id_assistant` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `creation_type` enum('automatic','manual') NOT NULL DEFAULT 'automatic',
  `name` varchar(50) NOT NULL,
  `paternal_last_name` varchar(50) NOT NULL,
  `maternal_last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `region` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `emailing` enum('Y','N') NOT NULL DEFAULT 'Y',
  `payment_type` varchar(50) NOT NULL,
  `initial_import` double NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `discount` enum('Y','N') NOT NULL,
  `id_discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_assistant`),
  KEY `id_course` (`id_course`),
  KEY `fk_discount` (`id_discount`),
  CONSTRAINT `fk_course` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id_course`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_discount` FOREIGN KEY (`id_discount`) REFERENCES `courses_discounts` (`id_discount`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla qtp_proyecto.assistants: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `assistants` DISABLE KEYS */;
INSERT INTO `assistants` (`id_assistant`, `id_course`, `creation_type`, `name`, `paternal_last_name`, `maternal_last_name`, `email`, `phone`, `region`, `country`, `emailing`, `payment_type`, `initial_import`, `paid`, `discount`, `id_discount`) VALUES
	(1, 1, 'automatic', 'Gerald', 'Alba', 'Moriillon', 'gerald_6502@hotmail.com', '3242343437', 'GDL', 'Mexico', 'Y', 'OXXO', 1, 0, 'Y', 1),
	(2, 2, 'manual', 'Miguel', 'Ramirez', 'Ortiz', 'miguel123@hotmail.com', '5345345343', 'Monterrey', 'Mexico', 'N', 'SPEI', 1, 0, 'N', 2),
	(3, 3, 'manual', 'Juan', 'Sanchez', 'Hurtado', 'hurtado98@hotmail.com', '3334543533', 'DF', 'Mexico', 'Y', 'CREDIT', 0, 0, 'N', 3),
	(4, 4, 'automatic', 'Jorge', 'Perales', 'Medina', 'jorge_per@hotmail.com', '3313234222', 'Morelia', 'Mexico', 'N', 'OXXO', 0, 0, 'Y', 4),
	(5, 5, 'automatic', 'Gabriel', 'Rivera', 'Morales', 'papo3432@hotmail.com', '3338161859', 'Cd. Juarez', 'Mexico', 'N', 'SPEI', 0, 0, 'Y', 5),
	(6, 6, 'automatic', 'Manuel', 'Santos', 'Reyes', 'cuatotote@hotmail.com', '3336320675', 'Acapulco', 'Mexico', 'Y', 'OXXO', 0, 0, 'N', 6),
	(7, 7, 'manual', 'Victor', 'Castillo', 'Ortiz', 'v.castillo@hotmail.com', '3313053725', 'Vallarta', 'Mexico', 'Y', 'OXXO', 0, 0, 'Y', 7),
	(8, 8, 'automatic', 'Arturo', 'Gomez', 'Navarro', 'g.navarro94@hotmail.com', '3310072029', 'Manzanillo', 'Mexico', 'Y', 'CREDIT', 0, 0, 'N', 8),
	(9, 9, 'manual', 'Eduardo', 'Cruz', 'Muñoz', 'elhacker93@hotmail.com', '3315689756', 'Puebla', 'Mexico', 'N', 'SPEI', 0, 0, 'N', 9),
	(10, 10, 'automatic', 'Rodrigo', 'Alonso', 'Gutierrez', 'alonso_gui@hotmail.com', '3310479682', 'Guerrero', 'Mexico', 'N', 'OXXO', 0, 0, 'Y', 10),
	(11, 11, 'automatic', 'Christian', 'Jimenez', 'Gutierrez', 'chris3.jim@hotmail.com', '3310453482', 'L.A', 'Mexico', 'N', 'SPEI', 0, 0, 'N', 10),
	(12, 12, 'manual', 'Armando', 'Esparza', 'Ramirez', 'arman.ra2i@hotmail.com', '3345379682', 'San Diego', 'USA', 'N', 'CREDIT', 0, 0, 'Y', 10),
	(13, 13, 'manual', 'Luis', 'Perez', 'Estrada', 'luis.p54@hotmail.com', '3375656456', 'Salt Lake City', 'USA', 'N', 'SPEI', 0, 0, 'N', 10),
	(14, 14, 'automatic', 'Rodrigo', 'Alonso', 'Gutierrez', 'al_gu@hotmail.com', '3316456452', 'Nevada', 'USA', 'N', 'CREDIT', 0, 0, 'N', 10),
	(15, 15, 'manual', 'Rodrigo', 'Alonso', 'Gutierrez', 'alonso_gui@gmail.com', '3378945682', 'Arkansas', 'USA', 'N', 'OXXO', 0, 0, 'Y', 10),
	(16, 15, 'manual', 'Rodrigo', 'Alonso', 'Gutierrez', 'alonso_gui@gmail.com', '3378945682', 'Arkansas', 'USA', 'N', 'OXXO', 0, 0, 'Y', 10);
/*!40000 ALTER TABLE `assistants` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.assistants_bonus
CREATE TABLE IF NOT EXISTS `assistants_bonus` (
  `id_bonus` int(11) NOT NULL AUTO_INCREMENT,
  `id_assistant` int(11) NOT NULL,
  `bonus` double NOT NULL,
  PRIMARY KEY (`id_bonus`),
  KEY `fk_assistant_1` (`id_assistant`),
  CONSTRAINT `fk_assistant_1` FOREIGN KEY (`id_assistant`) REFERENCES `assistants` (`id_assistant`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.assistants_bonus: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `assistants_bonus` DISABLE KEYS */;
INSERT INTO `assistants_bonus` (`id_bonus`, `id_assistant`, `bonus`) VALUES
	(1, 1, 10),
	(2, 2, 20),
	(3, 3, 30),
	(4, 4, 40),
	(6, 6, 50),
	(7, 7, 60),
	(8, 8, 70),
	(9, 9, 80),
	(10, 10, 90),
	(11, 11, 100),
	(12, 12, 110),
	(13, 13, 130),
	(14, 14, 140),
	(15, 15, 150),
	(16, 1, 10);
/*!40000 ALTER TABLE `assistants_bonus` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.assistants_files
CREATE TABLE IF NOT EXISTS `assistants_files` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `id_assistant` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`id_file`),
  KEY `fk_assistant_3` (`id_assistant`),
  CONSTRAINT `fk_assistant_3` FOREIGN KEY (`id_assistant`) REFERENCES `assistants` (`id_assistant`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.assistants_files: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `assistants_files` DISABLE KEYS */;
INSERT INTO `assistants_files` (`id_file`, `id_assistant`, `file`) VALUES
	(1, 1, 'C:/Users/Gerald-Axel/Documents/file_1.doc'),
	(2, 1, 'C:/Users/Gerald-Axel/Documents/file_2.doc'),
	(3, 3, 'C:/Users/Gerald-Axel/Documents/file_3.doc'),
	(4, 4, 'C:/Users/Gerald-Axel/Documents/file_4.doc'),
	(5, 5, 'C:/Users/Gerald-Axel/Documents/file_5.doc'),
	(6, 6, 'C:/Users/Gerald-Axel/Documents/file_6.doc'),
	(7, 7, 'C:/Users/Gerald-Axel/Documents/file_7.doc'),
	(8, 8, 'C:/Users/Gerald-Axel/Documents/file_8.doc'),
	(9, 9, 'C:/Users/Gerald-Axel/Documents/file_9.doc'),
	(10, 10, 'C:/Users/Gerald-Axel/Documents/file_10.doc'),
	(11, 11, 'C:/Users/Gerald-Axel/Documents/file_11.doc'),
	(12, 12, 'C:/Users/Gerald-Axel/Documents/file_12.doc'),
	(13, 13, 'C:/Users/Gerald-Axel/Documents/file_13.doc'),
	(14, 14, 'C:/Users/Gerald-Axel/Documents/file_14.doc'),
	(15, 15, 'C:/Users/Gerald-Axel/Documents/file_15.doc');
/*!40000 ALTER TABLE `assistants_files` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.assistants_observations
CREATE TABLE IF NOT EXISTS `assistants_observations` (
  `id_observation` int(11) NOT NULL AUTO_INCREMENT,
  `id_assistant` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id_observation`),
  KEY `fk_assistant_4` (`id_assistant`),
  CONSTRAINT `fk_assistant_4` FOREIGN KEY (`id_assistant`) REFERENCES `assistants` (`id_assistant`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.assistants_observations: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `assistants_observations` DISABLE KEYS */;
INSERT INTO `assistants_observations` (`id_observation`, `id_assistant`, `author`, `created`, `message`) VALUES
	(1, 1, 'Admin 1', '2015-10-27 11:18:07', 'Cliente dado de alta'),
	(2, 2, 'Admin 2', '2015-09-13 10:18:07', 'Cliente dado de alta'),
	(3, 3, 'Admin 3', '2015-04-22 09:17:07', 'Cliente dado de alta'),
	(4, 4, 'Admin 4', '2014-11-26 11:18:08', 'Cliente dado de alta'),
	(5, 5, 'Admin 5', '2015-08-25 08:18:07', 'Cliente dado de alta'),
	(6, 6, 'Admin 6', '2014-11-13 08:15:07', 'Cliente dado de alta'),
	(7, 7, 'Admin 7', '2015-10-27 11:18:07', 'Cliente dado de alta'),
	(8, 8, 'Admin 8', '2015-06-17 06:18:07', 'Cliente dado de alta'),
	(9, 9, 'Admin 9', '2015-11-27 08:18:07', 'Cliente dado de alta'),
	(10, 10, 'Admin 10', '2015-06-06 07:18:07', 'Cliente dado de alta'),
	(11, 11, 'Admin 11', '2015-06-06 07:18:07', 'Cliente dado de alta'),
	(12, 12, 'Admin 12', '2015-06-06 07:18:07', 'Cliente dado de alta'),
	(13, 13, 'Admin 13', '2015-06-06 07:18:07', 'Cliente dado de alta'),
	(14, 14, 'Admin 14', '2015-06-06 07:18:07', 'Cliente dado de alta'),
	(15, 15, 'Admin 15', '2015-06-06 07:18:07', 'Cliente dado de alta');
/*!40000 ALTER TABLE `assistants_observations` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `identificator` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('ac','in') NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.categories: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id_category`, `identificator`, `name`, `status`) VALUES
	(1, 'SER', 'ITL FOUNDATION', 'ac'),
	(2, 'GOB', 'CMMI', 'ac'),
	(3, 'ADM', 'ADMINISTRATION', 'in'),
	(4, 'ISS', 'MICROSOFT', 'in'),
	(5, 'SEP', 'LEARNING', 'in'),
	(6, 'BRI', 'PROGRAMMING', 'ac'),
	(7, 'STR', 'PSP', 'ac'),
	(8, 'CHT', 'UNIT TESTING', 'in'),
	(9, 'ASQ', 'PROUD MEMBER', 'in'),
	(10, 'PRT', 'NATIONAL INSTRUMENTS', 'ac'),
	(11, 'IPS', 'LABVIEW', 'ac'),
	(12, 'SAP', 'R PROGRAMMING', 'in'),
	(13, 'XAR', 'STADITICS', 'ac'),
	(14, 'KIS', 'ARDUINO', 'ac'),
	(15, 'GAT', 'RASPBERRY', 'in');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.categories_courses
CREATE TABLE IF NOT EXISTS `categories_courses` (
  `id_category` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  PRIMARY KEY (`id_course`,`id_category`),
  KEY `fk_id_category` (`id_category`),
  CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_id_course_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.categories_courses: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `categories_courses` DISABLE KEYS */;
INSERT INTO `categories_courses` (`id_category`, `id_course`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 5),
	(6, 6),
	(7, 7),
	(8, 8),
	(9, 9),
	(10, 10),
	(11, 11),
	(12, 12),
	(13, 13),
	(14, 14),
	(15, 15),
	(15, 16);
/*!40000 ALTER TABLE `categories_courses` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `show` enum('on','off') NOT NULL DEFAULT 'on',
  `name` varchar(50) NOT NULL,
  `objetive` varchar(350) NOT NULL,
  `values` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `start_event_date` date NOT NULL,
  `end_event_date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` enum('ac','in') NOT NULL,
  `inactive_course` varchar(150) DEFAULT NULL,
  `event_image` varchar(150) NOT NULL,
  `to_image` varchar(150) NOT NULL,
  `promotion` enum('y','n') NOT NULL,
  `promotion_image` varchar(150) DEFAULT NULL,
  `temary_pdf` varchar(150) NOT NULL,
  `cv_pdf` varchar(150) NOT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.courses: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id_course`, `show`, `name`, `objetive`, `values`, `price`, `start_event_date`, `end_event_date`, `address`, `status`, `inactive_course`, `event_image`, `to_image`, `promotion`, `promotion_image`, `temary_pdf`, `cv_pdf`) VALUES
	(1, 'on', 'JAVA', 'Aprender Java', 'Programacion', 100, '2015-09-09', '2015-10-10', 'Loma Bonita', 'ac', 'Pronto habrá más cursos', 'promotion.jpg', 'to_image.png', 'y', 'java_course.png', 'java_temary.pdf', 'java_cv.pdf'),
	(2, 'on', 'PHP', 'Aprender PHP', 'Programacion', 80000, '2015-10-11', '2015-12-09', 'CSW', 'ac', 'Pronto habrá más cursos', 'promotion_1.jpg', 'to_image1.png', 'n', 'php_course.png', 'php_temary.pdf', 'php_cv.pdf'),
	(3, 'off', 'c#', 'Aprender C#', 'Programacion', 60000, '2015-07-08', '2015-08-09', 'Plaza del Sol', 'in', 'Pronto habrá más cursos', 'promotion_2.jpg', 'to_image2.png', 'y', 'c#_course.png', 'c#_temary.pdf', 'c#_cv.pdf'),
	(4, 'off', 'c++', 'Aprender C++', 'Programacion', 67000, '2014-09-08', '2014-12-09', 'CSW', 'ac', 'Pronto habrá más cursos', 'promotion_3.jpg', 'to_image3.png', 'n', 'c++_course.png', 'c+_temary.pdf', 'c+_cv.pdf'),
	(5, 'off', 'python', 'Aprender python', 'Programacion', 68000, '2014-09-22', '2014-12-28', 'Galerias', 'in', 'Pronto habrá más cursos', 'promotion_4.jpg', 'to_image4.png', 'n', 'python_course.png', 'python_temary.pdf', 'python_cv.pdf'),
	(6, 'on', 'ruby', 'Aprender ruby', 'Programacion', 66000, '2014-07-08', '2014-12-09', 'IBM', 'in', 'Pronto habrá más cursos', 'promotion_5.jpg', 'to_image5.png', 'y', 'ruby_course.png', 'ruby_temary.pdf', 'ruby_cv.pdf'),
	(7, 'on', '.NET', 'Aprender .NET', 'Programacion', 69000, '2013-09-08', '2014-09-16', 'Parque Tecnologio', 'ac', 'Pronto habrá más cursos', 'promotion_6.jpg', 'to_image6.png', 'y', 'net_course.png', 'net_temary.pdf', 'net_cv.pdf'),
	(8, 'off', 'IOS', 'Aprender IOS', 'Programacion', 3700, '2014-07-26', '2014-08-29', 'CSW', 'ac', 'Pronto habrá más cursos', 'promotion_7.jpg', 'to_image7.png', 'n', 'ios_course.png', 'ios_temary.pdf', 'ios_cv.pdf'),
	(9, 'off', 'android', 'AprenderAndroid', 'Programacion', 13500, '2014-04-08', '2014-05-10', 'ITESO', 'ac', 'Pronto habrá más cursos', 'promotion_8.jpg', 'to_image8.png', 'y', 'android_course.png', 'android_temary.pdf', 'android_cv.pdf'),
	(10, 'off', 'Javascript', 'AprenderJavascript', 'Programacion', 5450, '2014-09-08', '2014-10-07', 'UMG', 'in', 'Pronto habrá más cursos', 'promotion_9.jpg', 'to_image9.png', 'n', 'js_course.png', 'js_temary.pdf', 'js_cv.pdf'),
	(11, 'off', 'Labview', 'Aprender Labview', 'Programacion', 3770, '2014-09-08', '2014-10-07', 'TEC', 'in', 'Pronto habrá más cursos', 'promotion_10.jpg', 'to_image10.png', 'n', 'labview_course.png', 'labview_temary.pdf', 'labview_cv.pdf'),
	(12, 'on', 'R', 'Aprender R', 'Programacion', 6440, '2014-09-08', '2014-10-07', 'UVM', 'ac', 'Pronto habrá más cursos', 'promotion_11.jpg', 'to_image11.png', 'y', 'r_course.png', 'r_temary.pdf', 'r_cv.pdf'),
	(13, 'on', 'Scientific', 'Aprender Scientific', 'Programacion', 3870, '2014-09-08', '2014-10-07', 'IJALTI', 'ac', 'Pronto habrá más cursos', 'promotion_12.jpg', 'to_image12.png', 'n', 'scientific_course.png', 'scientific_temary.pdf', 'scientific_cv.pdf'),
	(14, 'off', 'Arduino', 'Aprender Arduino', 'Programacion', 2220, '2014-09-08', '2014-10-07', 'CANIETI', 'in', 'Pronto habrá más cursos', 'promotion_13.jpg', 'to_image13.png', 'y', 'arduino_course.png', 'arduino_temary.pdf', 'arduino_cv.pdf'),
	(15, 'off', 'Raspberry', 'Aprender Raspberry', 'Programacion', 6540, '2014-09-08', '2014-10-07', 'UMG', 'in', 'Pronto habrá más cursos', 'promotion_14.jpg', 'to_image14.png', 'y', 'raspberry_course.png', 'raspberry_temary.pdf', 'raspberry_cv.pdf'),
	(16, 'off', 'Raspberry', 'Aprender Raspberry', 'Programacion', 6540, '2014-09-08', '2014-10-07', 'UMG', 'in', 'Pronto habrá más cursos', 'promotion_14.jpg', 'to_image14.png', 'y', 'raspberry_course.png', 'raspberry_temary.pdf', 'raspberry_cv.pdf');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;


-- Volcando estructura para tabla qtp_proyecto.courses_discounts
CREATE TABLE IF NOT EXISTS `courses_discounts` (
  `id_discount` int(11) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `percent` int(11) unsigned NOT NULL,
  `code` varchar(50) NOT NULL,
  PRIMARY KEY (`id_discount`),
  KEY `fk_id_course` (`id_course`),
  CONSTRAINT `fk_id_course` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id_course`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla qtp_proyecto.courses_discounts: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `courses_discounts` DISABLE KEYS */;
INSERT INTO `courses_discounts` (`id_discount`, `id_course`, `author`, `percent`, `code`) VALUES
	(1, 1, 'Gerald Alba', 1, 'ALMOHADA'),
	(2, 2, 'Cruz Eduardo', 2, 'ALBERCA'),
	(3, 3, 'Vanessa Madera', 3, 'DRAGON'),
	(4, 4, 'Rodrigo Alonso', 4, 'LEGO'),
	(5, 5, 'Miguel Grover', 5, 'KIRBY'),
	(6, 6, 'Victor Castillo', 6, 'CONTPAQ'),
	(7, 7, 'Emilio Reos', 7, 'KILLER'),
	(8, 8, 'Arturo Navarro', 8, 'FRONT'),
	(9, 9, 'Gabriel Rivera', 9, 'CATS'),
	(10, 10, 'Luis Humberto', 10, 'ANGILA'),
	(11, 11, 'Eduardo Yañex', 11, 'CATS'),
	(12, 12, 'Erika Juarez', 12, 'TATTOS'),
	(13, 13, 'Alex Rails', 13, 'BREAKING'),
	(14, 14, 'Lupita Lupe', 14, 'RELOAD'),
	(15, 15, 'Mario Antonio', 15, 'CHEATS');
/*!40000 ALTER TABLE `courses_discounts` ENABLE KEYS */;


-- Volcando estructura para procedimiento qtp_proyecto.archivos_asistentes
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `archivos_asistentes`(asistente int)
begin
		select assistants_files.file from assistants_files where assistants_files.id_assistant = asistente;
	end//
DELIMITER ;


-- Volcando estructura para procedimiento qtp_proyecto.mostar_asistentes_curso
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostar_asistentes_curso`(IN `curso` varchar(2))
begin
		select assistants.name from assistants where assistants.id_course = curso;
	end//
DELIMITER ;


-- Volcando estructura para procedimiento qtp_proyecto.mostar_cursos
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostar_cursos`(active varchar(2))
begin
		/*Muestra cursos activos o inactivos*/
		select courses.name from courses where courses.status = active;
	end//
DELIMITER ;


-- Volcando estructura para procedimiento qtp_proyecto.mostrar_codigos_descuentos_cursos
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_codigos_descuentos_cursos`(IN `curso` int)
begin
		select courses_discounts.code from courses_discounts where courses_discounts.id_course = curso;
	end//
DELIMITER ;


-- Volcando estructura para procedimiento qtp_proyecto.mostrar_observaciones_asistente
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrar_observaciones_asistente`(asistente int)
begin
		select assistants_observations.message from assistants_observations where assistants_observations.id_assistant = asistente;
	end//
DELIMITER ;


-- Volcando estructura para función qtp_proyecto.cuantos_bonos_tiene_cliente
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `cuantos_bonos_tiene_cliente`(cliente int) RETURNS int(11)
    DETERMINISTIC
BEGIN
		DECLARE cantidadBonos int;
		set cantidadBonos = (SELECT COUNT(*) FROM assistants_bonus WHERE assistants_bonus.id_assistant = cliente);
		return(cantidadBonos);
	END//
DELIMITER ;


-- Volcando estructura para función qtp_proyecto.cursos_activos_por_categoria
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `cursos_activos_por_categoria`(`categoria` int) RETURNS int(11)
    DETERMINISTIC
BEGIN
		/* Returns the number of costumers that had payed with the payment method that you insert*/
		DECLARE numberOfCourses int;
		set numberOfCourses = (SELECT COUNT(*) FROM courses, categories_courses WHERE categories_courses.id_category = categoria AND categories_courses.id_course = courses.id_course AND courses.status = 'ac');
		return(numberOfCourses);
	END//
DELIMITER ;


-- Volcando estructura para función qtp_proyecto.dinero_actual_curso
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `dinero_actual_curso`(`curso` int) RETURNS double
    DETERMINISTIC
BEGIN
		DECLARE totalInitialImport double;
		DECLARE totalBonos double;
		DECLARE final double;
		set totalInitialImport = (select sum(assistants.initial_import) from assistants where assistants.id_course = curso);
		set totalBonos = (select sum(assistants_bonus.bonus) from assistants, assistants_bonus where assistants.id_course = curso and assistants.id_assistant = assistants_bonus.id_assistant);
		set final = totalInitialImport + totalBonos;
		return(final);
	END//
DELIMITER ;


-- Volcando estructura para función qtp_proyecto.revisar_cliente_ha_pagado
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `revisar_cliente_ha_pagado`(cliente int) RETURNS tinyint(4)
    DETERMINISTIC
BEGIN
		DECLARE pago tinyint;
		set pago = (SELECT assistants.paid FROM assistants WHERE assistants.id_assistant = cliente);
		return(pago);
	END//
DELIMITER ;


-- Volcando estructura para función qtp_proyecto.visualizar_cantidad_tipo_pago
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `visualizar_cantidad_tipo_pago`(`correo` varchar (50)) RETURNS int(11)
    DETERMINISTIC
BEGIN
		DECLARE numberAccounts int;
		set numberAccounts = (SELECT COUNT(*) from assistants where assistants.email LIKE CONCAT('%', correo, '%'));
		return(numberAccounts);
	END//
DELIMITER ;


-- Volcando estructura para disparador qtp_proyecto.insert_assistant_valid
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_assistant_valid` BEFORE INSERT ON `assistants` FOR EACH ROW BEGIN
			DECLARE valid varchar(5);
			
			/*Assistant initial_import  validation variables*/
			DECLARE discounted double;
			DECLARE price double;
			DECLARE finalPrice double;
			
			set valid = (SELECT IF(new.email  LIKE '%@%' AND new.email LIKE '%.com%','true','false'));
			if(valid != 'true') then
				 SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'No entro';
			end if;
			
			if(new.discount = 'Y') then
				set discounted = (SELECT courses_discounts.percent from courses_discounts WHERE courses_discounts.id_discount = new.id_discount) / 100;
				set price = (SELECT courses.price from courses WHERE courses.id_course = new.id_course);
				set finalPrice = (1 - discounted) * price;
				
				if(new.initial_import > finalPrice) then
					SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El importe inicial supera el precio de lista';
				end if;
			end if;
		END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Volcando estructura para disparador qtp_proyecto.insert_bonus_validation
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_bonus_validation` BEFORE INSERT ON `assistants_bonus` FOR EACH ROW BEGIN
			DECLARE totalBonus double;
			DECLARE initialImport double;
			DECLARE hasDiscount varchar(1);
			DECLARE coursePrice double;
			DECLARE courseId int;
			
			/*Bonus with a client with a course discount variables*/
			DECLARE idDiscount int;
			DECLARE percentDiscount double;
			DECLARE courseDiscountPrice double;
			
			set courseId = (SELECT assistants.id_course FROM assistants WHERE assistants.id_assistant = new.id_assistant);
			set totalBonus = (SELECT SUM(bonus) FROM assistants_bonus WHERE id_assistant = new.id_assistant);
			set initialImport = (SELECT assistants.initial_import FROM assistants WHERE assistants.id_assistant = new.id_assistant);
			set hasDiscount = (SELECT assistants.discount FROM assistants WHERE assistants.id_assistant = new.id_assistant);
			set coursePrice = (SELECT courses.price FROM courses WHERE courses.id_course = courseId);
			
			if(hasDiscount = 'N') then
				if((totalBonus + initialImport + new.bonus) > coursePrice) then
					SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El bono que tratas de ingresar supera la sumatoria de todo lo pagado, segun el precio de lista';
				end if;
			
			else
				set idDiscount = (SELECT assistants.id_discount from assistants WHERE assistants.id_assistant = new.id_assistant);
				set percentDiscount = (SELECT courses_discounts.percent FROM courses_discounts WHERE courses_discounts.id_discount = idDiscount) / 100;
				set courseDiscountPrice = (1 - percentDiscount) * coursePrice;
				
				if((totalBonus + initialImport + new.bonus) > courseDiscountPrice) then
					SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El Bono que tratas de ingresar supera la sumatoria de todo lo pagado, segun el precio de lista';
				end if;
			end if;
		END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Volcando estructura para disparador qtp_proyecto.insert_completion_route
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `insert_completion_route` BEFORE INSERT ON `assistants_files` FOR EACH ROW BEGIN
	set new.file  = CONCAT('C:/Users/Gerald-Axel/Documents/', new.file);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
