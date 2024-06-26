-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2024 a las 23:39:12
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
-- Base de datos: `basededatosfloreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrotarjetas`
--

CREATE TABLE `registrotarjetas` (
  `ID` int(3) NOT NULL,
  `Nombre` text NOT NULL,
  `Correo` text NOT NULL,
  `Direccion` text NOT NULL,
  `Ciudad` text NOT NULL,
  `Estado` text NOT NULL,
  `CP` int(5) NOT NULL,
  `NomTarjeta` text NOT NULL,
  `NumTarjeta` int(20) NOT NULL,
  `Mes` text NOT NULL,
  `Año` int(4) NOT NULL,
  `CVV` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrotarjetas`
--

INSERT INTO `registrotarjetas` (`ID`, `Nombre`, `Correo`, `Direccion`, `Ciudad`, `Estado`, `CP`, `NomTarjeta`, `NumTarjeta`, `Mes`, `Año`, `CVV`) VALUES
(19, 'MARISA YARELY ', 'MARISAYARELYVAZQUEZ@GMAIL.COM', 'CERRADA DE BOVEDA S/N', 'APAXCO', 'ESTADO DE MEXIXO', 55660, 'MARISA YARELY ', 2147483647, 'ABRIL', 2026, 5276),
(20, 'OSCAR ACOSTA HERNADEZ', 'osc42345@gmail.com', 'Av.Zihuatanejo S/N', 'Atitalaquia', 'Hidalgo', 42970, 'OSCAR ACOSTA HERNADEZ', 2147483647, 'Marzo', 2027, 1234),
(21, 'gfggfgf', 'ggfgf@gmail.com', 'Av.Zihuatanejo S/N', 'Atitalaquia', 'Hidalgo', 42970, 'OSCAR ACOSTA HERNADEZ', 2147483647, 'Marzo', 2027, 1234),
(22, 'gfggfgf', 'ggfgf@gmail.com', 'Av.Zihuatanejo S/N', 'Atitalaquia', 'Hidalgo', 42970, 'OSCAR ACOSTA HERNADEZ', 2147483647, 'Marzo', 2027, 1234),
(23, 'alexa michel cruz sanchez ', 'alexamichel@gmail.com', 'calle corregidora 3 perez de galeana', 'mexico', 'ciudada de  mexico', 55660, 'alexa michel cruz sanchez ', 2147483647, 'marzo', 2024, 1234),
(24, 'erfknjukjij', 'njknjknkj@xddijo', 'kklk0j0ijij', 'mexico', 'ciudada de  mexico', 55660, 'alexa michel cruz sanchez ', 2147483647, 'marzo', 2024, 1234),
(25, 'erfknjukjij', 'njknjknkj@xddijo', 'kklk0j0ijij', 'mexico', 'ciudada de  mexico', 55660, 'alexa michel cruz sanchez ', 2147483647, 'marzo', 2024, 1234),
(26, 'erfknjukjij', 'njknjknkj@xddijo', 'kklk0j0ijij', 'mexico', 'ciudada de  mexico', 55660, 'alexa michel cruz sanchez ', 2147483647, 'marzo', 2024, 1234);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrotarjetas`
--
ALTER TABLE `registrotarjetas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrotarjetas`
--
ALTER TABLE `registrotarjetas`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
