-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2015 a las 07:25:14
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `whatido_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_eventos`
--

CREATE TABLE IF NOT EXISTS `asistencia_eventos` (
  `usuario` int(11) NOT NULL,
  `evento` int(11) NOT NULL,
  `calificacion` int(1) DEFAULT '0',
  `create_on` datetime NOT NULL,
  `change_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'Fiestas Beneficas'),
(2, 'Eventos Infantiles'),
(3, 'Fiestas Tematicas'),
(4, 'Desfiles'),
(5, 'Cumbres'),
(6, 'Feria Empresarial'),
(7, 'Seminarios'),
(8, 'Convenciones'),
(9, 'Conferencia De Prensa'),
(10, 'Inaguraciones'),
(11, 'Eventos Recreativos'),
(12, 'Eventos Religiosos'),
(13, 'Eventos Corporativos'),
(14, 'Eventos Sociales'),
(15, 'Eventos Públicos y/o Populares'),
(16, 'Lanzamientos De Productos'),
(17, 'Jornadas De Capacitación'),
(18, 'Eventos Escolares'),
(19, 'Conciertos'),
(20, 'Festivales'),
(21, 'Concursos'),
(22, 'Espectáculos Artisticos'),
(23, 'Torneos'),
(24, 'Eventos Políticos'),
(26, 'Eventos Deportivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1240 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `departamento`, `nombre`) VALUES
(2, 1, 'El Encanto'),
(3, 1, 'La Chorrera'),
(4, 1, 'La Pedrera'),
(5, 1, 'La Victoria'),
(6, 1, 'Leticia'),
(7, 1, 'Miriti - Paraná'),
(8, 1, 'Puerto Alegría'),
(9, 1, 'Puerto Arica'),
(10, 1, 'Puerto Nariño'),
(11, 1, 'Puerto Santander'),
(12, 1, 'Tarapacá'),
(13, 2, 'Abejorral'),
(14, 2, 'Abriaquí'),
(15, 2, 'Alejandría'),
(16, 2, 'Amagá'),
(17, 2, 'Amalfi'),
(18, 2, 'Andes'),
(19, 2, 'Angelópolis'),
(20, 2, 'Angostura'),
(21, 2, 'Anorí'),
(22, 2, 'Anza'),
(23, 2, 'Apartadó'),
(24, 2, 'Arboletes'),
(25, 2, 'Argelia'),
(26, 2, 'Armenia'),
(27, 2, 'Barbosa'),
(28, 2, 'Bello'),
(29, 2, 'Belmira'),
(30, 2, 'Betania'),
(31, 2, 'Betulia'),
(32, 2, 'Briceño'),
(33, 2, 'Buriticá'),
(34, 2, 'Cáceres'),
(35, 2, 'Caicedo'),
(36, 2, 'Caldas'),
(37, 2, 'Campamento'),
(38, 2, 'Cañasgordas'),
(39, 2, 'Caracolí'),
(40, 2, 'Caramanta'),
(41, 2, 'Carepa'),
(42, 2, 'Carolina'),
(43, 2, 'Caucasia'),
(44, 2, 'Chigorodó'),
(45, 2, 'Cisneros'),
(46, 2, 'Ciudad Bolívar'),
(47, 2, 'Cocorná'),
(48, 2, 'Concepción'),
(49, 2, 'Concordia'),
(50, 2, 'Copacabana'),
(51, 2, 'Dabeiba'),
(52, 2, 'Don Matías'),
(53, 2, 'Ebéjico'),
(54, 2, 'El Bagre'),
(55, 2, 'El Carmen de Viboral'),
(56, 2, 'El Santuario'),
(57, 2, 'Entrerrios'),
(58, 2, 'Envigado'),
(59, 2, 'Fredonia'),
(60, 2, 'Frontino'),
(61, 2, 'Giraldo'),
(62, 2, 'Girardota'),
(63, 2, 'Gómez Plata'),
(64, 2, 'Granada'),
(65, 2, 'Guadalupe'),
(66, 2, 'Guarne'),
(67, 2, 'Guatapé'),
(68, 2, 'Heliconia'),
(69, 2, 'Hispania'),
(70, 2, 'Itagui'),
(71, 2, 'Ituango'),
(72, 2, 'Jardín'),
(73, 2, 'Jericó'),
(74, 2, 'La Ceja'),
(75, 2, 'La Estrella'),
(76, 2, 'La Pintada'),
(77, 2, 'La Unión'),
(78, 2, 'Liborina'),
(79, 2, 'Maceo'),
(80, 2, 'Marinilla'),
(81, 2, 'Medellín'),
(82, 2, 'Montebello'),
(83, 2, 'Murindó'),
(84, 2, 'Mutatá'),
(85, 2, 'Nariño'),
(86, 2, 'Nechí'),
(87, 2, 'Necoclí'),
(88, 2, 'Olaya'),
(89, 2, 'Peñol'),
(90, 2, 'Peque'),
(91, 2, 'Pueblorrico'),
(92, 2, 'Puerto Berrío'),
(93, 2, 'Puerto Nare'),
(94, 2, 'Puerto Triunfo'),
(95, 2, 'Remedios'),
(96, 2, 'Retiro'),
(97, 2, 'Rionegro'),
(98, 2, 'Sabanalarga'),
(99, 2, 'Sabaneta'),
(100, 2, 'Salgar'),
(101, 2, 'San Andrés de Cuerquía'),
(102, 2, 'San Carlos'),
(103, 2, 'San Francisco'),
(104, 2, 'San Jerónimo'),
(105, 2, 'San José de La Montaña'),
(106, 2, 'San Juan de Urabá'),
(107, 2, 'San Juan del Cesar'),
(108, 2, 'San Luis'),
(109, 2, 'San Pedro'),
(110, 2, 'San Pedro De Los Milagros'),
(111, 2, 'San Pedro de Uraba'),
(112, 2, 'San Rafael'),
(113, 2, 'San Roque'),
(114, 2, 'San Vicente'),
(115, 2, 'Santa Bárbara'),
(116, 2, 'Santa Rosa de Osos'),
(117, 2, 'Santafé de Antioquia'),
(118, 2, 'Santo Domingo'),
(119, 2, 'Segovia'),
(120, 2, 'Sonson'),
(121, 2, 'Sopetrán'),
(122, 2, 'Támesis'),
(123, 2, 'Tarazá'),
(124, 2, 'Tarso'),
(125, 2, 'Titiribí'),
(126, 2, 'Toledo'),
(127, 2, 'Turbo'),
(128, 2, 'Uramita'),
(129, 2, 'Urrao'),
(130, 2, 'Valdivia'),
(131, 2, 'Valparaíso'),
(132, 2, 'Vegachí'),
(133, 2, 'Venecia'),
(134, 2, 'Vigía del Fuerte'),
(135, 2, 'Yalí'),
(136, 2, 'Yarumal'),
(137, 2, 'Yolombó'),
(138, 2, 'Yondó'),
(139, 2, 'Zaragoza'),
(140, 3, 'Arauca'),
(141, 3, 'Arauquita'),
(142, 3, 'Cravo Norte'),
(143, 3, 'Fortul'),
(144, 3, 'Puerto Rondón'),
(145, 3, 'Saravena'),
(146, 3, 'Tame'),
(147, 4, 'Providencia'),
(148, 4, 'San Andrés'),
(149, 5, 'Baranoa'),
(150, 5, 'Barranquilla'),
(151, 5, 'Campo de La Cruz'),
(152, 5, 'Candelaria'),
(153, 5, 'Galapa'),
(154, 5, 'Juan de Acosta'),
(155, 5, 'Luruaco'),
(156, 5, 'Malambo'),
(157, 5, 'Manatí'),
(158, 5, 'Palmar de Varela'),
(159, 5, 'Piojó'),
(160, 5, 'Polonuevo'),
(161, 5, 'Ponedera'),
(162, 5, 'Puerto Colombia'),
(163, 5, 'Repelón'),
(164, 5, 'Sabanagrande'),
(165, 5, 'Sabanalarga'),
(166, 5, 'Santa Lucía'),
(167, 5, 'Santo Tomás'),
(168, 5, 'Soledad'),
(169, 5, 'Suan'),
(170, 5, 'Tubará'),
(171, 5, 'Usiacurí'),
(172, 6, 'Bogotá'),
(173, 6, 'Bogotá alrededores'),
(174, 7, 'Achí'),
(175, 7, 'Altos del Rosario'),
(176, 7, 'Arenal'),
(177, 7, 'Arjona'),
(178, 7, 'Arroyohondo'),
(179, 7, 'Barranco de Loba'),
(180, 7, 'Calamar'),
(181, 7, 'Cantagallo'),
(182, 7, 'Cartagena'),
(183, 7, 'Cicuco'),
(184, 7, 'Clemencia'),
(185, 7, 'Córdoba'),
(186, 7, 'El Carmen de Bolívar'),
(187, 7, 'El Guamo'),
(188, 7, 'El Peñón'),
(189, 7, 'Hatillo de Loba'),
(190, 7, 'Magangué'),
(191, 7, 'Mahates'),
(192, 7, 'Margarita'),
(193, 7, 'María La Baja'),
(194, 7, 'Mompós'),
(195, 7, 'Montecristo'),
(196, 7, 'Morales'),
(197, 7, 'Norosi'),
(198, 7, 'Pinillos'),
(199, 7, 'Regidor'),
(200, 7, 'Río Viejo'),
(201, 7, 'San Cristóbal'),
(202, 7, 'San Estanislao'),
(203, 7, 'San Fernando'),
(204, 7, 'San Jacinto'),
(205, 7, 'San Jacinto del Cauca'),
(206, 7, 'San Juan Nepomuceno'),
(207, 7, 'San Martín de Loba'),
(208, 7, 'San Pablo'),
(209, 7, 'Santa Catalina'),
(210, 7, 'Santa Rosa'),
(211, 7, 'Santa Rosa del Sur'),
(212, 7, 'Simití'),
(213, 7, 'Soplaviento'),
(214, 7, 'Talaigua Nuevo'),
(215, 7, 'Tiquisio'),
(216, 7, 'Turbaco'),
(217, 7, 'Turbaná'),
(218, 7, 'Villanueva'),
(219, 7, 'Zambrano'),
(220, 8, 'Almeida'),
(221, 8, 'Aquitania'),
(222, 8, 'Arcabuco'),
(223, 8, 'Belén'),
(224, 8, 'Berbeo'),
(225, 8, 'Betéitiva'),
(226, 8, 'Boavita'),
(227, 8, 'Boyacá'),
(228, 8, 'Briceño'),
(229, 8, 'Buenavista'),
(230, 8, 'Busbanzá'),
(231, 8, 'Caldas'),
(232, 8, 'Campohermoso'),
(233, 8, 'Cerinza'),
(234, 8, 'Chinavita'),
(235, 8, 'Chiquinquirá'),
(236, 8, 'Chíquiza'),
(237, 8, 'Chiscas'),
(238, 8, 'Chita'),
(239, 8, 'Chitaraque'),
(240, 8, 'Chivatá'),
(241, 8, 'Chivor'),
(242, 8, 'Ciénega'),
(243, 8, 'Cómbita'),
(244, 8, 'Coper'),
(245, 8, 'Corrales'),
(246, 8, 'Covarachía'),
(247, 8, 'Cubará'),
(248, 8, 'Cucaita'),
(249, 8, 'Cuítiva'),
(250, 8, 'Duitama'),
(251, 8, 'El Cocuy'),
(252, 8, 'El Espino'),
(253, 8, 'Firavitoba'),
(254, 8, 'Floresta'),
(255, 8, 'Gachantivá'),
(256, 8, 'Gameza'),
(257, 8, 'Garagoa'),
(258, 8, 'Guacamayas'),
(259, 8, 'Guateque'),
(260, 8, 'Guayatá'),
(261, 8, 'Güicán'),
(262, 8, 'Iza'),
(263, 8, 'Jenesano'),
(264, 8, 'Jericó'),
(265, 8, 'La Capilla'),
(266, 8, 'La Uvita'),
(267, 8, 'La Victoria'),
(268, 8, 'Labranzagrande'),
(269, 8, 'Macanal'),
(270, 8, 'Maripí'),
(271, 8, 'Miraflores'),
(272, 8, 'Mongua'),
(273, 8, 'Monguí'),
(274, 8, 'Moniquirá'),
(275, 8, 'Motavita'),
(276, 8, 'Muzo'),
(277, 8, 'Nobsa'),
(278, 8, 'Nuevo Colón'),
(279, 8, 'Oicatá'),
(280, 8, 'Otanche'),
(281, 8, 'Pachavita'),
(282, 8, 'Páez'),
(283, 8, 'Paipa'),
(284, 8, 'Pajarito'),
(285, 8, 'Panqueba'),
(286, 8, 'Pauna'),
(287, 8, 'Paya'),
(288, 8, 'Paz de Río'),
(289, 8, 'Pesca'),
(290, 8, 'Pisba'),
(291, 8, 'Puerto Boyacá'),
(292, 8, 'Quípama'),
(293, 8, 'Ramiriquí'),
(294, 8, 'Ráquira'),
(295, 8, 'Rondón'),
(296, 8, 'Saboyá'),
(297, 8, 'Sáchica'),
(298, 8, 'Samacá'),
(299, 8, 'San Eduardo'),
(300, 8, 'San José de Pare'),
(301, 8, 'San Luis de Gaceno'),
(302, 8, 'San Mateo'),
(303, 8, 'San Miguel de Sema'),
(304, 8, 'San Pablo de Borbur'),
(305, 8, 'Santa María'),
(306, 8, 'Santa Rosa de Viterbo'),
(307, 8, 'Santa Sofía'),
(308, 8, 'Santana'),
(309, 8, 'Sativanorte'),
(310, 8, 'Sativasur'),
(311, 8, 'Siachoque'),
(312, 8, 'Soatá'),
(313, 8, 'Socha'),
(314, 8, 'Socotá'),
(315, 8, 'Sogamoso'),
(316, 8, 'Somondoco'),
(317, 8, 'Sora'),
(318, 8, 'Soracá'),
(319, 8, 'Sotaquirá'),
(320, 8, 'Susacón'),
(321, 8, 'Sutamarchán'),
(322, 8, 'Sutatenza'),
(323, 8, 'Tasco'),
(324, 8, 'Tenza'),
(325, 8, 'Tibaná'),
(326, 8, 'Tibasosa'),
(327, 8, 'Tinjacá'),
(328, 8, 'Tipacoque'),
(329, 8, 'Toca'),
(330, 8, 'Togüí'),
(331, 8, 'Tópaga'),
(332, 8, 'Tota'),
(333, 8, 'Tunja'),
(334, 8, 'Tununguá'),
(335, 8, 'Turmequé'),
(336, 8, 'Tuta'),
(337, 8, 'Tutazá'),
(338, 8, 'Umbita'),
(339, 8, 'Ventaquemada'),
(340, 8, 'Villa de Leyva'),
(341, 8, 'Viracachá'),
(342, 8, 'Zetaquira'),
(343, 9, 'Aguadas'),
(344, 9, 'Anserma'),
(345, 9, 'Aranzazu'),
(346, 9, 'Belalcázar'),
(347, 9, 'Chinchiná'),
(348, 9, 'Filadelfia'),
(349, 9, 'La Dorada'),
(350, 9, 'La Merced'),
(351, 9, 'Manizales'),
(352, 9, 'Manzanares'),
(353, 9, 'Marmato'),
(354, 9, 'Marquetalia'),
(355, 9, 'Marulanda'),
(356, 9, 'Neira'),
(357, 9, 'Norcasia'),
(358, 9, 'Pácora'),
(359, 9, 'Palestina'),
(360, 9, 'Pensilvania'),
(361, 9, 'Riosucio'),
(362, 9, 'Risaralda'),
(363, 9, 'Salamina'),
(364, 9, 'Samaná'),
(365, 9, 'San José'),
(366, 9, 'Supía'),
(367, 9, 'Victoria'),
(368, 9, 'Villamaría'),
(369, 9, 'Viterbo'),
(370, 10, 'Belén de Los Andaquies'),
(371, 10, 'Cartagena del Chairá'),
(372, 10, 'Curillo'),
(373, 10, 'El Doncello'),
(374, 10, 'El Paujil'),
(375, 10, 'Florencia'),
(376, 10, 'La Montañita'),
(377, 10, 'Milán'),
(378, 10, 'Morelia'),
(379, 10, 'Puerto Rico'),
(380, 10, 'San José del Fragua'),
(381, 10, 'San Vicente del Caguán'),
(382, 10, 'Solano'),
(383, 10, 'Solita'),
(384, 10, 'Valparaíso'),
(385, 11, 'Aguazul'),
(386, 11, 'Chameza'),
(387, 11, 'Hato Corozal'),
(388, 11, 'La Salina'),
(389, 11, 'Maní'),
(390, 11, 'Monterrey'),
(391, 11, 'Nunchía'),
(392, 11, 'Orocué'),
(393, 11, 'Paz de Ariporo'),
(394, 11, 'Pore'),
(395, 11, 'Recetor'),
(396, 11, 'Sabanalarga'),
(397, 11, 'Sácama'),
(398, 11, 'San Luis de Palenque'),
(399, 11, 'Támara'),
(400, 11, 'Tauramena'),
(401, 11, 'Trinidad'),
(402, 11, 'Villanueva'),
(403, 11, 'Yopal'),
(404, 12, 'Albania'),
(405, 12, 'Almaguer'),
(406, 12, 'Argelia'),
(407, 12, 'Balboa'),
(408, 12, 'Bolívar'),
(409, 12, 'Buenos Aires'),
(410, 12, 'Cajibío'),
(411, 12, 'Caldono'),
(412, 12, 'Caloto'),
(413, 12, 'Corinto'),
(414, 12, 'El Tambo'),
(415, 12, 'Florencia'),
(416, 12, 'Guachené'),
(417, 12, 'Guapi'),
(418, 12, 'Inzá'),
(419, 12, 'Jambaló'),
(420, 12, 'La Sierra'),
(421, 12, 'La Vega'),
(422, 12, 'López'),
(423, 12, 'Mercaderes'),
(424, 12, 'Miranda'),
(425, 12, 'Morales'),
(426, 12, 'Padilla'),
(427, 12, 'Paez'),
(428, 12, 'Patía'),
(429, 12, 'Piamonte'),
(430, 12, 'Piendamó'),
(431, 12, 'Popayán'),
(432, 12, 'Puerto Tejada'),
(433, 12, 'Puracé'),
(434, 12, 'Rosas'),
(435, 12, 'San Sebastián'),
(436, 12, 'Santa Rosa'),
(437, 12, 'Santander de Quilichao'),
(438, 12, 'Silvia'),
(439, 12, 'Sotara'),
(440, 12, 'Suárez'),
(441, 12, 'Sucre'),
(442, 12, 'Timbío'),
(443, 12, 'Timbiquí'),
(444, 12, 'Toribio'),
(445, 12, 'Totoró'),
(446, 12, 'Villa Rica'),
(447, 13, 'Aguachica'),
(448, 13, 'Agustín Codazzi'),
(449, 13, 'Astrea'),
(450, 13, 'Becerril'),
(451, 13, 'Bosconia'),
(452, 13, 'Chimichagua'),
(453, 13, 'Chiriguaná'),
(454, 13, 'Codazzi'),
(455, 13, 'Curumaní'),
(456, 13, 'El Copey'),
(457, 13, 'El Paso'),
(458, 13, 'Gamarra'),
(459, 13, 'González'),
(460, 13, 'La Gloria'),
(461, 13, 'La Jagua de Ibirico'),
(462, 13, 'La Loma'),
(463, 13, 'La Paz'),
(464, 13, 'Manaure'),
(465, 13, 'Pailitas'),
(466, 13, 'Pelaya'),
(467, 13, 'Pueblo Bello'),
(468, 13, 'Río de Oro'),
(469, 13, 'San Alberto'),
(470, 13, 'San Diego'),
(471, 13, 'San Martín'),
(472, 13, 'Tamalameque'),
(473, 13, 'Valledupar'),
(474, 14, 'Acandí'),
(475, 14, 'Alto Baudo'),
(476, 14, 'Atrato'),
(477, 14, 'Bagadó'),
(478, 14, 'Bahía Solano'),
(479, 14, 'Bajo Baudó'),
(480, 14, 'Belén de Bajirá1'),
(481, 14, 'Bojaya'),
(482, 14, 'Carmen del Darien'),
(483, 14, 'Cértegui'),
(484, 14, 'Condoto'),
(485, 14, 'El Cantón del San Pablo'),
(486, 14, 'El Carmen de Atrato'),
(487, 14, 'El Litoral del San Juan'),
(488, 14, 'Istmina'),
(489, 14, 'Juradó'),
(490, 14, 'Lloró'),
(491, 14, 'Medio Atrato'),
(492, 14, 'Medio Baudó'),
(493, 14, 'Medio San Juan'),
(494, 14, 'Nóvita'),
(495, 14, 'Nuquí'),
(496, 14, 'Quibdó'),
(497, 14, 'Río Iro'),
(498, 14, 'Río Quito2'),
(499, 14, 'Riosucio'),
(500, 14, 'San José del Palmar'),
(501, 14, 'Sipí'),
(502, 14, 'Tadó'),
(503, 14, 'Unguía'),
(504, 14, 'Unión Panamericana'),
(505, 15, 'Ayapel'),
(506, 15, 'Buenavista'),
(507, 15, 'Canalete'),
(508, 15, 'Cereté'),
(509, 15, 'Chimá'),
(510, 15, 'Chinú'),
(511, 15, 'Ciénaga de Oro'),
(512, 15, 'Cotorra'),
(513, 15, 'La Apartada'),
(514, 15, 'Lorica'),
(515, 15, 'Los Córdobas'),
(516, 15, 'Momil'),
(517, 15, 'Montelibano'),
(518, 15, 'Montería'),
(519, 15, 'Moñitos'),
(520, 15, 'Planeta Rica'),
(521, 15, 'Pueblo Nuevo'),
(522, 15, 'Puerto Escondido'),
(523, 15, 'Puerto Libertador'),
(524, 15, 'Purísima'),
(525, 15, 'Sahagún'),
(526, 15, 'San Andrés Sotavento'),
(527, 15, 'San Antero'),
(528, 15, 'San Bernardo del Viento'),
(529, 15, 'San Carlos'),
(530, 15, 'San José De Uré'),
(531, 15, 'San Pelayo'),
(532, 15, 'Tierralta'),
(533, 15, 'Tuchín'),
(534, 15, 'Valencia'),
(535, 16, 'Agua de Dios'),
(536, 16, 'Albán'),
(537, 16, 'Anapoima'),
(538, 16, 'Anolaima'),
(539, 16, 'Apulo'),
(540, 16, 'Arbeláez'),
(541, 16, 'Beltrán'),
(542, 16, 'Bituima'),
(543, 16, 'Bojacá'),
(544, 16, 'Cabrera'),
(545, 16, 'Cachipay'),
(546, 16, 'Cajicá'),
(547, 16, 'Caparrapí'),
(548, 16, 'Caqueza'),
(549, 16, 'Carmen de Carupa'),
(550, 16, 'Chaguaní'),
(551, 16, 'Chía'),
(552, 16, 'Chipaque'),
(553, 16, 'Choachí'),
(554, 16, 'Chocontá'),
(555, 16, 'Cogua'),
(556, 16, 'Cota'),
(557, 16, 'Cucunubá'),
(558, 16, 'El Colegio'),
(559, 16, 'El Peñón'),
(560, 16, 'El Rosal'),
(561, 16, 'Facatativá'),
(562, 16, 'Fomeque'),
(563, 16, 'Fosca'),
(564, 16, 'Funza'),
(565, 16, 'Fúquene'),
(566, 16, 'Fusagasugá'),
(567, 16, 'Gachala'),
(568, 16, 'Gachancipá'),
(569, 16, 'Gachetá'),
(570, 16, 'Gama'),
(571, 16, 'Girardot'),
(572, 16, 'Granada'),
(573, 16, 'Guachetá'),
(574, 16, 'Guaduas'),
(575, 16, 'Guasca'),
(576, 16, 'Guataquí'),
(577, 16, 'Guatavita'),
(578, 16, 'Guayabal de Siquima'),
(579, 16, 'Guayabetal'),
(580, 16, 'Gutiérrez'),
(581, 16, 'Jerusalén'),
(582, 16, 'Junín'),
(583, 16, 'La Calera'),
(584, 16, 'La Mesa'),
(585, 16, 'La Palma'),
(586, 16, 'La Peña'),
(587, 16, 'La Vega'),
(588, 16, 'Lenguazaque'),
(589, 16, 'Macheta'),
(590, 16, 'Madrid'),
(591, 16, 'Manta'),
(592, 16, 'Medina'),
(593, 16, 'Mosquera'),
(594, 16, 'Nariño'),
(595, 16, 'Nemocón'),
(596, 16, 'Nilo'),
(597, 16, 'Nimaima'),
(598, 16, 'Nocaima'),
(599, 16, 'Pacho'),
(600, 16, 'Paime'),
(601, 16, 'Pandi'),
(602, 16, 'Paratebueno'),
(603, 16, 'Pasca'),
(604, 16, 'Puerto Salgar'),
(605, 16, 'Pulí'),
(606, 16, 'Quebradanegra'),
(607, 16, 'Quetame'),
(608, 16, 'Quipile'),
(609, 16, 'Ricaurte'),
(610, 16, 'San Antonio del Tequendama'),
(611, 16, 'San Bernardo'),
(612, 16, 'San Cayetano'),
(613, 16, 'San Francisco'),
(614, 16, 'San Juan de Río Seco'),
(615, 16, 'Sasaima'),
(616, 16, 'Sesquilé'),
(617, 16, 'Sibaté'),
(618, 16, 'Silvania'),
(619, 16, 'Simijaca'),
(620, 16, 'Soacha'),
(621, 16, 'Sopó'),
(622, 16, 'Subachoque'),
(623, 16, 'Suesca'),
(624, 16, 'Supatá'),
(625, 16, 'Susa'),
(626, 16, 'Sutatausa'),
(627, 16, 'Tabio'),
(628, 16, 'Tausa'),
(629, 16, 'Tena'),
(630, 16, 'Tenjo'),
(631, 16, 'Tibacuy'),
(632, 16, 'Tibirita'),
(633, 16, 'Tocaima'),
(634, 16, 'Tocancipá'),
(635, 16, 'Topaipí'),
(636, 16, 'Ubalá'),
(637, 16, 'Ubaque'),
(638, 16, 'Une'),
(639, 16, 'Útica'),
(640, 16, 'Venecia'),
(641, 16, 'Vergara'),
(642, 16, 'Vianí'),
(643, 16, 'Villa de San Diego de Ubate'),
(644, 16, 'Villagómez'),
(645, 16, 'Villapinzón'),
(646, 16, 'Villeta'),
(647, 16, 'Viotá'),
(648, 16, 'Yacopí'),
(649, 16, 'Zipacón'),
(650, 16, 'Zipaquirá'),
(651, 17, '''+e[i].innerHTML+'''),
(652, 17, 'Barranco Minas'),
(653, 17, 'Cacahual'),
(654, 17, 'Inírida'),
(655, 17, 'La Guadalupe'),
(656, 17, 'Mapiripana'),
(657, 17, 'Morichal'),
(658, 17, 'Pana Pana'),
(659, 17, 'Puerto Colombia'),
(660, 17, 'San Felipe'),
(661, 18, 'Calamar'),
(662, 18, 'El Retorno'),
(663, 18, 'Miraflores'),
(664, 18, 'San José del Guaviare'),
(665, 19, 'Acevedo'),
(666, 19, 'Agrado'),
(667, 19, 'Aipe'),
(668, 19, 'Algeciras'),
(669, 19, 'Altamira'),
(670, 19, 'Baraya'),
(671, 19, 'Campoalegre'),
(672, 19, 'Colombia'),
(673, 19, 'Elías'),
(674, 19, 'Garzón'),
(675, 19, 'Gigante'),
(676, 19, 'Guadalupe'),
(677, 19, 'Hobo'),
(678, 19, 'Iquira'),
(679, 19, 'Isnos'),
(680, 19, 'La Argentina'),
(681, 19, 'La Plata'),
(682, 19, 'Nátaga'),
(683, 19, 'Neiva'),
(684, 19, 'Oporapa'),
(685, 19, 'Paicol'),
(686, 19, 'Palermo'),
(687, 19, 'Palestina'),
(688, 19, 'Pital'),
(689, 19, 'Pitalito'),
(690, 19, 'Rivera'),
(691, 19, 'Saladoblanco'),
(692, 19, 'San Agustín'),
(693, 19, 'Santa María'),
(694, 19, 'Suaza'),
(695, 19, 'Tarqui'),
(696, 19, 'Tello'),
(697, 19, 'Teruel'),
(698, 19, 'Tesalia'),
(699, 19, 'Timaná'),
(700, 19, 'Villavieja'),
(701, 19, 'Yaguará'),
(702, 20, 'Albania'),
(703, 20, 'Anaime'),
(704, 20, 'Arroyo Arena'),
(705, 20, 'Barbacoas'),
(706, 20, 'Barrancas'),
(707, 20, 'Barrios Cabecera Municipal'),
(708, 20, 'Boca de Monte'),
(709, 20, 'Cabecera Municipal'),
(710, 20, 'Campana Nuevo'),
(711, 20, 'Cañaverales'),
(712, 20, 'Cardonal'),
(713, 20, 'Casa Aluminio'),
(714, 20, 'Casa Japón'),
(715, 20, 'Cerrillo'),
(716, 20, 'Cerro Peralta'),
(717, 20, 'Choles'),
(718, 20, 'Comejenes'),
(719, 20, 'Comunidad Indígena no resguardada Lutamana'),
(720, 20, 'Comunidad Indígena no Resguardada Wepiapaa'),
(721, 20, 'Conejo'),
(722, 20, 'Consejo Comunitario dignidad y vida de Tabaco'),
(723, 20, 'Consejo Comunitario El Negro de Mingueo'),
(724, 20, 'Corralejas'),
(725, 20, 'Cotoprix'),
(726, 20, 'Cuestecitas'),
(727, 20, 'Culebrera - Los Estados'),
(728, 20, 'Dibulla'),
(729, 20, 'Distracción'),
(730, 20, 'El Bejuco'),
(731, 20, 'El Confuso'),
(732, 20, 'El Corral'),
(733, 20, 'El Ebanal'),
(734, 20, 'El Eneal'),
(735, 20, 'El Horno'),
(736, 20, 'El Manantial'),
(737, 20, 'El Molino'),
(738, 20, 'El Playón'),
(739, 20, 'El Pozo'),
(740, 20, 'El Retiro'),
(741, 20, 'El Tablazo'),
(742, 20, 'El Templao'),
(743, 20, 'El Tormento'),
(744, 20, 'El Tunal'),
(745, 20, 'Farias - Los Tamacos'),
(746, 20, 'Fonseca'),
(747, 20, 'Galán'),
(748, 20, 'Guamachal'),
(749, 20, 'Guamachito-San Agustín'),
(750, 20, 'Guayacanal'),
(751, 20, 'Hatico'),
(752, 20, 'Hatonuevo'),
(753, 20, 'Juncalito'),
(754, 20, 'La Arena'),
(755, 20, 'La Duda'),
(756, 20, 'La Esperanza'),
(757, 20, 'La Isla'),
(758, 20, 'La Jagua del Pilar'),
(759, 20, 'La Montaña'),
(760, 20, 'La Novedad-Palmarito'),
(761, 20, 'La Punta de los Remedios'),
(762, 20, 'La Sarahita'),
(763, 20, 'Las Flores'),
(764, 20, 'Las Ilusiones'),
(765, 20, 'Las Mesas'),
(766, 20, 'Los Barriales'),
(767, 20, 'Los Haticos'),
(768, 20, 'Los Pozos'),
(769, 20, 'Los Quemaos Ondulados'),
(770, 20, 'Los Quemaos Planos'),
(771, 20, 'Los Sajones'),
(772, 20, 'Los Tunales'),
(773, 20, 'Maicao'),
(774, 20, 'Manaure'),
(775, 20, 'Matitas'),
(776, 20, 'Mingueo'),
(777, 20, 'Mongui'),
(778, 20, 'Nolasco'),
(779, 20, 'Oreganal'),
(780, 20, 'Orozul'),
(781, 20, 'Palomino'),
(782, 20, 'Papayal'),
(783, 20, 'Pelechua'),
(784, 20, 'Pondorito'),
(785, 20, 'Potrerillo - Pie del Cerro'),
(786, 20, 'Potrero Grande'),
(787, 20, 'Pozo Hondo'),
(788, 20, 'Puente Bomba'),
(789, 20, 'Resguardo Caicemapa'),
(790, 20, 'Resguardo Cerro de Hatonuevo'),
(791, 20, 'Resguardo El Zahino Guayabito Muriatuy'),
(792, 20, 'Resguardo Lomamato'),
(793, 20, 'Resguardo Mañature'),
(794, 20, 'Resguardo Provincial'),
(795, 20, 'Resguardo Rodeito el Pozo'),
(796, 20, 'Resguardo San Francisco'),
(797, 20, 'Resguardo Trupiogacho'),
(798, 20, 'Resguardo Una apuchon'),
(799, 20, 'Rio Cañas'),
(800, 20, 'Rio Claro'),
(801, 20, 'Rioancho'),
(802, 20, 'Riohacha'),
(803, 20, 'San Benito'),
(804, 20, 'San Juan del Cesar'),
(805, 20, 'Santa Rita Jerez'),
(806, 20, 'Santa Rita Sierra'),
(807, 20, 'Sierra Negra'),
(808, 20, 'Sierra Nevada de Santamarta-Resguardo Kogui M'),
(809, 20, 'Sitio Nuevo'),
(810, 20, 'Tabaco Rubio'),
(811, 20, 'Tigreras'),
(812, 20, 'Tomarrazón'),
(813, 20, 'Tres Picos-Tierras Nuevas'),
(814, 20, 'Uribia'),
(815, 20, 'Urumita'),
(816, 20, 'Veracruz'),
(817, 20, 'Villa Martín'),
(818, 20, 'Villanueva'),
(819, 21, 'Algarrobo'),
(820, 21, 'Aracataca'),
(821, 21, 'Ariguaní'),
(822, 21, 'Cerro San Antonio'),
(823, 21, 'Chibolo'),
(824, 21, 'Chivolo'),
(825, 21, 'Ciénaga'),
(826, 21, 'Concordia'),
(827, 21, 'El Banco'),
(828, 21, 'El Piñon'),
(829, 21, 'El Retén'),
(830, 21, 'Fundación'),
(831, 21, 'Guamal'),
(832, 21, 'Nueva Granada'),
(833, 21, 'Pedraza'),
(834, 21, 'Pijiño del Carmen'),
(835, 21, 'Pivijay'),
(836, 21, 'Plato'),
(837, 21, 'Puebloviejo'),
(838, 21, 'Remolino'),
(839, 21, 'Sabanas de San Angel'),
(840, 21, 'Salamina'),
(841, 21, 'San Sebastián de Buenavista'),
(842, 21, 'San Zenón'),
(843, 21, 'Santa Ana'),
(844, 21, 'Santa Bárbara de Pinto'),
(845, 21, 'Santa Marta'),
(846, 21, 'Sitionuevo'),
(847, 21, 'Tenerife'),
(848, 21, 'Zapayán'),
(849, 21, 'Zona Bananera'),
(850, 22, 'Acacías'),
(851, 22, 'Barranca de Upía'),
(852, 22, 'Cabuyaro'),
(853, 22, 'Castilla la Nueva'),
(854, 22, 'Cubarral'),
(855, 22, 'Cumaral'),
(856, 22, 'El Calvario'),
(857, 22, 'El Castillo'),
(858, 22, 'El Dorado'),
(859, 22, 'Fuente de Oro'),
(860, 22, 'Granada'),
(861, 22, 'Guamal'),
(862, 22, 'La Macarena'),
(863, 22, 'Lejanías'),
(864, 22, 'Mapiripán'),
(865, 22, 'Mesetas'),
(866, 22, 'Puerto Concordia'),
(867, 22, 'Puerto Gaitán'),
(868, 22, 'Puerto Lleras'),
(869, 22, 'Puerto López'),
(870, 22, 'Puerto Rico'),
(871, 22, 'Restrepo'),
(872, 22, 'San Carlos de Guaroa'),
(873, 22, 'San Juan de Arama'),
(874, 22, 'San Juanito'),
(875, 22, 'San Martín'),
(876, 22, 'Uribe'),
(877, 22, 'Villavicencio'),
(878, 22, 'Vistahermosa'),
(879, 23, 'Albán'),
(880, 23, 'Aldana'),
(881, 23, 'Ancuyá'),
(882, 23, 'Arboleda'),
(883, 23, 'Barbacoas'),
(884, 23, 'Belén'),
(885, 23, 'Buesaco'),
(886, 23, 'Chachagüí'),
(887, 23, 'Colón'),
(888, 23, 'Consaca'),
(889, 23, 'Contadero'),
(890, 23, 'Córdoba'),
(891, 23, 'Cuaspud'),
(892, 23, 'Cumbal'),
(893, 23, 'Cumbitara'),
(894, 23, 'El Charco'),
(895, 23, 'El Peñol'),
(896, 23, 'El Rosario'),
(897, 23, 'El Tablón de Gómez'),
(898, 23, 'El Tambo'),
(899, 23, 'Francisco Pizarro'),
(900, 23, 'Funes'),
(901, 23, 'Guachucal'),
(902, 23, 'Guaitarilla'),
(903, 23, 'Gualmatán'),
(904, 23, 'Iles'),
(905, 23, 'Imués'),
(906, 23, 'Ipiales'),
(907, 23, 'La Cruz'),
(908, 23, 'La Florida'),
(909, 23, 'La Llanada'),
(910, 23, 'La Tola'),
(911, 23, 'La Unión'),
(912, 23, 'Leiva'),
(913, 23, 'Linares'),
(914, 23, 'Los Andes'),
(915, 23, 'Magüi'),
(916, 23, 'Mallama'),
(917, 23, 'Mosquera'),
(918, 23, 'Nariño'),
(919, 23, 'Olaya Herrera'),
(920, 23, 'Ospina'),
(921, 23, 'Pasto'),
(922, 23, 'Policarpa'),
(923, 23, 'Potosí'),
(924, 23, 'Providencia'),
(925, 23, 'Puerres'),
(926, 23, 'Pupiales'),
(927, 23, 'Ricaurte'),
(928, 23, 'Roberto Payán'),
(929, 23, 'Samaniego'),
(930, 23, 'San Andres de Tumaco'),
(931, 23, 'San Bernardo'),
(932, 23, 'San Lorenzo'),
(933, 23, 'San Pablo'),
(934, 23, 'San Pedro de Cartago'),
(935, 23, 'Sandoná'),
(936, 23, 'Santa Bárbara'),
(937, 23, 'Santacruz'),
(938, 23, 'Sapuyes'),
(939, 23, 'Taminango'),
(940, 23, 'Tangua'),
(941, 23, 'Túquerres'),
(942, 23, 'Yacuanquer'),
(943, 24, 'Abrego'),
(944, 24, 'Arboledas'),
(945, 24, 'Bochalema'),
(946, 24, 'Bucarasica'),
(947, 24, 'Cachirá'),
(948, 24, 'Cácota'),
(949, 24, 'Chinácota'),
(950, 24, 'Chitagá'),
(951, 24, 'Convención'),
(952, 24, 'Cúcuta'),
(953, 24, 'Cucutilla'),
(954, 24, 'Durania'),
(955, 24, 'El Carmen'),
(956, 24, 'El Tarra'),
(957, 24, 'El Zulia'),
(958, 24, 'Gramalote'),
(959, 24, 'Hacarí'),
(960, 24, 'Herrán'),
(961, 24, 'La Esperanza'),
(962, 24, 'La Playa'),
(963, 24, 'Labateca'),
(964, 24, 'Los Patios'),
(965, 24, 'Lourdes'),
(966, 24, 'Mutiscua'),
(967, 24, 'Ocaña'),
(968, 24, 'Pamplona'),
(969, 24, 'Pamplonita'),
(970, 24, 'Puerto Santander'),
(971, 24, 'Ragonvalia'),
(972, 24, 'Salazar'),
(973, 24, 'San Calixto'),
(974, 24, 'San Cayetano'),
(975, 24, 'Santiago'),
(976, 24, 'Sardinata'),
(977, 24, 'Silos'),
(978, 24, 'Teorama'),
(979, 24, 'Tibú'),
(980, 24, 'Toledo'),
(981, 24, 'Villa Caro'),
(982, 24, 'Villa del Rosario'),
(983, 25, 'Colón'),
(984, 25, 'Mocoa'),
(985, 25, 'Orito'),
(986, 25, 'Puerto Asís'),
(987, 25, 'Puerto Caicedo'),
(988, 25, 'Puerto Guzmán'),
(989, 25, 'Puerto Leguízamo'),
(990, 25, 'San Francisco'),
(991, 25, 'San Miguel'),
(992, 25, 'Santiago'),
(993, 25, 'Sibundoy'),
(994, 25, 'Valle del Guamuez'),
(995, 25, 'Villagarzón'),
(996, 26, 'Armenia'),
(997, 26, 'Buenavista'),
(998, 26, 'Calarca'),
(999, 26, 'Circasia'),
(1000, 26, 'Córdoba'),
(1001, 26, 'Filandia'),
(1002, 26, 'Génova'),
(1003, 26, 'La Tebaida'),
(1004, 26, 'Montenegro'),
(1005, 26, 'Pijao'),
(1006, 26, 'Quimbaya'),
(1007, 26, 'Salento'),
(1008, 27, 'Apía'),
(1009, 27, 'Balboa'),
(1010, 27, 'Belén de Umbría'),
(1011, 27, 'Dosquebradas'),
(1012, 27, 'Guática'),
(1013, 27, 'La Celia'),
(1014, 27, 'La Virginia'),
(1015, 27, 'Marsella'),
(1016, 27, 'Mistrató'),
(1017, 27, 'Pereira'),
(1018, 27, 'Pueblo Rico'),
(1019, 27, 'Quinchía'),
(1020, 27, 'Santa Rosa de Cabal'),
(1021, 27, 'Santuario'),
(1022, 28, 'Aguada'),
(1023, 28, 'Albania'),
(1024, 28, 'Aratoca'),
(1025, 28, 'Barbosa'),
(1026, 28, 'Barichara'),
(1027, 28, 'Barrancabermeja'),
(1028, 28, 'Betulia'),
(1029, 28, 'Bolívar'),
(1030, 28, 'Bucaramanga'),
(1031, 28, 'Cabrera'),
(1032, 28, 'California'),
(1033, 28, 'Capitanejo'),
(1034, 28, 'Carcasí'),
(1035, 28, 'Cepitá'),
(1036, 28, 'Cerrito'),
(1037, 28, 'Charalá'),
(1038, 28, 'Charta'),
(1039, 28, 'Chima'),
(1040, 28, 'Chipatá'),
(1041, 28, 'Cimitarra'),
(1042, 28, 'Concepción'),
(1043, 28, 'Confines'),
(1044, 28, 'Contratación'),
(1045, 28, 'Coromoro'),
(1046, 28, 'Curití'),
(1047, 28, 'El Carmen de Chucurí'),
(1048, 28, 'El Guacamayo'),
(1049, 28, 'El Peñón'),
(1050, 28, 'El Playón'),
(1051, 28, 'Encino'),
(1052, 28, 'Enciso'),
(1053, 28, 'Florián'),
(1054, 28, 'Floridablanca'),
(1055, 28, 'Galán'),
(1056, 28, 'Gambita'),
(1057, 28, 'Girón'),
(1058, 28, 'Guaca'),
(1059, 28, 'Guadalupe'),
(1060, 28, 'Guapotá'),
(1061, 28, 'Guavatá'),
(1062, 28, 'Güepsa'),
(1063, 28, 'Hato'),
(1064, 28, 'Jesús María'),
(1065, 28, 'Jordán'),
(1066, 28, 'La Belleza'),
(1067, 28, 'La Paz'),
(1068, 28, 'Landázuri'),
(1069, 28, 'Lebríja'),
(1070, 28, 'Los Santos'),
(1071, 28, 'Macaravita'),
(1072, 28, 'Málaga'),
(1073, 28, 'Matanza'),
(1074, 28, 'Mogotes'),
(1075, 28, 'Molagavita'),
(1076, 28, 'Ocamonte'),
(1077, 28, 'Oiba'),
(1078, 28, 'Onzaga'),
(1079, 28, 'Palmar'),
(1080, 28, 'Palmas del Socorro'),
(1081, 28, 'Páramo'),
(1082, 28, 'Piedecuesta'),
(1083, 28, 'Pinchote'),
(1084, 28, 'Puente Nacional'),
(1085, 28, 'Puerto Parra'),
(1086, 28, 'Puerto Wilches'),
(1087, 28, 'Rionegro'),
(1088, 28, 'Sabana de Torres'),
(1089, 28, 'San Andrés'),
(1090, 28, 'San Benito'),
(1091, 28, 'San Gil'),
(1092, 28, 'San Joaquín'),
(1093, 28, 'San José de Miranda'),
(1094, 28, 'San Miguel'),
(1095, 28, 'San Vicente de Chucurí'),
(1096, 28, 'Santa Bárbara'),
(1097, 28, 'Santa Helena del Opón'),
(1098, 28, 'Simacota'),
(1099, 28, 'Socorro'),
(1100, 28, 'Suaita'),
(1101, 28, 'Sucre'),
(1102, 28, 'Suratá'),
(1103, 28, 'Tona'),
(1104, 28, 'Valle de San José'),
(1105, 28, 'Vélez'),
(1106, 28, 'Vetas'),
(1107, 28, 'Villanueva'),
(1108, 28, 'Zapatoca'),
(1109, 29, 'Buenavista'),
(1110, 29, 'Caimito'),
(1111, 29, 'Chalán'),
(1112, 29, 'Coloso'),
(1113, 29, 'Corozal'),
(1114, 29, 'Coveñas'),
(1115, 29, 'El Roble'),
(1116, 29, 'Galeras'),
(1117, 29, 'Guaranda'),
(1118, 29, 'La Unión'),
(1119, 29, 'Los Palmitos'),
(1120, 29, 'Majagual'),
(1121, 29, 'Morroa'),
(1122, 29, 'Ovejas'),
(1123, 29, 'Palmito'),
(1124, 29, 'Sampués'),
(1125, 29, 'San Benito Abad'),
(1126, 29, 'San Juan de Betulia'),
(1127, 29, 'San Luis de Sincé'),
(1128, 29, 'San Marcos'),
(1129, 29, 'San Onofre'),
(1130, 29, 'San Pedro'),
(1131, 29, 'Santiago de Tolú'),
(1132, 29, 'Since'),
(1133, 29, 'Sincelejo'),
(1134, 29, 'Sucre'),
(1135, 29, 'Tolú Viejo'),
(1136, 30, 'Alpujarra'),
(1137, 30, 'Alvarado'),
(1138, 30, 'Ambalema'),
(1139, 30, 'Anzoátegui'),
(1140, 30, 'Armero'),
(1141, 30, 'Ataco'),
(1142, 30, 'Cajamarca'),
(1143, 30, 'Carmen de Apicalá'),
(1144, 30, 'Casabianca'),
(1145, 30, 'Chaparral'),
(1146, 30, 'Coello'),
(1147, 30, 'Coyaima'),
(1148, 30, 'Cunday'),
(1149, 30, 'Dolores'),
(1150, 30, 'El Espinal'),
(1151, 30, 'Espinal'),
(1152, 30, 'Falan'),
(1153, 30, 'Flandes'),
(1154, 30, 'Fresno'),
(1155, 30, 'Guamo'),
(1156, 30, 'Herveo'),
(1157, 30, 'Honda'),
(1158, 30, 'Ibagué'),
(1159, 30, 'Icononzo'),
(1160, 30, 'Lérida'),
(1161, 30, 'Líbano'),
(1162, 30, 'Melgar'),
(1163, 30, 'Murillo'),
(1164, 30, 'Natagaima'),
(1165, 30, 'Ortega'),
(1166, 30, 'Palocabildo'),
(1167, 30, 'Piedras'),
(1168, 30, 'Planadas'),
(1169, 30, 'Prado'),
(1170, 30, 'Purificación'),
(1171, 30, 'Rioblanco'),
(1172, 30, 'Roncesvalles'),
(1173, 30, 'Rovira'),
(1174, 30, 'Saldaña'),
(1175, 30, 'San Antonio'),
(1176, 30, 'San Luis'),
(1177, 30, 'San sebastián de Mariquita'),
(1178, 30, 'Santa Isabel'),
(1179, 30, 'Suárez'),
(1180, 30, 'Valle de San Juan'),
(1181, 30, 'Venadillo'),
(1182, 30, 'Villahermosa'),
(1183, 30, 'Villarrica'),
(1184, 31, 'Alcalá'),
(1185, 31, 'Andalucía'),
(1186, 31, 'Ansermanuevo'),
(1187, 31, 'Argelia'),
(1188, 31, 'Bolívar'),
(1189, 31, 'Buenaventura'),
(1190, 31, 'Buga'),
(1191, 31, 'Bugalagrande'),
(1192, 31, 'Caicedonia'),
(1193, 31, 'Cali'),
(1194, 31, 'Calima'),
(1195, 31, 'Caloto'),
(1196, 31, 'Candelaria'),
(1197, 31, 'Cartago'),
(1198, 31, 'Dagua'),
(1199, 31, 'El Águila'),
(1200, 31, 'El Cairo'),
(1201, 31, 'El Cerrito'),
(1202, 31, 'El Dovio'),
(1203, 31, 'Florida'),
(1204, 31, 'Ginebra'),
(1205, 31, 'Guacarí'),
(1206, 31, 'Guadalajara de Buga'),
(1207, 31, 'Jamundí'),
(1208, 31, 'La Cumbre'),
(1209, 31, 'La Unión'),
(1210, 31, 'La Victoria'),
(1211, 31, 'Obando'),
(1212, 31, 'Palmira'),
(1213, 31, 'Pradera'),
(1214, 31, 'Restrepo'),
(1215, 31, 'Riofrío'),
(1216, 31, 'Roldanillo'),
(1217, 31, 'San Pedro'),
(1218, 31, 'Sevilla'),
(1219, 31, 'Toro'),
(1220, 31, 'Trujillo'),
(1221, 31, 'Tuluá'),
(1222, 31, 'Ulloa'),
(1223, 31, 'Versalles'),
(1224, 31, 'Vijes'),
(1225, 31, 'Yotoco'),
(1226, 31, 'Yumbo'),
(1227, 31, 'Zarzal'),
(1228, 32, 'Caruru'),
(1229, 32, 'Mitú'),
(1230, 32, 'Pacoa'),
(1231, 32, 'Papunaua'),
(1232, 32, 'Taraira'),
(1233, 32, 'Yavaraté'),
(1234, 33, 'Caruru'),
(1235, 33, 'Mitú'),
(1236, 33, 'Pacoa'),
(1237, 33, 'Papunaua'),
(1238, 33, 'Taraira'),
(1239, 33, 'Yavaraté');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id_departamento` int(11) NOT NULL,
  `pais` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `pais`, `nombre`) VALUES
