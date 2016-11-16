-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2016 a las 23:51:55
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_farmacia_maxutil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolencias_x_productos`
--

CREATE TABLE IF NOT EXISTS `dolencias_x_productos` (
  `tbl_dolencias_codigo_dolencia` int(11) NOT NULL,
  `tbl_productos_codigo_producto` int(11) NOT NULL,
  PRIMARY KEY (`tbl_dolencias_codigo_dolencia`,`tbl_productos_codigo_producto`),
  KEY `fk_tbl_dolencias_has_tbl_productos_tbl_productos1_idx` (`tbl_productos_codigo_producto`),
  KEY `fk_tbl_dolencias_has_tbl_productos_tbl_dolencias1_idx` (`tbl_dolencias_codigo_dolencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_x_ingredientes`
--

CREATE TABLE IF NOT EXISTS `productos_x_ingredientes` (
  `tbl_productos_codigo_producto` int(11) NOT NULL,
  `tbl_ingredientes_codigo_ingrediente` int(11) NOT NULL,
  PRIMARY KEY (`tbl_productos_codigo_producto`,`tbl_ingredientes_codigo_ingrediente`),
  KEY `fk_tbl_productos_has_tbl_ingredientes_tbl_ingredientes1_idx` (`tbl_ingredientes_codigo_ingrediente`),
  KEY `fk_tbl_productos_has_tbl_ingredientes_tbl_productos1_idx` (`tbl_productos_codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_clientes` (
  `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_tipo_cliente` int(11) NOT NULL,
  `codigo_genero` int(11) NOT NULL,
  `codigo_estado_civil` int(11) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `apellido_cliente` varchar(75) NOT NULL,
  `identidad_cliente` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad_cliente` int(11) DEFAULT NULL,
  `direccion` varchar(1000) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `fotografia` tinyblob,
  `fecha_ingreso_cliente` date NOT NULL,
  `codigo_membresia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_cliente`),
  KEY `fk_tbl_clientes_tbl_generos1_idx` (`codigo_genero`),
  KEY `fk_tbl_clientes_tbl_tipo_clientes1_idx` (`codigo_tipo_cliente`),
  KEY `fk_tbl_clientes_tbl_estado_civil1_idx` (`codigo_estado_civil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`codigo_cliente`, `codigo_tipo_cliente`, `codigo_genero`, `codigo_estado_civil`, `nombre_cliente`, `apellido_cliente`, `identidad_cliente`, `fecha_nacimiento`, `edad_cliente`, `direccion`, `telefono`, `correo_electronico`, `fotografia`, `fecha_ingreso_cliente`, `codigo_membresia`) VALUES
(1, 3, 1, 2, 'Juana', 'Rodriguez', '0801196500846', '2013-04-17', 53, 'Col san angel', '27459787', 'juana@yahoo.es', NULL, '2016-11-01', 'jfs3563');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_descuentos`
--

CREATE TABLE IF NOT EXISTS `tbl_descuentos` (
  `codigo_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_descuento` varchar(150) NOT NULL,
  `porcentaje_descuento` double NOT NULL,
  PRIMARY KEY (`codigo_descuento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_descuentos`
--

INSERT INTO `tbl_descuentos` (`codigo_descuento`, `nombre_descuento`, `porcentaje_descuento`) VALUES
(1, 'No hay descuento', 0),
(2, 'DESC(5%)', 0.05),
(3, 'DESC(2%)', 0.02);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dolencias`
--

CREATE TABLE IF NOT EXISTS `tbl_dolencias` (
  `codigo_dolencia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dolencia` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo_dolencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_dolencias`
--

INSERT INTO `tbl_dolencias` (`codigo_dolencia`, `nombre_dolencia`) VALUES
(1, 'Alergia'),
(2, 'Dolor de Cabeza'),
(3, 'Ardor de Estomago'),
(4, 'Gripe'),
(5, 'Tos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dosis`
--

CREATE TABLE IF NOT EXISTS `tbl_dosis` (
  `codigo_dosis` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dosis` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_dosis`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_dosis`
--

INSERT INTO `tbl_dosis` (`codigo_dosis`, `nombre_dosis`) VALUES
(1, '-- Seleccione --'),
(2, 'Cada 6 horas'),
(3, 'Cada 8 horas'),
(4, 'Cada 12 horas'),
(5, 'Cada 24 horas'),
(6, 'Cada 4 horas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE IF NOT EXISTS `tbl_empleados` (
  `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_genero` int(11) NOT NULL,
  `codigo_profesion` int(11) NOT NULL,
  `codigo_tipo_contrato` int(11) NOT NULL,
  `codigo_jornada` int(11) NOT NULL,
  `codigo_imagen` int(11) NOT NULL,
  `codigo_tipo_usuario` int(11) NOT NULL,
  `recomendacion` varchar(500) DEFAULT NULL,
  `codigo_sucursal` int(11) NOT NULL,
  `codigo_jefe_superior` int(11) DEFAULT NULL,
  `nombre_empleado` varchar(150) NOT NULL,
  `apellido_empleado` varchar(150) NOT NULL,
  `identidad_empleado` varchar(50) NOT NULL,
  `fecha_nacimiento_empleado` date NOT NULL,
  `direccion_empleado` varchar(1000) NOT NULL,
  `telefono_empleado` varchar(45) NOT NULL,
  `correo_electronico` varchar(300) DEFAULT NULL,
  `usuario_empleado` varchar(100) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `edad_empleado` int(11) NOT NULL,
  `fecha_inicio_empleado` date NOT NULL,
  `referencia_empleado` varchar(45) DEFAULT NULL,
  `codigo_estado_civil` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_empleado`),
  KEY `fk_tbl_empleados_tbl_generos1_idx` (`codigo_genero`),
  KEY `fk_tbl_empleados_tbl_profesiones1_idx` (`codigo_profesion`),
  KEY `fk_tbl_empleados_tbl_tipo_usuarios1_idx` (`codigo_tipo_usuario`),
  KEY `fk_tbl_empleados_tbl_imagenes1_idx` (`codigo_imagen`),
  KEY `fk_tbl_empleados_tbl_tipo_Contratos1_idx` (`codigo_tipo_contrato`),
  KEY `fk_tbl_empleados_tbl_jornadas1_idx` (`codigo_jornada`),
  KEY `fk_tbl_empleados_tbl_empleados1_idx` (`codigo_jefe_superior`),
  KEY `fk_tbl_empleados_tbl_sucursales1_idx` (`codigo_sucursal`),
  KEY `fk_tbl_empleados_tbl_estado_civil1_idx` (`codigo_estado_civil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tbl_empleados`
--

INSERT INTO `tbl_empleados` (`codigo_empleado`, `codigo_genero`, `codigo_profesion`, `codigo_tipo_contrato`, `codigo_jornada`, `codigo_imagen`, `codigo_tipo_usuario`, `recomendacion`, `codigo_sucursal`, `codigo_jefe_superior`, `nombre_empleado`, `apellido_empleado`, `identidad_empleado`, `fecha_nacimiento_empleado`, `direccion_empleado`, `telefono_empleado`, `correo_electronico`, `usuario_empleado`, `contraseña`, `edad_empleado`, `fecha_inicio_empleado`, `referencia_empleado`, `codigo_estado_civil`) VALUES
(1, 1, 3, 3, 3, 2, 3, 'francisco', 2, NULL, 'Pedro', 'Perez', '8058632241', '2016-09-12', 'francisco de oriente', '546456767', 'pperes@gmail.com', 'perezp@yahoo.es', 'asd.456', 45, '2016-11-01', 'perez perez', 2),
(2, 2, 2, 2, 1, 1, 2, 'lainez', 2, 1, 'Reina', 'Rosales', '63596523', '2016-08-15', 'zarzal', '24335767', 'rrosales@gmail.com', 'rosalesreina@yahoo.es', 'asd.456', 23, '2016-11-08', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estados`
--

CREATE TABLE IF NOT EXISTS `tbl_estados` (
  `codigo_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_estados`
--

INSERT INTO `tbl_estados` (`codigo_estado`, `nombre_estado`) VALUES
(1, '-- Seleccione --'),
(2, 'Disponible'),
(3, 'No Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_civil`
--

CREATE TABLE IF NOT EXISTS `tbl_estado_civil` (
  `codigo_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado_civil` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_estado_civil`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_estado_civil`
--

INSERT INTO `tbl_estado_civil` (`codigo_estado_civil`, `nombre_estado_civil`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Union Libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE IF NOT EXISTS `tbl_facturas` (
  `codigo_factura` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_cliente` int(11) NOT NULL,
  `codigo_empleado` int(11) NOT NULL,
  `codigo_producto` int(11) NOT NULL,
  `codigo_impuesto` int(11) NOT NULL,
  `codigo_sucursal` int(11) NOT NULL,
  `identidad_cliente` varchar(100) NOT NULL,
  `fecha_factura` date NOT NULL,
  `cantidad_compra` double NOT NULL,
  `precio` double NOT NULL,
  `importe` double NOT NULL,
  PRIMARY KEY (`codigo_factura`),
  KEY `fk_tbl_facturas_tbl_impuestos1_idx` (`codigo_impuesto`),
  KEY `fk_tbl_facturas_tbl_productos1_idx` (`codigo_producto`),
  KEY `fk_tbl_facturas_tbl_clientes1_idx` (`codigo_cliente`),
  KEY `fk_tbl_facturas_tbl_empleados1_idx` (`codigo_empleado`),
  KEY `fk_tbl_facturas_tbl_sucursales1_idx` (`codigo_sucursal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_generos`
--

CREATE TABLE IF NOT EXISTS `tbl_generos` (
  `codigo_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_genero` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_generos`
--

INSERT INTO `tbl_generos` (`codigo_genero`, `nombre_genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_imagenes`
--

CREATE TABLE IF NOT EXISTS `tbl_imagenes` (
  `codigo_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `url_imagen` varchar(400) DEFAULT NULL,
  `archivo_imagen` tinyblob,
  PRIMARY KEY (`codigo_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_imagenes`
--

INSERT INTO `tbl_imagenes` (`codigo_imagen`, `url_imagen`, `archivo_imagen`) VALUES
(1, 'No hay imagen', 0xffd8ffe1001845786966000049492a00080000000000000000000000ffec00114475636b7900010004000000640000ffe1036f687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c3f787061636b657420626567696e3d22efbbbf222069643d2257354d304d7043656869487a7265537a4e54637a6b633964223f3e203c783a786d706d65746120786d6c6e733a783d2261646f62653a6e733a6d6574612f2220783a786d70746b3d2241646f626520584d5020436f726520352e332d633031312036362e3134353636312c20323031322f30322f30362d31343a35363a32372020202020202020223e203c7264663a52444620786d),
(2, 'img/productos/m8.jpg', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000003c0000ffee000e41646f62650064c000000001ffdb0084000604040405040605050609060506090b080606080b0c0a0a0b0a0a0c100c0c0c0c0c0c100c0e0f100f0e0c1313141413131c1b1b1b1c1f1f1f1f1f1f1f1f1f1f010707070d0c0d181010181a1511151a1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1f1fffc0001108012c012c03011100021101031101ffc400bb00010001050101000000000000000000000004020305060708010101000301010101000000000000000000),
(3, 'img/productos/m16.jpg', 0xffd8ffe000104a46494600010101006000600000ffdb004300020202020202020202020302020204050402020405060505050505060706060606060607070808090808070a0a0b0b0a0a0e0e0e0e0e0e0e0e0e0e0e0e0e0e0effdb0043010303030605060b07070b0e0c0a0c0e111010101011110e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0effc000110800e300e303011100021101031101ffc4001e0001000103050100000000000000000000000906070801020304050affc4005910000006010202060408060c080f00000000010203040506071108120913212231411432516115234252);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_impuestos`
--

CREATE TABLE IF NOT EXISTS `tbl_impuestos` (
  `codigo_impuesto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_impuesto` varchar(45) NOT NULL,
  `porcentaje_impuesto` double NOT NULL,
  PRIMARY KEY (`codigo_impuesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_impuestos`
--

INSERT INTO `tbl_impuestos` (`codigo_impuesto`, `nombre_impuesto`, `porcentaje_impuesto`) VALUES
(1, 'No hay impuesto', 0),
(2, 'ISV(15%)', 0.15),
(3, 'ISV(18%)', 0.18),
(4, 'ISV(12%)', 0.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingredientes`
--

CREATE TABLE IF NOT EXISTS `tbl_ingredientes` (
  `codigo_ingrediente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_ingrediente` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_ingrediente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_ingredientes`
--

INSERT INTO `tbl_ingredientes` (`codigo_ingrediente`, `nombre_ingrediente`) VALUES
(1, 'Aceite de higado de bacalao'),
(2, ' Retinol (vitamina A)'),
(3, 'Calcio'),
(4, 'Fosforo'),
(5, 'Colecalciferol (vitamina D3)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_jornadas`
--

CREATE TABLE IF NOT EXISTS `tbl_jornadas` (
  `codigo_jornada` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_jornada` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_jornada`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_jornadas`
--

INSERT INTO `tbl_jornadas` (`codigo_jornada`, `nombre_jornada`) VALUES
(1, '-- Seleccione --'),
(2, 'Matutina'),
(3, 'Vespertina'),
(4, 'Nocturna'),
(5, 'Tiempo Completo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_laboratorios`
--

CREATE TABLE IF NOT EXISTS `tbl_laboratorios` (
  `codigo_laboratorio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_laboratorio` varchar(300) NOT NULL,
  `direccion_laboratorio` varchar(1000) NOT NULL,
  `encargado_laboratorio` varchar(300) NOT NULL,
  `correo_laboratorio` varchar(300) DEFAULT NULL,
  `telefono_laboratorio` varchar(50) NOT NULL,
  `pagina_web_laboratorio` varchar(500) DEFAULT NULL,
  `fotografia_laboratorio` tinyblob,
  PRIMARY KEY (`codigo_laboratorio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_laboratorios`
--

INSERT INTO `tbl_laboratorios` (`codigo_laboratorio`, `nombre_laboratorio`, `direccion_laboratorio`, `encargado_laboratorio`, `correo_laboratorio`, `telefono_laboratorio`, `pagina_web_laboratorio`, `fotografia_laboratorio`) VALUES
(1, '-- Seleccione --', 'Ninguno', 'Ninguno', 'Ninguno', 'Ninguno', 'Ninguno', NULL),
(2, 'Laboratorios Clinicos Express', 'Plaza Santa Mónica de Col. Kennedy', 'Selvin Montoya', 'mercadeo@laboratoriosexpress.com', '2228-6598', 'http://laboratoriosexpress.com/labex/index.php/', NULL),
(3, 'Laboratorio Centro Medico', 'Barrio La Granja, Comayaguela, M.D.C.', 'Julio Santana', ' laboratoriomolecularcentromedico@cablecolor.hn', ' 225-0567', 'http://laboratorioscentromedico.blogspot.com/', NULL),
(4, 'Laboratorios MICROLAB', 'Bo. Guacerique, en la ciudad de Tegucigalpa. ', 'Juan Carlos Salazar', NULL, '22254013', 'http://www.nexdu.com/hn/Laboratorios-Microlab-Tegucigalpa', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_presentaciones`
--

CREATE TABLE IF NOT EXISTS `tbl_presentaciones` (
  `codigo_presentacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_presentacion` varchar(300) NOT NULL,
  PRIMARY KEY (`codigo_presentacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tbl_presentaciones`
--

INSERT INTO `tbl_presentaciones` (`codigo_presentacion`, `nombre_presentacion`) VALUES
(1, '-- Seleccione --'),
(2, 'Tabletas'),
(3, 'Inyectables'),
(4, 'Emulsion'),
(5, 'Capsulas'),
(6, 'Gel'),
(7, 'Aerosol'),
(8, 'Ampollas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `codigo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_presentacion` int(11) NOT NULL,
  `codigo_imagen` int(11) NOT NULL,
  `codigo_estado` int(11) NOT NULL,
  `codigo_tipo_venta` int(11) NOT NULL,
  `codigo_descuento` int(11) NOT NULL,
  `codigo_impuesto` int(11) NOT NULL,
  `codigo_dosis` int(11) NOT NULL,
  `codigo_laboratorio` int(11) NOT NULL,
  `fotografia` tinyblob,
  `codigo_barra` varchar(60) DEFAULT NULL,
  `nombre_producto` varchar(400) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `precio_compra` decimal(10,0) NOT NULL,
  `precio_venta` decimal(10,0) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `indicaciones_producto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`codigo_producto`),
  KEY `fk_tbl_productos_tbl_presentaciones_idx` (`codigo_presentacion`),
  KEY `fk_tbl_productos_tbl_laboratorios1_idx` (`codigo_laboratorio`),
  KEY `fk_tbl_productos_tbl_imagenes1_idx` (`codigo_imagen`),
  KEY `fk_tbl_productos_tbl_dosis1_idx` (`codigo_dosis`),
  KEY `fk_tbl_productos_tbl_estados1_idx` (`codigo_estado`),
  KEY `fk_tbl_productos_tbl_tipo_ventas1_idx` (`codigo_tipo_venta`),
  KEY `fk_tbl_productos_tbl_descuentos1_idx` (`codigo_descuento`),
  KEY `fk_tbl_productos_tbl_impuestos1_idx` (`codigo_impuesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`codigo_producto`, `codigo_presentacion`, `codigo_imagen`, `codigo_estado`, `codigo_tipo_venta`, `codigo_descuento`, `codigo_impuesto`, `codigo_dosis`, `codigo_laboratorio`, `fotografia`, `codigo_barra`, `nombre_producto`, `cantidad_producto`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `fecha_vencimiento`, `indicaciones_producto`) VALUES
(1, 4, 3, 1, 1, 2, 2, 5, 3, NULL, '128643686', 'Emulsion de Scott', 45, '125', '156', '2016-11-10', '2018-07-01', 'Ninguna'),
(2, 5, 2, 1, 1, 2, 2, 4, 3, NULL, '156632454', 'Pandol', 45, '12', '34', '2016-11-10', '2016-11-30', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesiones`
--

CREATE TABLE IF NOT EXISTS `tbl_profesiones` (
  `codigo_profesion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_profesion` varchar(500) NOT NULL,
  PRIMARY KEY (`codigo_profesion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbl_profesiones`
--

INSERT INTO `tbl_profesiones` (`codigo_profesion`, `nombre_profesion`) VALUES
(1, '-- Seleccione --'),
(2, 'Ingenieria Civil'),
(3, 'Ingenieria Industrial'),
(4, 'Arquitectura'),
(5, 'Contaduria'),
(6, 'Ingenieria en Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sucursales`
--

CREATE TABLE IF NOT EXISTS `tbl_sucursales` (
  `codigo_sucursal` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sucursal` varchar(300) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo_electronico` varchar(200) DEFAULT NULL,
  `pagina_web` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`codigo_sucursal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_sucursales`
--

INSERT INTO `tbl_sucursales` (`codigo_sucursal`, `nombre_sucursal`, `direccion`, `telefono`, `correo_electronico`, `pagina_web`) VALUES
(1, 'Farmacia MaxUtil 1', 'Valle de Angeles', '98853243', NULL, NULL),
(2, 'Farmacia MaxUtil 2', 'Tegucigalpa', '89323562', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_clientes`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_clientes` (
  `codigo_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_cliente` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_tipo_clientes`
--

INSERT INTO `tbl_tipo_clientes` (`codigo_cliente`, `tipo_cliente`) VALUES
(1, 'Plus'),
(2, 'Premium'),
(3, 'Normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contratos`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_contratos` (
  `codigo_tipo_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_contrato` varchar(150) NOT NULL,
  `duracion_contrato` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo_contrato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tbl_tipo_contratos`
--

INSERT INTO `tbl_tipo_contratos` (`codigo_tipo_contrato`, `nombre_tipo_contrato`, `duracion_contrato`) VALUES
(1, '-- Seleccione --', NULL),
(2, 'Permanente', 6),
(3, 'Contrato de 3 meses', 100),
(4, 'Contrato de 6 meses', 12),
(5, 'Contrato de 12 meses', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_usuarios` (
  `codigo_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_usuario` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo_tipo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_tipo_usuarios`
--

INSERT INTO `tbl_tipo_usuarios` (`codigo_tipo_usuario`, `nombre_tipo_usuario`) VALUES
(1, '-- Seleccione --'),
(2, 'Administrador'),
(3, 'Cajero'),
(4, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_ventas`
--

CREATE TABLE IF NOT EXISTS `tbl_tipo_ventas` (
  `codigo_tipo_venta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_venta` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo_tipo_venta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_tipo_ventas`
--

INSERT INTO `tbl_tipo_ventas` (`codigo_tipo_venta`, `nombre_tipo_venta`) VALUES
(1, '-- Seleccione --'),
(2, 'Sin Factura'),
(3, 'Con Factura');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dolencias_x_productos`
--
ALTER TABLE `dolencias_x_productos`
  ADD CONSTRAINT `fk_tbl_dolencias_has_tbl_productos_tbl_dolencias1` FOREIGN KEY (`tbl_dolencias_codigo_dolencia`) REFERENCES `tbl_dolencias` (`codigo_dolencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_dolencias_has_tbl_productos_tbl_productos1` FOREIGN KEY (`tbl_productos_codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_x_ingredientes`
--
ALTER TABLE `productos_x_ingredientes`
  ADD CONSTRAINT `fk_tbl_productos_has_tbl_ingredientes_tbl_productos1` FOREIGN KEY (`tbl_productos_codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_has_tbl_ingredientes_tbl_ingredientes1` FOREIGN KEY (`tbl_ingredientes_codigo_ingrediente`) REFERENCES `tbl_ingredientes` (`codigo_ingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD CONSTRAINT `fk_tbl_clientes_tbl_generos1` FOREIGN KEY (`codigo_genero`) REFERENCES `tbl_generos` (`codigo_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_clientes_tbl_tipo_clientes1` FOREIGN KEY (`codigo_tipo_cliente`) REFERENCES `tbl_tipo_clientes` (`codigo_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_clientes_tbl_estado_civil1` FOREIGN KEY (`codigo_estado_civil`) REFERENCES `tbl_estado_civil` (`codigo_estado_civil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD CONSTRAINT `fk_tbl_empleados_tbl_generos1` FOREIGN KEY (`codigo_genero`) REFERENCES `tbl_generos` (`codigo_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_imagenes1` FOREIGN KEY (`codigo_imagen`) REFERENCES `tbl_imagenes` (`codigo_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_jornadas1` FOREIGN KEY (`codigo_jornada`) REFERENCES `tbl_jornadas` (`codigo_jornada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_profesiones1` FOREIGN KEY (`codigo_profesion`) REFERENCES `tbl_profesiones` (`codigo_profesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_sucursales1` FOREIGN KEY (`codigo_sucursal`) REFERENCES `tbl_sucursales` (`codigo_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_tipo_Contratos1` FOREIGN KEY (`codigo_tipo_contrato`) REFERENCES `tbl_tipo_contratos` (`codigo_tipo_contrato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_tipo_usuarios1` FOREIGN KEY (`codigo_tipo_usuario`) REFERENCES `tbl_tipo_usuarios` (`codigo_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_empleados1` FOREIGN KEY (`codigo_jefe_superior`) REFERENCES `tbl_empleados` (`codigo_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_empleados_tbl_estado_civil1` FOREIGN KEY (`codigo_estado_civil`) REFERENCES `tbl_estado_civil` (`codigo_estado_civil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD CONSTRAINT `fk_tbl_facturas_tbl_impuestos1` FOREIGN KEY (`codigo_impuesto`) REFERENCES `tbl_impuestos` (`codigo_impuesto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_facturas_tbl_productos1` FOREIGN KEY (`codigo_producto`) REFERENCES `tbl_productos` (`codigo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_facturas_tbl_clientes1` FOREIGN KEY (`codigo_cliente`) REFERENCES `tbl_clientes` (`codigo_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_facturas_tbl_empleados1` FOREIGN KEY (`codigo_empleado`) REFERENCES `tbl_empleados` (`codigo_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_facturas_tbl_sucursales1` FOREIGN KEY (`codigo_sucursal`) REFERENCES `tbl_sucursales` (`codigo_sucursal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `fk_tbl_productos_tbl_presentaciones` FOREIGN KEY (`codigo_presentacion`) REFERENCES `tbl_presentaciones` (`codigo_presentacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_laboratorios1` FOREIGN KEY (`codigo_laboratorio`) REFERENCES `tbl_laboratorios` (`codigo_laboratorio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_imagenes1` FOREIGN KEY (`codigo_imagen`) REFERENCES `tbl_imagenes` (`codigo_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_dosis1` FOREIGN KEY (`codigo_dosis`) REFERENCES `tbl_dosis` (`codigo_dosis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_estados1` FOREIGN KEY (`codigo_estado`) REFERENCES `tbl_estados` (`codigo_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_tipo_ventas1` FOREIGN KEY (`codigo_tipo_venta`) REFERENCES `tbl_tipo_ventas` (`codigo_tipo_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_descuentos1` FOREIGN KEY (`codigo_descuento`) REFERENCES `tbl_descuentos` (`codigo_descuento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_productos_tbl_impuestos1` FOREIGN KEY (`codigo_impuesto`) REFERENCES `tbl_impuestos` (`codigo_impuesto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
