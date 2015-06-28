create domain tcosto decimal(8,2)
	default 0
	check (value >=0);

create domain ttel bigint
	check (value between 04120000000 and 04129999999 or value between 04140000000 and 04149999999 or value between 04160000000 and 04169999999 or value between 04260000000 and 04269999999 or value between 04240000000 and 04249999999);

create domain tcedula integer
	check (value between 1000000 and 40000000);
	
create table cliente(
	cedula tcedula not null,
	nombre varchar(12),
	apellido varchar(20),
	direccion varchar(15),
	email varchar(30) not null,
	telefono ttel not null,
	primary key(cedula));

create table dispositivo(
	imei varchar(15) not null,
	marca varchar(20),
	modelo varchar(20),
	descripcion varchar(250),
	ced_cli tcedula not null,
	primary key(imei),
	foreign	key(ced_cli) references cliente(cedula));

create table tecnico(
	cedula tcedula not null,
	nombre varchar(12),
	apellido varchar(12),
	telefono ttel,
	primary key(cedula));

create table repuesto (
	codigo varchar(10) not null,
	nombre varchar(10) not null,
	descripcion varchar(250),
	cantidad integer not null,
	precio_unitario tcosto not null,
	check (precio_unitario >= 0),
	primary key (codigo));

create table factura(
	numero integer not null,
	descripcion varchar(150) not null,
	monto_total tcosto not null,
	fecha date not null,
	cedula_cli tcedula not null,
	foreign key (cedula_cli) references cliente(cedula),
	primary key (numero));

create table reparacion(
	imei varchar(15) not null,
	fecha_recibido date not null,
	fecha_entrega date,
	descripcion varchar(250) not null,
	estado varchar(25) default 'EN PROCESO DE REPARACIÓN',
	costo tcosto,
	observacion varchar(250) default '',
	cedula_tecnico tcedula not null,
	numero_factura integer not null,
	check (estado in ('REPARADO','NO REPARADO','EN PROCESO DE REPARACION')),
	foreign key (imei) references dispositivo(imei),
	foreign key (cedula_tecnico) references tecnico(cedula),
	foreign key (numero_factura) references factura(numero),
	primary key (imei,fecha_recibido));

create table detalle(
	imei varchar(15) not null,
	fecha_rec date not null,
	cantidad integer not null,
	codigo_rep varchar(10) not null,
	costo tcosto not null,
	numero_fact integer not null,
	foreign key (imei,fecha_rec) references reparacion(imei,fecha_recibido),
	foreign key (numero_fact) references factura(numero),
	foreign key (codigo_rep) references repuesto(codigo),
	primary key (imei, fecha_rec, codigo_rep, cantidad));
