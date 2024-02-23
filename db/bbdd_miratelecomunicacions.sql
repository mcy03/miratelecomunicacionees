-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 08:43:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd_miratelecomunicacions`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `REGISTRO_ID` int(11) NOT NULL,
  `CURSO_ID` int(11) NOT NULL,
  `FECHA_INICIO` date NOT NULL,
  `FECHA_FIN` date NOT NULL,
  `IDIOMA` varchar(25) NOT NULL,
  `TIME_ZONE` varchar(25) NOT NULL,
  `ENROLL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`REGISTRO_ID`, `CURSO_ID`, `FECHA_INICIO`, `FECHA_FIN`, `IDIOMA`, `TIME_ZONE`, `ENROLL`) VALUES
(2, 1, '2024-03-25', '2024-04-12', 'Español', 'GMT+1', 'contact'),
(3, 2, '2024-05-20', '2024-06-20', 'Ingles', 'UCT+1', 'contact'),
(4, 3, '2024-03-15', '2024-06-20', 'Ingles', 'UCT+1', 'contact'),
(5, 4, '2024-05-25', '2024-04-12', 'Español', 'GMT+1', 'contact'),
(6, 1, '2024-01-25', '2024-04-12', 'Español', 'UCT+1', 'contact'),
(7, 3, '2024-12-25', '2024-04-12', 'Español', 'UCT+1', 'contact');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `CERTIFICACION_ID` int(11) NOT NULL,
  `NOMBRE_CERTIFICACION` varchar(250) DEFAULT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL,
  `IMG_CERTIFICACION` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`CERTIFICACION_ID`, `NOMBRE_CERTIFICACION`, `DESCRIPCION`, `IMG_CERTIFICACION`) VALUES
(1, '200-301 CCNA', 'Descripcion de certifiacion de ejemplo', 'resource/certification/ejemplo1.png'),
(2, '350-401 ENCOR', 'Descripcion de certifiacion de ejemplo', 'img'),
(3, '350-701 SCOR', 'Descripcion de certifiacion de ejemplo', 'img'),
(4, '350-501 SPCOR', 'Descripcion de certifiacion de ejemplo', 'img'),
(5, '350-801 CLCOR', 'Descripcion de certifiacion de ejemplo', 'img'),
(6, '350-601 DCCOR', 'Descripcion de certifiacion de ejemplo', 'img'),
(7, '350-901 DEVCOR', 'Descripcion de certifiacion de ejemplo', 'img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `CURSO_ID` int(11) NOT NULL,
  `NOMBRE_CURSO` varchar(250) DEFAULT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL,
  `DETALLES` varchar(250) DEFAULT NULL,
  `IMG_CURSO` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`CURSO_ID`, `NOMBRE_CURSO`, `DESCRIPCION`, `DETALLES`, `IMG_CURSO`) VALUES
(1, 'DNAIE', 'DIGITAL NETWORKS ARCHITECTURE IMPLEMENTATION ESSENTIALS', 'Detalles de curso de ejemplo 1', 'resource/course/course1.png'),
(2, 'DNAPF', 'Cisco DNA programmability fundamentals', 'detalles', 'img'),
(3, 'SDAINT', 'Introduction to SDN DNA center', 'detalles', 'img'),
(4, 'PRGSDA', 'SD-access and catalyst 9k programmability', 'detalles', 'img'),
(6, 'SD-ACCESS', 'Cisco SD access', 'detalles', 'img');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `LABORATORIO_ID` int(11) NOT NULL,
  `CURSO_ID` int(11) DEFAULT NULL,
  `NOMBRE_LABORATORIO` varchar(250) NOT NULL,
  `DESCRIPCION_LABORTORIO` varchar(250) DEFAULT NULL,
  `DURACION` int(5) DEFAULT NULL,
  `PODS_AVALIABLE` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`LABORATORIO_ID`, `CURSO_ID`, `NOMBRE_LABORATORIO`, `DESCRIPCION_LABORTORIO`, `DURACION`, `PODS_AVALIABLE`) VALUES
(1, 1, 'NOMBRE DE EJEMPLO LAB', 'descripcion de ejemplo lab 1', 40, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnologia`
--

CREATE TABLE `tecnologia` (
  `TECNOLOGIA_ID` int(11) NOT NULL,
  `NOMBRE_TECNOLOGIA` varchar(250) DEFAULT NULL,
  `DESCRIPCION` varchar(250) DEFAULT NULL,
  `ICONO_TECNOLOGIA` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tecnologia`
--

INSERT INTO `tecnologia` (`TECNOLOGIA_ID`, `NOMBRE_TECNOLOGIA`, `DESCRIPCION`, `ICONO_TECNOLOGIA`) VALUES
(1, 'Security', 'Descripcion de ejemplo para tecnologia', './resource/iconosTecnologias/security.png'),
(2, 'Networking', 'Descripcion de tecnologia ', './resource/iconosTecnologias/networking.png'),
(3, 'Wireless', 'Descripcion de tecnologia ', './resource/iconosTecnologias/wireless.png'),
(4, 'Customer Experience', 'Descripcion de tecnologia ', './resource/iconosTecnologias/customerExperience.png'),
(5, 'Data Center', 'Descripcion de tecnologia ', './resource/iconosTecnologias/dataCenter.png'),
(6, 'Collaboration', 'Descripcion de tecnologia ', './resource/iconosTecnologias/collaboration.png'),
(7, 'DevNet', 'Descripcion de tecnologia ', './resource/iconosTecnologias/devNet.png'),
(8, 'Internet of Things', 'Descripcion de tecnologia ', './resource/iconosTecnologias/internetOfThings.png'),
(9, 'Automation', 'Descripcion de tecnologia ', './resource/iconosTecnologias/automation.png'),
(10, 'Service Provider', 'Descripcion de tecnologia ', './resource/iconosTecnologias/serviceProvider.png'),
(11, 'Foundation', 'Descripcion de tecnologia ', './resource/iconosTecnologias/foundation.png'),
(12, 'Cloud', 'Descripcion de tecnologia ', './resource/iconosTecnologias/cloud.png'),
(13, 'CyberOPs', 'Descripcion de tecnologia ', './resource/iconosTecnologias/CyberOPs.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`REGISTRO_ID`),
  ADD KEY `fk_calendario_curso_id` (`CURSO_ID`);

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`CERTIFICACION_ID`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`CURSO_ID`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`LABORATORIO_ID`);

--
-- Indices de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  ADD PRIMARY KEY (`TECNOLOGIA_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `REGISTRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `CERTIFICACION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `CURSO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `LABORATORIO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tecnologia`
--
ALTER TABLE `tecnologia`
  MODIFY `TECNOLOGIA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `fk_calendario_curso_id` FOREIGN KEY (`CURSO_ID`) REFERENCES `curso` (`CURSO_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
