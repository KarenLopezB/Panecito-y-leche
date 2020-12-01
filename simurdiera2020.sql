-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2020 a las 01:56:01
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simurdiera2020`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `NombreProyecto` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FechaInicio` int(11) NOT NULL,
  `StatusActual` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CodigoNombre` int(11) NOT NULL,
  `Descripcion` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CodigoInnovador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `NombreProyecto`, `FechaInicio`, `StatusActual`, `CodigoNombre`, `Descripcion`, `CodigoInnovador`) VALUES
(1, 'nuifvfv', 2000, 'acabado', 4567, 'jiofrejifonrv', 0),
(2, '', 0, '', 9889, '', 8909);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `FechaRegistro` int(11) NOT NULL,
  `Nacimiento` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `AreaDesarrollo` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Residencia` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `NivelEstudios` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `CodigoPersonal` int(11) NOT NULL,
  `Puesto` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `Nombre`, `Apellido`, `FechaRegistro`, `Nacimiento`, `Edad`, `AreaDesarrollo`, `Residencia`, `NivelEstudios`, `CodigoPersonal`, `Puesto`) VALUES
(1, 'hola', 'Gomez', 2019, 'uruapan', 29, 'investigacion', 'uruapan', 'uni', 8976, ''),
(2, 'hola', 'Gomez', 2019, 'uruapan', 29, 'investigacion', 'uruapan', 'uni', 8976, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CodigoNombre` (`CodigoNombre`,`CodigoInnovador`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
