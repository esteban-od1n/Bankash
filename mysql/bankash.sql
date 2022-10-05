-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2022 a las 05:06:03
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
  `edad` int(2) NOT NULL,
  `genero` enum('Masculino','Femenino') DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `estado` enum('Aguascalientes','Baja California','Baja California Sur','Campeche','Coahuila','Colima','Chiapas','Chihuahua','Durango','Ciudad de méxico','Guanajuato','Guerrero','Hidalgo','Jalisco','México','Michoacán','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro','Quintana Roo','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz','Yucatán','Zacatecas') DEFAULT NULL,
  `municipio` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(258) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `genero`, `curp`, `colonia`, `estado`, `municipio`, `email`, `password`) VALUES
(1, 'francisco javier ', 'flores ', 'santos', 19, 'Masculino', 'jsdsdgdgsgsdjbdjbv', 'bellavista', 'Colima', 'manzanillo', 'francisc@gmail.com', 'dsvbsbfbsbs'),
(2, 'francisco javier ', 'flores ', 'santos', 19, 'Masculino', 'asdfghjklñpoiuytrb', 'bellavista', 'Colima', 'manzanillo', 'franciscoflores@gmail.com', 'fsbdfbfbd'),
(4, 'javvr', 'aodo', 'isdvhovd', 28, 'Masculino', 'qwertuiopasdfghjk', 'bellavista', 'Colima', 'manzanillo', 'franciscodls@gmail.com', 'gola123'),
(6, '', '', '', 0, '', '', '', '', '', '', NULL),
(16, 'Adolfo', 'perito', 'villa', 20, 'Masculino', 'FOSF030121DCMLNRA4', 'dvhsi', 'Coahuila', 'manzanillo', 'adolfof@gmail.com', NULL),
(17, 'armando', 'medina', 'rosa', 19, 'Masculino', 'FOSD030121HCMLNRA4', 'bellavista', 'Campeche', 'manzanillo', 'fflosdrrs22@ucol.mx', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ejecutivo`
--

CREATE TABLE `registro_ejecutivo` (
  `id_ejecutivo` int(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(40) NOT NULL,
  `apellido_materno` varchar(40) NOT NULL,
  `edad` int(2) NOT NULL,
  `nombre_de_sucursal` varchar(50) NOT NULL,
  `correo` varchar(70) NOT NULL,
  `contraseña` varchar(280) NOT NULL,
  `token` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_ejecutivo`
--

INSERT INTO `registro_ejecutivo` (`id_ejecutivo`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `nombre_de_sucursal`, `correo`, `contraseña`, `token`) VALUES
(1, 'FRANCISCO JAVIER', 'FLORES ', 'santos', 19, 'BANKASH', 'fflores22@ucol.mx', 'hola', '123iedjo1');

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
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `token` (`token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
