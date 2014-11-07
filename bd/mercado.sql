-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2014 a las 19:45:37
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE IF NOT EXISTS `auto` (
  `idauto` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `transmision` varchar(45) DEFAULT NULL,
  `combustible` varchar(45) DEFAULT NULL,
  `tipo_vehiculo` varchar(45) DEFAULT NULL,
  `kilometros` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idauto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviso`
--

CREATE TABLE IF NOT EXISTS `aviso` (
  `idaviso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  `updated` varchar(45) DEFAULT NULL,
  `empleo_id` int(11) DEFAULT NULL,
  `casa_id` int(11) DEFAULT NULL,
  `auto_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idaviso`),
  KEY `fk_aviso_usuario_idx` (`usuario_id`),
  KEY `fk_aviso_tipo1_idx` (`tipo_id`),
  KEY `fk_aviso_categoria1_idx` (`categoria_id`),
  KEY `fk_aviso_empleo1_idx` (`empleo_id`),
  KEY `fk_aviso_casa1_idx` (`casa_id`),
  KEY `fk_aviso_auto1_idx` (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa`
--

CREATE TABLE IF NOT EXISTS `casa` (
  `idcasa` int(11) NOT NULL AUTO_INCREMENT,
  `comuna` varchar(45) DEFAULT NULL,
  `dormitorios` varchar(45) DEFAULT NULL,
  `superficie` varchar(45) DEFAULT NULL,
  `superficie_construida` varchar(45) DEFAULT NULL,
  `estacionamiento` varchar(45) DEFAULT NULL,
  `gastos_comunes` varchar(45) DEFAULT NULL,
  `banos` varchar(45) DEFAULT NULL,
  `tipo_edificacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcasa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `usuario_id_vendedor` int(11) NOT NULL,
  `usuario_id_cliente` int(11) NOT NULL,
  `activo` varchar(45) DEFAULT NULL,
  `invitacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario_id_vendedor`,`usuario_id_cliente`),
  KEY `fk_usuario_has_usuario_usuario2_idx` (`usuario_id_cliente`),
  KEY `fk_usuario_has_usuario_usuario1_idx` (`usuario_id_vendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE IF NOT EXISTS `empleado` (
  `usuario_id_empresa` int(11) NOT NULL,
  `usuario_id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id_empresa`,`usuario_id_empleado`),
  KEY `fk_usuario_has_usuario_usuario4_idx` (`usuario_id_empleado`),
  KEY `fk_usuario_has_usuario_usuario3_idx` (`usuario_id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE IF NOT EXISTS `empleo` (
  `idempleo` int(11) NOT NULL AUTO_INCREMENT,
  `administrativo` varchar(45) DEFAULT NULL,
  `comercial` varchar(45) DEFAULT NULL,
  `artes` varchar(45) DEFAULT NULL,
  `informatica` varchar(45) DEFAULT NULL,
  `salud` varchar(45) DEFAULT NULL,
  `marketing` varchar(45) DEFAULT NULL,
  `servicio_domestico` varchar(45) DEFAULT NULL,
  `construccion` varchar(45) DEFAULT NULL,
  `agricultura` varchar(45) DEFAULT NULL,
  `ganaderia` varchar(45) DEFAULT NULL,
  `telecomunicaciones` varchar(45) DEFAULT NULL,
  `atencion_cliente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idempleo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `idimagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `aviso_id` int(11) NOT NULL,
  PRIMARY KEY (`idimagen`),
  KEY `fk_imagen_aviso1_idx` (`aviso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
  `idpregunta` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `aviso_id` int(11) NOT NULL,
  `created` varchar(45) DEFAULT NULL,
  `respuesta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpregunta`),
  KEY `fk_pregunta_usuario1_idx` (`usuario_id`),
  KEY `fk_pregunta_aviso1_idx` (`aviso_id`),
  KEY `fk_pregunta_respuesta1_idx` (`respuesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta` (
  `idrespuesta` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`idrespuesta`),
  KEY `fk_respuesta_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cuenta`
--

CREATE TABLE IF NOT EXISTS `tipo_cuenta` (
  `idtipo_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  `catidad_productos` int(11) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `analisis` tinyint(4) DEFAULT NULL,
  `descripcion` text,
  `foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_cuenta`),
  KEY `fk_tipo_cuenta_tipo_usuario1_idx` (`tipo_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tipo_cuenta`
--

INSERT INTO `tipo_cuenta` (`idtipo_cuenta`, `nombre`, `tipo_usuario_id`, `catidad_productos`, `precio`, `analisis`, `descripcion`, `foto`) VALUES
(1, 'free', 1, 4, '0', 0, '<span>cuenta con 4 publicaciones gratis</span>', NULL),
(2, 'bronce', 1, 8, '1000', 1, NULL, NULL),
(3, 'plata', 1, 12, '2000', 1, NULL, NULL),
(4, 'gold', 1, 18, '4000', 1, NULL, NULL),
(5, 'premium', 1, 25, '7000', 1, NULL, NULL),
(6, 'basico', 2, 10, '5000', 1, NULL, NULL),
(7, 'normal', 2, 20, '10000', 1, NULL, NULL),
(8, 'plata', 2, 30, '15000', 1, NULL, NULL),
(9, 'gold', 2, 40, '20000', 1, NULL, NULL),
(10, 'premium', 2, 100, '40000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `idtipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idtipo_usuario`, `nombre`) VALUES
(1, 'persona'),
(2, 'empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono_fijo` varchar(45) DEFAULT NULL,
  `telefono_celular` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `region` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `pagina_web` varchar(45) DEFAULT NULL,
  `tipo_usuario_id` int(11) NOT NULL,
  `tipo_cuenta_id` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuario_tipo_usuario1_idx` (`tipo_usuario_id`),
  KEY `fk_usuario_tipo_cuenta1_idx` (`tipo_cuenta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `email`, `telefono_fijo`, `telefono_celular`, `user`, `password`, `ciudad`, `region`, `created`, `foto`, `pagina_web`, `tipo_usuario_id`, `tipo_cuenta_id`) VALUES
(1, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '5555', '55555', '5555', NULL, '55555', '5555', 1, 1),
(2, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '5555', '55555', '5555', NULL, '55555', '5555', 1, 1),
(3, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '6666', '55555', '5555', NULL, '55555', '5555', 1, 1),
(4, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '666', '55555', '5555', '2014-11-04 20:12:59', '55555', '5555', 1, 1),
(5, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '333333', '55555', '5555', '2014-11-04 20:19:44', '55555', '5555', 2, 6),
(6, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', '5555', '333', '55555', '5555', '2014-11-04 21:58:17', '55555', '5555', 1, 1),
(7, 'jonathan', 'encina', 'jonny.encina@gmail.com', '5599290', '55555', 'jonny', 'jonny', '6666', '5555', '2014-11-05 13:37:31', '55555', '5555', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aviso`
--
ALTER TABLE `aviso`
  ADD CONSTRAINT `fk_aviso_auto1` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`idauto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_casa1` FOREIGN KEY (`casa_id`) REFERENCES `casa` (`idcasa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_empleo1` FOREIGN KEY (`empleo_id`) REFERENCES `empleo` (`idempleo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_tipo1` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`idtipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aviso_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_usuario_has_usuario_usuario1` FOREIGN KEY (`usuario_id_vendedor`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_usuario_usuario2` FOREIGN KEY (`usuario_id_cliente`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_usuario_has_usuario_usuario3` FOREIGN KEY (`usuario_id_empresa`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_usuario_usuario4` FOREIGN KEY (`usuario_id_empleado`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_imagen_aviso1` FOREIGN KEY (`aviso_id`) REFERENCES `aviso` (`idaviso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_aviso1` FOREIGN KEY (`aviso_id`) REFERENCES `aviso` (`idaviso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pregunta_respuesta1` FOREIGN KEY (`respuesta_id`) REFERENCES `respuesta` (`idrespuesta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pregunta_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_respuesta_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_cuenta`
--
ALTER TABLE `tipo_cuenta`
  ADD CONSTRAINT `fk_tipo_cuenta_tipo_usuario1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`idtipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipo_cuenta1` FOREIGN KEY (`tipo_cuenta_id`) REFERENCES `tipo_cuenta` (`idtipo_cuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipo_usuario1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`idtipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
