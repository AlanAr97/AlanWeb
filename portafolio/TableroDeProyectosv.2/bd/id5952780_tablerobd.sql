-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2019 a las 05:48:09
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id5952780_tablerobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avance`
--

CREATE TABLE `avance` (
  `cve_Avance` int(11) NOT NULL,
  `Fechaavance` date NOT NULL,
  `Avance_plan` decimal(3,0) NOT NULL,
  `Avance_real` decimal(3,0) NOT NULL,
  `Presupuesto_plan` decimal(3,0) NOT NULL,
  `Presupuesto_real` decimal(3,0) NOT NULL,
  `Act_realizadas` varchar(45) NOT NULL,
  `Act_atrasadas` varchar(45) NOT NULL,
  `Act_eject` varchar(45) NOT NULL,
  `Act_pendientes` varchar(45) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `avance`
--

INSERT INTO `avance` (`cve_Avance`, `Fechaavance`, `Avance_plan`, `Avance_real`, `Presupuesto_plan`, `Presupuesto_real`, `Act_realizadas`, `Act_atrasadas`, `Act_eject`, `Act_pendientes`, `Proyecto_id_Proyecto`) VALUES
(2, '2018-11-05', '20', '11', '999', '70', 'fasfdasf', 'asdfasdf', 'asdfasdf', 'asdfsafd', 82),
(3, '2018-04-30', '70', '45', '999', '999', 'lalalalal', 'actividades atrakasdfaksf', 'actividades en ejec', 'Actividad pore alizar', 83),
(4, '2018-06-14', '50', '40', '999', '999', 'agagaga', 'sadfsadfasdf', 'sdgsdagd', 'reyrteyerty', 83);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregable`
--

CREATE TABLE `entregable` (
  `id_Entregable` int(11) NOT NULL,
  `Nom_entregable` varchar(45) NOT NULL,
  `Archivo_entregable` blob NOT NULL,
  `Fase` varchar(20) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entregable`
--

INSERT INTO `entregable` (`id_Entregable`, `Nom_entregable`, `Archivo_entregable`, `Fase`, `Proyecto_id_Proyecto`) VALUES
(62, 'jejejeje', '', 'n/a', 82),
(63, 'Jajaja', '', 'n/a', 83),
(64, 'Lista1', '', 'n/a', 84),
(65, 'ListaConcesionaria', '', 'n/a', 85),
(75, 'entregables de lista', '', 'n/a', 93);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_Equipo` int(11) NOT NULL,
  `Marca_eq` varchar(25) NOT NULL,
  `Tipo_eq` varchar(25) NOT NULL,
  `Ram` varchar(5) NOT NULL,
  `Procesador` varchar(10) NOT NULL,
  `Discoduro` varchar(5) NOT NULL,
  `Tarjetadevideo` varchar(10) NOT NULL,
  `Puertousb` varchar(1) NOT NULL,
  `Entradas_eq` varchar(10) NOT NULL,
  `Proyecto_id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_Equipo`, `Marca_eq`, `Tipo_eq`, `Ram`, `Procesador`, `Discoduro`, `Tarjetadevideo`, `Puertousb`, `Entradas_eq`, `Proyecto_id_proyecto`) VALUES
(1, 'HP', 'Laptop', '4GB', 'Intel Cele', 'X', 'X', '3', 'HDMI/VGA', NULL),
(2, 'Lenovo', 'Desktop', '4GB', 'Intel', '500GB', 'Tarjeta Y', '4', 'VGA', NULL),
(3, 'Brother', 'Impresora', 'NA', 'NA', 'NA', 'NA', '2', 'NA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_Material` int(11) NOT NULL,
  `Descripcion_mat` varchar(45) NOT NULL,
  `Material` varchar(45) NOT NULL,
  `Ancho_mat` varchar(6) NOT NULL,
  `Largo_mat` varchar(6) NOT NULL,
  `Altura_mat` varchar(6) NOT NULL,
  `Proyecto_id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_Material`, `Descripcion_mat`, `Material`, `Ancho_mat`, `Largo_mat`, `Altura_mat`, `Proyecto_id_proyecto`) VALUES
