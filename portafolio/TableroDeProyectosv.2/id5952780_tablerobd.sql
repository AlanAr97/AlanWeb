-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-05-2018 a las 19:26:03
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregable`
--

CREATE TABLE `entregable` (
  `id_Entregable` int(11) NOT NULL,
  `Nom_entregable` varchar(45) NOT NULL,
  `Archivo_entregable` blob NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Entradas_eq` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_Equipo`, `Marca_eq`, `Tipo_eq`, `Ram`, `Procesador`, `Discoduro`, `Tarjetadevideo`, `Puertousb`, `Entradas_eq`) VALUES
(1, 'HP', 'Laptop', '4GB', 'Intel Cele', 'X', 'X', '3', 'HDMI/VGA'),
(2, 'Lenovo', 'Desktop', '4GB', 'Intel', '500GB', 'Tarjeta Y', '4', 'VGA'),
(3, 'Brother', 'Impresora', 'NA', 'NA', 'NA', 'NA', '2', 'NA');

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
  `Altura_mat` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_Material`, `Descripcion_mat`, `Material`, `Ancho_mat`, `Largo_mat`, `Altura_mat`) VALUES
(1, 'Mesa', 'Madera', '15', '105', '100'),
(2, 'Silla', 'Plastico', '15', '40', '100'),
(3, 'Estante', 'Madera', '50', '150', '290'),
(4, 'Escritorio', 'Vidrio', '120', '150', '100');

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
  `Plan_trabajo` blob NOT NULL,
  `Fechainiciop` date NOT NULL,
  `Fechafinp` date NOT NULL,
  `Presupuestoplan` decimal(3,0) NOT NULL,
  `RecursosM_id_Rm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `Exp_rh` decimal(3,0) NOT NULL,
  `Num_Proyectos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursoh`
--

INSERT INTO `recursoh` (`id_Rh`, `Nom_rh`, `Apaterno_rh`, `Amaterno_rh`, `Puesto`, `Cursos_rh`, `Certificaciones_rh`, `Exp_rh`, `Num_Proyectos`) VALUES
(1, 'Miriam', 'Mejia', 'Huidobro', 'Admon. Proyecto', 'Curso 1, Curso 2, Curso 3', 'Certificacion A, Certificacion B', 5, 0),
(2, 'Esbeidi', 'Perez', 'Cabrera', 'Gerente Proyectos', 'Curso A, Curso B, Curso C', 'Certificacion 1, Certificacion 2', 4, 0),
(3, 'Jasive', 'Quijano', 'Navarro', 'Lider Proyecto', 'Curso 4, Curso 5', 'Certificacion C, Certificacion D', 4, 1),
(4, 'Bruno', 'Montoya', 'Zamora', 'Desarrollador', 'Curso D, Curso E', 'Certificacion 3', 3, 1),
(5, 'Antony', 'Badillo', 'Cespedes', 'Desarrollador', 'Curso 6, Curso 7', 'Certificacion E', 3, 0),
(6, 'Kim', 'Ojeda', 'Peralta', 'Lider Proyecto', 'Curso F, Curso G, Curso H', 'Certificacion 4, Certificacion 5', 4, 1),
(7, 'Itzel', 'Soto', 'Delgado', 'Admon. Proyecto', 'Curso 8, Curso 9', 'Certificacion F, Certificacion G', 3, 1),
(8, 'Eduardo', 'Herrera', 'Rodriguez', 'Desarrollador', 'Curso I', 'Certificacion 6', 2, 0),
(9, 'Maria', 'Hernandez', 'Romero', 'Lider Proyecto', 'Curso 10', 'Certificacion H', 2, 1),
(10, 'David', 'Martinez', 'Vega', 'Gerente Proyectos', 'Curso J', 'Certificacion 7', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursoh_has_proyecto`
--

