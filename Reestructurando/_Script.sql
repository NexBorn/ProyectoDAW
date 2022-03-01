-- cdm -- mysql -u root -p

-- Base de datos: `grupo2`
--
DROP DATABASE IF EXISTS `grupo2`;
CREATE DATABASE IF NOT EXISTS `Grupo2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `grupo2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
-- Beltran Santistevan Steven
CREATE TABLE `reservacion` (
  `id_reservacion` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `cedula_pasaporte` int(11) NOT NULL,
  `apellidos_nombres` varchar(200) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefono` int(11) NOT NULL,
  `adultos` int(2) NOT NULL,
  `ninos` int(11) NOT NULL,
  `reservadodesde` date NOT NULL,
  `diasreservado` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mas_informacion`
-- Rendón Quijije Iván

CREATE TABLE `grupo2`.`mas_informacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NOT NULL,
  `asunto` VARCHAR(45) NOT NULL,
  `mensaje` MEDIUMTEXT NOT NULL,
  PRIMARY KEY (`id`)
);



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `protocolo_covid`
-- Cantos
CREATE TABLE `protocolo_covid` (
  `id_protocolo_covid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sur_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `vacuna` varchar(6) NOT NULL,
  `mask` int(1) NOT NULL,
  `range_washs` int(2) NOT NULL,
  `terms` Boolean NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Estructura de tabla para la tabla `protocolo_covid`
-- Gonzalez
CREATE TABLE `usuario` (
  `id_usuario` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Estructura de tabla para la tabla `protocolo_covid`
-- Reyes
CREATE TABLE `user` (
  `id_user` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `genero` Boolean NOT NULL,
  `edad` int(3) NOT NULL,
  `fecha_nac` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
