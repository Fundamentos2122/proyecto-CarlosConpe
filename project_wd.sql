-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2022 a las 01:43:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project_wd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanas`
--

CREATE TABLE `campanas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campanas`
--

INSERT INTO `campanas` (`id`, `nombre`, `tipo`) VALUES
(1, 'Ejemplo 1', 1),
(2, 'Ejemplo 2', 2),
(3, 'Ejemplo 3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `hex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`, `hex`) VALUES
(1, 'negro', 'black'),
(2, 'blanco', 'white'),
(3, 'rojo', '#fa0a0a'),
(4, 'verde', '#27fa0a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfriadores_vino`
--

CREATE TABLE `enfriadores_vino` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfriadores_vino`
--

INSERT INTO `enfriadores_vino` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estufas`
--

CREATE TABLE `estufas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estufas`
--

INSERT INTO `estufas` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frigobares`
--

CREATE TABLE `frigobares` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frigobares`
--

INSERT INTO `frigobares` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herrajes`
--

CREATE TABLE `herrajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `herrajes`
--

INSERT INTO `herrajes` (`id`, `nombre`) VALUES
(1, 'Ejemplo'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hornos`
--

CREATE TABLE `hornos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hornos`
--

INSERT INTO `hornos` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jaladeras`
--

CREATE TABLE `jaladeras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jaladeras`
--

INSERT INTO `jaladeras` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kits`
--

CREATE TABLE `kits` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `kits`
--

INSERT INTO `kits` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavavajillas`
--

CREATE TABLE `lavavajillas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lavavajillas`
--

INSERT INTO `lavavajillas` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `microondas`
--

CREATE TABLE `microondas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `microondas`
--

INSERT INTO `microondas` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monomandos`
--

CREATE TABLE `monomandos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `monomandos`
--

INSERT INTO `monomandos` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parrillas`
--

CREATE TABLE `parrillas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parrillas`
--

INSERT INTO `parrillas` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `tipo_diseño` tinyint(1) NOT NULL DEFAULT 0,
  `tipo_cotizacion` tinyint(1) NOT NULL DEFAULT 0,
  `jaladera` int(11) DEFAULT 1,
  `herraje` int(11) DEFAULT 1,
  `material` int(11) DEFAULT 1,
  `color` int(11) DEFAULT 1,
  `parrilla` int(11) DEFAULT 1,
  `horno` int(11) DEFAULT 1,
  `estufa` int(11) DEFAULT 1,
  `microondas` int(11) DEFAULT 1,
  `campana` int(11) DEFAULT 1,
  `frigobar` int(11) DEFAULT 1,
  `refrigerador` int(11) DEFAULT 1,
  `enfriador_vino` int(11) DEFAULT 1,
  `lavavajilla` int(11) DEFAULT 1,
  `tarja` int(11) DEFAULT 1,
  `monomando` int(11) DEFAULT 1,
  `kit` int(11) DEFAULT 1,
  `triturador` int(11) DEFAULT 1,
  `id_vendedor` int(11) DEFAULT 1,
  `plano` mediumblob DEFAULT '',
  `imagen` mediumblob DEFAULT '',
  `etapa` varchar(255) NOT NULL DEFAULT 'Revisión'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_cliente`, `tipo_diseño`, `tipo_cotizacion`, `jaladera`, `herraje`, `material`, `color`, `parrilla`, `horno`, `estufa`, `microondas`, `campana`, `frigobar`, `refrigerador`, `enfriador_vino`, `lavavajilla`, `tarja`, `monomando`, `kit`, `triturador`, `id_vendedor`, `plano`, `imagen`, `etapa`) VALUES
(1, 2, 1, 1, 3, 1, 2, 2, 2, 3, 2, 3, 2, 2, 1, 3, 2, 3, 2, 3, 1, 14, '', '', 'Proceso'),
(2, 3, 0, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 1, 13, 0x00, 0x00, 'Revisión'),
(3, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, 'Revisión'),
(4, 2, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, NULL, 'Revisión'),
(5, 2, 1, 1, 3, 1, 1, 2, 2, 3, 2, 3, 2, 2, 1, 3, 2, 3, 2, 3, 2, 14, '', '', 'Hecho'),
(6, 3, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 14, '', '', 'Revisión'),
(7, 18, 0, 1, 3, 3, 3, 2, 2, 2, 1, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 19, '', '', 'Proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refrigeradores`
--

CREATE TABLE `refrigeradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `refrigeradores`
--

INSERT INTO `refrigeradores` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjas`
--

CREATE TABLE `tarjas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjas`
--

INSERT INTO `tarjas` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trituradores`
--

CREATE TABLE `trituradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trituradores`
--

INSERT INTO `trituradores` (`id`, `nombre`) VALUES
(1, 'Ejemplo 1'),
(2, 'Ejemplo 2'),
(3, 'Ejemplo 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `type`) VALUES
(13, 'Carlos', '$2y$10$bC2tKON//ClWZq/YPKMSse.uP5EGP1JWCCha6R.YM5nJD9I1gW6FO', '2022-05-29 17:51:15', 1),
(14, 'Carlos1', '$2y$10$5.Lkj9zcBwPImqNwXQ0Q7.0pds7PDqFtOOuX9nksjvLT5IJYfysEy', '2022-05-29 19:17:16', 2),
(16, 'Carlos3', '$2y$10$eUA8nCbE7DK4Y2cOK4U0yuAk4/Y4zU/rSRzRDiDDvNcGE8rBD/bdK', '2022-06-03 17:54:45', 1),
(17, 'JuanCarlos', '$2y$10$/ZE5Iwf6KAvncYBEzNM1KOSkYSXEuRyazQQKIcBt.B9xiyTs0Ni6W', '2022-06-03 18:00:58', 1),
(18, 'CarlosJuanDominguez', '$2y$10$Ks75EYK4jbfCZvSEcO6uduJhm.PwckaPaZCYMUE8JU/34AKiVeaUe', '2022-06-03 18:19:58', 1),
(19, 'CarlosA', '$2y$10$65AomRpBzLP2U/z.eGyKmeceYOAgmP79AfkpFF0NK8K6DVoCpEUqi', '2022-06-03 18:24:03', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_secondary`
--

CREATE TABLE `users_secondary` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `type` int(11) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_secondary`
--

INSERT INTO `users_secondary` (`id`, `username`, `password`, `created_at`, `type`, `telefono`, `correo`, `nombre`, `id_vendedor`) VALUES
(2, 'Carlos', '$2y$10$SYqPuNaOyCTVUOP.pUgbYeerU79mzI3KWOmTDDBr18OQnyi7H6Xm.', '2022-06-01 22:42:40', 3, '4442077125', 'carlos.conpe@hotmail.com', 'Carlos Daniel Contreras', 14),
(3, 'dasd', 'sadsd', '2022-06-02 01:18:55', 3, 'asd', 'asd', 'Juan de las Cuerdas', 14),
(18, 'CarlosJuanX', '$2y$10$L9eTLn77SjHy/ohervkBzuytctBQoN9sHJ8kvVTIh3q54lSdGnLCq', '2022-06-03 18:29:05', 4, '4442077125', 'carlos.conpe@hotmail.cpom', 'Juan Manuel Dominguez', 19),
(19, 'CarlosDaniel', '$2y$10$Yy9kcAz9jxn3XhH4j/h3GuEvjpYvhdmdrzArc1qrZ/EDwvqsNRKZO', '2022-06-03 18:40:02', 4, '4442077125', 'carlos.conpe@hotmail.cpom', 'Carlos Daniel', 14);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanas`
--
ALTER TABLE `campanas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enfriadores_vino`
--
ALTER TABLE `enfriadores_vino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estufas`
--
ALTER TABLE `estufas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frigobares`
--
ALTER TABLE `frigobares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `herrajes`
--
ALTER TABLE `herrajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hornos`
--
ALTER TABLE `hornos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jaladeras`
--
ALTER TABLE `jaladeras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lavavajillas`
--
ALTER TABLE `lavavajillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `microondas`
--
ALTER TABLE `microondas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monomandos`
--
ALTER TABLE `monomandos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parrillas`
--
ALTER TABLE `parrillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pedidos_id_uindex` (`id`),
  ADD KEY `pedidos_campanas_id_fk` (`campana`),
  ADD KEY `pedidos_colores_id_fk` (`color`),
  ADD KEY `pedidos_enfriadores_vino_id_fk` (`enfriador_vino`),
  ADD KEY `pedidos_estufas_id_fk` (`estufa`),
  ADD KEY `pedidos_frigobares_id_fk` (`frigobar`),
  ADD KEY `pedidos_herrajes_id_fk` (`herraje`),
  ADD KEY `pedidos_hornos_id_fk` (`horno`),
  ADD KEY `pedidos_jaladeras_id_fk` (`jaladera`),
  ADD KEY `pedidos_kits_id_fk` (`kit`),
  ADD KEY `pedidos_lavavajillas_id_fk` (`lavavajilla`),
  ADD KEY `pedidos_materiales_id_fk` (`material`),
  ADD KEY `pedidos_microondas_id_fk` (`microondas`),
  ADD KEY `pedidos_monomandos_id_fk` (`monomando`),
  ADD KEY `pedidos_parrillas_id_fk` (`parrilla`),
  ADD KEY `pedidos_refrigeradores_id_fk` (`refrigerador`),
  ADD KEY `pedidos_tarjas_id_fk` (`tarja`),
  ADD KEY `pedidos_trituradores_id_fk` (`triturador`),
  ADD KEY `pedidos_users_secondary_id_fk` (`id_cliente`),
  ADD KEY `pedidos_users_id_fk` (`id_vendedor`);

--
-- Indices de la tabla `refrigeradores`
--
ALTER TABLE `refrigeradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarjas`
--
ALTER TABLE `tarjas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trituradores`
--
ALTER TABLE `trituradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `users_secondary`
--
ALTER TABLE `users_secondary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_vendedor_fk` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanas`
--
ALTER TABLE `campanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `enfriadores_vino`
--
ALTER TABLE `enfriadores_vino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estufas`
--
ALTER TABLE `estufas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `frigobares`
--
ALTER TABLE `frigobares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `herrajes`
--
ALTER TABLE `herrajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hornos`
--
ALTER TABLE `hornos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jaladeras`
--
ALTER TABLE `jaladeras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `kits`
--
ALTER TABLE `kits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lavavajillas`
--
ALTER TABLE `lavavajillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `microondas`
--
ALTER TABLE `microondas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `monomandos`
--
ALTER TABLE `monomandos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `parrillas`
--
ALTER TABLE `parrillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `refrigeradores`
--
ALTER TABLE `refrigeradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tarjas`
--
ALTER TABLE `tarjas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trituradores`
--
ALTER TABLE `trituradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users_secondary`
--
ALTER TABLE `users_secondary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_campanas_id_fk` FOREIGN KEY (`campana`) REFERENCES `campanas` (`id`),
  ADD CONSTRAINT `pedidos_colores_id_fk` FOREIGN KEY (`color`) REFERENCES `colores` (`id`),
  ADD CONSTRAINT `pedidos_enfriadores_vino_id_fk` FOREIGN KEY (`enfriador_vino`) REFERENCES `enfriadores_vino` (`id`),
  ADD CONSTRAINT `pedidos_estufas_id_fk` FOREIGN KEY (`estufa`) REFERENCES `estufas` (`id`),
  ADD CONSTRAINT `pedidos_frigobares_id_fk` FOREIGN KEY (`frigobar`) REFERENCES `frigobares` (`id`),
  ADD CONSTRAINT `pedidos_herrajes_id_fk` FOREIGN KEY (`herraje`) REFERENCES `herrajes` (`id`),
  ADD CONSTRAINT `pedidos_hornos_id_fk` FOREIGN KEY (`horno`) REFERENCES `hornos` (`id`),
  ADD CONSTRAINT `pedidos_jaladeras_id_fk` FOREIGN KEY (`jaladera`) REFERENCES `jaladeras` (`id`),
  ADD CONSTRAINT `pedidos_kits_id_fk` FOREIGN KEY (`kit`) REFERENCES `kits` (`id`),
  ADD CONSTRAINT `pedidos_lavavajillas_id_fk` FOREIGN KEY (`lavavajilla`) REFERENCES `lavavajillas` (`id`),
  ADD CONSTRAINT `pedidos_materiales_id_fk` FOREIGN KEY (`material`) REFERENCES `materiales` (`id`),
  ADD CONSTRAINT `pedidos_microondas_id_fk` FOREIGN KEY (`microondas`) REFERENCES `microondas` (`id`),
  ADD CONSTRAINT `pedidos_monomandos_id_fk` FOREIGN KEY (`monomando`) REFERENCES `monomandos` (`id`),
  ADD CONSTRAINT `pedidos_parrillas_id_fk` FOREIGN KEY (`parrilla`) REFERENCES `parrillas` (`id`),
  ADD CONSTRAINT `pedidos_refrigeradores_id_fk` FOREIGN KEY (`refrigerador`) REFERENCES `refrigeradores` (`id`),
  ADD CONSTRAINT `pedidos_tarjas_id_fk` FOREIGN KEY (`tarja`) REFERENCES `tarjas` (`id`),
  ADD CONSTRAINT `pedidos_trituradores_id_fk` FOREIGN KEY (`triturador`) REFERENCES `trituradores` (`id`),
  ADD CONSTRAINT `pedidos_users_id_fk` FOREIGN KEY (`id_vendedor`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pedidos_users_secondary_id_fk` FOREIGN KEY (`id_cliente`) REFERENCES `users_secondary` (`id`);

--
-- Filtros para la tabla `users_secondary`
--
ALTER TABLE `users_secondary`
  ADD CONSTRAINT `id_vendedor_fk` FOREIGN KEY (`id_vendedor`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
