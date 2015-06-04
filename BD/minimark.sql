-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2015 a las 17:07:24
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `minimark`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(12) NOT NULL,
  `nombreAdmi` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `nombreAdmi`, `contrasena`, `email`) VALUES
(123456789, 'ROOT', 'mysql', 'ROOT@mmk.com'),
(1085277182, 'ricardo', '789f', 'ricardi@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`idCat` int(11) NOT NULL,
  `nombreCat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCat`, `nombreCat`) VALUES
(2, 'Tecnologia'),
(3, 'Hogar'),
(4, 'Juegueteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `idfactura` varchar(25) NOT NULL,
  `fecha` date NOT NULL,
  `valorTot` double(15,2) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaobjetos`
--

CREATE TABLE IF NOT EXISTS `listaobjetos` (
`idListaObjetos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `valorUnid` double(15,2) DEFAULT NULL,
  `valorTot` double(15,2) DEFAULT NULL,
  `compras_idfactura` varchar(25) NOT NULL,
  `categorias_idCat` int(11) NOT NULL,
  `productos_idProducto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`idProducto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `presioVenta` double(10,2) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `PresioCompra` double(10,2) NOT NULL,
  `Categorias_idCat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `cantidad`, `presioVenta`, `foto`, `PresioCompra`, `Categorias_idCat`) VALUES
(10, 'Televisor LG 42', 'Puerto: HDMI, USB. <br>\r\nTecnologÃ­a: LED. <br>\r\nFull HD. <br>\r\nPanel IPS. <br>\r\nMHL. <br>\r\nTime Machine. <br>\r\nWi-Fi incorporado. <br>\r\nSmart TV.<br>', 25, 1350000.00, 'lg_tv_0110.jpg', 1500000.00, 2),
(11, 'Televisor Samsung 32', 'TamaÃ±o de la Pantalla: 32Â´Â´.<br>\r\nResoluciÃ³n 1.366 x 768.<br>\r\nEntradas HDMI: 2. <br>\r\nEntradas USB: 2. <br>\r\nConectividad WI-FI. <br>\r\nTecnologÃ­a LED.<br> \r\nComparte Contenidos por WIFI-Direct. <br>\r\nSi Cuenta Con TDT: DVB-T2. <br>\r\nSMARTV (internet ). <br>', 30, 780000.00, '2018168647492_2.jpg', 900000.00, 2),
(12, 'Televisor Samsung 40  UN40J6500 FHDCURVO SMAR', 'TamaÃ±o Pantalla: 40Â´Â´ <br>\r\nResoluciÃ³n: UHD <br>\r\nTecnologÃ­a: LED <br>\r\nConectividad: Wi-fi Direct <br>\r\nEntradas: 3USB y 2HDMI.<br>', 38, 1900000.00, 'samsung-0020-8451611-1-product.jpg', 1500000.00, 2),
(13, 'Minicomponente 260W LG CM4350 Con Bluetooth -', 'Potencia RMS:260 W. <br> \r\nEntradas: USB(2). <br>\r\nReproduce: CD-R/CD-RW.MP3.WMA.Audio CD. <br>\r\nNumero de CDs:1. <br>\r\nGrabaciÃ³n directa a USB. <br>\r\nbluetooth <br>', 40, 450000.00, 'lg-1936-5408311-1-product.jpg', 340000.00, 2),
(14, 'Parlante Multimedia Sony D-4 de 2.1 Canales y', 'OpciÃ³n para instalar cÃ¡mara trasera.\r\n<br> \r\nAltavoces multimedia de 2.1 canales.\r\n<br>\r\nRadio AM/FM. \r\n<br>\r\n27 Watts de potencia \r\n<br>', 10, 120000.00, 'sony-0310-8681011-1-product.jpg', 99900.00, 2),
(15, 'Minicomponente Sony MHCGPX555 1800W Negro', 'TecnologÃ­a DSEE. <br>\r\nClearAudio+. <br>\r\nConectividad Bluetooth sencilla  con NFC One-touch.<br>\r\nSongPal.<br>\r\nPantalla de luces LED.<br>\r\nEfectos de DJ.<br>\r\nPotencia 1800W.<br>\r\n2 entrada de audio analÃ³gica. <br>\r\n1 salida de audio analÃ³gica. <br>\r\nPuerto USB.<br>', 15, 1000000.00, 'sony-0256-826445-1-product.jpg', 815000.00, 2),
(16, 'iPhone 5S 16GB Desbloqueado-Gris espacial', 'Pantalla multitÃ¡ctil de 4" <br>\r\nCÃ¡mara Facetime de 8 MP <br>\r\nSistema Operativo IOS 7 <br>\r\nProcesador chip A7 de 64 bits <br>\r\nCÃ¡mara iSight con FaceTime HD <br>', 22, 1700000.00, 'iphone-apple-8080-426342-1-product.jpg', 1300000.00, 2),
(17, 'iPhone 6 16GB Desbloqueado-Gris Espacial', 'Pantalla multitÃ¡ctil de 4.7Â´Â´ <br>\r\nCÃ¡mara Facetime de 8 MP <br>\r\nSistema Operativo IOS 8 <br>\r\nProcesador chip A8 <br>\r\nCÃ¡mara iSight con FaceTime HD <br>', 16, 2500000.00, 'apple-2643-084961-1-product.jpg', 1750000.00, 2),
(18, 'Samsung Galaxy S6 - Desbloqueado - Negro', 'Amplia memoria RAM (3GB)<br>\r\nDelgado (6.8mm) <br>\r\nCÃ¡mara de alta resoluciÃ³n (16MP) <br>\r\nConectividad 4G LTE Para Todo Operador <br>\r\nProcesador octa-core 64 bits <br>\r\nExcelente densidad de pixels (577ppi) <br> \r\nPantalla Quad HD de 5.1 pulgadas, <br>\r\nProcesador de 64 bits Exynos octa-core,<br>\r\nEsta vez sin ranura microSD,<br>\r\nCorre Android 5.0 Lollipop con un totalmente mejorado TouchWiz.<br>', 50, 2400000.00, 'samsung_galaxy_s6_edge_32gb.jpg', 1850000.00, 2),
(30, 'SofÃ¡ Cama  Microfibra-Chocol', 'Material: Microfibra. <br>\r\nTapizado en algodÃ³n siliconado.<br>\r\nEspuma de alta resistencia.<br>\r\nEspaldar reclinable.<br>\r\nPatas metÃ¡licas.<br>\r\nColores segÃºn mostrario.<br>', 20, 899900.00, 'sofa.jpg', 699900.00, 3),
(31, 'Armario Venecia RTA Design-Wengue', 'Material: Tablero MDF <br>\r\n1 EntrepaÃ±o en la parte superior <br>\r\n3 EntrepaÃ±os en la parte izquierda <br>\r\n1 Colgadero para chamarras o trajes. <br>\r\n3 Cajones en la parte lateral.<br>\r\n3 Puertas.<br>\r\nEl producto se entrega desarmado y empacado en cajas con manual de instrucciones para facilitar su armado.<br>', 26, 399900.00, 'armario.jpg', 289900.00, 3),
(32, 'BaterÃ­a de Cocina 10 Piezas Imusa Antiadhere', '10 piezas. <br>\r\nMaterial interior: Antiadherente.<br>\r\nMaterial exterior: Antiadherente.<br>\r\nTapas de vidrio.<br>\r\nContiene:<br>\r\nOlla 24cm.<br>\r\nPerol 18cm.<br>\r\nSarten 24cm.<br>\r\nPlancha 27cm.<br>\r\n4 utensilios: <br>\r\nCuchara, <br>\r\nespumadera, <br>\r\nespatula y cucharon.<br>', 30, 119900.00, 'ollas.jpg', 99900.00, 3),
(33, 'Set x 5 Piezas de Cocina Nihao Kitchen-Negro', 'Material: PlÃ¡stico â€“ Acero <br>\r\nSet x 5 Piezas. <br>\r\nIdeal para cortar, pelar y destapar.<br>\r\nIncluye: 1 tijeras, 2 cuchillos, 1 destapador y 1 pelador.', 13, 24900.00, 'cuchillos.jpg', 20000.00, 3),
(34, 'ColchÃ³n Doble Golden Deluxe 140 x 190 cm-Bla', 'ColchÃ³n ortopÃ©dico semifirme.<br>\r\nAcolchado en Pillow Top y tela Jackard. <br>\r\nUnidad resortada y compacta en acero. <br>\r\nResortes Bonell de 6 vueltas calibre 13.<br>\r\nUnidad resortada calibre 17.<br>\r\nMarco de contorno calibre 7.<br>\r\n1 LÃ¡mina de Politex.<br>\r\n1 LÃ¡mina de espuma D18.<br>\r\nÃndice de Firmeza: <br>\r\n3 en escala de 1 a 5, siendo 1 el mas suave y 5 el mas firme.<br>\r\nEnvÃ­o no aplica para San AndrÃ©s o Leticia.<br>\r\nNo incluye basecama ni elementos de ambientaciÃ³n.', 27, 700000.00, 'colchon.jpg', 569900.00, 3),
(35, 'Auto Radio Control Street Troopers Maisto 811', 'VehÃ­culo radio control street troopers.<br>\r\nVienen en colores surtidos: amarillo, rojo negro (sujeto a disponibilidad). <br>\r\nEste vehÃ­culo lanza dardos.<br>', 12, 20690.00, 'jugute carro.jpg', 144900.00, 4),
(37, 'Equestria Girl Escenario de Rock Hasbro A8060', 'Set de 20Â´Â´ con 6 Espacios para poner a las Equestria Girls.<br>\r\nIncluye 3 Instrumentos Exclusivos: CaÃ±Ã³n, Pandereta y Dj.<br>\r\nDiviÃ©rtete Jugando.\r\nEdad Recomendada: 5 aÃ±os en Adelante.<br>', 23, 189900.00, 'muleca.jpg', 113900.00, 4),
(38, 'Little Tikes Princess Cozy Coupe Ride-On', 'Piso desmontable y asa en la parte posterior para los paseos de empuje controlado por los padres<br>\r\nDiseÃ±ada con un alto respaldo y almacenamiento en la parte posterior <br>\r\nIncluye caracterÃ­sticas especiales como un? interruptor de encendido "y un tapÃ³n de apertura y cierre <br>\r\nAcogedor rodillos neumÃ¡ticos resistente durable las ruedas delanteras giran 360 grados\r\nMade in USA<br>\r\nProducto Nuevo Original y enviado desde USA.<br>\r\nVersiÃ³n en InglÃ©s.<br>', 58, 405190.00, 'carrito.jpg', 385900.00, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nombreUsu` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombreUsu`, `contrasena`, `email`) VALUES
(1, 'juan', '1234e', 'juan@hotmail.com'),
(2, 'camilo', '456a', 'camilo@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
 ADD PRIMARY KEY (`idfactura`,`idusuario`), ADD KEY `fk_compras_usuarios1_idx` (`idusuario`);

--
-- Indices de la tabla `listaobjetos`
--
ALTER TABLE `listaobjetos`
 ADD PRIMARY KEY (`idListaObjetos`,`compras_idfactura`,`categorias_idCat`,`productos_idProducto`), ADD KEY `fk_ListaObjetos_compras1_idx` (`compras_idfactura`), ADD KEY `fk_ListaObjetos_categorias1_idx` (`categorias_idCat`), ADD KEY `fk_ListaObjetos_productos1_idx` (`productos_idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`idProducto`), ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`), ADD KEY `fk_Productos_Categorias_idx` (`Categorias_idCat`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `listaobjetos`
--
ALTER TABLE `listaobjetos`
MODIFY `idListaObjetos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
ADD CONSTRAINT `fk_compras_usuarios1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `listaobjetos`
--
ALTER TABLE `listaobjetos`
ADD CONSTRAINT `fk_ListaObjetos_categorias1` FOREIGN KEY (`categorias_idCat`) REFERENCES `categorias` (`idCat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ListaObjetos_compras1` FOREIGN KEY (`compras_idfactura`) REFERENCES `compras` (`idfactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ListaObjetos_productos1` FOREIGN KEY (`productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `fk_Productos_Categorias` FOREIGN KEY (`Categorias_idCat`) REFERENCES `categorias` (`idCat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
