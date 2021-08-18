-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2021 a las 23:01:35
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `film`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `actorId` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`actorId`, `name`, `genre`, `date`) VALUES
(1, 'Will Smith', 'M', '1980-12-01'),
(2, 'Robie Willians', 'M', '1970-08-13'),
(3, 'Rob Scheneider', 'M', '1985-07-03'),
(4, 'Nicholas Cage', 'M', '1970-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directors`
--

CREATE TABLE `directors` (
  `directorId` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directors`
--

INSERT INTO `directors` (`directorId`, `name`, `genre`, `date`) VALUES
(1, 'Alfonso Quaron', 'M', '1980-12-01'),
(2, 'Michael Mann', 'M', '1970-08-13'),
(3, 'Mel Gibson', 'M', '1985-07-03'),
(4, 'Steven Spilberg', 'M', '1970-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `filmId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `poster` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`filmId`, `name`, `description`, `genre`, `date`, `poster`) VALUES
(1, 'Gravedad', 'Ryan Stone (Sandra Bullock) es una especialista\r\n en su primera misión a bordo del transbordador espacial Explorer. ... Kowalski rápidamente recupera a Stone y \r\n emprenden el regreso al transbordador espacial. Descubren que el transbordador ha quedado da', 'Science-Fiction', '1980-12-01', 'views/src/img/gravity.jpg'),
(2, 'El ultimo de los mohicanos', 'Ambientada en el año 1757, \r\ndurante el transcurso de la guerra entre los ejércitos de Francia e Inglaterra en tierras norteamericanas por \r\nel control de las colonias. Ojo de Halcón, un hombre blanco adoptado por los indios mohicanos,\r\n rescata de una em', 'Historical', '1970-08-13', 'views/src/img/mohicano.jpg'),
(3, 'Hancock', 'La historia gira alrededor de John Hancock, un superhéroe odiado por la gente,\r\n con problemas de alcoholismo y que se encuentra con el experto en relaciones públicas Ray Embrey (Jason Bateman), \r\nque le ayudará a intentar reconciliarse con la sociedad y ', 'Heroes', '1985-07-03', 'views/src/img/hancock.jpg'),
(4, 'Wrong turn', 'Sendero al infierno narra la historia de un grupo de amigos que, haciendo senderismo \r\nmientras recorren el camino los Apalaches en Estados Unidos, caen en una trampa.', 'Terror', '1970-12-15', 'views/src/img/wrong-turn-3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register_films`
--

CREATE TABLE `register_films` (
  `registerFilmsId` int(11) NOT NULL,
  `filmId` int(11) NOT NULL,
  `directorId` int(11) NOT NULL,
  `actorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register_films`
--

INSERT INTO `register_films` (`registerFilmsId`, `filmId`, `directorId`, `actorId`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 4),
(5, 1, 2, 1),
(6, 1, 2, 3),
(7, 4, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actorId`);

--
-- Indices de la tabla `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`directorId`);

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`filmId`);

--
-- Indices de la tabla `register_films`
--
ALTER TABLE `register_films`
  ADD PRIMARY KEY (`registerFilmsId`),
  ADD KEY `filmId` (`filmId`),
  ADD KEY `directorId` (`directorId`),
  ADD KEY `actorId` (`actorId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `register_films`
--
ALTER TABLE `register_films`
  MODIFY `registerFilmsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `register_films`
--
ALTER TABLE `register_films`
  ADD CONSTRAINT `register_films_ibfk_1` FOREIGN KEY (`filmId`) REFERENCES `films` (`filmId`),
  ADD CONSTRAINT `register_films_ibfk_2` FOREIGN KEY (`directorId`) REFERENCES `directors` (`directorId`),
  ADD CONSTRAINT `register_films_ibfk_3` FOREIGN KEY (`actorId`) REFERENCES `actors` (`actorId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
