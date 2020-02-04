-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2020 a las 20:38:08
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

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
  `id_unidad` int(11) NOT NULL,
  `transport_type` text COLLATE utf8_spanish_ci NOT NULL,
  `carga` text COLLATE utf8_spanish_ci NOT NULL,
  `requisitos` text COLLATE utf8_spanish_ci NOT NULL,
  `advertencias` text COLLATE utf8_spanish_ci NOT NULL,
  `entrega` text COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_empresa_transporte` int(11) NOT NULL,
  `latitud` text COLLATE utf8_spanish_ci NOT NULL,
  `longitud` text COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` text COLLATE utf8_spanish_ci NOT NULL,
  `destinatario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_carrier`
--

CREATE TABLE `unidades_carrier` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `img` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `passwordx` text COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_unidad` text COLLATE utf8_spanish_ci NOT NULL,
  `PUR_id` text COLLATE utf8_spanish_ci NOT NULL,
  `TC_id` text COLLATE utf8_spanish_ci NOT NULL,
  `PSP_id` text COLLATE utf8_spanish_ci NOT NULL,
  `LC_id` text COLLATE utf8_spanish_ci NOT NULL,
  `TF_id` text COLLATE utf8_spanish_ci NOT NULL,
  `TCV_id` text COLLATE utf8_spanish_ci NOT NULL,
  `PUR_img` text COLLATE utf8_spanish_ci NOT NULL,
  `TC_img` text COLLATE utf8_spanish_ci NOT NULL,
  `PSP_img` text COLLATE utf8_spanish_ci NOT NULL,
  `LC_img` text COLLATE utf8_spanish_ci NOT NULL,
  `TF_img` text COLLATE utf8_spanish_ci NOT NULL,
  `TCV_img` text COLLATE utf8_spanish_ci NOT NULL
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
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `empresa_data` text COLLATE utf8_spanish_ci NOT NULL,
  `verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `unidades_carrier`
--
ALTER TABLE `unidades_carrier`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `unidades_carrier`
--
ALTER TABLE `unidades_carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
