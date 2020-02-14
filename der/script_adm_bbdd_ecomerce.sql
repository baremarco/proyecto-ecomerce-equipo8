drop database ecomerce;

create database ecomerce;

/*CREAMOS LA TABLA CATEGORIAS*/
create table categorias(
	catId 			int auto_increment primary key,
	catNombre 		varchar(40)

);

/*CREACION DE LA TABLA MARCAS*/
create table marcas(
	marId			int auto_increment primary key,
    marNombre		varchar(40)
);


/*CREACION DE LA TABLA CARRITOS*/
create table carritos(
	carId			int primary key not null unique,
    carIdProducto	int not null
);

/*CREACION DE LA TABLA EMPRESAS*/
create table empresas(
	empId			int auto_increment primary key,
    empCuil			int not null,
    empNombre		varchar(40)
);

/*CREACION DE TABLA USUARIOS*/
create table usuarios(
	usrId				int auto_increment primary key,
    usrNombre			varchar(40),
    usrApellido			varchar(40),
    usrEmail			varchar(40),
    usrCelular			varchar(40),
    usrFechaNacimiento	date,
    usrIdEmpresa		int,
    usrPassword			varchar(100),
    usrAvatar			varchar(100),
    foreign key (usrIdEmpresa) references empresas(empId)
);

/*CREACION DE LA TABLA PRODUCTOS*/
create table productos(
	prdId			int auto_increment primary key,
    prdNombre		varchar(40),
    prdModelo		varchar(40),
    prdDescripcion	varchar(200),
    prdPrecio		float,
    prdIdCategoria	int,
    prdIdMarca		int,
    prdIdUsuario	int,
    prdImagen		varchar(100),
    foreign key (prdIdCategoria) references categorias(catId),
    foreign key (prdIdMarca) references marcas(marId),
    foreign key (prdIdUsuario) references usuarios(usrId)
    
);

drop table carritos;

create table carritos(
	carId				int primary key not null unique,
    carIdProducto		int not null,
    carUsuarios_usrId	int not null,
    foreign key (carUsuarios_usrId) references usuarios(usrId)
);
/*CREACIOS DE TABLA INTERMEDIA VENTAS PRODUCTOS-USUARIOS*/
create table ventas(
	venId			int auto_increment primary key,
    venIdProducto	int,
    venIdUsuario	int,
    foreign key (venIdProducto) references productos(prdId),
    foreign key (venIdUsuario) references usuarios(usrId)
);

