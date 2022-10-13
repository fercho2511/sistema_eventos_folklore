# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-04-22 15:55:33
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "persona"
#

DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(40) NOT NULL,
  `apellido1` varchar(35) NOT NULL,
  `apellido2` varchar(35) DEFAULT NULL,
  `telefono` int(11) NOT NULL,
  `ci` varchar(16) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `estado` smallint(1) NOT NULL DEFAULT 1,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "persona"
#

INSERT INTO `persona` VALUES (1,'fernando','silva','leyton',70392277,'8732645','fercho11251989@gmail.com',1,'2022-04-18 21:56:35');

#
# Structure for table "cliente"
#

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `estado` smallint(1) NOT NULL DEFAULT 1,
  `idPersona` int(11) NOT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `fk_cliente_persona1_idx` (`idPersona`),
  CONSTRAINT `fk_cliente_persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "cliente"
#


#
# Structure for table "precio"
#

DROP TABLE IF EXISTS `precio`;
CREATE TABLE `precio` (
  `idPrecio` int(11) NOT NULL,
  `costo` double NOT NULL,
  PRIMARY KEY (`idPrecio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "precio"
#


#
# Structure for table "rol"
#

DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "rol"
#

INSERT INTO `rol` VALUES (1,'administrador','privilegios generales');

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` smallint(1) NOT NULL DEFAULT 1,
  `idRol` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `password_UNIQUE` (`password`),
  KEY `fk_usuario_rol_idx` (`idRol`),
  KEY `fk_usuario_persona1_idx` (`idPersona`),
  CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES (4,'FSL8732645','FSL8732645','2022-04-18 22:02:10',1,1,1);

#
# Structure for table "zona"
#

DROP TABLE IF EXISTS `zona`;
CREATE TABLE `zona` (
  `idZona` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) NOT NULL,
  `estado` varchar(45) NOT NULL DEFAULT '1',
  `idPrecio` int(11) NOT NULL,
  PRIMARY KEY (`idZona`),
  KEY `fk_categoria_precio1_idx` (`idPrecio`),
  CONSTRAINT `fk_categoria_precio1` FOREIGN KEY (`idPrecio`) REFERENCES `precio` (`idPrecio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "zona"
#


#
# Structure for table "silla"
#

DROP TABLE IF EXISTS `silla`;
CREATE TABLE `silla` (
  `idSilla` int(11) NOT NULL,
  `estado` smallint(3) NOT NULL DEFAULT 0,
  `idZona` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT current_timestamp(),
  `idUsuarioAcciones` int(11) NOT NULL,
  PRIMARY KEY (`idSilla`),
  KEY `fk_silla_categoria1_idx` (`idZona`),
  KEY `fk_silla_cliente1_idx` (`idCliente`),
  CONSTRAINT `fk_silla_categoria1` FOREIGN KEY (`idZona`) REFERENCES `zona` (`idZona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_silla_cliente1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "silla"
#

