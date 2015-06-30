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

