drop database if exists dulceria;
CREATE DATABASE dulceria;
USE dulceria;
CREATE TABLE vendedor(
    id int NOT NULL primary key AUTO_INCREMENT,
    nombre varchar (20) NOT NULL,
    apellido varchar (20) NOT NULL,
    telefono varchar (15)
);
CREATE TABLE cliente (
    id int NOT NULL primary key AUTO_INCREMENT,
    nombre varchar (20) NOT NULL,
    apellido varchar (20) NOT NULL
);
CREATE TABLE inventario (
    id int NOT NULL primary key AUTO_INCREMENT,
    stock varchar (100) NOT NULL,
    disponible varchar (100) NOT NULL
);
CREATE TABLE snack (
    id int NOT NULL primary key AUTO_INCREMENT,
    id_inventario int(10) NOT NULL,
    nombre varchar (20) NOT NULL,
    marca varchar (20) NOT NULL,
    precio varchar (10),
    foreign key (id_inventario) references inventario(id)
);
CREATE TABLE venta (
    id int NOT NULL primary key AUTO_INCREMENT,
    numeroventa varchar (100) NOT NULL,
    fecha varchar (50) NOT NULL,
    total varchar (255) NOT NULL,
    id_vendedor int NOT NULL,
    foreign key (id_vendedor) references vendedor(id),
    id_snack int NOT NULL,
    foreign key (id_snack) references snack(id),
    id_cliente int NOT NULL,
    foreign key (id_cliente) references cliente(id)
);