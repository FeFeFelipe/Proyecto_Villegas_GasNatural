-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 22:13:15
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdgas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `IDEm` int(99) NOT NULL,
  `NomEm` varchar(99) NOT NULL,
  `ApelEm` varchar(99) NOT NULL,
  `Cont` varchar(99) NOT NULL,
  `Puesto` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IDEm`, `NomEm`, `ApelEm`, `Cont`, `Puesto`) VALUES
(0, '', '', '', ''),
(1, 'lupe', 'santos', 'contra', 'patrona'),
(2, 'laura', 'pepto', 'lilili', 'limpieza'),
(3, 'lulu', 'isai', 'ququ', 'mantenimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `IdSuc` int(99) NOT NULL,
  `NomSuc` varchar(99) NOT NULL,
  `NomCal` varchar(99) NOT NULL,
  `NomCol` varchar(99) NOT NULL,
  `CodPos` int(99) NOT NULL,
  `EntFed` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`IdSuc`, `NomSuc`, `NomCal`, `NomCol`, `CodPos`, `EntFed`) VALUES
(1, 'pollo', 'loco', 'lacolonia', 3357, 'chihuahua'),
(2, 'pollo', 'caie', 'abeja', 555, 'chihuahua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NomCal` varchar(40) NOT NULL,
  `NumCas` int(50) NOT NULL,
  `NomCol` varchar(40) NOT NULL,
  `CodPos` int(40) NOT NULL,
  `NomUs` varchar(40) NOT NULL,
  `ApelUs` varchar(40) NOT NULL,
  `CorEle` varchar(40) NOT NULL,
  `Cont` varchar(40) NOT NULL,
  `IDUs` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NomCal`, `NumCas`, `NomCol`, `CodPos`, `NomUs`, `ApelUs`, `CorEle`, `Cont`, `IDUs`) VALUES
('calle1', 555, 'abeja', 3, 'Luis Felipe', 'Villegas Molina', 'felipe6_vm@hotmail.com', 'zzz', 0),
('lacallee', 343, 'lacolonia', 434, 'lilila', 'lalali', 'lilila@hotmail.com', 'lolo', 1),
('ultima', 27, 'ultimo', 15, 'Luis Felipe', 'Villegas Molina', 'felipe6_vm@hotmail.com', '15', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IDV` int(99) NOT NULL,
  `IDUs` int(99) NOT NULL,
  `IdSuc` int(99) NOT NULL,
  `IDEm` int(99) NOT NULL,
  `GasLit` int(99) NOT NULL,
  `Costo` int(99) NOT NULL,
  `Fecha` int(99) NOT NULL,
  `Hora` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IDEm`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`IdSuc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUs`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IDV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
