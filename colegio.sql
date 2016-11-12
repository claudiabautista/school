-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2016 a las 11:51:08
-- Versión del servidor: 5.5.53-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.20

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
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `peopleId` int(11) NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `cuil` varchar(12) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `firstName` varchar(150) NOT NULL,
  `birthDate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(150) NOT NULL,
  `telephone` varchar(18) NOT NULL,
  `cellPhone` varchar(18) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `userUpdate` int(11) NOT NULL,
  PRIMARY KEY (`peopleId`),
  UNIQUE KEY `dni` (`dni`),
  UNIQUE KEY `cuil` (`cuil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`peopleId`, `dni`, `cuil`, `lastName`, `firstName`, `birthDate`, `gender`, `address`, `telephone`, `cellPhone`, `email`, `dateUpdate`, `userUpdate`) VALUES
(1, 26899902, '20268999028', 'SOSA', 'CLAUDIO ARIEL', '2016-11-01', '1', 'VILLA ASUNCION', '44444', '55555', 'PROFECLAUDIOSOSA@YAHOO.COM.AR', '2016-11-01 00:00:00', 1),
(6, 26899901, '21474836472', 'julio', 'corimayo', '2016-11-04', 'f', 'kdkdk', '2316464', '456464646', 'cla@hotmail.com', '0000-00-00 00:00:00', 1),
(7, 26899903, '21474836479', 'dkdkdk', 'kdkdk', '2016-11-10', 'f', 'dkdk', '5464646', '546464646', 'vicomser.claudio@gmail.com', '2016-07-11 00:00:00', 1),
(8, 26899904, '21474836474', 'dkdkdk', 'kdkdk', '2016-11-10', 'f', 'dkdk', '5464646', '546464646', 'vicomser.claudio@gmail.com', '2016-07-11 11:05:19', 1),
(9, 26899907, '21474836477', 'no', 'si', '2016-11-16', 'f', 'dkdk', '454545454', '5454545454', 'vicomser.claudio@gmail.com', '2016-07-11 08:09:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `userType` tinyint(4) NOT NULL,
  `peopleId` int(11) NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `userUpdate` int(11) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `userType`, `peopleId`, `dateUpdate`, `userUpdate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '2016-11-01 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;