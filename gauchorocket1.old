CREATE DATABASE gauchorocket1;
USE gauchorocket1;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 18:25:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gauchorocket1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento`
--

CREATE TABLE `asiento` (
  `id_asiento` int(11) NOT NULL,
  `id_vuelo` int(11) DEFAULT NULL,
  `asiento` varchar(10) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id_cabina` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asiento`
--

INSERT INTO `asiento` (`id_asiento`, `id_vuelo`, `asiento`, `estado`, `id_cabina`) VALUES
(1, 1, '1', 'disponible', 1),
(2, 1, '2', 'disponible', 1),
(3, 1, '3', 'disponible', 1),
(4, 1, '4', 'disponible', 1),
(5, 1, '5', 'disponible', 1),
(6, 1, '6', 'disponible', 1),
(7, 1, '7', 'disponible', 1),
(8, 1, '8', 'disponible', 1),
(9, 1, '9', 'disponible', 1),
(10, 1, '10', 'disponible', 1),
(11, 1, '11', 'disponible', 2),
(12, 1, '12', 'disponible', 2),
(13, 1, '13', 'disponible', 2),
(14, 1, '14', 'disponible', 2),
(15, 1, '15', 'disponible', 2),
(16, 1, '16', 'disponible', 2),
(17, 1, '17', 'disponible', 2),
(18, 1, '18', 'disponible', 2),
(19, 1, '19', 'disponible', 2),
(20, 1, '20', 'disponible', 2),
(21, 1, '21', 'disponible', 3),
(22, 1, '22', 'disponible', 3),
(23, 1, '23', 'disponible', 3),
(24, 1, '24', 'disponible', 3),
(25, 1, '25', 'disponible', 3),
(26, 1, '26', 'disponible', 3),
(27, 1, '27', 'disponible', 3),
(28, 1, '28', 'disponible', 3),
(29, 1, '29', 'disponible', 3),
(30, 1, '30', 'disponible', 3),
(31, 2, '1', 'disponible', 1),
(32, 2, '2', 'disponible', 1),
(33, 2, '3', 'disponible', 1),
(34, 2, '4', 'disponible', 1),
(35, 2, '5', 'disponible', 1),
(36, 2, '6', 'disponible', 1),
(37, 2, '7', 'disponible', 1),
(38, 2, '8', 'disponible', 1),
(39, 2, '9', 'disponible', 1),
(40, 2, '10', 'disponible', 1),
(41, 2, '11', 'disponible', 3),
(42, 2, '12', 'disponible', 3),
(43, 2, '13', 'disponible', 3),
(44, 2, '14', 'disponible', 3),
(45, 2, '15', 'disponible', 3),
(46, 2, '16', 'disponible', 3),
(47, 2, '17', 'disponible', 3),
(48, 2, '18', 'disponible', 3),
(49, 2, '19', 'disponible', 3),
(50, 2, '20', 'disponible', 3),
(51, 3, '1', 'disponible', 3),
(52, 3, '2', 'disponible', 3),
(53, 3, '3', 'disponible', 3),
(54, 3, '4', 'disponible', 3),
(55, 3, '5', 'disponible', 3),
(56, 3, '6', 'disponible', 3),
(57, 3, '7', 'disponible', 3),
(58, 3, '8', 'disponible', 3),
(59, 3, '9', 'disponible', 3),
(60, 3, '10', 'disponible', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabina`
--

