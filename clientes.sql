-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2024 a las 15:10:05
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `password`, `direccion`) VALUES
(1, 'cele', 'cele@cele.com', 'hika1235', 'holas1212'),
(2, 'bart', 'bart@bart', 'bart5555', 'bark65'),
(5, 'celeeee', 'clkdjls@gmailc', '5564646', 'hola123'),
(6, 'catrina', 'catru@gmai.com', 'catry123654', 'catru875'),
(7, 'celeste', 'gdhaj@gmail.com', '665464', 'calle falsa 123'),
(8, 'romi', 'perra@perra', 'perra2.1', 'perralandia123'),
(9, 'cele', 'cele@cele.com', '5456454', 'holas1212'),
(10, 'cele', 'cele@cele.com', '55646565', 'hsjhks4555'),
(11, 'milo', 'milo@gato', 'milomilo', 'milandia123'),
(12, 'hola', 'hola@hola.com', 'holhola123', 'calle falsa 123'),
(13, 'catrina', 'catru@catru', 'catru123', 'catrulandia123'),
(14, 'Celeste', 'celecele@gmail', 'holahoalaa123', 'lalalala123'),
(15, 'barto', 'barto@gmail', 'bartobarttt', 'bartulandia 456'),
(16, 'milo', 'milito@milo', 'milomilo456', 'milenio 789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
