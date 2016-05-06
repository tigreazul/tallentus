/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tallentus

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-04-08 13:30:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbl_areas`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_areas`;
CREATE TABLE `tbl_areas` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_nombre` varchar(500) DEFAULT NULL,
  `area_descripcion` text,
  `area_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_areas
-- ----------------------------
INSERT INTO `tbl_areas` VALUES ('1', 'Comercial / Ventas', null, '1');
INSERT INTO `tbl_areas` VALUES ('2', 'Operaciones', null, '1');
INSERT INTO `tbl_areas` VALUES ('3', 'Atención al Cliente', null, '1');
INSERT INTO `tbl_areas` VALUES ('4', 'Administración y finanzas', null, '1');
INSERT INTO `tbl_areas` VALUES ('5', 'Call Canter / Telemarketing', null, '1');
INSERT INTO `tbl_areas` VALUES ('6', 'Producción', null, '1');

-- ----------------------------
-- Table structure for `tbl_areasxusuario`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_areasxusuario`;
CREATE TABLE `tbl_areasxusuario` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_usu` int(11) NOT NULL DEFAULT '0',
  `area_nombre` varchar(500) DEFAULT NULL,
  `area_descripcion` text,
  `area_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`area_id`,`area_usu`),
  KEY `fk_usuX` (`area_usu`),
  CONSTRAINT `fk_usuX` FOREIGN KEY (`area_usu`) REFERENCES `tbl_usuario` (`usu_id`),
  CONSTRAINT `fk_areaX` FOREIGN KEY (`area_id`) REFERENCES `tbl_areas` (`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tbl_areasxusuario
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_categoria`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE `tbl_categoria` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_descripcion` varchar(500) DEFAULT NULL,
  `cat_estado` int(11) DEFAULT '1',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_categoria
-- ----------------------------
INSERT INTO `tbl_categoria` VALUES ('1', 'Informatica / Telecomunicaciones', '1');
INSERT INTO `tbl_categoria` VALUES ('2', 'Ingenieria', '1');
INSERT INTO `tbl_categoria` VALUES ('3', 'Produccion / Operarios / Manufactura', '1');
INSERT INTO `tbl_categoria` VALUES ('4', 'Servicios Generales, Aseo y Seguridad', '1');
INSERT INTO `tbl_categoria` VALUES ('5', 'Contabilidad / Finanzas', '1');
INSERT INTO `tbl_categoria` VALUES ('6', 'Administracion / Oficina', '1');

-- ----------------------------
-- Table structure for `tbl_contrato`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_contrato`;
CREATE TABLE `tbl_contrato` (
  `contra_id` int(11) NOT NULL AUTO_INCREMENT,
  `contra_descripcion` varchar(500) DEFAULT NULL,
  `contra_estado` int(11) DEFAULT '1',
  PRIMARY KEY (`contra_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_contrato
-- ----------------------------
INSERT INTO `tbl_contrato` VALUES ('1', 'CONTRATO A PLAZO INDETERMINADO', '1');
INSERT INTO `tbl_contrato` VALUES ('2', 'CONTRATO POR INICIO O INCREMENTO DE ACTIVIDAD', '1');
INSERT INTO `tbl_contrato` VALUES ('3', 'CONTRATO POR NECESIDADES DEL MERCADO', '1');
INSERT INTO `tbl_contrato` VALUES ('4', 'CONTRATO TEMPORADA', '1');
INSERT INTO `tbl_contrato` VALUES ('5', 'CONTRATO POR OBRA DETERMINADA O SERVICIOS ESPECIFICOS', '1');
INSERT INTO `tbl_contrato` VALUES ('6', 'CONTRATO INTERMITENTE', '1');
INSERT INTO `tbl_contrato` VALUES ('7', 'CONTRATO OCASIONAL', '1');

-- ----------------------------
-- Table structure for `tbl_distrito`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_distrito`;
CREATE TABLE `tbl_distrito` (
  `dist_id` int(11) NOT NULL AUTO_INCREMENT,
  `dist_descripcion` varchar(500) DEFAULT NULL,
  `dist_estado` int(11) DEFAULT '1',
  PRIMARY KEY (`dist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_distrito
