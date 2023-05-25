-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 20:17:36
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_turismo2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atractivo_turistico`
--

CREATE TABLE `atractivo_turistico` (
  `cod_atractivo_turistico` int(11) NOT NULL,
  `nombre_atractivo_turistico` varchar(50) NOT NULL,
  `imagen` varchar(1000) DEFAULT NULL,
  `descripcion` varchar(250) NOT NULL,
  `tipo_atractivo` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `tiempo_minimo` time NOT NULL,
  `tiempo_maximo` time NOT NULL,
  `latitud` varchar(15) NOT NULL,
  `longitud` varchar(15) NOT NULL,
  `altura` int(11) DEFAULT NULL,
  `precio_nacional` double DEFAULT NULL,
  `precio_extranjero` double DEFAULT NULL,
  `precio_guia` double DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `clima` int(11) NOT NULL,
  `discapacidad` varchar(40) NOT NULL,
  `enfermedades` varchar(40) NOT NULL,
  `motivacion` int(11) NOT NULL,
  `actividad` int(11) NOT NULL,
  `presupuesto` double NOT NULL,
  `Hotel` int(11) NOT NULL,
  `Restaurante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atractivo_turistico`
--

INSERT INTO `atractivo_turistico` (`cod_atractivo_turistico`, `nombre_atractivo_turistico`, `imagen`, `descripcion`, `tipo_atractivo`, `provincia`, `tiempo_minimo`, `tiempo_maximo`, `latitud`, `longitud`, `altura`, `precio_nacional`, `precio_extranjero`, `precio_guia`, `telefono`, `clima`, `discapacidad`, `enfermedades`, `motivacion`, `actividad`, `presupuesto`, `Hotel`, `Restaurante`) VALUES
(4, 'Gocta', '1666638928_gocta.jpg', 'La catarata Gocta, conocida localmente como La Chorrera, es un salto de agua que se encuentra en las cercanÃ­as de los caserÃ­os peruanos de San Pablo, Cocachimba y La Coca, distrito de Valera, provincia de BongarÃ¡, departamento de Amazonas en el no', '1', 'Bongara', '03:00:00', '05:00:00', '-6.0231', '-77.887', 1830, 15, 3, 20, NULL, 1, '1', '1', 2, 1, 3, 1, 1),
(5, 'Karajia', '1666638945_karajia.jpg', 'Los SarcÃ³fagos de KarajÃ­a, o CarajÃ­a, son un conjunto de sarcÃ³fagos o ataÃºdes segÃºn la tradiciÃ³n funeraria de los chachapoyas en PerÃº, de hasta 2,50 m de alto con formas humanas', '3', 'Luya', '02:00:00', '04:00:00', '-6.16194444', '-78.02136111', 2600, 10, 3, 15, NULL, 2, '1', '1', 2, 1, 2, 2, 2),
(6, 'Caverna de Quiocta', '1667365298_Quiocta.jpg', ' Las Cavernas de Quiocta se encuentran ubicada a 2793 msnm en LÃ¡mud, Amazonas, PerÃº.â€‹ Fue declarado Patrimonio Cultural de la NaciÃ³n mediante RDN N.Âº 196/INC-2003.â€‹â€‹â€‹ Las cavernas tienen una longitud de 600 metros, en su interior se puede', '1', 'Luya', '02:30:00', '03:00:00', '-6.138808194444', '-77.99055961111', 2793, 15, 5, 10, NULL, 2, '1', '1', 1, 1, 2, 2, 2),
(7, 'Catarata de Yumbilla', '1667365991_yumbilla.jpg', 'La catarata Yumbilla, es un salto de agua que se encuentra ubicado en el distrito de Cuispes y pertenece al circuito denominado Ruta o Valle de las Cataratas ubicado en la provincia de BongarÃ¡, en el sector sureste del departamento de Amazonas en la', '1', 'Bongara', '02:00:00', '04:00:00', '-5.9199', '-77.9012', 1950, 15, 3, 20, NULL, 1, '1', '1', 2, 1, 2, 2, 2),
(8, 'Catarata Ashpachaca ', '1667368183_aspachaca.jpg', 'La catarata Aspachaca es una bella caÃ­da de agua que se precipita por 50 metros. Se ubica a 1658 msnm, a la margen derecha del rÃ­o Utcubamba. Su entorno geogrÃ¡fico estÃ¡ conformado por espesa vegetaciÃ³n resaltando la Pona y los helechos gigantes.', '1', 'Bongara', '01:30:00', '02:30:00', '-6.01326', '-77.9471', 1658, 15, 3, 20, NULL, 1, '1', '1', 2, 1, 2, 2, 2),
(9, 'Laguna de Pomacochas', '1667368534_LagunaPomacochas.jpg', 'Laguna de Pomacochas es una laguna peruana, situada en el departamento de Amazonas.â€‹â€‹â€‹â€‹â€‹ EstÃ¡ situada a una altura de unos 2257 metros, tiene aproximadamente 2,79 kilÃ³metros de largo y 2 km en su punto mÃ¡s ancho. La laguna se encuentra a', '1', 'Bongara', '01:00:00', '02:00:00', '-5.82228', '-77.94971', 2257, 15, 3, 10, NULL, 1, '2', '2', 3, 5, 2, 1, 1),
(10, 'Catarata Chinata', '1667370229_chinata.jpg', ' La catarata Chinata desciende en cinco saltos, alcanzando una caÃ­da total de 580 metros aproximadamente. El entorno geogrÃ¡fico en el que se encuentra estÃ¡ conformado por un bosque hÃºmedo montaÃ±oso, caracterizado por su diversa naturaleza.  ', '1', 'Bongara', '03:00:00', '04:00:00', '-5.95181', '-77.91784', 1300, 15, 3, 20, NULL, 1, '1', '1', 2, 1, 2, 2, 2),
(11, 'Kuelap', '1667369931_kuelap.jpg', 'KuÃ©lap, o CuÃ©lap, es un importante sitio arqueolÃ³gico preinca con mas de 1500 aÃ±os de historia, ubicado en los Andes nororientales de PerÃº, en la Provincia de Luya. Fue construido por la cultura Chachapoyas.', '3', 'Luya', '02:30:00', '04:00:00', '-6.41734415', '-77.92388298674', 2987, 60, 20, 30, NULL, 2, '1', '1', 1, 1, 3, 2, 2),
(12, 'Huaylla Belen', '1667371324_HuayllaBelen.jpg', ' Huaylla BelÃ©n es un sorprendente valle para disfrutar de hermosos paisajes andinos, podremos apreciar el bosque de neblina y la exuberante vida silvestre que lo rodea. Se le conoce tambiÃ©n como \'\'Serpiente de Plata\'\' por sus caprichosos meandros q', '1', 'Luya', '02:00:00', '04:00:00', '-6.29122', '-78.04228', 2750, 30, 10, 20, NULL, 2, '1', '1', 3, 1, 2, 2, 2),
(13, 'Museo Leymebamba', '1667371306_museoLeymebamba.jpg', 'El Museo de Leymebamba es un museo arqueolÃ³gico situado en departamento de Amazonas. El museo estÃ¡ principalmente dedicado a la cultura chachapoyas y fue inaugurado en junio de 2000.â€‹ El Museo de Leymebamba cuenta con 5 salas: 3 salas de arqueolo', '5', 'Luya', '01:30:00', '02:30:00', '-6.724381944', '-77.79843388888', 2203, 25, 7, 0, NULL, 2, '1', '1', 1, 6, 2, 2, 1),
(14, 'Laguna de los Condores', '1667372072_lagunaCondores.jpg', 'La laguna de los CÃ³ndores o laguna de las Momias es una laguna de alrededor de 1 kmÂ² de longitud que se encuentra en el departamento de San MartÃ­n en los Andes del norte del PerÃº.â€‹ Se encuentra a una altitud de 2600 m s. n. m., a 93 km de la pr', '1', 'Luya', '10:00:00', '12:00:00', '-6.85075', '-77.69195', 3017, 300, 100, 80, NULL, 3, '1', '1', 2, 1, 3, 2, 2),
(15, 'Laguna BurlÃ¡n', '1667372637_Burlan.jpg', 'La laguna Burlan es una fuente natural, con un espejo de agua de aproximadamente 46 hectÃ¡reas, se ubica a 10 minutos  de la ciudad, en la parte sur de Bagua Grande. Es un excelente destino para el esparcimiento de las familias de los alrededores y d', '1', 'Bagua', '02:00:00', '03:00:00', '-5.78729', '-78.38268', 550, 30, 10, 0, NULL, 1, '2', '2', 3, 5, 2, 2, 2),
(16, 'Condoryacu', '1667373642_condoryacu.jpg', 'Ubicado en el Distrito de Conila Cohechan, en la provincia de Luya, en el departamento de Amazonas. Es un catarata con aguas azulada qie sorprende a cada visitante y se queda asombrado con su majestuosidad, una de las maravillas del departamento de A', '1', 'Luya', '03:00:00', '04:00:00', '-6.041835352998', '-78.17118774799', 1200, 100, 20, 0, NULL, 1, '1', '1', 3, 2, 2, 2, 1),
(17, 'Laguna Tabla Rumi', '1667374721_TablaRumi.jpg', 'Son dos lagunas GEMELAS, una de ellas esta limpia (Sin vegetaciÃ³n) y apta para pasear en los Bicibotes y la otra esta cubierta de vegetaciÃ³n. Cuenta con un mirador, donde podemos apreciar un atractivo natural, experimentar una caminata con pendient', '1', 'Bongara', '01:30:00', '03:00:00', '-5.907925985344', '-77.97336369804', 1550, 0, 0, 0, NULL, 1, '1', '1', 3, 6, 1, 2, 2),
(18, 'ACP San Antonio', '1667375349_San antonio.jpg', '  Es una Ãrea de conservaciÃ³n Privada en el valle del Utcubamba, Amazonas. El ACP tiene una casa en donde brindan servicio de alojamiento a investigadores que realizan constantemente estudios al interior de San Antonio. TambiÃ©n aceptan visitas.', '1', 'Chachapoyas', '01:30:00', '03:00:00', '-6.265514673450', '-77.91531025627', 2000, 40, 12, 0, NULL, 2, '1', '1', 2, 2, 2, 1, 1),
(19, 'Pozo de Yanayacu', '1667375997_pozo Yanayacu.jpg', 'Pozo de Yanayacu es un yacimiento arqueolÃ³gico en Chachapoyas. Pozo de Yanayacu estÃ¡ situada cerca de Santuario Virgen Asunta y DIRCETUR AMAZONAS. Se dice que, a fines del siglo XVII, Santo Toribio de Mogrovejo durante su visita hizo brotar agua pa', '5', 'Chachapoyas', '01:30:00', '02:00:00', '-6.227461620656', '-77.87770194116', 2400, 10, 3, 0, NULL, 1, '2', '2', 1, 6, 1, 2, 2),
(20, 'Iglesia Catedral de Chachapoyas', '1667376342_catedralChachapoyas.jpg', 'La Catedral de Chachapoyasâ€‹ â€‹ es un edificio religioso afiliado a la iglesia catÃ³licaâ€‹ EstÃ¡ ubicado en la plaza mayor de Chachapoyas la capital de la provincia de Chachapoyas en el departamento de Amazonas al norte del paÃ­s sudamericano de P', '4', 'Chachapoyas', '01:30:00', '02:30:00', '-6.229765815114', '-77.87268680338', 2300, 0, 0, 0, NULL, 2, '2', '2', 4, 6, 1, 2, 2),
(21, 'Mirador del CaÃ±Ã³n del Sonche', '1668406028_sonche.jpg', '  El CaÃ±Ã³n del Sonche o Huanca Urco estÃ¡ ubicado en el departamento de Amazonas.â€‹ Su cima se encuentra a 2.620 metros sobre el nivel del mar y tiene un largo de 11 kilÃ³metros aproximadamente que finaliza en el rÃ­o Utcubamba. La zona se caracte', '1', 'Chachapoyas', '01:00:00', '02:00:00', '-6.168836', '-77.850674', 2620, 15, 3, 10, '', 3, '1', '1', 2, 5, 2, 1, 2),
(22, 'Qhapaq Ã‘an', '1668406434_Qhapac.jpg', '  Este tramo se integra a la gran red de caminos construidos por los incas en el Chinchaysuyo, a finales del siglo XV y comienzos del siglo XVI. La finalidad era integrar el Tahuantinsuyo. A mediados del siglo XX sirviÃ³ para unir los pueblos del nor', '2', 'Luya', '03:00:00', '04:00:00', '-6.30806', '-77.8989', 2920, 30, 10, 20, '', 3, '1', '1', 3, 4, 2, 1, 1),
(23, 'SarcÃ³fagos del Tigre', '1668406771_Sarc_tigre.jpg', '  Los SarcÃ³fagos de Cerro El Tigre son un sitio arqueolÃ³gico chachapoyano ubicado en departamento de Amazonas, PerÃº. En el interior albergan momias de niÃ±os que pertenecieron a la alta jerarquÃ­a.\r\n\r\nSe encuentra acondicionadas con muros de conte', '2', 'Bongara', '03:00:00', '05:00:00', '-6037.77', '-78125.67', 2928, 30, 10, 20, '', 3, '1', '1', 2, 4, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idComentarios` int(11) NOT NULL,
  `cod_atractivo_turistico` int(11) NOT NULL,
  `cod_turista` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `fecharegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idComentarios`, `cod_atractivo_turistico`, `cod_turista`, `comentario`, `fecharegistro`) VALUES
