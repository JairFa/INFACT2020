-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 14:38:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infact2020`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbodega`
--

CREATE TABLE `tblbodega` (
  `IDBodega` int(15) NOT NULL,
  `CantidadProducto` int(30) NOT NULL,
  `EstadoProducto` varchar(30) NOT NULL,
  `NombreProducto` varchar(30) NOT NULL,
  `ValoresProducto` int(30) NOT NULL,
  `IDProveedor` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudades`
--

CREATE TABLE `tblciudades` (
  `IDCiudad` int(15) NOT NULL,
  `NombreDepartamento` varchar(30) NOT NULL,
  `NombreCiudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldatospersonales`
--

CREATE TABLE `tbldatospersonales` (
  `NumeroDoc` int(15) NOT NULL,
  `IDUsuario` int(15) NOT NULL,
  `NombreCompleto` varchar(30) NOT NULL,
  `TipoDoc` char(30) NOT NULL,
  `CorreoElectronico` varchar(30) NOT NULL,
  `Celular` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblfactura`
--

CREATE TABLE `tblfactura` (
  `IDFactura` int(15) NOT NULL,
  `IDVendedor` int(15) NOT NULL,
  `CodigoProducto` varchar(30) NOT NULL,
  `CantidadProducto` int(30) NOT NULL,
  `ValorUnidad` int(30) NOT NULL,
  `Valortotal` int(30) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblinventarioproducto`
--

CREATE TABLE `tblinventarioproducto` (
  `IDInventarioProducto` int(15) NOT NULL,
  `CantidadProducto` int(15) NOT NULL,
  `EstadoProducto` char(10) NOT NULL,
  `IDBodega` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproducto`
--

CREATE TABLE `tblproducto` (
  `IDCodigoProducto` int(15) NOT NULL,
  `NombreProducto` varchar(30) NOT NULL,
  `DescripcionProducto` varchar(30) NOT NULL,
  `IDInventarioProducto` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproveedor`
--

CREATE TABLE `tblproveedor` (
  `IDProveedor` int(15) NOT NULL,
  `NitProveedor` int(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `DireccionProveedor` varchar(30) NOT NULL,
  `CelularProveedor` bigint(20) NOT NULL,
  `EstadoProveedor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrol`
--

CREATE TABLE `tblrol` (
  `IDRol` int(11) NOT NULL,
  `NombreRol` varchar(30) NOT NULL,
  `EstadoRol` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsucursal`
--

CREATE TABLE `tblsucursal` (
  `IDSucursal` int(15) NOT NULL,
  `NumeroDocumento` bigint(15) NOT NULL,
  `NombreSucursal` varchar(30) NOT NULL,
  `DireccionSucursal` varchar(30) NOT NULL,
  `IDCiudad` int(15) NOT NULL,
  `Celular` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltienda`
--

CREATE TABLE `tbltienda` (
  `IDTienda` int(15) NOT NULL,
  `NombreTienda` varchar(30) NOT NULL,
  `TipoDocumento` char(11) NOT NULL,
  `NumeroDocumento` bigint(15) NOT NULL,
  `Contacto` bigint(15) NOT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `IDUsuario` int(15) NOT NULL,
  `IDRol` varchar(30) NOT NULL,
  `IDSucursal` int(15) NOT NULL,
  `Usuarios` varchar(20) NOT NULL,
  `Contraseña` varchar(15) NOT NULL,
  `EstadoUsu` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblbodega`
--
ALTER TABLE `tblbodega`
  ADD PRIMARY KEY (`IDBodega`),
  ADD KEY `IDProveedor` (`IDProveedor`);

--
-- Indices de la tabla `tblciudades`
--
ALTER TABLE `tblciudades`
  ADD PRIMARY KEY (`IDCiudad`);

--
-- Indices de la tabla `tbldatospersonales`
--
ALTER TABLE `tbldatospersonales`
  ADD PRIMARY KEY (`NumeroDoc`),
  ADD KEY `IDUsuario` (`IDUsuario`);

--
-- Indices de la tabla `tblfactura`
--
ALTER TABLE `tblfactura`
  ADD PRIMARY KEY (`IDFactura`),
  ADD KEY `IDVendedor` (`IDVendedor`),
  ADD KEY `CodigoProducto` (`CodigoProducto`);

--
-- Indices de la tabla `tblinventarioproducto`
--
ALTER TABLE `tblinventarioproducto`
  ADD PRIMARY KEY (`IDInventarioProducto`),
  ADD KEY `IDBodega` (`IDBodega`);

--
-- Indices de la tabla `tblproducto`
--
ALTER TABLE `tblproducto`
  ADD PRIMARY KEY (`IDCodigoProducto`),
  ADD KEY `IDInventarioProducto` (`IDInventarioProducto`);

--
-- Indices de la tabla `tblproveedor`
--
ALTER TABLE `tblproveedor`
  ADD PRIMARY KEY (`IDProveedor`);

--
-- Indices de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  ADD PRIMARY KEY (`IDRol`);

--
-- Indices de la tabla `tblsucursal`
--
ALTER TABLE `tblsucursal`
  ADD PRIMARY KEY (`IDSucursal`),
  ADD KEY `NumeroDocumento` (`NumeroDocumento`),
  ADD KEY `IDCiudad` (`IDCiudad`);

--
-- Indices de la tabla `tbltienda`
--
ALTER TABLE `tbltienda`
  ADD PRIMARY KEY (`NumeroDocumento`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`IDUsuario`),
  ADD KEY `IDRol` (`IDRol`),
  ADD KEY `IDSucursal` (`IDSucursal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
