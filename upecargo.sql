-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 05:59:49
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
  `tiempo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `id_user`, `stats`, `presupuesto`, `busqueda`, `fecha_recogida`, `fecha_entrega`, `id_unidad`, `transport_type`, `carga`, `requisitos`, `advertencias`, `entrega`, `id_empleado`, `id_empresa_transporte`, `latitud`, `longitud`, `tiempo`) VALUES
(29, 8, 'completed', '1000', '1000', '1000', '1000', 38, '1000', '1000', '1000', '1000', '1000', 0, 7, '6.42375', '-68.58973', '38'),
(30, 8, 'walking', '1000', '1000', '1000', '1000', 38, '1000', '1000', '1000', '1000', '1000', 0, 7, '6.42375', '-67.58973', '38'),
(31, 8, 'completed', '1000', '1000', '1000', '1000', 38, '1000', '1000', '1000', '1000', '1000', 0, 7, '6.42375', '-64.98973', '38');

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
  `tipo_unidad` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `unidades_carrier`
--

INSERT INTO `unidades_carrier` (`id`, `id_user`, `nombre`, `telefono`, `correo`, `img`, `estado`, `passwordx`, `ubicacion`, `tipo_unidad`) VALUES
(38, 7, 'Fabian Perdomo', '04129807100', 'fneo3579@gmail.com', '../media/71845510_1449995278491324_8740027897505339794_n.jpg', 'en_camino', '$#Edu1597', 'Caracas', 'S300');

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
  `empresa_data` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `telefono`, `tipo`, `subtipo`, `pass`, `empresa_data`) VALUES
(7, 'Fabian', 'Perdomo', 'fneo3579@gmail.com', '+584169380986', 'carrier', 'driver', '$#Edu1597', '[{\"empresa\":\"El ma, el mas marico JAJA\",\"telefono\":\"(506) 2222-1090\",\"correo\":\"contacto@upecargo.com\",\"pais_registro\":\"Costa Rica\",\"representante_legal\":\"El Jefe\",\"codigo_transportista\":\"CR-0000\",\"id_representante_legal\":\"N-123456789\",\"id_transportista\":\"J-123456789\",\"direccion_fiscal\":\"L-123456\",\"paises_destino\":\"Costa Rica, El Salvador\",\"tarjeta_federacion\":\"Modelo Modelo #123-456 3 Ejes\"}]'),
(8, 'Fabian', 'Perdomo', 'fabian.perdomo@multifiber.cl', ' 584169380986', 'shipper', '', '$#Edu1597', '[{\"empresa\":\"kkkk\",\"telefono\":\"(506) 2222-1090\",\"correo\":\"contacto@upecargo.com\",\"pais_registro\":\"Costa Rica\",\"representante_legal\":\"El Jefe\",\"codigo_transportista\":\"CR-0000\",\"id_representante_legal\":\"N-123456789\",\"id_transportista\":\"J-123456789\",\"direccion_fiscal\":\"L-123456\",\"paises_destino\":\"Costa Rica, El Salvador\",\"tarjeta_federacion\":\"Modelo Modelo #123-456 3 Ejes\"}]'),
(11, 'Reynaldo ', 'MembreÃ±o', 'rmembreno@upecargo.com', '87249937', 'carrier', 'driver', '873Cargo', '[{\"empresa\":\"TRANSPORTES FRANKLIN \",\"telefono\":\"\",\"correo\":\"test@test.com\",\"pais_registro\":\"COSTA RICA\",\"representante_legal\":\"MARIO LANZAS \",\"codigo_transportista\":\"CR14100\",\"id_representante_legal\":\"\",\"id_transportista\":\"3101000000\",\"direccion_fiscal\":\"LA URUCA, SAN JOSE COSTA RICA\",\"paises_destino\":\"NICARAGUA\",\"tarjeta_federacion\":\"\"}]'),
(12, 'Reynaldo', 'MembreÃ±o', 'rmembreno@reynaldomembreno.com', '87249937', 'shipper', '', '873Cargo', '[{\"empresa\":\"Empresa\",\"telefono\":\"(506) 2222-1090\",\"correo\":\"contacto@upecargo.com\",\"pais_registro\":\"Costa Rica\",\"representante_legal\":\"El Jefe\",\"codigo_transportista\":\"CR-0000\",\"id_representante_legal\":\"N-123456789\",\"id_transportista\":\"J-123456789\",\"direccion_fiscal\":\"L-123456\",\"paises_destino\":\"Costa Rica, El Salvador\",\"tarjeta_federacion\":\"Modelo Modelo #123-456 3 Ejes\"}]');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `unidades_carrier`
--
ALTER TABLE `unidades_carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