(7, 20, 1, 'sdfsdfsd', '2022-11-22 16:31:42'),
(8, 18, 2, 'esta muy bonito\r\n', '2022-11-25 01:53:46'),
(9, 18, 3, 'es muy lindo', '2022-12-06 01:27:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_viaje`
--

CREATE TABLE `datos_viaje` (
  `cod_datos_viaje` int(11) NOT NULL,
  `provincia_origen` varchar(50) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `presupuesto_soles` double DEFAULT NULL,
  `presupuesto_dolares` double DEFAULT NULL,
  `solo` varchar(1) DEFAULT NULL,
  `cod_turista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_recomendacion`
--

CREATE TABLE `historial_recomendacion` (
  `cod_h_recomendacion` int(11) NOT NULL,
  `cod_turista` int(11) NOT NULL,
  `cod_atractivo_turistico` int(11) NOT NULL,
  `nombreAtractivo` varchar(200) NOT NULL,
  `distancia` double NOT NULL,
  `fechaRegistro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial_recomendacion`
--

INSERT INTO `historial_recomendacion` (`cod_h_recomendacion`, `cod_turista`, `cod_atractivo_turistico`, `nombreAtractivo`, `distancia`, `fechaRegistro`) VALUES
(113, 2, 9, 'Laguna de Pomacochas', 2.2360679774998, '2022-11-23 10:54:01'),
(114, 2, 15, 'Laguna BurlÃ¡n', 3.3166247903554, '2022-11-23 10:54:01'),
(115, 2, 22, 'Qhapaq Ã‘an', 3.3166247903554, '2022-11-23 10:54:01'),
(116, 2, 23, 'SarcÃ³fagos del Tigre', 3.7416573867739, '2022-11-23 10:54:01'),
(117, 2, 17, 'Laguna Tabla Rumi', 4.1231056256177, '2022-11-23 10:54:01'),
(118, 1, 4, 'Gocta', 3.1622776601684, '2022-11-23 10:55:25'),
(119, 1, 18, 'ACP San Antonio', 3.3166247903554, '2022-11-23 10:55:25'),
(120, 1, 5, 'Karajia', 3.4641016151378, '2022-11-23 10:55:25'),
(121, 1, 11, 'Kuelap', 3.4641016151378, '2022-11-23 10:55:25'),
(122, 1, 6, 'Caverna de Quiocta', 3.8729833462074, '2022-11-23 10:55:25'),
(123, 2, 18, 'ACP San Antonio', 2.4494897427832, '2022-11-24 20:53:25'),
(124, 2, 4, 'Gocta', 2.6457513110646, '2022-11-24 20:53:25'),
(125, 2, 6, 'Caverna de Quiocta', 2.8284271247462, '2022-11-24 20:53:25'),
(126, 2, 5, 'Karajia', 3, '2022-11-24 20:53:25'),
(127, 2, 11, 'Kuelap', 3, '2022-11-24 20:53:25'),
(128, 2, 18, 'ACP San Antonio', 2, '2022-11-26 18:46:47'),
(129, 2, 4, 'Gocta', 2.2360679774998, '2022-11-26 18:46:47'),
(130, 2, 16, 'Condoryacu', 3, '2022-11-26 18:46:47'),
(131, 2, 6, 'Caverna de Quiocta', 3.1622776601684, '2022-11-26 18:46:47'),
(132, 2, 7, 'Catarata de Yumbilla', 3.1622776601684, '2022-11-26 18:46:47'),
(133, 2, 18, 'ACP San Antonio', 2, '2022-11-26 18:47:14'),
(134, 2, 4, 'Gocta', 2.2360679774998, '2022-11-26 18:47:14'),
(135, 2, 16, 'Condoryacu', 3, '2022-11-26 18:47:14'),
(136, 2, 6, 'Caverna de Quiocta', 3.1622776601684, '2022-11-26 18:47:14'),
(137, 2, 7, 'Catarata de Yumbilla', 3.1622776601684, '2022-11-26 18:47:14'),
(138, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 18:47:25'),
(139, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 18:47:25'),
(140, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 18:47:25'),
(141, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 18:47:25'),
(142, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 18:47:25'),
(143, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 18:55:49'),
(144, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 18:55:49'),
(145, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 18:55:49'),
(146, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 18:55:49'),
(147, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 18:55:49'),
(148, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 18:56:35'),
(149, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 18:56:35'),
(150, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 18:56:35'),
(151, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 18:56:35'),
(152, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 18:56:35'),
(153, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 18:57:16'),
(154, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 18:57:16'),
(155, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 18:57:16'),
(156, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 18:57:16'),
(157, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 18:57:16'),
(158, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 19:09:34'),
(159, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 19:09:34'),
(160, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 19:09:34'),
(161, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 19:09:34'),
(162, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 19:09:34'),
(163, 2, 18, 'ACP San Antonio', 2.2360679774998, '2022-11-26 19:13:29'),
(164, 2, 4, 'Gocta', 2.4494897427832, '2022-11-26 19:13:29'),
(165, 2, 16, 'Condoryacu', 3.1622776601684, '2022-11-26 19:13:29'),
(166, 2, 6, 'Caverna de Quiocta', 3.3166247903554, '2022-11-26 19:13:29'),
(167, 2, 7, 'Catarata de Yumbilla', 3.3166247903554, '2022-11-26 19:13:29'),
(168, 2, 18, 'ACP San Antonio', 2.4494897427832, '2022-11-29 22:39:54'),
(169, 2, 23, 'SarcÃ³fagos del Tigre', 2.4494897427832, '2022-11-29 22:39:54'),
(170, 2, 22, 'Qhapaq Ã‘an', 2.6457513110646, '2022-11-29 22:39:54'),
(171, 2, 9, 'Laguna de Pomacochas', 3.3166247903554, '2022-11-29 22:39:54'),
(172, 2, 16, 'Condoryacu', 3.3166247903554, '2022-11-29 22:39:54'),
(173, 2, 18, 'ACP San Antonio', 2.4494897427832, '2022-11-30 01:34:51'),
(174, 2, 23, 'SarcÃ³fagos del Tigre', 2.4494897427832, '2022-11-30 01:34:51'),
(175, 2, 22, 'Qhapaq Ã‘an', 2.6457513110646, '2022-11-30 01:34:51'),
(176, 2, 9, 'Laguna de Pomacochas', 3.3166247903554, '2022-11-30 01:34:51'),
(177, 2, 16, 'Condoryacu', 3.3166247903554, '2022-11-30 01:34:51'),
(178, 3, 4, 'Gocta', 2.2360679774998, '2022-11-30 17:17:24'),
(179, 3, 18, 'ACP San Antonio', 2.4494897427832, '2022-11-30 17:17:24'),
(180, 3, 16, 'Condoryacu', 3, '2022-11-30 17:17:24'),
(181, 3, 7, 'Catarata de Yumbilla', 3.1622776601684, '2022-11-30 17:17:24'),
(182, 3, 8, 'Catarata Ashpachaca ', 3.1622776601684, '2022-11-30 17:17:24'),
(183, 3, 5, 'Karajia', 4.3588989435407, '2022-12-05 20:26:27'),
(184, 3, 4, 'Gocta', 5, '2022-12-05 20:26:27'),
(185, 3, 11, 'Kuelap', 5, '2022-12-05 20:26:27'),
(186, 3, 16, 'Condoryacu', 5, '2022-12-05 20:26:27'),
(187, 3, 18, 'ACP San Antonio', 5.0990195135928, '2022-12-05 20:26:27'),
(188, 3, 4, 'Gocta', 2.2360679774998, '2022-12-05 20:27:31'),
(189, 3, 18, 'ACP San Antonio', 2.4494897427832, '2022-12-05 20:27:31'),
(190, 3, 16, 'Condoryacu', 3, '2022-12-05 20:27:31'),
(191, 3, 7, 'Catarata de Yumbilla', 3.1622776601684, '2022-12-05 20:27:31'),
(192, 3, 8, 'Catarata Ashpachaca ', 3.1622776601684, '2022-12-05 20:27:31'),
(193, 3, 22, 'Qhapaq Ã‘an', 2.4494897427832, '2022-12-06 21:35:13'),
(194, 3, 23, 'SarcÃ³fagos del Tigre', 2.6457513110646, '2022-12-06 21:35:13'),
(195, 3, 9, 'Laguna de Pomacochas', 3.1622776601684, '2022-12-06 21:35:13'),
(196, 3, 21, 'Mirador del CaÃ±Ã³n del Sonche', 3.4641016151378, '2022-12-06 21:35:13'),
(197, 3, 20, 'Iglesia Catedral de Chachapoyas', 3.605551275464, '2022-12-06 21:35:13'),
(198, 3, 9, 'Laguna de Pomacochas', 2.8284271247462, '2022-12-06 21:37:51'),
(199, 3, 22, 'Qhapaq Ã‘an', 2.8284271247462, '2022-12-06 21:37:51'),
(200, 3, 23, 'SarcÃ³fagos del Tigre', 3.3166247903554, '2022-12-06 21:37:51'),
(201, 3, 21, 'Mirador del CaÃ±Ã³n del Sonche', 3.4641016151378, '2022-12-06 21:37:51'),
(202, 3, 15, 'Laguna BurlÃ¡n', 3.7416573867739, '2022-12-06 21:37:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencia_turista`
--

CREATE TABLE `preferencia_turista` (
  `tipo_clima` varchar(15) DEFAULT NULL,
  `tipo_atractivo` varchar(20) DEFAULT NULL,
  `altura_atractivo` varchar(20) DEFAULT NULL,
  `cod_turista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendacion`
--

CREATE TABLE `recomendacion` (
  `cod_recomendacion` int(11) NOT NULL,
  `cod_turista` int(11) NOT NULL,
  `cod_atractivo_turistico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cambio`
--

CREATE TABLE `tipo_cambio` (
  `cod_tipo_cambio` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `compra` double DEFAULT NULL,
  `venta` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turista`
--

CREATE TABLE `turista` (
  `cod_turista` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `tipo_documento` varchar(15) DEFAULT NULL,
  `num_documento` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `idioma` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `tipo_turista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turista`
--

INSERT INTO `turista` (`cod_turista`, `usuario`, `contrasenia`, `nombres`, `apellidos`, `tipo_documento`, `num_documento`, `sexo`, `fecha_nacimiento`, `telefono`, `direccion`, `pais`, `idioma`, `correo`, `tipo_turista`) VALUES
(1, 'yeison', '123456', 'Yeison Danner', 'Carhuapoma Dett', 'DNI', 73448652, 'M', '2022-11-05', '73448652', 'jron amazonas', 'Peru', 'Espanol', 'yetilec567@hoxds.com', 'Turista'),
(2, 'dead', '123', 'DeaD', 'Kevin', 'DNI', 71642066, 'M', '0000-00-00', '', '15001', 'Perú', 'Espanol', 'kevarsa@gmail.com', ''),
(3, 'kevarsa', 'Holamundo1', 'Kevin', 'Vargas Salazar', 'DNI', 71642066, 'M', '1999-07-22', '926681703', 'Jr. Abraham López lucero 412', 'Perú', 'Espanol', 'kevarsa@gmail.com', 'Nacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `cod_valoracion` int(11) NOT NULL,
  `puntaje` double DEFAULT NULL,
  `num_votantes` int(11) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `cod_atractivo_turistico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atractivo_turistico`
--
ALTER TABLE `atractivo_turistico`
  ADD PRIMARY KEY (`cod_atractivo_turistico`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idComentarios`),
  ADD KEY `cod_atractivo_turistico` (`cod_atractivo_turistico`),
  ADD KEY `cod_turista` (`cod_turista`);

--
-- Indices de la tabla `datos_viaje`
--
ALTER TABLE `datos_viaje`
  ADD PRIMARY KEY (`cod_datos_viaje`),
  ADD KEY `cod_turista` (`cod_turista`);

--
-- Indices de la tabla `historial_recomendacion`
--
ALTER TABLE `historial_recomendacion`
  ADD PRIMARY KEY (`cod_h_recomendacion`);

--
-- Indices de la tabla `preferencia_turista`
--
ALTER TABLE `preferencia_turista`
  ADD KEY `cod_turista` (`cod_turista`);

--
-- Indices de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD PRIMARY KEY (`cod_recomendacion`),
  ADD KEY `cod_turista` (`cod_turista`),
  ADD KEY `cod_atractivo_turistico` (`cod_atractivo_turistico`);

--
-- Indices de la tabla `tipo_cambio`
--
ALTER TABLE `tipo_cambio`
  ADD PRIMARY KEY (`cod_tipo_cambio`);

--
-- Indices de la tabla `turista`
--
ALTER TABLE `turista`
  ADD PRIMARY KEY (`cod_turista`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`cod_valoracion`),
  ADD KEY `cod_atractivo_turistico` (`cod_atractivo_turistico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atractivo_turistico`
--
ALTER TABLE `atractivo_turistico`
  MODIFY `cod_atractivo_turistico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idComentarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `datos_viaje`
--
ALTER TABLE `datos_viaje`
  MODIFY `cod_datos_viaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial_recomendacion`
--
ALTER TABLE `historial_recomendacion`
  MODIFY `cod_h_recomendacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  MODIFY `cod_recomendacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_cambio`
--
ALTER TABLE `tipo_cambio`
  MODIFY `cod_tipo_cambio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turista`
--
ALTER TABLE `turista`
  MODIFY `cod_turista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`cod_atractivo_turistico`) REFERENCES `atractivo_turistico` (`cod_atractivo_turistico`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`cod_turista`) REFERENCES `turista` (`cod_turista`);

--
-- Filtros para la tabla `datos_viaje`
--
ALTER TABLE `datos_viaje`
  ADD CONSTRAINT `datos_viaje_ibfk_1` FOREIGN KEY (`cod_turista`) REFERENCES `turista` (`cod_turista`);

--
-- Filtros para la tabla `preferencia_turista`
--
ALTER TABLE `preferencia_turista`
  ADD CONSTRAINT `preferencia_turista_ibfk_1` FOREIGN KEY (`cod_turista`) REFERENCES `turista` (`cod_turista`);

--
-- Filtros para la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD CONSTRAINT `recomendacion_ibfk_1` FOREIGN KEY (`cod_turista`) REFERENCES `turista` (`cod_turista`),
  ADD CONSTRAINT `recomendacion_ibfk_2` FOREIGN KEY (`cod_atractivo_turistico`) REFERENCES `atractivo_turistico` (`cod_atractivo_turistico`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`cod_atractivo_turistico`) REFERENCES `atractivo_turistico` (`cod_atractivo_turistico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
