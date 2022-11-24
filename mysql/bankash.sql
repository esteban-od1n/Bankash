-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 17:10:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bankash`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `genero` enum('Masculino','Femenino') DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `estado` enum('Aguascalientes','Baja California','Baja California Sur','Campeche','Coahuila','Colima','Chiapas','Chihuahua','Durango','Ciudad de méxico','Guanajuato','Guerrero','Hidalgo','Jalisco','México','Michoacán','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro','Quintana Roo','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz','Yucatán','Zacatecas') DEFAULT NULL,
  `municipio` varchar(40) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nac`, `genero`, `curp`, `estado`, `municipio`, `colonia`, `email`, `password`) VALUES
(1, 'gerardo', 'Flores', 'Santos', '0000-00-00', 'Masculino', 'FOSF030121HCMLNRA4', 'Guerrero', 'SANTIAGO', 'DEPORTIVA', 'franciscoflores@gmail.com', '321'),
(7, 'Francisco Javier', 'Flores ', 'SANTOS ', '0000-00-00', 'Masculino', 'GOSF030121HCMLNRA5', 'Ciudad de méxico', 'SANTIAGO', 'bellavista', 'FFLORES22@ucol.mx', '$2y$10$TOsNKKIN9tj/EcZ4fISvweQNuY48eU7fYj5oeyHrrwMZ90lYd6/oS'),
(8, 'francisco', 'flores ', 'santo ', '0000-00-00', 'Masculino', 'F0AF030121HCMLNRA4', 'Baja California', 'manzanillo', 'bellavista', 'franciscoflores@gmail.com', '$2y$10$xR.lp6/STkSwMaicva20Ku2kqHP6Y4vvM4mqlA.Z5tDFPdyoLnacK'),
(9, 'diego ', 'vazquez', 'maradona', '0000-00-00', 'Masculino', 'ABCF030121HCMLNRA4', 'Jalisco', 'manzanillo', 'bellavista', 'abcrrs22@ucol.mx', '$2y$10$hz3VC2kX1tjzmVO01J2SnOBI1yqlH.tYGEYz4AtS8OihCE9MRbfU6'),
(10, 'diego', 'armando', 'medina', '0000-00-00', 'Masculino', 'BCDF030121HCMLNRA4', 'Guerrero', 'SANTIAGO', 'dvhsi', 'BCDiscoflores@gmail.com', '$2y$10$OjycdQbID2GfDUs1LeZRzOCmllgQsMJM2644LSTa2zHbzAGbgIxi6'),
(11, 'jesus alonso', 'villa ', 'gonzalez', '2022-10-13', 'Masculino', 'ABCD030121HCMLNABD', 'Colima', 'manzanillo', 'COLOMOS', 'alonvilgez@gmail.com', '$2y$10$aZ61/rOYB5B2aHU33IKZyel6e0BEYHQqmr0VBq9oD57NfdFBmBZkm'),
(12, 'Francisco Javier', 'Flores', 'santos', '2003-01-21', 'Masculino', 'FOSF030121HCMLNRA9', 'Colima', 'manzanillo', 'bellavista', 'Fflores22@ucol.mx', '$2y$10$YJffUpBAjttGfC5u2s77deMD6RCJHRBmLsmlYLMI8S9nG86LyB7OW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ejecutivo`
--

CREATE TABLE `registro_ejecutivo` (
  `id_ejecutivo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(40) NOT NULL,
  `apellido_materno` varchar(40) NOT NULL,
  `edad` int(2) NOT NULL,
  `nombre_de_sucursal` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contraseña` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_ejecutivo`
--

INSERT INTO `registro_ejecutivo` (`id_ejecutivo`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `nombre_de_sucursal`, `correo`, `contraseña`) VALUES
(1, 'Francisco Javier ', 'Flores ', 'Santos', 19, 'bankash', 'fflores22@ucol.mx', 'hola123'),
(2, 'Francisco Javier', 'Flores ', 'Santos', 22, 'Bankash', 'franciscofloressantos@gmail.com', '$2y$10$Q/njha7M5/yYksJZYQGhlOL2WvqHiMXMCkzcpshorPevTgnCuXT6C'),
(4, 'gerardo', 'perito', 'villa', 22, 'Bankash', 'fwefdlores22@ucol.mx', '$2y$10$OWNYxz5LhywRuEXZp6gVFeblydfUJvFKfOelJnpc/pzLi9PAFFvny');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `curp` (`curp`);

--
-- Indices de la tabla `registro_ejecutivo`
--
ALTER TABLE `registro_ejecutivo`
  ADD PRIMARY KEY (`id_ejecutivo`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `registro_ejecutivo`
--
ALTER TABLE `registro_ejecutivo`
  MODIFY `id_ejecutivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
