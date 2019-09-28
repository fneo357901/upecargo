-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2019 a las 04:26:50
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upecargo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_shipper`
--

CREATE TABLE `empleados_shipper` (
  `id` int(11) NOT NULL,
  `usuario_empresa_id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `stats` text COLLATE utf8_spanish_ci NOT NULL,
  `presupuesto` text COLLATE utf8_spanish_ci NOT NULL,
  `busqueda` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_recogida` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrega` text COLLATE utf8_spanish_ci NOT NULL,
  `id_conductor` int(11) NOT NULL,
  `transport_type` text COLLATE utf8_spanish_ci NOT NULL,
  `carga` text COLLATE utf8_spanish_ci NOT NULL,
  `requisitos` text COLLATE utf8_spanish_ci NOT NULL,
  `advertencias` text COLLATE utf8_spanish_ci NOT NULL,
  `entrega` text COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `subtipo` text COLLATE utf8_spanish_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `telefono`, `tipo`, `subtipo`, `empresa_id`, `pass`) VALUES
(7, 'Fabian', 'Perdomo', 'fneo3579@gmail.com', '+584169380986', 'carrier', 'driver', 0, '$#Edu1597'),
(8, 'Fabian', 'Perdomo', 'fabian.perdomo@multifiber.cl', ' 584169380986', 'shipper', '', 0, '$#Edu1597');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `empleados_shipper`
--
ALTER TABLE `empleados_shipper`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conductores`
--
ALTER TABLE `conductores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados_shipper`
--
ALTER TABLE `empleados_shipper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