CREATE TABLE `cabina` (
  `id_cabina` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cabina`
--

INSERT INTO `cabina` (`id_cabina`, `nombre`) VALUES
(1, 'General'),
(2, 'Familiar'),
(3, 'Suite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `id_centro` int(9) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `turnos` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`id_centro`, `nombre`, `descripcion`, `turnos`) VALUES
(1, 'Buenos Aires', 'Calle Buenos Aires', 300),
(2, 'Shanghái', 'Calle Shanghái', 210),
(3, 'Ankara', 'Calle Ankara', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id_destino` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id_destino`, `nombre`, `estado`) VALUES
(1, 'Estación Espacial Internacional', 'Activo'),
(2, 'OrbiterHotel', 'Activo'),
(3, 'Luna', 'Activo'),
(4, 'Marte', 'Activo'),
(5, 'Ganimedes', 'Activo'),
(6, 'Europa', 'Activo'),
(7, 'Io', 'Activo'),
(8, 'Encedalo', 'Activo'),
(9, 'Titán', 'Activo'),
(10, 'Buenos Aires', 'Activo'),
(11, 'Ankara', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `matricula` varchar(10) NOT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`matricula`, `modelo`, `estado`, `tipo`) VALUES
('AA1', 'Aguila', 'Activo', 'AA'),
('AA10', 'Condor', 'Activo', 'AA'),
('AA11', 'Halcon', 'Activo', 'AA'),
('AA12', 'Guanaco', 'Activo', 'AA'),
('AA13', 'Aguila', 'Activo', 'AA'),
('AA14', 'Condor', 'Activo', 'AA'),
('AA15', 'Halcon', 'Activo', 'AA'),
('AA16', 'Guanaco', 'Activo', 'AA'),
('AA17', 'Aguila', 'Activo', 'AA'),
('AA18', 'Condor', 'Activo', 'AA'),
('AA19', 'Halcon', 'Activo', 'AA'),
('AA2', 'Condor', 'Activo', 'AA'),
('AA3', 'Halcon', 'Activo', 'AA'),
('AA4', 'Guanaco', 'Activo', 'AA'),
('AA5', 'Aguila', 'Activo', 'AA'),
('AA6', 'Condor', 'Activo', 'AA'),
('AA7', 'Halcon', 'Activo', 'AA'),
('AA8', 'Guanaco', 'Activo', 'AA'),
('AA9', 'Aguila', 'Activo', 'AA'),
('BA1', 'Zorzal', 'Activo', 'BA'),
('BA10', 'Aguilucho', 'Activo', 'BA'),
('BA11', 'Aguilucho', 'Activo', 'BA'),
('BA12', 'Aguilucho', 'Activo', 'BA'),
('BA13', 'Canario', 'Activo', 'BA'),
('BA14', 'Canario', 'Activo', 'BA'),
('BA15', 'Canario', 'Activo', 'BA'),
('BA16', 'Canario', 'Activo', 'BA'),
('BA17', 'Canario', 'Activo', 'BA'),
('BA2', 'Zorzal', 'Activo', 'BA'),
('BA3', 'Zorzal', 'Activo', 'BA'),
('BA4', 'Carancho', 'Activo', 'BA'),
('BA5', 'Carancho', 'Activo', 'BA'),
('BA6', 'Carancho', 'Activo', 'BA'),
('BA7', 'Carancho', 'Activo', 'BA'),
('BA8', 'Aguilucho', 'Activo', 'BA'),
('BA9', 'Aguilucho', 'Activo', 'BA'),
('O1', 'Calandria', 'Activo', 'O'),
('O2', 'Calandria', 'Activo', 'O'),
('O3', 'Colibri', 'Activo', 'O'),
('O4', 'Colibri', 'Activo', 'O'),
('O5', 'Colibri', 'Activo', 'O'),
('O6', 'Calandria', 'Activo', 'O'),
('O7', 'Calandria', 'Activo', 'O'),
('O8', 'Colibri', 'Activo', 'O'),
('O9', 'Colibri', 'Activo', 'O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_cabina`
--

CREATE TABLE `equipo_cabina` (
  `matricula` varchar(10) NOT NULL,
  `id_cabina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipo_cabina`
--

INSERT INTO `equipo_cabina` (`matricula`, `id_cabina`) VALUES
('AA1', 1),
('AA1', 2),
('AA1', 3),
('AA10', 1),
('AA10', 2),
('AA10', 3),
('AA11', 1),
('AA11', 2),
('AA11', 3),
('AA12', 3),
('AA13', 1),
('AA13', 2),
('AA13', 3),
('AA14', 1),
('AA14', 2),
('AA14', 3),
('AA15', 1),
('AA15', 2),
('AA15', 3),
('AA16', 3),
('AA17', 1),
('AA17', 2),
('AA17', 3),
('AA18', 1),
('AA18', 2),
('AA18', 3),
('AA19', 1),
('AA19', 2),
('AA19', 3),
('AA2', 1),
('AA2', 2),
('AA2', 3),
('AA3', 1),
('AA3', 2),
('AA3', 3),
('AA4', 3),
('AA5', 1),
('AA5', 2),
('AA5', 3),
('AA6', 1),
('AA6', 2),
('AA6', 3),
('AA7', 1),
('AA7', 2),
('AA7', 3),
('AA8', 3),
('AA9', 1),
('AA9', 2),
('AA9', 3),
('BA1', 1),
('BA1', 3),
('BA10', 2),
('BA10', 3),
('BA11', 2),
('BA11', 3),
('BA12', 2),
('BA12', 3),
('BA13', 2),
('BA13', 3),
('BA14', 2),
('BA14', 3),
('BA15', 2),
('BA15', 3),
('BA16', 2),
('BA16', 3),
('BA17', 2),
('BA17', 3),
('BA2', 1),
('BA2', 3),
('BA3', 1),
('BA3', 3),
('BA4', 1),
('BA5', 1),
('BA6', 1),
('BA7', 1),
('BA8', 2),
('BA8', 3),
('BA9', 2),
('BA9', 3),
('O1', 1),
('O1', 2),
('O1', 3),
('O2', 1),
('O2', 2),
('O2', 3),
('O3', 1),
('O3', 2),
('O3', 3),
('O4', 1),
('O4', 2),
('O4', 3),
('O5', 1),
('O5', 2),
('O5', 3),
('O6', 1),
('O6', 2),
('O6', 3),
('O7', 1),
('O7', 2),
('O7', 3),
('O8', 1),
('O8', 2),
('O8', 3),
('O9', 1),
('O9', 2),
('O9', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nave`
--

CREATE TABLE `nave` (
  `id_nave` int(9) NOT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nave`
--

INSERT INTO `nave` (`id_nave`, `estado`) VALUES
(1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(9) NOT NULL,
  `id_vuelo` int(9) NOT NULL,
  `id_cabina` int(9) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `codigo_reserva` varchar(20) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_asiento` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_de_a_bordo`
--

CREATE TABLE `servicio_de_a_bordo` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio_de_a_bordo`
--

INSERT INTO `servicio_de_a_bordo` (`id_servicio`, `nombre`) VALUES
(1, 'Standard'),
(2, 'Gourmet'),
(3, 'Spa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_equipo`
--

CREATE TABLE `tipo_de_equipo` (
  `tipo` varchar(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_de_equipo`
--

INSERT INTO `tipo_de_equipo` (`tipo`, `descripcion`) VALUES
('AA', 'Alta aceleración'),
('BA', 'Baja aceleración'),
('O', 'Orbital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(9) NOT NULL,
  `id_usuario` int(9) DEFAULT NULL,
  `id_centro` int(9) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `nivel` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `id_usuario`, `id_centro`, `fecha`, `estado`, `nivel`) VALUES
(17, 84, 1, '2021-11-02', 'Chequeo realizado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `codigo_alta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `id_rol`, `clave`, `codigo_alta`) VALUES
(1, 'Gaucho', 'Rocket', 'gauchorocketadmin@email.com', 1, '81dc9bdb52d04dc20036dbd8313ed055', '-'),
(84, 'usuario uno', 'apellido', 'usuario1@email.com', 2, '81dc9bdb52d04dc20036dbd8313ed055', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `id_vuelo` int(11) NOT NULL,
  `id_origen` int(11) DEFAULT NULL,
  `id_destino` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id_equipo` varchar(10) DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`id_vuelo`, `id_origen`, `id_destino`, `fecha`, `estado`, `id_equipo`, `hora`) VALUES
(1, 10, 3, '2021-11-01', 'Activo', 'O1', '8:00'),
(2, 10, 3, '2021-11-02', 'Activo', 'BA1', '8:00'),
(3, 10, 3, '2021-11-03', 'Activo', 'AA4', '8:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asiento`
--
ALTER TABLE `asiento`
  ADD PRIMARY KEY (`id_asiento`),
  ADD KEY `id_vuelo` (`id_vuelo`),
  ADD KEY `id_cabina` (`id_cabina`);

--
-- Indices de la tabla `cabina`
--
ALTER TABLE `cabina`
  ADD PRIMARY KEY (`id_cabina`);

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id_destino`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `tipo` (`tipo`);

--
-- Indices de la tabla `equipo_cabina`
--
ALTER TABLE `equipo_cabina`
  ADD PRIMARY KEY (`matricula`,`id_cabina`),
  ADD KEY `id_cabina` (`id_cabina`);

--
-- Indices de la tabla `nave`
--
ALTER TABLE `nave`
  ADD PRIMARY KEY (`id_nave`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicio_de_a_bordo`
--
ALTER TABLE `servicio_de_a_bordo`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipo_de_equipo`
--
ALTER TABLE `tipo_de_equipo`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `id_origen` (`id_origen`),
  ADD KEY `id_destino` (`id_destino`),
  ADD KEY `id_equipo` (`id_equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asiento`
--
ALTER TABLE `asiento`
  MODIFY `id_asiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `cabina`
--
ALTER TABLE `cabina`
  MODIFY `id_cabina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `centros`
--
ALTER TABLE `centros`
  MODIFY `id_centro` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id_destino` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `nave`
--
ALTER TABLE `nave`
  MODIFY `id_nave` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `id_vuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asiento`
--
ALTER TABLE `asiento`
  ADD CONSTRAINT `asiento_ibfk_1` FOREIGN KEY (`id_vuelo`) REFERENCES `vuelo` (`id_vuelo`),
  ADD CONSTRAINT `asiento_ibfk_2` FOREIGN KEY (`id_cabina`) REFERENCES `cabina` (`id_cabina`);

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_de_equipo` (`tipo`);

--
-- Filtros para la tabla `equipo_cabina`
--
ALTER TABLE `equipo_cabina`
  ADD CONSTRAINT `equipo_cabina_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `equipo` (`matricula`),
  ADD CONSTRAINT `equipo_cabina_ibfk_2` FOREIGN KEY (`id_cabina`) REFERENCES `cabina` (`id_cabina`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol_usuario` (`id_rol`);

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `vuelo_ibfk_1` FOREIGN KEY (`id_origen`) REFERENCES `destinos` (`id_destino`),
  ADD CONSTRAINT `vuelo_ibfk_2` FOREIGN KEY (`id_destino`) REFERENCES `destinos` (`id_destino`),
  ADD CONSTRAINT `vuelo_ibfk_3` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
