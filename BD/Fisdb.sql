-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2017 a las 02:49:27
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Fisdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canchas`
--

CREATE TABLE `canchas` (
  `id_cancha` int(11) NOT NULL,
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Precio` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canchas`
--

INSERT INTO `canchas` (`id_cancha`, `id_gym`, `Nombre`, `Precio`) VALUES
(0, 0, 'De fútbol A', 13000),
(1, 0, 'De fútbol B', 14000),
(2, 1, 'Piscina', 16000),
(3, 2, 'De tenis A', 12000),
(4, 2, 'De Tenis B', 14000),
(5, 2, 'De Tenis C', 15000),
(6, 2, 'De Tenis D', 15000),
(7, 3, 'De Basquetball A', 15000),
(8, 3, 'De Basquetball B', 16000),
(9, 3, 'De Volleyball C', 17000),
(10, 3, 'De Volleyball D', 18000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id_gym` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id_gym`, `Nombre`, `Descripcion`, `Imagen`) VALUES
(0, 'Cóndor Rojas Norte', 'Estas canchas disponen de un amplio espacio para desarrollar la actividad futbolística en todo su esplendor, el césped es de un cuidado profesional, regado cada día para el máximo confort', 'http://www.alquilerdepistas.com/images/pistas/cancha-futbol-sala-gol-a-gol-hospitalet-170519183220.jpeg'),
(1, 'EL Phelps', 'Este recinto tiene una única piscina de proporciones olímpicas, cuenta con los mejores estándares de calidad del mercado, así como también de salvavidas profesionales en caso de cualquier imprevisto. ', 'http://i1005.photobucket.com/albums/af171/ZPLAQ/Vista-graderias-Foto-Miguel-Carrasco_LRZIMA20130424_0059_4_zps11efc353.jpg'),
(2, 'EL Massú', 'En este recinto han entrenado los mejores tenistas del país, incluyendo a la dupla de Nicolás Massú y Fernando González ', 'https://w.uces.edu.ar/wp-content/uploads/2016/08/FOTO_1_-_Mailu-750x500.jpg'),
(3, 'EL NBA', 'Canchas de nivel profesional con todas las comodidades para su mejor disfrute.', 'http://www.adesup.cl/wp-content/uploads/2015/09/MG_8930-e1474664092168.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_cancha` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `fecha`, `hora`, `id_cancha`, `id_cliente`) VALUES
(0, '2017-06-01', '08:30:00', 0, NULL),
(1, '2017-06-01', '10:00:00', 1, NULL),
(2, '2017-06-01', '11:00:00', 2, NULL),
(3, '2017-06-01', '12:30:00', 3, NULL),
(4, '2017-06-01', '13:30:00', 4, NULL),
(5, '2017-06-01', '14:00:00', 5, NULL),
(6, '2017-06-01', '15:00:00', 6, NULL),
(7, '2017-06-01', '16:00:00', 7, NULL),
(8, '2017-06-01', '17:00:00', 8, NULL),
(9, '2017-06-01', '17:00:00', 9, NULL),
(10, '2017-06-01', '18:00:00', 10, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD PRIMARY KEY (`id_cancha`),
  ADD KEY `id_gym` (`id_gym`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id_gym`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_cancha` (`id_cancha`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `canchas`
--
ALTER TABLE `canchas`
  ADD CONSTRAINT `canchas_ibfk_1` FOREIGN KEY (`id_gym`) REFERENCES `gym` (`id_gym`);

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_cancha`) REFERENCES `canchas` (`id_cancha`),
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
