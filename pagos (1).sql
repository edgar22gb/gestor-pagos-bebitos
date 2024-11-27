-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-11-2024 a las 14:09:38
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `CURP` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_paterno` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_materno` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nacimiento` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `edad` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nivel` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_paternotutor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido_maternotutor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_tutor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono_fijo` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono_emergencia` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clave_docente` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_docente` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `primer_apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `domicilio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_colonia` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codigo_postal` int NOT NULL,
  `entidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_ingreso` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `preparacion_profesional` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `funcion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `clave_docente`, `nombre_docente`, `primer_apellido`, `segundo_apellido`, `sexo`, `domicilio`, `nombre_colonia`, `codigo_postal`, `entidad`, `municipio`, `localidad`, `fecha_ingreso`, `preparacion_profesional`, `funcion`) VALUES
(1, 'GABE', 'EDGAR', 'GARCIA', 'BASILIO', 'Hombre', 'CONOCIDO', 'LAZARO CARDENAS', 40660, 'GUERRERO', 'PUNGARABATO', 'CIUDAD ALTAMIRANO', '2024-11-25', 'ING. EN SISTEMAS', 'APOYO ADMINISTRATIVO'),
(2, 'ALBERTO', 'CARLOS', 'ALBERTO', 'NUÑEZ', 'Hombre', 'CONOCIDO', 'SIN NOMBRE', 40662, 'GUERRERO', 'TANGANHUATO', 'CIUDAD ALTAMIRANO', '2024-11-25', 'ING. EN SISTEMAS', 'APOYO ADMINISTRATIVO'),
(3, 'ELCANJ', 'ISAMARA', 'LEON', 'RUEDA', 'Mujer', 'CONOCIDO', 'SIN NOMBRE', 40660, 'GUERRERO', 'COYUCA DE CATALAN', 'COYUCA DE CATALAN', '2024-11-25', 'ING. EN SISTEMAS', 'APOYO ADMINISTRATIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

DROP TABLE IF EXISTS `grados`;
CREATE TABLE IF NOT EXISTS `grados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_grado` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `nombre_grado`) VALUES
(1, 'PRIMERO'),
(2, 'SEGUNDO'),
(3, 'TERCERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

DROP TABLE IF EXISTS `niveles`;
CREATE TABLE IF NOT EXISTS `niveles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_nivel` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nombre_nivel`) VALUES
(1, 'LACTANTES'),
(2, 'MATERNAL'),
(3, 'PREESCOLAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_alumno` int NOT NULL,
  `monto_pago` int NOT NULL,
  `mes_pago` date NOT NULL,
  `concepto` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `name`, `correo`) VALUES
(1, 'edgar', '1234', 'Admin', 'admin@hotmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