CREATE TABLE `recursoh_has_proyecto` (
  `RecursoH_id_Rh` int(11) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursom`
--

CREATE TABLE `recursom` (
  `id_Rm` int(11) NOT NULL,
  `Material_id_Material` int(11) NOT NULL,
  `Software_id_Software` int(11) NOT NULL,
  `Equipo_id_Equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursom`
--

INSERT INTO `recursom` (`id_Rm`, `Material_id_Material`, `Software_id_Software`, `Equipo_id_Equipo`) VALUES
(0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo`
--

CREATE TABLE `riesgo` (
  `id_Riesgo` int(11) NOT NULL,
  `Nom_riesgo` varchar(45) NOT NULL,
  `Ocurrencia_riesgo` decimal(3,0) NOT NULL,
  `Grado_impacto` varchar(10) NOT NULL,
  `Mitigacion_riesgo` varchar(45) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_Software` int(11) NOT NULL,
  `Licencia` varchar(15) NOT NULL,
  `Version` varchar(10) NOT NULL,
  `nom_sw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_Software`, `Licencia`, `Version`, `nom_sw`) VALUES
(1, '1 año', '2016', 'Microsoft Office'),
(2, '2 años', '2016', 'Microsoft Project '),
(3, 'Open source', '6.0', 'Debian Linux');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_Usuario` int(11) NOT NULL,
  `Nom_user` varchar(25) NOT NULL,
  `Apaterno_user` varchar(25) NOT NULL,
  `Amaterno_user` varchar(25) NOT NULL,
  `Correo_user` varchar(25) NOT NULL,
  `Rol_user` varchar(25) NOT NULL,
  `Login_user` varchar(15) NOT NULL,
  `Password_user` varchar(255) NOT NULL,
  `intentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_Usuario`, `Nom_user`, `Apaterno_user`, `Amaterno_user`, `Correo_user`, `Rol_user`, `Login_user`, `Password_user`, `intentos`) VALUES
(1, 'Alan', 'Lopez', 'Arellanes', 'alan@gmail.com', 'Administrador de Sistema', 'AlanLA', 'passAlan', 7),
(2, 'Miriam', 'Mejia', 'Huidobro', 'miriam@gmail.com', 'Administrador de Proyecto', 'MiriamMH', 'passMiriam', 0),
(3, 'Esbeidi', 'Perez', 'Cabrera', 'esbeidi@gmail.com', 'Gerente de Proyectos', 'EsbeidiPC', 'passEsbeidi', 0),
(4, 'Jasive', 'Quijano', 'Navarro', 'jasive@gmail.com', 'Lider de Proyecto', 'JasiveQN', 'passJasive', 0),
(5, 'Bruno', 'Montoya', 'Zamora', 'bruno@gmail.com', 'Desarrollador', 'BrunoMZ', 'passBruno', 0),
(6, 'Antony', 'Badillo', 'Cespedes', 'antony@gmail.com', 'Desarrollador', 'AntonyBC', 'passAntony', 0),
(7, 'Kim', 'Ojeda', 'Peralta', 'kim@hotmail.com', 'Lider de Proyecto', 'KimOP', 'passKim', 0),
(8, 'Itzel', 'Soto', 'Delgado', 'itzel@hotmail.com', 'Administrador de Proyecto', 'ItzelSD', 'passItzel', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_proyecto`
--

CREATE TABLE `usuario_has_proyecto` (
  `Usuario_id_Usuario` int(11) NOT NULL,
  `Proyecto_id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id_Equipo`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_Material`);

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
  ADD PRIMARY KEY (`id_Proyecto`),
  ADD KEY `RecursosM_id_Rm` (`RecursosM_id_Rm`);

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
-- Indices de la tabla `recursom`
--
ALTER TABLE `recursom`
  ADD PRIMARY KEY (`id_Rm`),
  ADD KEY `fk_RecursoM_Material_idx` (`Material_id_Material`),
  ADD KEY `fk_RecursoM_Software1_idx` (`Software_id_Software`),
  ADD KEY `fk_RecursoM_Equipo1_idx` (`Equipo_id_Equipo`);

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
  ADD PRIMARY KEY (`id_Software`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- Indices de la tabla `usuario_has_proyecto`
--
ALTER TABLE `usuario_has_proyecto`
  ADD KEY `Usuario_id_Usuario` (`Usuario_id_Usuario`),
  ADD KEY `Proyecto_id_Proyecto` (`Proyecto_id_Proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avance`
--
ALTER TABLE `avance`
  MODIFY `cve_Avance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `entregable`
--
ALTER TABLE `entregable`
  MODIFY `id_Entregable` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_Proyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recursoh`
--
ALTER TABLE `recursoh`
  MODIFY `id_Rh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  MODIFY `id_Riesgo` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `planderemediacion`
--
ALTER TABLE `planderemediacion`
  ADD CONSTRAINT `planderemediacion_ibfk_1` FOREIGN KEY (`Avance_cve_Avance`) REFERENCES `avance` (`cve_Avance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`RecursosM_id_Rm`) REFERENCES `recursom` (`id_Rm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursoh_has_proyecto`
--
ALTER TABLE `recursoh_has_proyecto`
  ADD CONSTRAINT `recursoh_has_proyecto_ibfk_1` FOREIGN KEY (`RecursoH_id_Rh`) REFERENCES `recursoh` (`id_Rh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursoh_has_proyecto_ibfk_2` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursom`
--
ALTER TABLE `recursom`
  ADD CONSTRAINT `recursom_ibfk_1` FOREIGN KEY (`Software_id_Software`) REFERENCES `software` (`id_Software`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursom_ibfk_2` FOREIGN KEY (`Material_id_Material`) REFERENCES `material` (`id_Material`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recursom_ibfk_3` FOREIGN KEY (`Equipo_id_Equipo`) REFERENCES `equipo` (`id_Equipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `riesgo`
--
ALTER TABLE `riesgo`
  ADD CONSTRAINT `riesgo_ibfk_1` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_has_proyecto`
--
ALTER TABLE `usuario_has_proyecto`
  ADD CONSTRAINT `usuario_has_proyecto_ibfk_1` FOREIGN KEY (`Usuario_id_Usuario`) REFERENCES `usuario` (`id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_has_proyecto_ibfk_2` FOREIGN KEY (`Proyecto_id_Proyecto`) REFERENCES `proyecto` (`id_Proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
