-- usuario y permisos

create user janon idenified by "joel";
grant all privileges on *.* to janon;


CREATE DATABASE joel_anon_iticdesk;

USE joel_anon_iticdesk;



-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-02-2025 a las 20:42:27
-- Versión del servidor: 8.0.41-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joel_anon_iticdesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencies`
--

CREATE TABLE `incidencies` (
  `id` int NOT NULL,
  `prioritat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titol` varchar(100) NOT NULL,
  `descripcio` text NOT NULL,
  `usuari_id` int NOT NULL,
  `data_creacio` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estat` enum('Oberta','Gestió','Tancada','Reoberta') DEFAULT 'Oberta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int NOT NULL,
  `dni` varchar(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `cognom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasenya` varchar(255) NOT NULL,
  `rol` enum('professor','administrador') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `dni`, `nom`, `cognom`, `email`, `contrasenya`, `rol`) VALUES
(1, '48215685A', 'Joel', 'Añón', 'janon@gmail.com', 'Admin123456.', 'administrador'),
(2, '482156743B', 'profesor1', 'profe', 'profe1@gmail.com', 'profe1', 'professor'),
(3, '412156743B', 'profesor2', 'profe2', 'profe2@gmail.com', 'profe2', 'professor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencies`
--
ALTER TABLE `incidencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuari_id` (`usuari_id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencies`
--
ALTER TABLE `incidencies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencies`
--
ALTER TABLE `incidencies`
  ADD CONSTRAINT `incidencies_ibfk_1` FOREIGN KEY (`usuari_id`) REFERENCES `usuaris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
