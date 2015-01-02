-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-11-2014 a las 19:29:13
-- Versión del servidor: 5.5.38
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aerolinea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuerto`
--

CREATE TABLE IF NOT EXISTS `aeropuerto` (
  `cod_aeropuerto` varchar(45) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cod_aeropuerto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `aeropuerto`
--

INSERT INTO `aeropuerto` (`cod_aeropuerto`, `ciudad`, `provincia`, `nombre`) VALUES
('SAAC', 'Concordia', 'Entre Rios', 'Aeropuerto Comodoro Pierrestegui\r'),
('SAAJ', 'Junin', 'Buenos Aires', 'Aeropuerto de Junin\r'),
('SAAK', 'Isla Martin Garcia', 'Buenos Aires', 'Aeropuerto Isla Martin Garcia\r'),
('SAAP', 'Parana', 'Entre Rios', 'Aeropuerto General Justo Jose de Urquiza\r'),
('SAAR', 'Rosario', 'Santa Fe', 'Aeropuerto Internacional Rosario Islas Malvinas\r'),
('SAAU', 'Villaguay', 'Entre Rios', 'Aeropuerto de Villaguay\r'),
('SAAV', 'Sauce Viejo', 'Santa Fe', 'Aeropuerto de Sauce Viejo\r'),
('SABE', 'Buenos Aires', 'CABA', 'Aeroparque Jorge Newbery\r'),
('SACC', 'La Cumbre', 'Cordoba', 'Aeropuerto La Cumbre\r'),
('SACO', 'Cordoba', 'Cordoba', 'Aeropuerto Internacional Ingeniero Ambrosio Taravella\r'),
('SACP', 'Chepes', 'La Rioja', 'Aeropuerto Chepes\r'),
('SACT', 'Chamical', 'La Rioja', 'Aeropuerto Gobernador Gordillo\r'),
('SADD', 'Don Torcuato', 'Buenos Aires', 'Aerodromo de Don Torcuato\r'),
('SADF', 'San Fernando', 'Buenos Aires', 'Aeropuerto Internacional de San Fernando\r'),
('SADJ', 'Jose C. Paz', 'Buenos Aires', 'Aeropuerto Mariano Moreno\r'),
('SADL', 'La Plata', 'Buenos Aires', 'Aeropuerto de La Plata\r'),
('SADM', 'Moron', 'Buenos Aires', 'Aeropuerto de Moron\r'),
('SADO', 'Campo de Mayo', 'Buenos Aires', 'Aerodromo de Campo de Mayo\r'),
('SADP', 'El Palomar', 'Buenos Aires', 'Aeropuerto El Palomar\r'),
('SADS', 'San Justo', 'Buenos Aires', 'Aeropuerto de San Justo\r'),
('SAEM', 'Miramar', 'Buenos Aires', 'Aerodromo Juan Domingo Peron\r'),
('SAEZ', 'Ezeiza', 'Buenos Aires', 'Aeropuerto Internacional Ministro Pistarini\r'),
('SAFS', 'Sunchales', 'Santa Fe', 'Aeropuerto de Sunchales\r'),
('SAHE', 'Caviahue', 'Neuquen', 'Aeropuerto de Caviahue\r'),
('SAHR', 'General Roca', 'Rio Negro', 'Aeropuerto de General Roca\r'),
('SAHZ', 'Zapala', 'Neuquen', 'Aeropuerto de Zapala\r'),
('SAMA', 'General Alvear', 'Mendoza', 'Aeropuerto de General Alvear\r'),
('SAME', 'Mendoza', 'Mendoza', 'Aeropuerto Internacional El Plumerillo\r'),
('SAMM', 'Malargue', 'Mendoza', 'Aeropuerto Internacional Comodoro Ricardo Salomon\r'),
('SAMR', 'San Rafael', 'Mendoza', 'Aeropuerto Internacional Suboficial Ayudante Santiago Germano\r'),
('SAMU', 'Salta', 'Salta', 'Aeropuerto Internacional Martin Miguel de Guemes\r'),
('SANC', 'San Fernando del Valle de Catamarca', 'Catamarca', 'Aeropuerto Coronel Felipe Varela\r'),
('SANE', 'Santiago del Estero', 'Santiago del Estero', 'Aeropuerto Vicecomodoro Angel de la Paz Aragones\r'),
('SANL', 'La Rioja', 'La Rioja', 'Aeropuerto Capitan Vicente Almandos Amonacide\r'),
('SANO', 'Chilecito', 'La Rioja', 'Aeropuerto Chilecito\r'),
('SANR', 'Termas de Rio Hondo', 'Santiago del Estero', 'Aeropuerto Internacional Termas de Rio Hondo\r'),
('SANT', 'San Miguel de Tucuman', 'Tucuman', 'Aeropuerto Internacional Teniente General Benjamin Matienzo\r'),
('SANU', 'San Juan', 'San Juan', 'Aeropuerto Domingo Faustino Sarmiento\r'),
('SANW', 'Ceres', 'Santa Fe', 'Aeropuerto Ceres\r'),
('SAOC', 'Rio Cuarto', 'Cordoba', 'Aeropuerto de Rio Cuarto\r'),
('SAOD', 'Villa Dolores', 'Cordoba', 'Aeropuerto de Villa Dolores\r'),
('SAOL', 'Laboulaye', 'Cordoba', 'Aerodromo de Laboulaye\r'),
('SAOR', 'Villa Reynolds', 'San Luis', 'Aeropuerto de Villa Reynolds\r'),
('SAOS', 'Merlo', 'San Luis', 'Aeropuerto Internacional Valle del Conlara\r'),
('SAOU', 'San Luis', 'San Luis', 'Aeropuerto Brigadier Mayor Cesar Raul Ojeda\r'),
('SARC', 'Corrientes', 'Corrientes', 'Aeropuerto Internacional Doctor Fernando Piragine Niveyro\r'),
('SARE', 'Resistencia', 'Chaco', 'Aeropuerto Internacional de Resistencia\r'),
('SARF', 'Formosa', 'Formosa', 'Aeropuerto Internacional de Formosa\r'),
('SARI', 'Puerto Iguazu', 'Misiones', 'Aeropuerto Internacional de Puerto Iguazu\r'),
('SARL', 'Paso de los Libres', 'Corrientes', 'Aeropuerto Internacional de Paso de los Libres\r'),
('SARM', 'Monte Caseros', 'Corrientes', 'Aeropuerto de Monte Caseros\r'),
('SARP', 'Posadas', 'Misiones', 'Aeropuerto Internacional Libertador General Jose de San Martin\r'),
('SASA', 'Presidencia Roque Saenz Pena', 'Chaco', 'Aeropuerto de Presidencia Roque Saenz Pena\r'),
('SASJ', 'Perico', 'Jujuy', 'Aeropuerto Internacional Gobernador Horacio Guzman\r'),
('SASO', 'San Ramon de la Nueva Oran', 'Salta', 'Aero Club Oran\r'),
('SAST', 'Tartagal', 'Salta', 'Aeropuerto de Tartagal\r'),
('SATC', 'Clorinda', 'Formosa', 'Aeropuerto Clorinda\r'),
('SATK', 'Las Lomitas', 'Formosa', 'Aerodromo Alferez Armando Rodriguez\r'),
('SATR', 'Reconquista', 'Santa Fe', 'Aeropuerto Daniel Jurkic\r'),
('SATU', 'Curuzu Cuatia', 'Corrientes', 'Aeropuerto de Curuzu Cuatia\r'),
('SAVB', 'El Bolson', 'Rio Negro', 'Aeropuerto de El Bolson\r'),
('SAVC', 'Comodoro Rivadavia', 'Chubut', 'Aeropuerto Internacional General Enrique Mosconi\r'),
('SAVE', 'Esquel', 'Chubut', 'Aeropuerto Brigadier General Antonio Parodi\r'),
('SAVH', 'Las Heras', 'Santa Cruz', 'Aeropuerto Las Heras\r'),
('SAVJ', 'Ingeniero Jacobacci', 'Rio Negro', 'Aeropuerto de Ingeniero Jacobacci\r'),
('SAVR', 'Alto Rio Senguer', 'Chubut', 'Aeropuerto Alto Rio Senguer\r'),
('SAVT', 'Trelew', 'Chubut', 'Aeropuerto Almirante Marco Andres Zar\r'),
('SAVV', 'Viedma', 'Rio Negro', 'Aeropuerto Gobernador Edgardo Castello\r'),
('SAVY', 'Puerto Madryn', 'Chubut', 'Aeropuerto El Tehuelche\r'),
('SAWA', 'El Calafate', 'Santa Cruz', 'Aeropuerto de Lago Argentino\r'),
('SAWC', 'El Calafate', 'Santa Cruz', 'Aeropuerto Comandante Armando Tola\r'),
('SAWD', 'Puerto Deseado', 'Santa Cruz', 'Aeropuerto Puerto Deseado\r'),
('SAWE', 'Rio Grande', 'Tierra del Fuego', 'Aeropuerto Internacional Gob. Ramon Trejo Noel\r'),
('SAWG', 'Rio Gallegos', 'Santa Cruz', 'Aeropuerto Internacional Piloto Civil Norberto Fernandez\r'),
('SAWH', 'Ushuaia', 'Tierra del Fuego', 'Aeropuerto de Ushuaia\r'),
('SAWJ', 'Puerto San Julian', 'Santa Cruz', 'Aeropuerto Capitan Jose Daniel Vazquez\r'),
('SAWP', 'Perito Moreno', 'Santa Cruz', 'Aeropuerto Perito Moreno\r'),
('SAWT', 'Rio Turbio', 'Santa Cruz', 'Aeropuerto Rio Turbio\r'),
('SAWU', 'Puerto Santa Cruz', 'Santa Cruz', 'Aeropuerto de Puerto Santa Cruz\r'),
('SAZA', 'Azul', 'Buenos Aires', 'Aeropuerto de Azul\r'),
('SAZB', 'Bahia Blanca', 'Buenos Aires', 'Aeropuerto Comandante Espora\r'),
('SAZC', 'Coronel Suarez', 'Buenos Aires', 'Aeropuerto Brigadier Hector Eduardo Ruiz\r'),
('SAZD', 'Dolores', 'Buenos Aires', 'Aerodromo de Dolores\r'),
('SAZF', 'Olavarria', 'Buenos Aires', 'Aeropuerto de Olavarria\r'),
('SAZG', 'General Pico', 'La Pampa', 'Aeropuerto de General Pico\r'),
('SAZH', 'Tres Arroyos', 'Buenos Aires', 'Aeropuerto Municipal Primer Teniente Hector Ricardo Volponi\r'),
('SAZI', 'Bolivar', 'Buenos Aires', 'Aeropuerto de Bolivar\r'),
('SAZL', 'Santa Teresita', 'Buenos Aires', 'Aeropuerto de Santa Teresita\r'),
('SAZM', 'Mar del Plata', 'Buenos Aires', 'Aeropuerto Internacional Astor Piazolla\r'),
('SAZN', 'Neuquen', 'Neuquen', 'Aeropuerto Internacional Presidente Peron\r'),
('SAZO', 'Necochea', 'Buenos Aires', 'Aeropuerto Edgardo Hugo Yelpo\r'),
('SAZP', 'Pehuajo', 'Buenos Aires', 'Aeropuerto Comodoro P. Zanni\r'),
('SAZR', 'Santa Rosa', 'La Pampa', 'Aeropuerto de Santa Rosa\r'),
('SAZS', 'Bariloche', 'Rio Negro', 'Aeropuerto Internacional Teniente Luis Candelaria\r'),
('SAZT', 'Tandil', 'Buenos Aires', 'Aeropuerto de Tandil\r'),
('SAZV', 'Villa Gesell', 'Buenos Aires', 'Aeropuerto de Villa Gesell\r'),
('SAZW', 'Cutral-Co', 'Neuquen', 'Aeropuerto de Cutral-Co\r'),
('SAZY', 'San Martin de los Andes', 'Neuquen', 'Aeropuerto Aviador Carlos Campos\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avion`
--

