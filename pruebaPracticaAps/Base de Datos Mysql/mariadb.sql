-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 07:39:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mariadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado`
--

CREATE TABLE `asociado` (
  `idAsociado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asociado`
--

INSERT INTO `asociado` (`idAsociado`, `nombre`, `apellido`, `dui`, `nit`, `correo`, `telefono`, `idEmpleado`) VALUES
(62, 'Iris Kassandra', 'Carpio Juarez', '05215845-7', '0614-895621-123-9', 'irisCarpio7@gmail.com', '7485-8956', 1),
(63, 'Nelson Eduardo', 'Hernandez Lopez', '01287659-9', '0512-745215-789-0', 'nelsonhdez@gmail.com', '7145-9623', 2),
(67, 'Oscar Nelson', 'Gonzales Alvarado', '01254895-9', '8542-742365-357-0', 'montesscarloss87@gmail.com', '7845-9623', 2),
(71, 'Juan Fernando', 'Perez', '45216879-9', '4562-856923-789-5', 'example@gmail.com', '7485-9621', 1);

--
-- Disparadores `asociado`
--
DELIMITER $$
CREATE TRIGGER `actualizar` BEFORE UPDATE ON `asociado` FOR EACH ROW INSERT INTO historial (nombre, apellido, dui, nit, correo, telefono, idEmpleado) VALUES (OLD.nombre,OLD.apellido,OLD.dui,OLD.nit,OLD.correo,OLD.telefono,OLD.idEmpleado)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `actualizarN` BEFORE UPDATE ON `asociado` FOR EACH ROW INSERT INTO historialactualizacion (nombre , apellido, dui, nit, correo, telefono, idEmpleado) VALUES (NEW.nombre,NEW.apellido,NEW.dui,NEW.nit,NEW.correo,NEW.telefono,NEW.idEmpleado)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `asocbaja` AFTER DELETE ON `asociado` FOR EACH ROW INSERT INTO asociado_baja(idAsociado,nombre,apellido,dui,nit,correo,telefono,idEmpleado) VALUES(OLD.idAsociado,OLD.nombre,OLD.apellido,OLD.dui,OLD.nit,OLD.correo,OLD.telefono,OLD.idEmpleado)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociado_baja`
--

CREATE TABLE `asociado_baja` (
  `idAsociado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asociado_baja`
--

INSERT INTO `asociado_baja` (`idAsociado`, `nombre`, `apellido`, `dui`, `nit`, `correo`, `telefono`, `idEmpleado`) VALUES
(68, 'Maria Elisabeth', 'Lopez Lopez', '12546547-9', '1042-742365-357-1', 'eliassramoss77@gmail.com', '7521-9652', 2),
(70, 'Ana Gloria', 'Tejada', '02125459-8', '1208-456258-965-7', 'iexample@gmail.com', '7845-9621', 2),
(64, 'Rony Gustavo', 'Lopez Diaz', '04521563-9', '0042-742365-357-7', 'dialopez@gmail.com', '7536-9512', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellido`, `dui`, `cargo`) VALUES
(1, 'Juan Carlos', 'Melendez', '00452168-3', 'Supervisor'),
(2, 'Maria Yamileth', 'Benitez Martinez', '025632148-8', 'Contratista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idAsociado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`idAsociado`, `nombre`, `apellido`, `dui`, `nit`, `correo`, `telefono`, `idEmpleado`) VALUES
(0, 'Iris Kassandra M', 'Carpio Juarez', '05215845-7', '0614-895621-123-9', 'irisCarpio7@gmail.com', '7485-8956', 1),
(0, 'Nelson Eduardo', 'Hernandez Lopez', '01287659-9', '0512-745215-789-0', 'nelsonhernandez@gmail.com', '7145-9623', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialactualizacion`
--

CREATE TABLE `historialactualizacion` (
  `idAsociado` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historialactualizacion`
--

INSERT INTO `historialactualizacion` (`idAsociado`, `nombre`, `apellido`, `dui`, `nit`, `correo`, `telefono`, `idEmpleado`) VALUES
(0, 'Iris Kassandra', 'Carpio Juarez', '05215845-7', '0614-895621-123-9', 'irisCarpio7@gmail.com', '7485-8956', 1),
(0, 'Nelson Eduardo', 'Hernandez Lopez', '01287659-9', '0512-745215-789-0', 'nelsonhdez@gmail.com', '7145-9623', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `login`, `password`) VALUES
(1, 'administrador', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD PRIMARY KEY (`idAsociado`),
  ADD KEY `fk1` (`idEmpleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociado`
--
ALTER TABLE `asociado`
  MODIFY `idAsociado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asociado`
--
ALTER TABLE `asociado`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
