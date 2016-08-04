-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2016 a las 03:19:35
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutri_saludable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_diabetico`
--

CREATE TABLE `acta_diabetico` (
  `id_diabetico` int(11) NOT NULL,
  `comidas_dia` varchar(10) NOT NULL,
  `comidas_casa` varchar(30) NOT NULL,
  `comidas_fuera` varchar(30) NOT NULL,
  `horario_comida` varchar(30) NOT NULL,
  `prepara_alimento` varchar(40) NOT NULL,
  `come_entrecomidas` varchar(10) NOT NULL,
  `que_come` varchar(50) NOT NULL,
  `modificacion_alimentaria` varchar(10) NOT NULL,
  `motivo_modificacion` varchar(30) NOT NULL,
  `como_modificacion` varchar(30) NOT NULL,
  `apetito_alimentacion` varchar(10) NOT NULL,
  `hora_ambre` varchar(20) NOT NULL,
  `alimento_preferido` varchar(40) NOT NULL,
  `alimento_nopreferido` varchar(40) NOT NULL,
  `alimento_malestar` varchar(40) NOT NULL,
  `alergia_alimento` varchar(40) NOT NULL,
  `suplemento_complemento` varchar(10) NOT NULL,
  `cual_suplemento` varchar(30) NOT NULL,
  `dosis_suplemento` varchar(30) NOT NULL,
  `motivo_suplemento` varchar(30) NOT NULL,
  `actitud_paciente` varchar(10) NOT NULL,
  `motivo_actitud` varchar(30) NOT NULL,
  `sal_comida` varchar(10) NOT NULL,
  `grasa_casa` varchar(10) NOT NULL,
  `dieta_especial` varchar(30) NOT NULL,
  `cuantas_dieta` varchar(30) NOT NULL,
  `tipo_dieta` varchar(30) NOT NULL,
  `hace_dieta` varchar(30) NOT NULL,
  `tiempo_dieta` varchar(30) NOT NULL,
  `razon_dieta` varchar(30) NOT NULL,
  `apego_dieta` varchar(30) NOT NULL,
  `resultado_dieta` varchar(30) NOT NULL,
  `medicamentos_peso` varchar(10) NOT NULL,
  `cuales_medicamentos` varchar(20) NOT NULL,
  `desayuno_acta` varchar(100) NOT NULL,
  `colacion_desayuno` varchar(100) NOT NULL,
  `comida_acta` varchar(100) NOT NULL,
  `colacion_comida` varchar(100) NOT NULL,
  `cena_acta` varchar(100) NOT NULL,
  `colacion_cena` varchar(100) NOT NULL,
  `vasos_agua` varchar(10) NOT NULL,
  `vasos_bebida` varchar(10) NOT NULL,
  `cambios_fin_semana` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acta_diabetico`
--