CREATE TABLE IF NOT EXISTS `avion` (
  `nro_avion` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `capacidadTot` int(11) DEFAULT NULL,
  `capacidadEcono` int(11) DEFAULT NULL,
  `filasEcono` int(11) DEFAULT NULL,
  `columnasEcono` int(11) NOT NULL,
  `capacidadPrimera` int(11) DEFAULT NULL,
  `filasPrimera` int(11) DEFAULT NULL,
  `columnaPrimera` int(11) DEFAULT NULL,
  PRIMARY KEY (`nro_avion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `avion`
--

INSERT INTO `avion` (`nro_avion`, `marca`, `modelo`, `capacidadTot`, `capacidadEcono`, `filasEcono`, `columnasEcono`, `capacidadPrimera`, `filasPrimera`, `columnaPrimera`) VALUES
(1, 'Embraer', 'EMB-120', 30, 30, 10, 3, 0, 0, 0),
(2, 'Embraer', 'ER-145', 80, 70, 14, 5, 10, 5, 2),
(3, 'Embraer', 'ER-145', 125, 105, 21, 5, 20, 10, 2),
(4, 'Embraer', 'ER-170', 150, 120, 30, 4, 30, 10, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listavuelos`
--

CREATE TABLE IF NOT EXISTS `listavuelos` (
  `cod_lista` int(11) NOT NULL AUTO_INCREMENT,
  `cod_aero_origen` varchar(45) DEFAULT NULL,
  `cod_aero_destino` varchar(45) DEFAULT NULL,
  `nro_avion` int(11) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `precioEcono` decimal(6,2) DEFAULT NULL,
  `precioPrimera` decimal(6,2) DEFAULT NULL,
  `diasVuelo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_lista`),
  KEY `listaVuelos.cod_aero_origen_idx` (`cod_aero_origen`),
  KEY `listaVuelos.cod_aero_destino_idx` (`cod_aero_destino`),
  KEY `listaVuelos.nro_avion_idx` (`nro_avion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=202 ;

--
-- Volcado de datos para la tabla `listavuelos`
--

INSERT INTO `listavuelos` (`cod_lista`, `cod_aero_origen`, `cod_aero_destino`, `nro_avion`, `hora`, `precioEcono`, `precioPrimera`, `diasVuelo`) VALUES
(1, 'SAVR', 'SAZY', 3, '09:00:00', '1191.00', '1464.93', 'l-m-x'),
(2, 'SAZA', 'SAZW', 2, '12:00:00', '1836.00', '2258.28', 'm-x-d'),
(3, 'SAZB', 'SAZV', 1, '18:00:00', '2497.00', '3071.31', 'm-x-v-s-d'),
(4, 'SAZS', 'SAZT', 4, '20:00:00', '2161.00', '2658.03', 's'),
(5, 'SAZI', 'SAZS', 3, '14:30:00', '1228.00', '1510.44', 'j-v-d'),
(6, 'SADO', 'SAZP', 2, '22:30:00', '968.00', '1190.64', 'v-s-d'),
(7, 'SAHE', 'SAZO', 3, '10:00:00', '1281.00', '1575.63', 'm-v'),
(8, 'SANW', 'SAZN', 2, '17:00:00', '2085.00', '2564.55', 'l-m-j'),
(9, 'SACT', 'SAZM', 3, '23:00:00', '1656.00', '2036.88', 'm-x-j-d'),
(10, 'SACP', 'SAZL', 2, '19:15:00', '1982.00', '2437.86', 'm-x-s'),
(11, 'SANO', 'SAZI', 1, '10:20:00', '924.00', '1136.52', 'm-x'),
(12, 'SATC', 'SAZH', 4, '12:45:00', '2108.00', '2592.84', 'l-v-d'),
(13, 'SAVC', 'SAZG', 2, '13:30:00', '915.00', '1125.45', 'l-m-x-s-d'),
(14, 'SACO', 'SAZF', 2, '14:00:00', '1182.00', '1453.86', 'l-m-x-j-v-d'),
(15, 'SAAC', 'SAZD', 2, '16:50:00', '1587.00', '1952.01', 'l-x-j-v-s'),
(16, 'SARC', 'SAZB', 3, '17:25:00', '2477.00', '3046.71', 'l-m-x-s-d'),
(17, 'SATU', 'SAZA', 4, '18:15:00', '2491.00', '3063.93', 'l-m-x-j-v'),
(18, 'SAZW', 'SAWU', 1, '12:50:00', '1555.00', '1912.65', 'l-j-v-s-d'),
(19, 'SAZD', 'SAWT', 3, '11:00:00', '2451.00', '3014.73', 'm-x'),
(20, 'SADD', 'SAWP', 3, '17:20:00', '1762.00', '2167.28', 'l-j-v-d'),
(21, 'SAVB', 'SAWJ', 2, '23:45:00', '2314.00', '2846.22', 'm-x-d'),
(22, 'SAWC', 'SAWH', 4, '15:30:00', '1661.00', '2043.03', 'l-j-s-d'),
(23, 'SAWA', 'SAWG', 3, '12:25:00', '1317.00', '1619.91', 'l-v-s-d'),
(24, 'SADP', 'SAWE', 1, '22:15:00', '2257.00', '2776.11', 'x-j-v-s'),
(25, 'SAVE', 'SAWD', 3, '21:15:00', '2021.00', '2485.83', 'l-j-v'),
(26, 'SAEZ', 'SAWC', 1, '14:45:00', '1933.00', '2377.59', 'm-x-j-s-d'),
(27, 'SARF', 'SAWA', 3, '12:30:00', '950.00', '1168.50', 'x-v-s'),
(28, 'SAMA', 'SAVY', 1, '15:20:00', '1216.00', '1495.68', 'm-s'),
(29, 'SAZG', 'SAVV', 2, '17:30:00', '1946.00', '2393.58', 'l-x-j-s-d'),
(30, 'SAHR', 'SAVT', 2, '14:30:00', '1889.00', '2323.47', 'l-m-j-d'),
(31, 'SAVJ', 'SAVR', 2, '22:30:00', '887.00', '1091.01', 'x-v-s-d'),
(32, 'SAAK', 'SAVJ', 4, '18:00:00', '1131.00', '1391.13', 'l-m-x-s'),
(33, 'SADJ', 'SAVH', 1, '19:15:00', '913.00', '1122.99', 'l-d'),
(34, 'SAAJ', 'SAVE', 4, '17:00:00', '2326.00', '2860.98', 'l-d'),
(35, 'SAOL', 'SAVC', 4, '20:00:00', '1306.00', '1606.38', 'm-x-j-s'),
(36, 'SACC', 'SAVB', 2, '10:00:00', '1721.00', '2116.83', 'j-v'),
(37, 'SADL', 'SATU', 3, '14:30:00', '2181.00', '2682.63', 'l-s-d'),
(38, 'SANL', 'SATR', 2, '13:30:00', '1821.00', '2239.83', 'l-m-j-v-d'),
(39, 'SAVH', 'SATK', 2, '12:45:00', '1956.00', '2405.88', 'l-x-j-s-d'),
(40, 'SATK', 'SATC', 4, '21:15:00', '2209.00', '2717.07', 'l-m-x-v-s'),
(41, 'SAMM', 'SAST', 1, '12:50:00', '2197.00', '2702.31', 'l-x-j-v-s-d'),
(42, 'SAME', 'SASO', 1, '14:00:00', '1358.00', '1670.34', 'm'),
(43, 'SAME', 'SASJ', 4, '12:00:00', '895.00', '1100.85', 'j-v-s'),
(44, 'SAOS', 'SASA', 4, '16:50:00', '847.00', '1041.81', 'x-d'),
(45, 'SAEM', 'SASA', 2, '23:00:00', '2045.00', '2515.35', 'l-x-v-d'),
(46, 'SARM', 'SARP', 3, '17:25:00', '1109.00', '1364.07', 'm-v-s'),
(47, 'SADM', 'SARM', 2, '18:15:00', '1763.00', '2168.49', 'l-m-j-v-s-d'),
(48, 'SAZO', 'SARL', 1, '10:20:00', '1665.00', '2047.95', 'm-j-v-d'),
(49, 'SAZN', 'SARI', 2, '17:00:00', '1809.00', '2225.07', 's'),
(50, 'SAZF', 'SARF', 2, '18:00:00', '1841.00', '2264.43', 'v'),
(51, 'SAAP', 'SARE', 3, '11:00:00', '1079.00', '1327.17', 'j-v-d'),
(52, 'SARL', 'SARC', 4, '10:15:00', '1108.00', '1362.84', 'l-m-x-j-v-d'),
(53, 'SAZP', 'SAOU', 2, '12:50:00', '2112.00', '2597.76', 'l-m-d'),
(54, 'SASJ', 'SAOS', 2, '17:20:00', '2412.00', '2966.76', 'm-v'),
(55, 'SAWP', 'SAOR', 1, '23:45:00', '1980.00', '2435.40', 'x-d'),
(56, 'SARP', 'SAOL', 4, '21:15:00', '862.00', '1060.26', 'l-m-x-j-v-s-d'),
(57, 'SAWD', 'SAOD', 1, '11:00:00', '1525.00', '1875.75', 'l-d'),
(58, 'SARI', 'SAOC', 3, '12:00:00', '2229.00', '2741.67', 'l-j-v-s-d'),
(59, 'SAVY', 'SANW', 4, '22:15:00', '870.00', '1070.10', 'v'),
(60, 'SAWJ', 'SANU', 2, '11:00:00', '2166.00', '2664.18', 'j'),
(61, 'SAWU', 'SANT', 3, '14:30:00', '1173.00', '1442.79', 'l-s'),
(62, 'SASA', 'SANR', 2, '20:00:00', '2001.00', '2461.23', 'l-x-j-v-s-d'),
(63, 'SATR', 'SANO', 1, '10:20:00', '2217.00', '2726.91', 'm-j-v-s-d'),
(64, 'SARE', 'SANL', 1, '22:30:00', '2334.00', '2870.82', 'l-v'),
(65, 'SAOC', 'SANE', 1, '19:15:00', '2014.00', '2477.22', 'm-x-s'),
(66, 'SAWG', 'SANC', 1, '12:00:00', '1462.00', '1798.26', 'm-j-v-d'),
(67, 'SAWE', 'SAMR', 1, '18:00:00', '2269.00', '2790.87', 'v-s-d'),
(68, 'SAWT', 'SAMM', 2, '21:15:00', '2205.00', '2712.15', 'l-x-j-s'),
(69, 'SAAR', 'SAME', 1, '17:00:00', '1097.00', '1349.31', 'x-d'),
(70, 'SASA', 'SAMA', 1, '10:00:00', '989.00', '1216.47', 'x-s-d'),
(71, 'SADF', 'SAHZ', 3, '23:00:00', '2357.00', '2899.11', 'd'),
(72, 'SANC', 'SAHR', 4, '14:30:00', '1716.00', '2110.68', 'l-j-s'),
(73, 'SANU', 'SAHE', 4, '13:30:00', '1387.00', '1706.01', 'm-x-j-v-d'),
(74, 'SAOU', 'SAFS', 2, '10:20:00', '1032.00', '1269.36', 'x-j-v-d'),
(75, 'SAMR', 'SAEZ', 3, '12:45:00', '1577.00', '1939.71', 'l-m-x-j-v-s'),
(76, 'SASO', 'SAEM', 2, '12:50:00', '1456.00', '1790.88', 'l-v-d'),
(77, 'SANT', 'SADP', 3, '12:00:00', '1632.00', '2007.36', 'l-m-x-v'),
(78, 'SAZR', 'SADO', 3, '17:00:00', '2414.00', '2969.22', 'j-v'),
(79, 'SAZL', 'SADM', 2, '21:15:00', '2350.00', '2890.50', 'l-m-j-v-d'),
(80, 'SANE', 'SADL', 3, '14:45:00', '1840.00', '2263.20', 'm-j-d'),
(81, 'SAZY', 'SADJ', 3, '14:00:00', '2095.00', '2576.85', 'm-x-d'),
(82, 'SAAV', 'SADF', 1, '14:30:00', '1763.00', '2168.49', 'x-v'),
(83, 'SAFS', 'SADD', 2, '16:50:00', '2284.00', '2809.32', 'm-v-s'),
(84, 'SAZT', 'SACT', 3, '13:30:00', '2272.00', '2794.56', 'l-v'),
(85, 'SAST', 'SACP', 4, '23:00:00', '1849.00', '2274.27', 'l-d'),
(86, 'SANR', 'SACO', 2, '18:00:00', '1552.00', '1908.96', 'x-j-v-s'),
(87, 'SAVT', 'SACC', 2, '17:25:00', '2472.00', '3040.56', 'm-j-v-s'),
(88, 'SAZH', 'SABE', 2, '11:00:00', '2390.00', '2939.70', 'l-m-x-j-v-d'),
(89, 'SAWH', 'SAAV', 3, '17:00:00', '1498.00', '1842.54', 'x-v-s'),
(90, 'SAVV', 'SAAU', 4, '10:15:00', '1183.00', '1455.09', 'l-x-j-s'),
(91, 'SAOD', 'SAAR', 2, '17:20:00', '1322.00', '1626.06', 'l-v-s-d'),
(92, 'SAZV', 'SAAP', 2, '10:20:00', '1227.00', '1509.21', 'm-j-s'),
(93, 'SAOR', 'SAAK', 3, '19:15:00', '1546.00', '1901.58', 'm-j'),
(94, 'SAAU', 'SAAJ', 2, '21:15:00', '830.00', '1020.90', 'm-x-v-s-d'),
(95, 'SAHZ', 'SAAC', 2, '18:00:00', '1973.00', '2426.79', 'l-m-x-j-s'),
(96, 'SABE', 'SADO', 2, '12:00:00', '2477.00', '3046.71', 'l-j-v-s-d'),
(97, 'SABE', 'SAHE', 1, '13:30:00', '2327.00', '2862.21', 'm-j-s-d'),
(98, 'SABE', 'SANW', 1, '20:00:00', '1071.00', '1317.33', 'v-s-d'),
(99, 'SABE', 'SACT', 4, '18:15:00', '2312.00', '2843.76', 'm-x-j-d'),
(100, 'SABE', 'SANO', 4, '11:00:00', '2138.00', '2629.74', 'm-x-j-v'),
(101, 'SABE', 'SATC', 1, '14:30:00', '1947.00', '2394.81', 'l-x-j-d'),
(102, 'SABE', 'SAVC', 1, '14:00:00', '958.00', '1178.34', 'm-x-v-s-d'),
(103, 'SABE', 'SACO', 1, '12:45:00', '2083.00', '2562.09', 'l-x-j-v-s-d'),
(104, 'SABE', 'SAAC', 3, '12:50:00', '2093.00', '2574.39', 'l-m-x-j-d'),
(105, 'SABE', 'SAZC', 3, '19:15:00', '1062.00', '1306.26', 'l-s'),
(106, 'SABE', 'SARC', 3, '18:00:00', '1376.00', '1692.48', 'l-m-s-d'),
(107, 'SABE', 'SATU', 1, '21:15:00', '1429.00', '1757.67', 'l-s-d'),
(108, 'SABE', 'SAZW', 4, '13:30:00', '1159.00', '1425.57', 'm-j-d'),
(109, 'SABE', 'SAZD', 1, '21:15:00', '1741.00', '2141.43', 'x-j-s-d'),
(110, 'SABE', 'SADD', 3, '11:00:00', '2395.00', '2945.85', 'm-j-d'),
(111, 'SABE', 'SAVB', 3, '22:30:00', '1159.00', '1425.57', 'l-v'),
(112, 'SABE', 'SAWC', 1, '17:00:00', '1334.00', '1640.82', 'l-x-v'),
(113, 'SABE', 'SAWA', 3, '16:50:00', '1792.00', '2204.16', 'm-x-j-v-d'),
(114, 'SABE', 'SADP', 3, '18:15:00', '1234.00', '1517.82', 'l-x-s'),
(115, 'SABE', 'SAVE', 3, '10:00:00', '1954.00', '2403.42', 'l-m-x-j-d'),
(116, 'SABE', 'SAEZ', 1, '12:00:00', '1237.00', '1521.51', 'l-m-x-j-v-d'),
(117, 'SABE', 'SARF', 2, '17:25:00', '1163.00', '1430.49', 'l-j-v-s-d'),
(118, 'SABE', 'SAMA', 3, '18:00:00', '1653.00', '2033.19', 'l-x-d'),
(119, 'SABE', 'SAZG', 2, '17:20:00', '1757.00', '2161.11', 'j-v-d'),
(120, 'SABE', 'SAHR', 2, '10:20:00', '2321.00', '2854.83', 'm-j-v'),
(121, 'SABE', 'SAVJ', 1, '23:45:00', '1237.00', '1521.51', 'l-v-s-d'),
(122, 'SABE', 'SAAK', 3, '14:00:00', '1846.00', '2270.58', 'm-x-v'),
(123, 'SABE', 'SADJ', 4, '19:15:00', '2188.00', '2691.24', 'l-x-v-s'),
(124, 'SABE', 'SAAJ', 2, '22:30:00', '1617.00', '1988.91', 'l-m-j-s-d'),
(125, 'SABE', 'SAOL', 4, '14:45:00', '1105.00', '1359.15', 'l-m-x-j-v'),
(126, 'SABE', 'SACC', 3, '22:15:00', '1610.00', '1980.30', 'm-x'),
(127, 'SABE', 'SADL', 4, '11:00:00', '1871.00', '2301.33', 'l-m-x-j-s-d'),
(128, 'SABE', 'SANL', 1, '12:00:00', '1369.00', '1683.87', 'l-j-v'),
(129, 'SABE', 'SAVH', 2, '21:15:00', '1995.00', '2453.85', 'm-s-d'),
(130, 'SABE', 'SATK', 1, '16:50:00', '2139.00', '2630.97', 'm-j-v-s-d'),
(131, 'SABE', 'SAMM', 3, '23:45:00', '2236.00', '2750.28', 'v-s'),
(132, 'SABE', 'SAZM', 4, '13:30:00', '1275.00', '1568.25', 'm-j-v'),
(133, 'SABE', 'SAME', 3, '14:00:00', '1515.00', '1863.45', 'm-x-s'),
(134, 'SABE', 'SAOS', 4, '21:15:00', '2487.00', '3059.01', 'm-s'),
(135, 'SABE', 'SAEM', 4, '15:20:00', '2163.00', '2660.49', 'l-x-j-v-s-d'),
(136, 'SABE', 'SARM', 1, '17:00:00', '2414.00', '2969.22', 'l-x-j-s-d'),
(137, 'SABE', 'SADM', 4, '18:15:00', '2399.00', '2950.77', 'l-m-s-d'),
(138, 'SABE', 'SAZO', 2, '17:20:00', '1905.00', '2343.15', 'm-x-j-s-d'),
(139, 'SABE', 'SAZN', 1, '18:00:00', '2457.00', '3022.11', 'l-m-x-v'),
(140, 'SABE', 'SAZF', 2, '12:50:00', '1366.00', '1680.18', 'l-v-d'),
(141, 'SABE', 'SAAP', 3, '23:00:00', '2474.00', '3043.02', 'x-d'),
(142, 'SABE', 'SARL', 2, '23:45:00', '1201.00', '1477.23', 'x-v-d'),
(143, 'SABE', 'SAZP', 3, '17:30:00', '2197.00', '2702.31', 'x-j-v-s-d'),
(144, 'SABE', 'SASJ', 1, '13:30:00', '1228.00', '1510.44', 'm-j-v'),
(145, 'SABE', 'SAWP', 3, '17:20:00', '1796.00', '2209.08', 'l-m-x'),
(146, 'SABE', 'SARP', 1, '10:20:00', '2469.00', '3036.87', 'l-x-j'),
(147, 'SABE', 'SAWD', 1, '12:00:00', '1629.00', '2003.67', 'l-m-x-v-s-d'),
(148, 'SABE', 'SARI', 2, '18:15:00', '1856.00', '2282.88', 'j'),
(149, 'SABE', 'SAVY', 1, '10:00:00', '952.00', '1170.96', 'l-j'),
(150, 'SABE', 'SAWJ', 4, '17:25:00', '834.00', '1025.82', 'm-x'),
(151, 'SABE', 'SAWU', 3, '18:00:00', '2372.00', '2917.56', 'm-d'),
(152, 'SABE', 'SASA', 1, '11:00:00', '1249.00', '1536.27', 'l-x-j'),
(153, 'SABE', 'SATR', 2, '19:15:00', '1951.00', '2399.73', 'l-m-x-j'),
(154, 'SABE', 'SARE', 3, '17:00:00', '1767.00', '2173.41', 'l-v-s-d'),
(155, 'SABE', 'SAOC', 2, '18:15:00', '918.00', '1129.14', 'l-m-s-v-s-d'),
(156, 'SABE', 'SAWG', 4, '12:00:00', '2014.00', '2477.22', 'm-x-v-s-d'),
(157, 'SABE', 'SAWE', 3, '20:00:00', '1437.00', '1767.51', 'l-x-j-s'),
(158, 'SABE', 'SAWT', 4, '21:15:00', '1450.00', '1783.50', 'l-m-s-d'),
(159, 'SABE', 'SAAR', 2, '16:50:00', '933.00', '1147.59', 'x-v-s'),
(160, 'SABE', 'SADF', 4, '14:30:00', '2264.00', '2784.72', 'l-x-v-d'),
(161, 'SABE', 'SANC', 1, '12:45:00', '2404.00', '2956.92', 'm-x-j-d'),
(162, 'SABE', 'SANU', 1, '19:15:00', '1166.00', '1434.18', 'x-j-d'),
(163, 'SABE', 'SAOU', 2, '22:30:00', '1519.00', '1868.37', 'l-m-j-v-s'),
(164, 'SABE', 'SAMR', 3, '22:15:00', '1784.00', '2194.32', 'l-m-s'),
(165, 'SABE', 'SASO', 1, '21:15:00', '2445.00', '3007.35', 'm-j-s-d'),
(166, 'SABE', 'SADS', 4, '12:50:00', '1734.00', '2132.82', 'l-x-j'),
(167, 'SABE', 'SANT', 3, '23:45:00', '1955.00', '2404.65', 'l-m-x-v-s'),
(168, 'SABE', 'SAZR', 2, '17:20:00', '2158.00', '2654.34', 'l-x-s'),
(169, 'SABE', 'SAZL', 2, '10:20:00', '2236.00', '2750.28', 'm'),
(170, 'SABE', 'SANE', 3, '11:00:00', '1966.00', '2418.18', 'l-m-x-v-s'),
(171, 'SABE', 'SAZY', 3, '17:00:00', '2121.00', '2608.83', 'l-m-v'),
(172, 'SABE', 'SAAV', 3, '10:00:00', '1606.00', '1975.38', 'm-j-s-d'),
(173, 'SABE', 'SAFS', 3, '12:00:00', '1710.00', '2103.30', 'm-d'),
(174, 'SABE', 'SAZT', 2, '14:00:00', '1285.00', '1580.55', 'l-m-v'),
(175, 'SABE', 'SAST', 2, '18:00:00', '1273.00', '1565.79', 'l-j-v-s'),
(176, 'SABE', 'SANR', 2, '17:25:00', '2308.00', '2838.84', 'm-j-s'),
(177, 'SABE', 'SAVT', 1, '13:30:00', '1934.00', '2378.82', 'm-x-d'),
(178, 'SABE', 'SAZH', 2, '18:15:00', '1573.00', '1934.79', 'v-s'),
(179, 'SABE', 'SAWH', 4, '14:30:00', '827.00', '1017.21', 'l-x-j-v-s-d'),
(180, 'SABE', 'SAVV', 3, '14:45:00', '1052.00', '1293.96', 'l-x-j-s-d'),
(181, 'SABE', 'SAOD', 3, '19:15:00', '1030.00', '1266.90', 'x-j-v-s'),
(182, 'SABE', 'SAZV', 2, '21:15:00', '1378.00', '1694.94', 'x-j-v'),
(183, 'SABE', 'SAOR', 4, '17:20:00', '1286.00', '1581.78', 'l-v-d'),
(184, 'SABE', 'SAAU', 2, '17:00:00', '2259.00', '2778.57', 'm-x-j-v-d'),
(185, 'SABE', 'SAHZ', 1, '21:15:00', '1432.00', '1761.36', 'm-s-d'),
(186, 'SAZY', 'SAVR', 3, '09:00:00', '1191.00', '1464.93', 'l-m-x'),
(187, 'SAZW', 'SAZA', 2, '12:00:00', '1836.00', '2258.28', 'm-x-d'),
(188, 'SAZV', 'SAZB', 1, '18:00:00', '2497.00', '3071.31', 'm-x-v-s-d'),
(189, 'SAZT', 'SAZS', 4, '20:00:00', '2161.00', '2658.03', 's'),
(190, 'SAZS', 'SAZI', 3, '14:30:00', '1228.00', '1510.44', 'j-v-d'),
(191, 'SAZP', 'SADO', 2, '22:30:00', '968.00', '1190.64', 'v-s-d'),
(192, 'SAZO', 'SAHE', 3, '10:00:00', '1281.00', '1575.63', 'm-v'),
(193, 'SAZN', 'SANW', 2, '17:00:00', '2085.00', '2564.55', 'l-m-j'),
(194, 'SAZM', 'SACT', 3, '23:00:00', '1656.00', '2036.88', 'm-x-j-d'),
(195, 'SAZL', 'SACP', 2, '19:15:00', '1982.00', '2437.86', 'm-x-s'),
(196, 'SAZI', 'SANO', 1, '10:20:00', '924.00', '1136.52', 'm-x'),
(197, 'SAZH', 'SATC', 4, '12:45:00', '2108.00', '2592.84', 'l-v-d'),
(198, 'SAZG', 'SAVC', 2, '13:30:00', '915.00', '1125.45', 'l-m-x-s-d'),
(199, 'SAZF', 'SACO', 2, '14:00:00', '1182.00', '1453.86', 'l-m-x-j-v-d'),
(200, 'SAZY', 'SAVR', 3, '12:30:00', '1191.00', '1500.93', 'l-m-x'),
(201, 'SADP', 'SAWE', 1, '10:30:00', '2000.00', '2500.00', 'x-j-v-s');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `nro_pago` int(11) NOT NULL,
  `monto` decimal(6,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`nro_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE IF NOT EXISTS `pasajero` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `fnacimiento` date DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pasajero`
--

INSERT INTO `pasajero` (`dni`, `nombre`, `apellido`, `mail`, `fnacimiento`) VALUES
(33987654, 'maxi', 'avendaño', 'maxi.aven@yahoo.com.ar', '1988-09-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `nro_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `nro_pago` int(11) DEFAULT NULL,
  `nro_vuelo` int(11) DEFAULT NULL,
  `fila` varchar(10) DEFAULT NULL,
  `columna` int(11) DEFAULT NULL,
  PRIMARY KEY (`nro_reserva`),
  KEY `reserva.dni_idx` (`dni`),
  KEY `reserva.nro_pago_idx` (`nro_pago`),
  KEY `reserva.nro_vuelo_idx` (`nro_vuelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`nro_reserva`, `estado`, `categoria`, `precio`, `dni`, `nro_pago`, `nro_vuelo`, `fila`, `columna`) VALUES
(3, 'reservado', 'Economica', '2083.00', 33987654, NULL, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE IF NOT EXISTS `vuelo` (
  `nro_vuelo` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `dispoEcono` varchar(45) DEFAULT NULL,
  `dispoPrimera` varchar(45) DEFAULT NULL,
  `cod_lista` int(11) DEFAULT NULL,
  PRIMARY KEY (`nro_vuelo`),
  KEY `vuelo.cod_lista_idx` (`cod_lista`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`nro_vuelo`, `fecha`, `dispoEcono`, `dispoPrimera`, `cod_lista`) VALUES
(12, NULL, NULL, NULL, 103);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listavuelos`
--
ALTER TABLE `listavuelos`
  ADD CONSTRAINT `listaVuelos.cod_aero_destino` FOREIGN KEY (`cod_aero_destino`) REFERENCES `aeropuerto` (`cod_aeropuerto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `listaVuelos.cod_aero_origen` FOREIGN KEY (`cod_aero_origen`) REFERENCES `aeropuerto` (`cod_aeropuerto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `listaVuelos.nro_avion` FOREIGN KEY (`nro_avion`) REFERENCES `avion` (`nro_avion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva.dni` FOREIGN KEY (`dni`) REFERENCES `pasajero` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva.nro_pago` FOREIGN KEY (`nro_pago`) REFERENCES `pago` (`nro_pago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reserva.nro_vuelo` FOREIGN KEY (`nro_vuelo`) REFERENCES `vuelo` (`nro_vuelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `vuelo.cod_lista` FOREIGN KEY (`cod_lista`) REFERENCES `listavuelos` (`cod_lista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