-- ----------------------------
INSERT INTO `tbl_distrito` VALUES ('1', 'LIMA', '1');
INSERT INTO `tbl_distrito` VALUES ('2', 'SAN ISIDRO', '1');
INSERT INTO `tbl_distrito` VALUES ('3', 'MIRAFLORES', '1');
INSERT INTO `tbl_distrito` VALUES ('4', 'SANTIAGO DE SURCO', '1');
INSERT INTO `tbl_distrito` VALUES ('5', 'LINCE', '1');
INSERT INTO `tbl_distrito` VALUES ('6', 'SURQUILLO', '1');

-- ----------------------------
-- Table structure for `tbl_educacion`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_educacion`;
CREATE TABLE `tbl_educacion` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `edu_descripcion` varchar(200) DEFAULT NULL,
  `edu_estado` int(11) DEFAULT '1',
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_educacion
-- ----------------------------
INSERT INTO `tbl_educacion` VALUES ('1', 'PRIMARIA', '1');
INSERT INTO `tbl_educacion` VALUES ('2', 'SECUNDARIA', '1');
INSERT INTO `tbl_educacion` VALUES ('3', 'TECNICO', '1');
INSERT INTO `tbl_educacion` VALUES ('4', 'UNIVERSITARIO', '1');
INSERT INTO `tbl_educacion` VALUES ('5', 'BACHILLER', '1');
INSERT INTO `tbl_educacion` VALUES ('6', 'SIN ESTUDIO', '1');

-- ----------------------------
-- Table structure for `tbl_empresa`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE `tbl_empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_logo` varchar(200) DEFAULT NULL,
  `emp_razon_social` varchar(200) DEFAULT NULL,
  `emp_ruc` int(11) DEFAULT NULL,
  `emp_direccion` varchar(500) DEFAULT NULL,
  `emp_descripcion` text,
  `emp_estado` int(11) DEFAULT NULL,
  `emp_fecha_creacion` datetime DEFAULT NULL,
  `emp_fecha_modificacion` datetime DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_empresa
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_jornada`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jornada`;
CREATE TABLE `tbl_jornada` (
  `jor_id` int(11) NOT NULL AUTO_INCREMENT,
  `jor_descripcion` varchar(500) DEFAULT NULL,
  `jor_estado` int(11) DEFAULT '1',
  PRIMARY KEY (`jor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_jornada
-- ----------------------------
INSERT INTO `tbl_jornada` VALUES ('1', 'TIEMPO COMPLETO', '1');
INSERT INTO `tbl_jornada` VALUES ('2', 'DESDE CASA', '1');
INSERT INTO `tbl_jornada` VALUES ('3', 'POR HORAS', '1');
INSERT INTO `tbl_jornada` VALUES ('4', 'TIEMPO PARCIAL', '1');

-- ----------------------------
-- Table structure for `tbl_pagina`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pagina`;
CREATE TABLE `tbl_pagina` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `pag_describre` varchar(100) DEFAULT NULL,
  `pag_modulo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_pagina
-- ----------------------------
INSERT INTO `tbl_pagina` VALUES ('1', 'Dashboard', 'usuario');
INSERT INTO `tbl_pagina` VALUES ('2', 'Rol', 'usuario');
INSERT INTO `tbl_pagina` VALUES ('3', 'Permisos', 'usuario');
INSERT INTO `tbl_pagina` VALUES ('4', 'Clientes', 'personal');
INSERT INTO `tbl_pagina` VALUES ('5', 'Empleados', 'personal');
INSERT INTO `tbl_pagina` VALUES ('6', 'Proveedores', 'personal');

