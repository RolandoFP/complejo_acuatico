-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 04:23 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acuatico`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumno`
--

CREATE TABLE `alumno` (
  `ID_Alumno` int(5) NOT NULL,
  `Nombre_Alumno` varchar(20) NOT NULL,
  `Ap_Paterno` varchar(20) NOT NULL,
  `Ap_Materno` varchar(20) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Fecha_Ingr` date NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo_Electronico` varchar(20) NOT NULL,
  `Doc_Escan` blob NOT NULL,
  `Nivel_Nado` set('P','I','A') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` (`ID_Alumno`, `Nombre_Alumno`, `Ap_Paterno`, `Ap_Materno`, `Fecha_Nac`, `Fecha_Ingr`, `Telefono`, `Correo_Electronico`, `Doc_Escan`, `Nivel_Nado`) VALUES
(1, 'Juan', 'Perez', 'Ramirez', '2000-12-04', '2017-02-13', '4433258844', 'correo@example.com', '', 'I'),
(2, 'Mario', 'Ávila', 'Álvarado', '1996-12-04', '2017-01-15', '443111111', 'correo@example.com', '', 'A'),
(3, 'Melissa', 'Martinez', 'Rodriguez', '1995-02-04', '2014-02-13', '4431111111', 'correo@example.com', '', 'A'),
(4, 'Joel', 'García', 'Roblez', '1999-01-04', '2010-02-16', '4431111111', 'correo@example.com', '', 'A'),
(5, 'Jhonatan', 'Romero', 'Jiménez', '2000-05-13', '2017-03-13', '4431111111', 'correo@example.com', '', 'P'),
(6, 'Diana', 'Perez', 'Olvera', '2000-12-04', '2010-02-13', '4431111111', 'correo@example.com', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `clase`
--

CREATE TABLE `clase` (
  `ID_Clase` varchar(7) NOT NULL,
  `Nivel` set('P','I','A') NOT NULL,
  `ID_Instructor` int(5) NOT NULL,
  `hora_ini` tinyint(1) DEFAULT NULL,
  `hora_fin` tinyint(1) DEFAULT NULL,
  `turno` set('M','V') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clase`
--

INSERT INTO `clase` (`ID_Clase`, `Nivel`, `ID_Instructor`, `hora_ini`, `hora_fin`, `turno`) VALUES
('CLM89', 'P', 4, 8, 9, 'M'),
('CLM910', 'P', 4, 9, 10, 'M'),
('CLV23', 'I', 4, 14, 15, 'V'),
('CLV45', 'I', 1, 16, 17, 'V'),
('CLV89', 'A', 4, 20, 21, 'V');

-- --------------------------------------------------------

--
-- Stand-in structure for view `consalumno`
-- (See below for the actual view)
--
CREATE TABLE `consalumno` (
`id_Alumno` int(5)
,`Nombre Completo` varchar(62)
,`Fecha_Nac` date
,`Fecha_ingr` date
,`Telefono` varchar(10)
,`Correo_Electronico` varchar(20)
,`Nivel_Nado` set('P','I','A')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `consempleado`
-- (See below for the actual view)
--
CREATE TABLE `consempleado` (
`ID_Empleado` int(5)
,`Nombre Completo` varchar(62)
,`Fecha_Nac` date
,`Fecha_Ingr` date
,`Puesto` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `consultanomina`
-- (See below for the actual view)
--
CREATE TABLE `consultanomina` (
`Nombre Completo` varchar(62)
,`Puesto` varchar(20)
,`Salario` float(5,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `ID_Empleado` int(5) NOT NULL,
  `Nombre_Empleado` varchar(20) NOT NULL,
  `AP_Paterno` varchar(20) NOT NULL,
  `Ap_Materno` varchar(20) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Fecha_Ingr` date NOT NULL,
  `Puesto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`ID_Empleado`, `Nombre_Empleado`, `AP_Paterno`, `Ap_Materno`, `Fecha_Nac`, `Fecha_Ingr`, `Puesto`) VALUES
(1, 'Diana', 'Peres', 'Garcia', '1970-01-13', '2016-11-01', 'Instructor'),
(2, 'Julia', 'Gargallo', 'Mendoza', '1978-05-25', '2015-02-13', 'Administrador'),
(3, 'Julio', 'Garcia', 'Martinez', '1979-04-13', '2015-02-13', 'Administrador'),
(4, 'Diana', 'Espinoza', 'Tello', '1980-08-08', '2015-12-04', 'Instructor'),
(5, 'Laura', 'Jimnes', 'López', '1962-12-04', '2010-01-13', 'Recepcionista'),
(6, 'Raul', 'Sima', 'Woo', '1990-06-06', '2009-01-15', 'Instructor'),
(7, 'Jorge ', 'Arreygue', 'Cruz', '1980-12-04', '2014-08-08', 'Medico');

-- --------------------------------------------------------

--
-- Table structure for table `incidencias`
--

CREATE TABLE `incidencias` (
  `ID_Incidencias` varchar(6) NOT NULL,
  `ID_Alumno` int(5) NOT NULL,
  `ID_Empleado` int(5) NOT NULL,
  `Sintomas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nomina`
--

CREATE TABLE `nomina` (
  `ID_Nomina` int(5) NOT NULL,
  `Horas` int(2) NOT NULL,
  `Turno` set('M','V') NOT NULL,
  `ID_Empleado` int(5) NOT NULL,
  `Salario` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomina`
--

INSERT INTO `nomina` (`ID_Nomina`, `Horas`, `Turno`, `ID_Empleado`, `Salario`) VALUES
(1, 8, 'M', 1, 200.00),
(2, 8, 'M', 2, 200.00),
(3, 8, 'V', 3, 200.00),
(4, 10, 'M', 4, 200.00),
(5, 8, 'M', 5, 200.00),
(6, 8, 'V', 6, 200.00);

-- --------------------------------------------------------

--
-- Stand-in structure for view `paselista`
-- (See below for the actual view)
--
CREATE TABLE `paselista` (
`ID_Alumno` int(5)
,`ID_Clase` varchar(7)
,`Asistencia` set('S','N')
,`Nombre_Alumno` varchar(20)
,`Ap_Paterno` varchar(20)
,`Ap_Materno` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `pase_lista`
--

CREATE TABLE `pase_lista` (
  `ID_alumno` int(5) NOT NULL,
  `ID_Clase` varchar(7) NOT NULL,
  `Dia` date NOT NULL,
  `Asistencia` set('S','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarifa`
--

CREATE TABLE `tarifa` (
  `ID_Clase` varchar(7) NOT NULL,
  `Monto` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifa`
--

INSERT INTO `tarifa` (`ID_Clase`, `Monto`) VALUES
('CLM89', 9.99),
('CLM89', 9.99),
('CLV23', 9.99),
('CLM910', 9.99),
('CLV45', 9.99),
('CLV89', 9.99);

-- --------------------------------------------------------

--
-- Structure for view `consalumno`
--
DROP TABLE IF EXISTS `consalumno`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consalumno`  AS  select `alumno`.`ID_Alumno` AS `id_Alumno`,concat(`alumno`.`Nombre_Alumno`,' ',`alumno`.`Ap_Paterno`,' ',`alumno`.`Ap_Materno`) AS `Nombre Completo`,`alumno`.`Fecha_Nac` AS `Fecha_Nac`,`alumno`.`Fecha_Ingr` AS `Fecha_ingr`,`alumno`.`Telefono` AS `Telefono`,`alumno`.`Correo_Electronico` AS `Correo_Electronico`,`alumno`.`Nivel_Nado` AS `Nivel_Nado` from `alumno` ;

-- --------------------------------------------------------

--
-- Structure for view `consempleado`
--
DROP TABLE IF EXISTS `consempleado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consempleado`  AS  select `empleado`.`ID_Empleado` AS `ID_Empleado`,concat(`empleado`.`Nombre_Empleado`,' ',`empleado`.`AP_Paterno`,' ',`empleado`.`Ap_Materno`) AS `Nombre Completo`,`empleado`.`Fecha_Nac` AS `Fecha_Nac`,`empleado`.`Fecha_Ingr` AS `Fecha_Ingr`,`empleado`.`Puesto` AS `Puesto` from `empleado` ;

-- --------------------------------------------------------

--
-- Structure for view `consultanomina`
--
DROP TABLE IF EXISTS `consultanomina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `consultanomina`  AS  select concat(`empleado`.`Nombre_Empleado`,' ',`empleado`.`AP_Paterno`,' ',`empleado`.`Ap_Materno`) AS `Nombre Completo`,`empleado`.`Puesto` AS `Puesto`,`nomina`.`Salario` AS `Salario` from (`nomina` join `empleado` on((`nomina`.`ID_Empleado` = `empleado`.`ID_Empleado`))) ;

-- --------------------------------------------------------

--
-- Structure for view `paselista`
--
DROP TABLE IF EXISTS `paselista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `paselista`  AS  select `alumno`.`ID_Alumno` AS `ID_Alumno`,`pase_lista`.`ID_Clase` AS `ID_Clase`,`pase_lista`.`Asistencia` AS `Asistencia`,`alumno`.`Nombre_Alumno` AS `Nombre_Alumno`,`alumno`.`Ap_Paterno` AS `Ap_Paterno`,`alumno`.`Ap_Materno` AS `Ap_Materno` from (`alumno` join `pase_lista`) where (`alumno`.`ID_Alumno` = `pase_lista`.`ID_alumno`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ID_Alumno`);

--
-- Indexes for table `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`ID_Clase`),
  ADD KEY `ID_Instructor` (`ID_Instructor`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_Empleado`);

--
-- Indexes for table `incidencias`
--
ALTER TABLE `incidencias`
  ADD KEY `ID_Alumno` (`ID_Alumno`,`ID_Empleado`),
  ADD KEY `ID_Empleado` (`ID_Empleado`);

--
-- Indexes for table `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`ID_Nomina`),
  ADD KEY `ID_Empleado` (`ID_Empleado`);

--
-- Indexes for table `pase_lista`
--
ALTER TABLE `pase_lista`
  ADD KEY `Clave_alumno` (`ID_alumno`,`ID_Clase`),
  ADD KEY `ID_Clase` (`ID_Clase`);

--
-- Indexes for table `tarifa`
--
ALTER TABLE `tarifa`
  ADD KEY `ID_Clase` (`ID_Clase`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `clase_ibfk_2` FOREIGN KEY (`ID_Instructor`) REFERENCES `empleado` (`ID_Empleado`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `incidencias_ibfk_2` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleado` (`ID_Empleado`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `nomina_ibfk_1` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleado` (`ID_Empleado`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pase_lista`
--
ALTER TABLE `pase_lista`
  ADD CONSTRAINT `pase_lista_ibfk_1` FOREIGN KEY (`ID_alumno`) REFERENCES `alumno` (`ID_Alumno`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pase_lista_ibfk_2` FOREIGN KEY (`ID_Clase`) REFERENCES `clase` (`ID_Clase`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `tarifa_ibfk_1` FOREIGN KEY (`ID_Clase`) REFERENCES `clase` (`ID_Clase`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