INSERT INTO `acta_diabetico` (`id_diabetico`, `comidas_dia`, `comidas_casa`, `comidas_fuera`, `horario_comida`, `prepara_alimento`, `come_entrecomidas`, `que_come`, `modificacion_alimentaria`, `motivo_modificacion`, `como_modificacion`, `apetito_alimentacion`, `hora_ambre`, `alimento_preferido`, `alimento_nopreferido`, `alimento_malestar`, `alergia_alimento`, `suplemento_complemento`, `cual_suplemento`, `dosis_suplemento`, `motivo_suplemento`, `actitud_paciente`, `motivo_actitud`, `sal_comida`, `grasa_casa`, `dieta_especial`, `cuantas_dieta`, `tipo_dieta`, `hace_dieta`, `tiempo_dieta`, `razon_dieta`, `apego_dieta`, `resultado_dieta`, `medicamentos_peso`, `cuales_medicamentos`, `desayuno_acta`, `colacion_desayuno`, `comida_acta`, `colacion_comida`, `cena_acta`, `colacion_cena`, `vasos_agua`, `vasos_bebida`, `cambios_fin_semana`) VALUES
(2, '2', '2', '1', '2', 'Si', 'Si', 'sdfsf', 'Si', 'nooooo ', 'claro que sii ', 'Si', '3', 'sdfsdf', 'sfsf', 'sfsdf', 'sfd', 'sdf', 'sf', 'sfdf', 'fdsfg', 'adasd', 'adasd', 'Si', 'Si', 'No', '2', 'sdfsf', 'Si', 'fdsfs', 'sdfsdf', 'Si', 'sdf', 'sfsdf', 'sfds', 'ujuleee', 'mtamadreee', 'sadad', 'adad', 'sadasd', 'asdsad', 'Si', 'Si', 'nada en comun tdo normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `nombre_administrador` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `nombre_administrador`, `password`) VALUES
(1, 'Hector Hugo Vargas Acevedo', 'daniela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_salud`
--

CREATE TABLE `antecedentes_salud` (
  `id_antecedente` int(11) NOT NULL,
  `diarrea` varchar(10) NOT NULL,
  `estrenimiento` varchar(10) NOT NULL,
  `gastritis` varchar(10) NOT NULL,
  `ulcera` varchar(10) NOT NULL,
  `nausea` varchar(10) NOT NULL,
  `pirosis` varchar(10) NOT NULL,
  `vomito` varchar(10) NOT NULL,
  `colitis` varchar(10) NOT NULL,
  `dentadura` varchar(10) NOT NULL,
  `otros` varchar(50) NOT NULL,
  `observaciones` varchar(50) NOT NULL,
  `enfermedad_diagnosticada` varchar(10) NOT NULL,
  `enfermedad_importante` varchar(10) NOT NULL,
  `medicamento` varchar(10) NOT NULL,
  `cual` varchar(10) NOT NULL,
  `dosis` varchar(10) NOT NULL,
  `desde_cuando` varchar(10) NOT NULL,
  `laxantes` varchar(10) NOT NULL,
  `diureticos` varchar(10) NOT NULL,
  `antiacidos` varchar(10) NOT NULL,
  `analgesicos` varchar(10) NOT NULL,
  `cirugia` varchar(10) NOT NULL,
  `obesidad` varchar(10) NOT NULL,
  `diabetis` varchar(10) NOT NULL,
  `hta` varchar(10) NOT NULL,
  `cancer` varchar(10) NOT NULL,
  `hipercolesterolemia` varchar(10) NOT NULL,
  `hipertrigliceridemia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antecedentes_salud`
--

INSERT INTO `antecedentes_salud` (`id_antecedente`, `diarrea`, `estrenimiento`, `gastritis`, `ulcera`, `nausea`, `pirosis`, `vomito`, `colitis`, `dentadura`, `otros`, `observaciones`, `enfermedad_diagnosticada`, `enfermedad_importante`, `medicamento`, `cual`, `dosis`, `desde_cuando`, `laxantes`, `diureticos`, `antiacidos`, `analgesicos`, `cirugia`, `obesidad`, `diabetis`, `hta`, `cancer`, `hipercolesterolemia`, `hipertrigliceridemia`) VALUES
(2, 'NO', 'NO', 'Si', 'NO', 'Si', 'NO', 'Si', 'NO', 'buena', 'todo en orden', 'no me gusto su dentadura esta un poco deteriorada ', 'Si', 'Si', 'Si', 'nifiripino', '2 pildoras', 'hace 2 mes', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspectos_ginecologicos`
--

CREATE TABLE `aspectos_ginecologicos` (
  `id_ginecologico` int(11) NOT NULL,
  `embarazo` varchar(10) NOT NULL,
  `referido_paciente` varchar(40) NOT NULL,
  `por_fum` varchar(40) NOT NULL,
  `anticonceptivos_orales` varchar(10) NOT NULL,
  `cual_anticonceptivo` varchar(20) NOT NULL,
  `dosis_anticonceptivo` varchar(20) NOT NULL,
  `climaterio` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `terapia_hormonal` varchar(10) NOT NULL,
  `cual_hormonal` varchar(20) NOT NULL,
  `dosis_hormonal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aspectos_ginecologicos`
--

INSERT INTO `aspectos_ginecologicos` (`id_ginecologico`, `embarazo`, `referido_paciente`, `por_fum`, `anticonceptivos_orales`, `cual_anticonceptivo`, `dosis_anticonceptivo`, `climaterio`, `fecha`, `terapia_hormonal`, `cual_hormonal`, `dosis_hormonal`) VALUES
(2, 'NO', 'dsfsdf', 'Si', 'Si', 'alguno', '5 pildoras diarias', 'clarooooo', '2015-09-18', 'Si', 'ninguna', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bioquimica`
--

CREATE TABLE `bioquimica` (
  `id_bioquimica` int(11) NOT NULL,
  `bioquimico_relevante` varchar(50) NOT NULL,
  `solicitud_analisis` varchar(10) NOT NULL,
  `tipo_analisis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bioquimica`
--

INSERT INTO `bioquimica` (`id_bioquimica`, `bioquimico_relevante`, `solicitud_analisis`, `tipo_analisis`) VALUES
(2, 'si q siii ', 'NO', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dario_actividades`
--

CREATE TABLE `dario_actividades` (
  `id_actividad` int(11) NOT NULL,
  `actividad_desayuno` varchar(100) NOT NULL,
  `actividad_comida` varchar(100) NOT NULL,
  `actividad_dormir` varchar(100) NOT NULL,
  `actictividad_diaria` varchar(10) NOT NULL,
  `tipo_ejercicio` varchar(50) NOT NULL,
  `frecuencia_ejercicio` varchar(50) NOT NULL,
  `duracion_ejercicio` varchar(50) NOT NULL,
  `inicio_ejercicio` varchar(30) NOT NULL,
  `consumo_alcohol` varchar(10) NOT NULL,
  `consumo_tabaco` varchar(10) NOT NULL,
  `consumo_cafe` varchar(10) NOT NULL,
  `aspecto_general` varchar(100) NOT NULL,
  `presion_arterial` varchar(10) NOT NULL,
  `tipo_presion` varchar(20) NOT NULL,
  `hora_registro` varchar(10) NOT NULL,
  `brazo_derecho` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dario_actividades`
--

INSERT INTO `dario_actividades` (`id_actividad`, `actividad_desayuno`, `actividad_comida`, `actividad_dormir`, `actictividad_diaria`, `tipo_ejercicio`, `frecuencia_ejercicio`, `duracion_ejercicio`, `inicio_ejercicio`, `consumo_alcohol`, `consumo_tabaco`, `consumo_cafe`, `aspecto_general`, `presion_arterial`, `tipo_presion`, `hora_registro`, `brazo_derecho`) VALUES
(2, 'huevo con migas\r\nun vaso de agua\r\nun cafe', 'carnes rojas\r\nrefresco', 'duermo 3 horas por la tarde', 'ir al trab', 'Casado', '2', '2', '6:00 pm', 'Si', 'Si', 'Si', 'buen aspecto', '6453', 'Alta', '6:00 pm', 'muy bien ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_paciente` int(11) NOT NULL,
  `nombre_paciente` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `escolaridad` varchar(50) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motivo_consulta` varchar(100) NOT NULL,
  `fecha_elaboracion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id_paciente`, `nombre_paciente`, `edad`, `sexo`, `fecha_nacimiento`, `estado_civil`, `escolaridad`, `ocupacion`, `direccion`, `telefono`, `email`, `motivo_consulta`, `fecha_elaboracion`) VALUES
(2, 'hector hugo vargas torres', 27, 'Masculino', '1989-03-16', 'Soltero', 'Universidad', 'Licenciado', 'calle tampico #479', '8341472877', 'hector_azul105@hotmail.com', 'obesidad', '2016-06-15'),
(3, 'grecia karina vargas acevedo', 22, 'Femenino', '1994-01-27', 'Soltero', 'Universidad', 'Licenciado', 'calle tampico #479', '8341472877', 'hugo_vargas60@hotmail.com', 'obesidad', '2016-06-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta_diabetico`
--
ALTER TABLE `acta_diabetico`
  ADD PRIMARY KEY (`id_diabetico`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `antecedentes_salud`
--
ALTER TABLE `antecedentes_salud`
  ADD PRIMARY KEY (`id_antecedente`);

--
-- Indices de la tabla `aspectos_ginecologicos`
--
ALTER TABLE `aspectos_ginecologicos`
  ADD PRIMARY KEY (`id_ginecologico`);

--
-- Indices de la tabla `bioquimica`
--
ALTER TABLE `bioquimica`
  ADD PRIMARY KEY (`id_bioquimica`);

--
-- Indices de la tabla `dario_actividades`
--
ALTER TABLE `dario_actividades`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta_diabetico`
--
ALTER TABLE `acta_diabetico`
  MODIFY `id_diabetico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `antecedentes_salud`
--
ALTER TABLE `antecedentes_salud`
  MODIFY `id_antecedente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `aspectos_ginecologicos`
--
ALTER TABLE `aspectos_ginecologicos`
  MODIFY `id_ginecologico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bioquimica`
--
ALTER TABLE `bioquimica`
  MODIFY `id_bioquimica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `dario_actividades`
--
ALTER TABLE `dario_actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta_diabetico`
--
ALTER TABLE `acta_diabetico`
  ADD CONSTRAINT `acta_diabetico_ibfk_1` FOREIGN KEY (`id_diabetico`) REFERENCES `bioquimica` (`id_bioquimica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `antecedentes_salud`
--
ALTER TABLE `antecedentes_salud`
  ADD CONSTRAINT `antecedentes_salud_ibfk_1` FOREIGN KEY (`id_antecedente`) REFERENCES `datos_personales` (`id_paciente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `aspectos_ginecologicos`
--
ALTER TABLE `aspectos_ginecologicos`
  ADD CONSTRAINT `aspectos_ginecologicos_ibfk_1` FOREIGN KEY (`id_ginecologico`) REFERENCES `antecedentes_salud` (`id_antecedente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bioquimica`
--
ALTER TABLE `bioquimica`
  ADD CONSTRAINT `bioquimica_ibfk_1` FOREIGN KEY (`id_bioquimica`) REFERENCES `dario_actividades` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `dario_actividades`
--
ALTER TABLE `dario_actividades`
  ADD CONSTRAINT `dario_actividades_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `aspectos_ginecologicos` (`id_ginecologico`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
