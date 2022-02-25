-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2022 a las 21:01:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_gestortareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tareas`
--

CREATE TABLE `tbl_tareas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fechalimite` datetime NOT NULL,
  `estadotarea` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `fecha_registro` datetime NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tareas`
--

INSERT INTO `tbl_tareas` (`id`, `titulo`, `descripcion`, `fechalimite`, `estadotarea`, `usuario`, `estado`, `fecha_registro`, `updated_at`) VALUES
(1, 'titulo2', 'descripcion2', '2022-02-25 00:00:00', 'enproceso', 0, 1, '2022-02-25 08:37:12', '0000-00-00'),
(2, 'titulo3', 'descripcion3', '2022-02-25 00:00:00', 'creado', 0, 1, '2022-02-25 08:50:05', '0000-00-00'),
(3, 'titulo3', 'descripcion3', '2022-02-25 00:00:00', 'creado', 0, 0, '2022-02-25 08:50:12', '0000-00-00'),
(4, 'titulo5', 'descripcion5', '2022-02-26 00:00:00', 'creado', 0, 1, '2022-02-25 08:58:44', '0000-00-00'),
(5, 'titulo6', 'descripcion6', '2022-02-26 00:00:00', 'creado', 0, 1, '2022-02-25 11:29:47', '0000-00-00'),
(6, 'titulo8', 'descripcion8', '2022-02-26 00:00:00', 'enproceso', 0, 1, '2022-02-25 11:53:20', '0000-00-00'),
(7, 'awda', 'dawdawdawd', '2022-02-27 00:00:00', 'creado', 0, 1, '2022-02-25 12:07:19', '0000-00-00'),
(8, 'edede', 'sdf', '2022-02-27 00:00:00', 'enproceso', 0, 1, '2022-02-25 12:12:00', '0000-00-00'),
(9, 'alssda', 'vfdfds', '2022-02-27 00:00:00', 'creado', 0, 1, '2022-02-25 12:12:24', '0000-00-00'),
(10, 'rg', 'pruebagg', '2022-02-26 00:00:00', 'creado', 0, 1, '2022-02-25 12:18:08', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_p` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_m` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ci` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `nombre`, `apellido_p`, `apellido_m`, `ci`, `password`, `estado`, `fecha_registro`) VALUES
(1, 'paul', '0', '0', 78475123, '4', 0, '2022-02-25 10:30:59'),
(2, 'usuario2', 'usuario12', 'usuario13', 123456456, '765ba753b609d84b3813991fe23f81b3', 1, '2022-02-25 11:14:44'),
(3, 'usuario3', 'usuario13', 'usuario14', 745763, '7282bfc3566999f58c3921105977d900', 1, '2022-02-25 11:25:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