(1, 1, 'Amazonas'),
(2, 1, 'Antioquia'),
(3, 1, 'Arauca'),
(4, 1, 'Archipiélago De San Andrés'),
(5, 1, 'Atlántico'),
(6, 1, 'Bogotá D.C.'),
(7, 1, 'Bolívar'),
(8, 1, 'Boyacá'),
(9, 1, 'Caldas'),
(10, 1, 'Caquetá'),
(11, 1, 'Casanare'),
(12, 1, 'Cauca'),
(13, 1, 'Cesar'),
(14, 1, 'Chocó'),
(15, 1, 'Córdoba'),
(16, 1, 'Cundinamarca'),
(17, 1, 'Guainía'),
(18, 1, 'Guaviare'),
(19, 1, 'Huila'),
(20, 1, 'La Guajira'),
(21, 1, 'Magdalena'),
(22, 1, 'Meta'),
(23, 1, 'Nariño'),
(24, 1, 'Norte De Santander'),
(25, 1, 'Putumayo'),
(26, 1, 'Quindio'),
(27, 1, 'Risaralda'),
(28, 1, 'Santander'),
(29, 1, 'Sucre'),
(30, 1, 'Tolima'),
(31, 1, 'Valle Del Cauca'),
(32, 1, 'Vaupés'),
(33, 1, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `usuario` int(11) NOT NULL,
  `ubicacion` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sigla` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `naturaleza` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cel` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `web_site` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `create_on` datetime DEFAULT NULL,
  `change_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `hora_ini` time NOT NULL,
  `hora_fin` time NOT NULL,
  `telefono` varchar(13) COLLATE utf8_spanish_ci NOT NULL,
  `web_site` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `valor` double DEFAULT NULL,
  `create_on` datetime DEFAULT NULL,
  `change_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes_eventos`
--

CREATE TABLE IF NOT EXISTS `likes_eventos` (
  `evento` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `create_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id_pais` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`id_pais`, `nombre`) VALUES
(1, 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `usuario` int(11) NOT NULL,
  `lugar_nacimiento` int(11) NOT NULL,
  `nombre1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apeelido2` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `create_on` datetime DEFAULT NULL,
  `change_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `create_on` datetime DEFAULT NULL,
  `evento` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_eventos`
--

CREATE TABLE IF NOT EXISTS `reporte_eventos` (
  `evento` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `tipo_reporte` int(11) NOT NULL,
  `comentarios` text COLLATE utf8_spanish_ci,
  `create_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reportes`
--

CREATE TABLE IF NOT EXISTS `tipo_reportes` (
  `id_tipo_reporte` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` char(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `codigo` int(11) NOT NULL,
  `create_on` datetime DEFAULT NULL,
  `change_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`, `email`, `estado`, `codigo`, `create_on`, `change_on`) VALUES
(1, 'jr091291', 'a75184a94436a3dc735daf98f6787d1f22ca2e28', 'jr091291@gmail.com', 1, 249991997, '2015-06-09 19:20:20', '2015-06-10 00:20:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia_eventos`
--
ALTER TABLE `asistencia_eventos`
  ADD PRIMARY KEY (`usuario`,`evento`), ADD KEY `fk_usuarios_has_evento_evento1_idx` (`evento`), ADD KEY `fk_usuarios_has_evento_usuarios1_idx` (`usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`,`departamento`), ADD KEY `fk_ciudad_departamentos_idx` (`departamento`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`,`pais`), ADD KEY `fk_departamentos_paises1_idx` (`pais`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`usuario`), ADD KEY `fk_empresa_ciudad1_idx` (`ubicacion`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`), ADD KEY `fk_evento_categoria1_idx` (`categoria`), ADD KEY `fk_evento_ciudad1_idx` (`ciudad`);

--
-- Indices de la tabla `likes_eventos`
--
ALTER TABLE `likes_eventos`
  ADD PRIMARY KEY (`evento`,`usuario`), ADD KEY `fk_evento_has_usuarios_usuarios1_idx` (`usuario`), ADD KEY `fk_evento_has_usuarios_evento1_idx` (`evento`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`usuario`), ADD KEY `fk_persona_ciudad1_idx` (`lugar_nacimiento`);

--
-- Indices de la tabla `reporte_eventos`
--
ALTER TABLE `reporte_eventos`
  ADD PRIMARY KEY (`evento`,`usuario`,`tipo_reporte`), ADD KEY `fk_evento_has_usuarios_usuarios2_idx` (`usuario`), ADD KEY `fk_evento_has_usuarios_evento2_idx` (`evento`), ADD KEY `fk_reporte_eventos_tipo_reportes1_idx` (`tipo_reporte`);

--
-- Indices de la tabla `tipo_reportes`
--
ALTER TABLE `tipo_reportes`
  ADD PRIMARY KEY (`id_tipo_reporte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `usuario` (`usuario`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1240;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_reportes`
--
ALTER TABLE `tipo_reportes`
  MODIFY `id_tipo_reporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia_eventos`
--
ALTER TABLE `asistencia_eventos`
ADD CONSTRAINT `fk_usuarios_has_evento_evento1` FOREIGN KEY (`evento`) REFERENCES `eventos` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_usuarios_has_evento_usuarios1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
ADD CONSTRAINT `fk_ciudad_departamentos` FOREIGN KEY (`departamento`) REFERENCES `departamentos` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
ADD CONSTRAINT `fk_departamentos_paises1` FOREIGN KEY (`pais`) REFERENCES `paises` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
ADD CONSTRAINT `fk_empresa_ciudad1` FOREIGN KEY (`ubicacion`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_empresa_usuarios1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
ADD CONSTRAINT `fk_evento_categoria1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_evento_ciudad1` FOREIGN KEY (`ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `likes_eventos`
--
ALTER TABLE `likes_eventos`
ADD CONSTRAINT `fk_evento_has_usuarios_evento1` FOREIGN KEY (`evento`) REFERENCES `eventos` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_evento_has_usuarios_usuarios1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
ADD CONSTRAINT `fk_persona_ciudad1` FOREIGN KEY (`lugar_nacimiento`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_persona_usuarios1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reporte_eventos`
--
ALTER TABLE `reporte_eventos`
ADD CONSTRAINT `fk_evento_has_usuarios_evento2` FOREIGN KEY (`evento`) REFERENCES `eventos` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_evento_has_usuarios_usuarios2` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_reporte_eventos_tipo_reportes1` FOREIGN KEY (`tipo_reporte`) REFERENCES `tipo_reportes` (`id_tipo_reporte`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
