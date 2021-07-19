create database tienda

use tienda

create table administrador {
	idAdministrador int,
	idCliente int,
	idProducto int,
	idFactura int
}

create table factura {
	idPedido int,
	idFactura int,
	fecha date,
	producto varchar(100),
	detalle varchar(100)
}

create table cliente {
	idCliente int,
	nombre varchar(100),
	apellido varchar(100),
	dni int,
	email varchar(100),
	direccion varchar(100),
	telefono int
}

create table pedido {
	idPedido int,
	idCliente int,
	nombre_producto varchar(100),
	codigo_producto int
}

create table producto {
	idProducto varchar(100),
	codigo_producto int,
	precio double,
	calidad varchar(100),
	color varchar(100),
	tipo_producto varchar(100),
	estado_producto varchar(100),
	stock int
}
