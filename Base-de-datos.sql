-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-06-2022 a las 21:44:18
-- Versión del servidor: 8.0.19
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cantante-bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `alb_id` int NOT NULL,
  `alb_titulo` varchar(45) DEFAULT NULL,
  `alb_imagen` varchar(200) DEFAULT NULL,
  `alb_date` date DEFAULT NULL,
  `alb_canciones` int DEFAULT NULL,
  `alb_descripcion` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`alb_id`, `alb_titulo`, `alb_imagen`, `alb_date`, `alb_canciones`, `alb_descripcion`) VALUES
(12, 'The predator', '7f866175e6b010ec85a56823973780b8.jpg', '2015-02-19', 3, 'https://www.youtube.com/watch?v=RNNGeipx1MU'),
(13, 'The danger', '5775d1fec5de6ef6c1090eb2c32450e7.jpg', '2022-05-03', 5, 'https://www.youtube.com/watch?v=hA_X6hkvTag'),
(14, 'AmeriKKKa\'s ', '16bd801f2e7c23eddbc37fcde552416c.jpg', '2022-05-02', 5, 'https://www.youtube.com/watch?v=nf497q1togw'),
(15, 'Fullambull', '7f7f0d6833bcd0dfa161f5fc1578f937.jpg', '2022-05-07', 12, 'https://www.youtube.com/watch?v=hA_X6hkvTag'),
(17, ' Greatest Hits', '5343aa3878aeeaa3e950a9cd91f47f48.jpg', '2004-02-28', 23, 'https://www.youtube.com/watch?v=RNNGeipx1MU&t=18s'),
(18, 'Your Name', 'd787fe91ce97dad199f71c38593b36b6.jpg', '2014-02-28', 14, 'https://www.youtube.com/watch?v=7XomSo01Erg'),
(20, 'Nuevo nombre', 'e42b935fcf28a3cf82b2e5fad0c57d78.jpg', '2001-06-09', 32, 'https://cutt.ly/QJWFi75'),
(21, 'Old School', 'e0f11e358960bf060b335c23ed0bbc3e.jpg', '1990-06-19', 23, 'https://cutt.ly/PJWFYOs'),
(23, 'Nuevo album', '02dcc077697ae6dc871f527d250deb42.jpg', '2021-02-02', 12, 'https://www.youtube.com/watch?v=hA_X6hkvTag&t=1s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conciertos`
--

CREATE TABLE `conciertos` (
  `con_id` int NOT NULL,
  `con_fecha` date DEFAULT NULL,
  `con_pais` varchar(50) DEFAULT NULL,
  `con_lugar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conciertos`
--

INSERT INTO `conciertos` (`con_id`, `con_fecha`, `con_pais`, `con_lugar`) VALUES
(2, '2024-10-25', 'Mexico', 'Estadio'),
(3, '2025-06-01', 'Colombia', 'Estadio Campin'),
(4, '2022-06-29', 'Peru', 'Coliseo Romania'),
(5, '2023-12-21', 'Brasil', 'Estadio Gaviria'),
(6, '2022-07-13', 'Ecuador', 'Plaza Principal'),
(7, '2022-06-29', 'Estados Unidos', 'Estadio Wem');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int NOT NULL,
  `usu_email` varchar(50) DEFAULT NULL,
  `usu_password` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_email`, `usu_password`) VALUES
(1, 'kevin@correo.com', '$2y$10$LHl.0XdV6kXkWS00htadQOGkh0XEf26uQtwzkZQj8GCrwk3B9NJzK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`alb_id`);

--
-- Indices de la tabla `conciertos`
--
ALTER TABLE `conciertos`
  ADD PRIMARY KEY (`con_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `alb_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `conciertos`
--
ALTER TABLE `conciertos`
  MODIFY `con_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