-- ----------------------------
-- Table structure for `tbl_permiso`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permiso`;
CREATE TABLE `tbl_permiso` (
  `permi_id` int(11) NOT NULL AUTO_INCREMENT,
  `permi_rol` varchar(500) DEFAULT NULL,
  `permi_estado` int(11) DEFAULT NULL,
  `usu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`permi_id`),
  KEY `fk_usuarioY` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_permiso
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_permisos`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permisos`;
CREATE TABLE `tbl_permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `per_insert` int(11) DEFAULT '0',
  `per_ver` int(11) DEFAULT '0',
  `per_update` int(11) DEFAULT '0',
  `per_delete` int(11) DEFAULT '0',
  PRIMARY KEY (`id_permiso`),
  KEY `fk_pagina` (`id_pagina`),
  KEY `fk_rol_permiso` (`id_rol`),
  CONSTRAINT `fk_pagina` FOREIGN KEY (`id_pagina`) REFERENCES `tbl_pagina` (`id_pagina`),
  CONSTRAINT `fk_rol_permiso` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_permisos
-- ----------------------------
INSERT INTO `tbl_permisos` VALUES ('1', '1', '1', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('3', '2', '3', '1', '1', '0', '0');
INSERT INTO `tbl_permisos` VALUES ('4', '2', '1', '1', '0', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('5', '2', '2', '0', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('6', '1', '2', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('7', '1', '3', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('8', '4', '2', '1', '0', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('9', '4', '3', '0', '0', '0', '0');
INSERT INTO `tbl_permisos` VALUES ('10', '2', '4', '0', '1', '0', '0');
INSERT INTO `tbl_permisos` VALUES ('11', '2', '5', '0', '1', '0', '0');
INSERT INTO `tbl_permisos` VALUES ('12', '2', '6', '0', '1', '0', '0');
INSERT INTO `tbl_permisos` VALUES ('13', '1', '4', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('14', '1', '5', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('15', '1', '6', '1', '1', '1', '1');
INSERT INTO `tbl_permisos` VALUES ('16', '4', '1', '1', '0', '1', '1');

-- ----------------------------
-- Table structure for `tbl_postulaciones`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_postulaciones`;
CREATE TABLE `tbl_postulaciones` (
  `postu_id` int(11) NOT NULL AUTO_INCREMENT,
  `postu_titulo` varchar(300) DEFAULT NULL,
  `postu_desc_larca` varchar(500) DEFAULT NULL,
  `postu_desc_corta` text,
  `postu_beneficios` text,
  `postu_requisitos` text,
  `post_tag` text,
  `postu_vacantes` int(11) DEFAULT NULL,
  `postu_educacion_id` int(11) DEFAULT NULL,
  `postu_tiempo_experiencia` int(11) DEFAULT NULL,
  `postu_disponibilidad_viaje` char(2) DEFAULT NULL,
  `postu_distrito_id` int(11) DEFAULT NULL,
  `postu_salario` varchar(50) DEFAULT NULL,
  `postu_jornada_id` int(11) DEFAULT NULL,
  `postu_tipo_contrato_id` int(11) DEFAULT NULL,
  `postu_empresa_id` int(11) DEFAULT NULL,
  `postu_fecha_creacion` datetime DEFAULT NULL,
  PRIMARY KEY (`postu_id`),
  KEY `fk_distX` (`postu_distrito_id`),
  KEY `fk_educacionX` (`postu_educacion_id`),
  KEY `fk_contratoX` (`postu_tipo_contrato_id`),
  KEY `fk_jornadaX` (`postu_jornada_id`),
  KEY `fk_empresaX` (`postu_empresa_id`),
  CONSTRAINT `fk_contratoX` FOREIGN KEY (`postu_tipo_contrato_id`) REFERENCES `tbl_contrato` (`contra_id`),
  CONSTRAINT `fk_distX` FOREIGN KEY (`postu_distrito_id`) REFERENCES `tbl_distrito` (`dist_id`),
  CONSTRAINT `fk_educacionX` FOREIGN KEY (`postu_educacion_id`) REFERENCES `tbl_educacion` (`edu_id`),
  CONSTRAINT `fk_empresaX` FOREIGN KEY (`postu_empresa_id`) REFERENCES `tbl_empresa` (`emp_id`),
  CONSTRAINT `fk_jornadaX` FOREIGN KEY (`postu_jornada_id`) REFERENCES `tbl_jornada` (`jor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_postulaciones
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_rol`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rol`;
CREATE TABLE `tbl_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_rol
-- ----------------------------
INSERT INTO `tbl_rol` VALUES ('0', 'POSTULANTE');
INSERT INTO `tbl_rol` VALUES ('1', 'ADMINISTRADOR');
INSERT INTO `tbl_rol` VALUES ('2', 'EDITOR');
INSERT INTO `tbl_rol` VALUES ('4', 'USUARIO');

-- ----------------------------
-- Table structure for `tbl_tipo_doc`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tipo_doc`;
CREATE TABLE `tbl_tipo_doc` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_tipo_doc
-- ----------------------------
INSERT INTO `tbl_tipo_doc` VALUES ('1', 'DNI');
INSERT INTO `tbl_tipo_doc` VALUES ('2', 'Carnet de Extranjeria');
INSERT INTO `tbl_tipo_doc` VALUES ('3', 'Otro');

-- ----------------------------
-- Table structure for `tbl_usuario`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE `tbl_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(500) DEFAULT NULL,
  `usu_apellidos` varchar(500) DEFAULT NULL,
  `usu_correo` varchar(200) DEFAULT NULL,
  `usu_clave` varchar(50) DEFAULT NULL,
  `usu_cv` text,
  `usu_sexo` char(1) DEFAULT NULL,
  `usu_telefono` int(11) DEFAULT NULL,
  `usu_celular` int(11) DEFAULT NULL,
  `usu_discapacidad` int(11) DEFAULT NULL,
  `usu_texodiscapacidad` text,
  `usu_estado` int(11) DEFAULT NULL,
  `usu_fecha_creacion` datetime DEFAULT NULL,
  `usu_fecha_modificacion` datetime DEFAULT NULL,
  `usu_fecha_nacimiento` datetime DEFAULT NULL,
  `usu_tipo_doc` int(11) DEFAULT NULL,
  `usu_nro_documento` varchar(80) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `fk_tipodocX` (`usu_tipo_doc`),
  KEY `fk_rol` (`id_rol`),
  CONSTRAINT `fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`),
  CONSTRAINT `fk_tipodocX` FOREIGN KEY (`usu_tipo_doc`) REFERENCES `tbl_tipo_doc` (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_usuario
-- ----------------------------
INSERT INTO `tbl_usuario` VALUES ('1', 'Juan', 'peres', 'zkated', '7c4a8d09ca3762af61e59520943dc26494f8941b', null, 'M', null, null, null, null, '1', null, null, null, '1', '65659598', '1');
INSERT INTO `tbl_usuario` VALUES ('2', 'AAA', 'EEEE', 'SSSSS2', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', null, null, null, null, null, null, '1', '2016-04-06 21:04:54', null, null, '1', '45465456', '1');
INSERT INTO `tbl_usuario` VALUES ('3', 'juan', 'sdgds', 'zkated@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', null, 'M', '5555', '88888', '1', 'dvdfbd', '1', '2000-05-04 00:00:00', '2016-04-08 19:04:25', null, '1', '4444444', '0');

-- ----------------------------
-- Table structure for `tbl_usuarioxcategoria`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuarioxcategoria`;
CREATE TABLE `tbl_usuarioxcategoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `cagoria_id` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarioX` (`usuario_id`),
  KEY `fk_categoriaX` (`cagoria_id`),
  CONSTRAINT `fk_categoriaX` FOREIGN KEY (`cagoria_id`) REFERENCES `tbl_categoria` (`cat_id`),
  CONSTRAINT `fk_usuarioX` FOREIGN KEY (`usuario_id`) REFERENCES `tbl_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_usuarioxcategoria
-- ----------------------------

-- ----------------------------
-- Table structure for `tbl_usuarioxpostulacion`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_usuarioxpostulacion`;
CREATE TABLE `tbl_usuarioxpostulacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) DEFAULT NULL,
  `postu_id` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `fecha_postulacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarioZ` (`usu_id`),
  KEY `fk_postulaZ` (`postu_id`),
  CONSTRAINT `fk_postulaZ` FOREIGN KEY (`postu_id`) REFERENCES `tbl_postulaciones` (`postu_id`),
  CONSTRAINT `fk_usuarioZ` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_usuarioxpostulacion
-- ----------------------------
