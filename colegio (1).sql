-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2016 a las 06:33:22
-- Versión del servidor: 5.5.47-0+deb8u1
-- Versión de PHP: 5.6.17-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alu_curso`
--

CREATE TABLE IF NOT EXISTS `alu_curso` (
  `curso_id` int(3) NOT NULL,
  `alunmo_id` int(6) NOT NULL,
  `fecha_estado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE IF NOT EXISTS `asistencia` (
`asistencia_id` int(7) NOT NULL,
  `alumno_id` int(6) NOT NULL,
  `fecha_asist` date NOT NULL,
  `estado` decimal(10,0) NOT NULL,
  `usuario_id` int(6) NOT NULL,
  `fecha_mod` date NOT NULL,
  `h_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
`curso_id` int(3) NOT NULL,
  `nombre` varchar(5) NOT NULL,
  `turno` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`persona_id` int(6) NOT NULL,
  `tipo` set('ALUMNO','TUTOR','DOCENTE','PRECEPTOR','ADMINISTRATIVO','DIRECTIVO','ADMIN') NOT NULL,
  `dni` int(8) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefono` varchar(18) NOT NULL,
  `celular` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_mod` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`persona_id`, `tipo`, `dni`, `cuil`, `apellido`, `nombre`, `fecha_nac`, `sexo`, `telefono`, `celular`, `email`, `direccion`, `fecha_mod`) VALUES
(1, 'ADMIN', 2, '2', 'claudio', 'ariel', '2015-08-13', 'm', '9', '9', '', 'ssssss', '2015-08-20'),
(2, 'ALUMNO', 12345678, '2147483647', 'sosa', 'claudio', '2015-10-08', 'f', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(3, 'ALUMNO,TUTOR', 33333334, '21474836473', 'ariel', 'sosa', '2015-10-08', 'm', '1111111', '222222222', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(4, 'ALUMNO,TUTOR', 12345678, '2147483647', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(5, 'ALUMNO,TUTOR', 12345611, '21474836471', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(6, 'ALUMNO,TUTOR', 12345678, '2147483647', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(7, 'ALUMNO,TUTOR', 66666666, '21474836476', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(8, 'ALUMNO,TUTOR', 12345678, '2147483647', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(9, 'ALUMNO,TUTOR', 12345678, '2147483647', 'sosa', 'claudio', '2015-10-08', 'm', '22323232', '323232323', 'DFAFAFAF@HOTMAIL.COM', 'aaaaa', '2015-10-02'),
(10, 'ALUMNO,TUTOR', 99999999, '34343434234', 'cascas', 'cascas', '2015-11-12', 'm', '5555554444', '5555554444', 'dsfdsfd@hotmail.com', 'kdkdkdkdd', '2015-10-02'),
(11, 'ALUMNO,TUTOR', 66666668, '34343434234', 'FGFDG', 'SDFSDF', '2015-11-18', 'm', '5555554444', '5555554444', 'adrianlopezil@gmail.com', 'DDDDD', '2015-10-02'),
(12, 'ALUMNO,TUTOR', 55555555, '34343434234', 'adfsfasffsdf', 'ASDFsaf', '2015-11-11', 'm', '43434333', '43433333', 'adrianlopezil@gmail.com', 'dfdasfasf', '2015-10-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE IF NOT EXISTS `tutores` (
`tutor_id` int(6) NOT NULL,
  `alumno_id` int(6) NOT NULL,
  `persona_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `persona_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`persona_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, '12345678', '25d55ad283aa400af464c76d713c07ad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
 ADD PRIMARY KEY (`asistencia_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
 ADD PRIMARY KEY (`curso_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`persona_id`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
 ADD PRIMARY KEY (`tutor_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`persona_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
MODIFY `asistencia_id` int(7) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
MODIFY `curso_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `persona_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
MODIFY `tutor_id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
