-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2015 a las 06:57:27
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCat`, `nombreCat`) VALUES
(1, 'juegos'),
(2, 'Tecnologia'),
(3, 'Hogar');

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

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idfactura`, `fecha`, `valorTot`, `direccion`, `idusuario`) VALUES
('262606628_94053094', '2015-06-02', 6850000.00, 'calle falsa 123', 2),
('310913188_990358681', '2015-06-02', 8450000.00, 'calle 17 no 43-33 la colina pasto', 1),
('651136809_348423121', '2015-06-02', 5400000.00, 'calle 17 no 43-33 la colina pasto', 1);

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

--
-- Volcado de datos para la tabla `listaobjetos`
--

INSERT INTO `listaobjetos` (`idListaObjetos`, `nombre`, `cantidad`, `valorUnid`, `valorTot`, `compras_idfactura`, `categorias_idCat`, `productos_idProducto`) VALUES
(5, 'tv 45 LG', 3, 800000.00, 2400000.00, '651136809_348423121', 2, 9),
(6, 'tv 34 Samsung', 4, 750000.00, 3000000.00, '651136809_348423121', 2, 6),
(7, 'tv 34 Samsung', 7, 750000.00, 5250000.00, '310913188_990358681', 2, 6),
(8, 'tv 34 Samsung', 7, 750000.00, 5250000.00, '262606628_94053094', 2, 6),
(9, 'tv 45 LG', 2, 800000.00, 1600000.00, '262606628_94053094', 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`idProducto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `presioVenta` double(10,2) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `PresioCompra` double(10,2) NOT NULL,
  `Categorias_idCat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `cantidad`, `presioVenta`, `foto`, `PresioCompra`, `Categorias_idCat`) VALUES
(6, 'tv 34 Samsung', 'Pulgadas: 32 <br> Medida Diagonal: 80Cm <br> Sintonizador Digital DVB-T2 <br> Resoluciï¿½n: HD <br> Contraste: MEGA <br> Entradas: HDMI USB COMPONENTE <br> Velocidad Respuesta: 120 CMR <br> Otros: SMART TV - MODO FUTBOL- DISEï¿½O DELGADO">">">">', 100, 800000.00, 'imgProductostv32.jpg', 600000.00, 2),
(9, 'tv 45 LG', 'tvgrande <br> muy bonito', 45, 800000.00, 'imgProductostv32.jpg', 700000.00, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuario` int(11) NOT NULL,
  `nombreUsu` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `listaobjetos`
--
ALTER TABLE `listaobjetos`
MODIFY `idListaObjetos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
