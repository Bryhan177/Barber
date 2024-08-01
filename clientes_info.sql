-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2024 a las 23:16:00
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_info`
--

CREATE TABLE `clientes_info` (
  `documento` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes_info`
--

INSERT INTO `clientes_info` (`documento`, `nombre`, `apellido`, `email`, `telefono`) VALUES
(32, '454453', '452', '45sd@gmail.com', 23),
(555545, 'Brayans', 'Cordobaaaaa', 'bryhanstif@gmail.com', 4294967295),
(1051515, 'Stifffff', 'Cordobaaaa', 'bryhanstif@gmail.com', 4294967295),
(261117565, 'Stif', 'Cordoba Marin', 'bryhanwstif@gmail.com', 321847564),
(1000235874, 'Brayan', 'Marin', 'bryhanstif@gmail.com2', 311254848);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes_info`
--
ALTER TABLE `clientes_info`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes_info`
--
ALTER TABLE `clientes_info`
  MODIFY `documento` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000235878;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
