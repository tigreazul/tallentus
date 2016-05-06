/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tallentus

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-06 17:34:02
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
  CONSTRAINT `fk_areaX` FOREIGN KEY (`area_id`) REFERENCES `tbl_areas` (`area_id`),
  CONSTRAINT `fk_usuX` FOREIGN KEY (`area_usu`) REFERENCES `tbl_usuario` (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tbl_areasxusuario
-- ----------------------------
INSERT INTO `tbl_areasxusuario` VALUES ('1', '5', null, null, '1');
INSERT INTO `tbl_areasxusuario` VALUES ('1', '6', null, null, '1');
INSERT INTO `tbl_areasxusuario` VALUES ('2', '3', null, null, '1');
INSERT INTO `tbl_areasxusuario` VALUES ('2', '4', null, null, '1');
INSERT INTO `tbl_areasxusuario` VALUES ('3', '6', null, null, '1');
INSERT INTO `tbl_areasxusuario` VALUES ('4', '4', null, null, '1');

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
  `emp_nombre` varchar(100) DEFAULT NULL,
  `emp_email` varchar(500) DEFAULT NULL,
  `emp_telefono` int(11) DEFAULT NULL,
  `emp_clave` varchar(500) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `emp_seo` text NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_empresa
-- ----------------------------
INSERT INTO `tbl_empresa` VALUES ('2', null, 'Caleidos Media SAC', '5555555', '', 'Transformamos la información en conceptos poderosos, que impactan al público de las organizaciones y brindan un valor agregado. Esto lo reflejamos en productos que, a través de un buen diseño, logran plasmar las ideas e información que se busca transmitir, logrando de esta manera comunicar efectivamente. \nInformática / Software, Lima, De 1 a 10 trabajadores', '1', '2016-04-18 22:04:56', null, 'Caleidos Media SAC', 'demo@demo.com', '5777777', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '0', 'caleidos-media-sac');
INSERT INTO `tbl_empresa` VALUES ('3', null, 'IQ PROJECT SAC', '123123123', '', 'Somos una empresa enfocada en el desarrollo de soluciones de alto valor añadido en materia de innovación tecnológica. Nos especializamos en: -Diseño y ejecución de proyectos de infraestructura. -Consultoría en diseño e implementación de redes. -Gestión y desarrollo de software    Empresa del sector Informática / Software, localizada en Lima, De 11 a 50 trabajadores', '1', '2016-05-03 15:05:09', null, 'IQ PROJECT SAC', 'proyect@proyectsac.com', '0', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '0', 'iq-project-sac');
INSERT INTO `tbl_empresa` VALUES ('4', null, 'Sigcomt SAC', '123123125', '', 'SIGCOMT (Sistemas informáticos Generales y Complementos) que desde el año 2000 viene trabajando en la elaboración de software orientado al uso de herramientas Open Source (Libre Acceso), lo cual nos coloca como una de las empresas líderes en este tipo de desarrollo. Asimismo, trabajamos con plataforma .Net y ASP 2005 habiendo alcanzado importantes logros. Sigcomt, ofrece sistemas realizados a medida de los requerimientos de su empresa, con la mejor tecnología y un excelente servicio de soporte de software y hardware. Para ello, contamos con profesionales certificados para los distintos trabajos que se requieren. Empresa del sector Informática / Software, localizada en Lima', '1', '2016-05-03 15:05:45', null, 'Sigcomt SAC', 'Sigcomt@Sigcomt.com', '0', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '0', 'sigcomt-sac');
INSERT INTO `tbl_empresa` VALUES ('5', null, 'Cosapi Data SA', '147147125', '', 'Fundada en 1984, se constituye hoy como la empresa líder en integración de tecnologías de información y comunicaciones así como especialista en servicios de TI y Outsourcing de Tecnología, Ingeniería de SW y Procesos. Con una trayectoria de más de 30 años en el mercado local, sus empresas: Cosapi Data, Cosapi Soft y Computer Doctor, vienen atendiendo a las corporaciones e instituciones públicas y privadas más importantes del país, con productos de las principales marcas mundiales y servicios orientados a la arquitectura de soluciones, consultoría en seguridad, servicios de migración, servicio de desarrollo de soluciones, suministro de personal y outsourcing, logrando posicionarse desde hace más de diez años en el ranking de las tres primeras empresas del sector informático en el país.   VISIÓN Ser reconocidos por nuestro mercado como el ?socio estratégico? más relevante para innovar y explotar el potencial transformador de las Tecnologías de Información y Comunicaciones con el objetivo de asegurar un crecimiento rentable y sostenible.   MISIÓN Potenciar la competitividad de nuestros clientes a través de la entrega de soluciones y servicios de Tecnologías de Información y Comunicaciones de valor e impacto. Servir a nuestros clientes bajo los más altos estándares de calidad, operando con excelencia bajo los más altos estándares de integridad. Atraer, retener y desarrollar el mejor talento del mercado, inspirándolos a crecer y dar lo mejor de sí. Exceder las expectativas de crecimiento, rentabilidad y retorno de nuestros accionistas.  Telecomunicaciones, Lima, Más de 1000 trabajadores', '1', '2016-05-03 15:05:42', null, 'Cosapi Data SA', 'cosapi@cosapi.com', '0', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '0', 'cosapi-data-sa');
INSERT INTO `tbl_empresa` VALUES ('6', null, 'EXEPERU.COM SAC', '2147483647', '', 'Somos una Agencia de Marketing Digital, especializada en la consultoria y ejecución de estrategias en Marketing Digital.  Internet, Lima, De 11 a 50 trabajadores', '1', '2016-05-03 15:05:07', null, 'EXEPERU.COM SAC', 'info@EXEPERU.COM', '0', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', '0', 'exeperu-com-sac');

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
  `postu_desc_larga` varchar(500) DEFAULT NULL,
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
  `postu_estado` int(11) DEFAULT NULL,
  `postu_area_id` int(11) DEFAULT NULL,
  `postu_seo` text,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_postulaciones
-- ----------------------------
INSERT INTO `tbl_postulaciones` VALUES ('1', 'Analista Programador PHP - senior backend en Lima - Caleidos Media SAC', '• Desarrollar software, aplicaciones web y mobile en PHP, MySQL, HTML5 / CCS3 / JavaScript / JQuery  • Crear la arquitectura de nuevos servicios web y plataformas. • Realizar pruebas al código para garantizar su buen funcionamiento y calidad. • Coordinar con otros programadores del equipo, para realizar los proyectos de manera ágil y a tiempo.', null, 'Trabajar en una empresa con proyectos de constante innovación, con metodología ágil (scrum) y orientada al crecimiento y superación de sus colaboradores.\n•	Programa de capacitaciones para actualización constante de conocimientos de programación.', 'Conocimiento avanzado en desarrollo web de PHP, MySQL, HTML5 / CCS3 / JavaScript / JQuery /.NET\n•	Orientado a desarrollo back-end\n•	Conocimiento y uso de frameworks de programación, como Bootstrap/Laravel/CodeIgniter\n•	Uso y administración de SO Linux.\n•	Uso de Git \n•	Uso de metodologías de programación ágiles (deseable).\n•	Inglés (Básico - Intermedio ).', null, '1', '2', '1', null, '2', 'A convenir', '3', '3', '2', '2016-04-21 16:51:43', '1', '1', 'analista-programador-php-senior-backend-en-lima-caleidos-media-sac');
INSERT INTO `tbl_postulaciones` VALUES ('2', 'Full Stack Developer', 'Colectigo.com es un proyecto en etapa de rápido crecimiento y escalabilidad. Actualmente nos encontramos en Wayra, dentro del edificio de Telefónica. Lo que queremos lograr es simple: buscamos apoyar a deportistas profesionales con escasos recursos, con la finalidad de potenciar su crecimiento y aprovechar talentos deportivos peruanos.', null, 'Te ofrecemos un enorme potencial de crecimiento personal y profesional, desempeñar tu trabajo en un ambiente laboral excepcional junto a otras empresas del mismo rubro. Tendrás acceso a charlas, conferencias y cursos de capacitación totalmente gratuitos. ', 'Experiencia en desarrollo con JQuery, NodeJS, PHP', null, '1', '3', '5', null, '2', '1500 $', '2', '2', '2', '2016-04-25 06:04:47', '1', '5', 'full-stack-developer');
INSERT INTO `tbl_postulaciones` VALUES ('3', 'Desarrollador PHP - Analista Asterisk en Lima - Cosapi Data SA', 'Somos una empresa con más de 30 años en el mercado local, líder en integración de Tecnologías de Información y Comunicaciones, Servicios TI y Outsourcing de Tecnología, ubicándonos desde hace más de 10 años en el ranking de las mejores empresas del sector informático. ', null, '- Desarrollo de Sitios Web - Desarrollo de Carritos de Compras - Implementación de Tarjetas de Crédito - Desarrollo de Intranets ', 'Estudios técnicos de computación e informática o carrera universitaria de Ingeniería de Sistemas o afines.\nExperiencia de 1 año como programador Web PHP.\nManejo intermedio en programación en lenguaje PHP orientado a objetos, manejo de patrón MVC model - view - controller e interpretación de modelos de datos y análisis de requerimientos.\nConocimiento y uso del frameworks LARAVEL. \nConocimiento maquetación BOOSTRAP y CSS3. \nManejo de base de datos en SQL Server 2008 R2 , MySQL y MariaDB. \nConocimiento de control de versión GIT.\nConocimiento en Javascript, JQuery y AJAX.', null, '2', '4', '5', null, '6', 'A convenir', '1', '1', '5', '2016-05-03 16:05:10', '1', '2', 'desarrollador-php-analista-asterisk-en-lima-cosapi-data-sa');
INSERT INTO `tbl_postulaciones` VALUES ('4', 'COMMUNITY MANAGER en Lima - EXEPERU.COM SAC', '- Desarrollo de Sitios Web - Desarrollo de Carritos de Compras - Implementación de Tarjetas de Crédito - Desarrollo de Intranets', null, '- Desarrollo de Sitios Web - Desarrollo de Carritos de Compras - Implementación de Tarjetas de Crédito - Desarrollo de Intranets ', '- Experiencia mínima de 1 año en puestos similares  - Experiencia intermedia en el desarrollo de Sitios Web  - Experiencia intermedia en el desarrollo de Web con carritos de compras - Experiencia intermedia con gestores de contenidos - Experiencia intermedia en el desarrollo de Intranets - Experiencia intermedia en PHP y Mysql, PosgreSQL, Oracle y SQL Server  - Experiencia intermedia en programación orientada a objetos  - Experiencia intermedia de Ajax  - Experiencia intermedia de HTML5 y CCS3  - Experiencia intermedia en Jquery - Conocimiento de librerias javascript como prototype, scriptaculous, mootools, dojo, ext, gwt, spry, mochikit, otros). - Experiencia intermedia del frameworks Codeigniter  - Conocimientos de Webservice - Conocimientos de .NET  - Disponibilidad inmediata - Criterio de trabajo', null, '5', '1', '2', null, '1', 'A convenir', '2', '6', '6', '2016-05-03 16:05:27', '1', '3', 'community-manager-en-lima-exeperu-com-sac');

-- ----------------------------
-- Table structure for `tbl_rol`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rol`;
CREATE TABLE `tbl_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `usu_imagen_perfil` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `fk_tipodocX` (`usu_tipo_doc`),
  KEY `fk_rol` (`id_rol`),
  CONSTRAINT `fk_rol` FOREIGN KEY (`id_rol`) REFERENCES `tbl_rol` (`id_rol`),
  CONSTRAINT `fk_tipodocX` FOREIGN KEY (`usu_tipo_doc`) REFERENCES `tbl_tipo_doc` (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_usuario
-- ----------------------------
INSERT INTO `tbl_usuario` VALUES ('1', 'Juan', 'peres', 'administrador', '7c4a8d09ca3762af61e59520943dc26494f8941b', null, 'M', null, null, null, null, '1', null, null, null, '1', '65659598', '1', null);
INSERT INTO `tbl_usuario` VALUES ('3', 'juan', 'Tello Trujillox', 'zkated@gmail.com1', '7c4a8d09ca3762af61e59520943dc26494f8941b', null, 'M', '2147483647', '0', '1', 'fgfggffgnf', '1', '1976-05-02 00:00:00', '2016-04-18 18:04:35', null, '1', 'fdgfdgfdgfd', '0', null);
INSERT INTO `tbl_usuario` VALUES ('4', 'dfs', 'xxx', '12344@123.com', '601f1889667efaebb33b8c12572835da3f027f78', null, 'M', '44444', '55555555', '1', 'ssssssssss', '1', '2001-03-01 00:00:00', '2016-04-12 08:04:03', null, '1', '4444444', '0', null);
INSERT INTO `tbl_usuario` VALUES ('5', 'Junior', 'sss', 'zkated@gmail.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', null, 'M', '6565', '6565', '1', 'dfdgdf', '1', '2016-05-04 22:16:44', '2016-05-06 19:05:26', '2003-05-04 00:00:00', '1', '5656655', '0', '12967266_10154259838071833_8492271592279407791_o.jpg');
INSERT INTO `tbl_usuario` VALUES ('6', 'Miguel', '', 'miguel@miki.com', '01b307acba4f54f55aafc33bb06bbbf6ca803e9a', null, 'M', '3587851', '0', '0', '', '1', '1977-06-04 00:00:00', '2016-05-03 16:05:35', null, '1', '22554488', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_usuarioxpostulacion
-- ----------------------------
INSERT INTO `tbl_usuarioxpostulacion` VALUES ('1', '5', '1', '1', '2016-04-22 05:04:43');
INSERT INTO `tbl_usuarioxpostulacion` VALUES ('2', '6', '1', '1', '2016-05-03 16:05:18');
