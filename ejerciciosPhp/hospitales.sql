-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2018 a las 09:19:54
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospitales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `cod_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`cod_ciudad`, `nombre_ciudad`) VALUES
(1, 'Bilbao'),
(2, 'Leioa'),
(3, 'Erandio'),
(4, 'Basauri'),
(5, 'Barakaldo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

DROP TABLE IF EXISTS `especialidad`;
CREATE TABLE IF NOT EXISTS `especialidad` (
  `cod_especialidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_esp` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_especialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`cod_especialidad`, `nombre_esp`) VALUES
(1, 'Pediatría'),
(2, 'Psicología'),
(3, 'Neurología'),
(4, 'Ginecología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE IF NOT EXISTS `hospital` (
  `cod_hospital` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_hosp` varchar(50) NOT NULL,
  `cod_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`cod_hospital`),
  KEY `cod_ciudad` (`cod_ciudad`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hospital`
--

INSERT INTO `hospital` (`cod_hospital`, `nombre_hosp`, `cod_ciudad`) VALUES
(1, 'Cruces', 5),
(2, 'Usansolo', 4),
(3, 'Basurto', 1),
(4, 'Virgen Blanca', 1),
(5, 'Doctor San Sebastian', 1),
(6, 'Quirón', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `dni_medico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_med` varchar(50) NOT NULL,
  `salario` int(11) NOT NULL,
  `cod_esp` int(11) NOT NULL,
  `cod_hosp` int(11) NOT NULL,
  PRIMARY KEY (`dni_medico`),
  KEY `cod_esp` (`cod_esp`),
  KEY `cod_hosp` (`cod_hosp`)
) ENGINE=MyISAM AUTO_INCREMENT=778 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`dni_medico`, `nombre_med`, `salario`, `cod_esp`, `cod_hosp`) VALUES
(111, 'Gonzalez', 3000, 1, 6),
(222, 'Perez', 3500, 1, 6),
(333, 'Martinez', 1000, 4, 1),
(444, 'Gomez', 2500, 4, 1),
(555, 'Perez', 3000, 1, 3),
(666, 'Llona', 3000, 2, 5),
(777, 'Marcos', 4000, 3, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
