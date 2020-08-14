-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 16:24:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formularies_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `fecha_reg`) VALUES
(1, 'jose balmore', 'camaleoncode@gmail.com', '2013-08-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `code` float NOT NULL,
  `role` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `form1`
--

INSERT INTO `form1` (`id`, `name`, `email`, `phone`, `code`, `role`, `subject`, `message`) VALUES
(1, 'jose balmore', 'camaleoncode@gmail.com', 33333333, 3, '', '333', 'dddddddd'),
(2, 'jose balmore', 'camaleoncode@gmail.com', 33333333, 3, 'Home Buyer', '333', 'aaaaa'),
(3, 'jose balmore', 'camaleoncode@gmail.com', 33333333, 3, 'Real Estate Investor', '333', 'sssss'),
(4, 'jose balmore', 'camaleoncode@gmail.com', 33333333, 3, 'Real Estate Investor', '333', 'sssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phonumber` int(12) NOT NULL,
  `zip` int(11) NOT NULL,
  `alternate_number` int(12) NOT NULL,
  `bedrooms` float NOT NULL,
  `bathrooms` float NOT NULL,
  `listenagent` varchar(25) NOT NULL,
  `statehouse` varchar(25) NOT NULL,
  `type_property` varchar(50) NOT NULL,
  `price` varchar(25) NOT NULL,
  `comments` text NOT NULL,
  `selling` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