(1, 'Mesa', 'Madera', '15', '105', '100', NULL),
(2, 'Silla', 'Plastico', '15', '40', '100', NULL),
(3, 'Estante', 'Madera', '50', '150', '290', 93),
(4, 'Escritorio', 'Vidrio', '120', '150', '100', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planderemediacion`
--

CREATE TABLE `planderemediacion` (
  `cve_plan` int(11) NOT NULL,
  `Desviacion` decimal(3,0) NOT NULL,
  `Act_realizar_plan` varchar(45) NOT NULL,
  `Fecha_limite_Avance` date NOT NULL,
  `Avance_cve_Avance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_Proyecto` int(11) NOT NULL,
  `Nom_proy` varchar(35) NOT NULL,
  `Plan_trabajo` varchar(25) NOT NULL,
  `Fechainiciop` date NOT NULL,
  `Fechafinp` date NOT NULL,
  `Presupuestoplan` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_Proyecto`, `Nom_proy`, `Plan_trabajo`, `Fechainiciop`, `Fechafinp`, `Presupuestoplan`) VALUES
(35, 'Prueba1', 'Eq6_Mercados.pdf', '2018-06-08', '2018-06-15', '345500'),
(82, 'Prueba2', 'MATRIZ PEEA Y GCB.pdf', '2018-06-15', '2018-06-22', '9009090'),
(83, 'Pruebamil', 'MEFE y Mefi.docx', '2018-06-13', '2018-06-20', '32423424'),
(84, 'Concesionaria', 'plantilla-definicion-proc', '2018-06-08', '2018-06-22', '172000'),
(85, 'Concesionaria2', 'plantilla-definicion-proc', '2018-06-15', '2018-06-16', '12000'),
(93, 'sdfsfdsf', 'Especificación de Requeri', '2018-06-14', '2018-06-28', '34400'),
(95, 'Alan', 'plantilla-definicion-proc', '2018-06-09', '2018-06-23', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursoh`
--

CREATE TABLE `recursoh` (
  `id_Rh` int(11) NOT NULL,
  `Nom_rh` varchar(25) NOT NULL,
  `Apaterno_rh` varchar(25) NOT NULL,
  `Amaterno_rh` varchar(25) NOT NULL,
  `Puesto` varchar(20) NOT NULL,
  `Cursos_rh` varchar(120) NOT NULL,
  `Certificaciones_rh` varchar(120) NOT NULL,
  `Exp_rh` int(2) NOT NULL,
  `Proyectos_trabajados` varchar(120) NOT NULL,
  `Proyectos_actuales` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursoh`
--

INSERT INTO `recursoh` (`id_Rh`, `Nom_rh`, `Apaterno_rh`, `Amaterno_rh`, `Puesto`, `Cursos_rh`, `Certificaciones_rh`, `Exp_rh`, `Proyectos_trabajados`, `Proyectos_actuales`) VALUES
(1, 'Miriam', 'Mejia', 'Huidobro', 'Admon. Proyecto', 'Curso 1, Curso 2, Curso 3', 'Certificacion A, Certificacion B', 5, 'Proyecto A, Proyecto B', 0),
(2, 'Esbeidi', 'Perez', 'Cabrera', 'Gerente Proyectos', 'Curso A, Curso B, Curso C', 'Certificacion 1, Certificacion 2', 4, 'Proyecto A, Proyecto C', 0),
(3, 'Jasive', 'Quijano', 'Navarro', 'Lider Proyecto', 'Curso 4, Curso 5', 'Certificacion C, Certificacion D', 5, 'Proyecto A, Proyecto D', 2),
(4, 'Bruno', 'Montoya', 'Zamora', 'Desarrollador', 'Curso D, Curso E', 'Certificacion 3', 3, 'Proyecto A', 1),
(5, 'Antony', 'Badillo', 'Cespedes', 'Desarrollador', 'Curso 6, Curso 7', 'Certificacion E', 3, 'Proyecto A, Proyecto F', 0),
(6, 'Kim', 'Ojeda', 'Peralta', 'Lider Proyecto', 'Curso F, Curso G, Curso H', 'Certificacion 4, Certificacion 5', 4, 'Proyecto A', 0),
(7, 'Itzel', 'Soto', 'Delgado', 'Admon. Proyecto', 'Curso 8, Curso 9', 'Certificacion F, Certificacion G', 3, 'Proyecto A, Proyecto E', 0),
(8, 'Eduardo', 'Herrera', 'Rodriguez', 'Desarrollador', 'Curso I', 'Certificacion 6', 2, 'Ninguno', 0),
(9, 'Maria', 'Hernandez', 'Romero', 'Lider Proyecto', 'Curso 10', 'Certificacion H', 2, 'Proyecto H', 0),
(10, 'David', 'Martinez', 'Vega', 'Gerente Proyectos', 'Curso J', 'Certificacion 7', 2, 'Proyecto H', 0),
(11, 'Alan', 'Lopez', 'Arellanes', 'Admon. Sistema', 'Curso ABC', 'Certificacion 123', 6, 'N/A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursoh_has_proyecto`
--

CREATE TABLE `recursoh_has_proyecto` (
  `RecursoH_id_Rh` int(11) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursoh_has_proyecto`
--

INSERT INTO `recursoh_has_proyecto` (`RecursoH_id_Rh`, `Proyecto_id_Proyecto`) VALUES
(3, 35),
(6, 35),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(2, 93);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo`
--

CREATE TABLE `riesgo` (
  `id_Riesgo` int(11) NOT NULL,
  `Nom_riesgo` varchar(45) NOT NULL,
  `Ocurrencia_riesgo` decimal(3,0) NOT NULL,
  `Grado_impacto` varchar(10) NOT NULL,
  `Mitigacion_riesgo` varchar(120) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `riesgo`
--

INSERT INTO `riesgo` (`id_Riesgo`, `Nom_riesgo`, `Ocurrencia_riesgo`, `Grado_impacto`, `Mitigacion_riesgo`, `Proyecto_id_Proyecto`) VALUES
(16, 'riesgo11', '60', '5', 'mitigccion', 93);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_Software` int(11) NOT NULL,
  `Licencia` varchar(15) NOT NULL,
  `Version` varchar(10) NOT NULL,
  `nom_sw` varchar(20) NOT NULL,
  `Proyecto_id_proyecto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_Software`, `Licencia`, `Version`, `nom_sw`, `Proyecto_id_proyecto`) VALUES
(1, '1 año', '2016', 'Microsoft Office', NULL),
(2, '2 años', '2016', 'Microsoft Project ', NULL),
(3, 'Open source', '6.0', 'Debian Linux', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(11) NOT NULL,
  `Correo_user` varchar(25) NOT NULL,
  `Rol_user` varchar(25) NOT NULL,
  `Login_user` varchar(15) NOT NULL,
  `Password_user` varchar(255) NOT NULL,
  `intentos` int(11) NOT NULL,
  `Recursoh_id_Rh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `Correo_user`, `Rol_user`, `Login_user`, `Password_user`, `intentos`, `Recursoh_id_Rh`) VALUES
(1, 'alan@gmail.com', 'Administrador de Sistema', 'AlanLA', 'passAlan', 0, 11),
(2, 'miriam@gmail.com', 'Administrador de Proyecto', 'MiriamMH', 'passMiriam', 0, 1),
(3, 'esbeidi@gmail.com', 'Gerente de Proyectos', 'EsbeidiPC', 'passEsbeidi', 0, 2),
(4, 'jasive@gmail.com', 'Lider de Proyecto', 'JasiveQN', 'passJasive', 0, 3),
(5, 'bruno@gmail.com', 'Desarrollador', 'BrunoMZ', 'passBruno', 0, 4),
(6, 'antony@gmail.com', 'Desarrollador', 'AntonyBC', 'passAntony', 0, 5),
(7, 'kim@hotmail.com', 'Lider de Proyecto', 'KimOP', 'passKim', 0, 6),
(8, 'itzel@hotmail.com', 'Administrador de Proyecto', 'ItzelSD', 'passItzel', 0, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avance`
--
ALTER TABLE `avance`
  ADD PRIMARY KEY (`cve_Avance`),
  ADD KEY `Proyecto_id_Proyecto` (`Proyecto_id_Proyecto`);

--
-- Indices de la tabla `entregable`
--
ALTER TABLE `entregable`
  ADD PRIMARY KEY (`id_Entregable`),
  ADD KEY `Proyecto_id_Proyecto` (`Proyecto_id_Proyecto`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_Equipo`),
  ADD KEY `Proyecto_id_proyecto` (`Proyecto_id_proyecto`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_Material`),
  ADD KEY `Proyecto_id_proyecto` (`Proyecto_id_proyecto`);

--
-- Indices de la tabla `planderemediacion`
--
ALTER TABLE `planderemediacion`
  ADD PRIMARY KEY (`cve_plan`),
  ADD KEY `Avance_cve_Avance` (`Avance_cve_Avance`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_Proyecto`);

--
-- Indices de la tabla `recursoh`
--
ALTER TABLE `recursoh`
  ADD PRIMARY KEY (`id_Rh`);

--
-- Indices de la tabla `recursoh_has_proyecto`
--
ALTER TABLE `recursoh_has_proyecto`
  ADD KEY `Proyecto_id_Proyecto` (`Proyecto_id_Proyecto`),
  ADD KEY `RecursoH_id_Rh` (`RecursoH_id_Rh`);

--
-- Indices de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  ADD PRIMARY KEY (`id_Riesgo`),
  ADD KEY `Proyecto_id_Proyecto` (`Proyecto_id_Proyecto`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_Software`),
  ADD KEY `Proyecto_id_proyecto` (`Proyecto_id_proyecto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`),
  ADD KEY `Recursoh_id_Rh` (`Recursoh_id_Rh`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avance`
--
ALTER TABLE `avance`
  MODIFY `cve_Avance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `entregable`
--
ALTER TABLE `entregable`
  MODIFY `id_Entregable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_Equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_Material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_Proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT de la tabla `recursoh`
--
ALTER TABLE `recursoh`
  MODIFY `id_Rh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  MODIFY `id_Riesgo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id_Software` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avance`
--
ALTER TABLE `avance`
  ADD CONSTRAINT `avance_ibfk_1` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entregable`
--
ALTER TABLE `entregable`
  ADD CONSTRAINT `entregable_ibfk_1` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`Proyecto_id_proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`Proyecto_id_proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `planderemediacion`
--
ALTER TABLE `planderemediacion`
  ADD CONSTRAINT `planderemediacion_ibfk_1` FOREIGN KEY (`Avance_cve_Avance`) REFERENCES `avance` (`cve_Avance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursoh_has_proyecto`
--
ALTER TABLE `recursoh_has_proyecto`
  ADD CONSTRAINT `recursoh_has_proyecto_ibfk_1` FOREIGN KEY (`RecursoH_id_Rh`) REFERENCES `recursoh` (`id_Rh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursoh_has_proyecto_ibfk_2` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `riesgo`
--
ALTER TABLE `riesgo`
  ADD CONSTRAINT `riesgo_ibfk_1` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `software_ibfk_1` FOREIGN KEY (`Proyecto_id_proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Recursoh_id_Rh`) REFERENCES `recursoh` (`id_Rh`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
