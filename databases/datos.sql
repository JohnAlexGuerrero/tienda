CREATE TABLE cargos(
	id_cargo serial not null PRIMARY KEY,
	nomcargo varchar(30));

CREATE TABLE empleados(
	id_empleado varchar(20)not null PRIMARY KEY,
    nombres varchar(30)not null,
    apellidos varchar(30)not null,
    genero ENUM('F','M'),
    edad varchar(4),
    fch_nacio date,
    pais_nacio varchar(40),
    ciudad_nacio varchar(40),
    direccion varchar(50),
    foto varchar(50),
    email varchar(50),
    telefono varchar(30),
    profesion varchar(40)
);

CREATE TABLE usuarios(
	codigo_user serial primary KEY,
    usuario varchar(20)not null REFERENCES empleados(id_empleado),
    password varchar(50)not null,
    status ENUM('activo','bloqueado'),
    permiso_acceso ENUM('Superamdon','admin','general'),
    fch_creacion timestamp,
    cargo SMALLINT REFERENCES cargos(id_cargo)
);

CREATE TABLE medicos(
	idmedico varchar(20) not null primary KEY,
    titulo varchar(30),
    universidad varchar(40),
    ciudad varchar(30),
    fch_titulo date
	);
    
CREATE TABLE especialistas(
    idespecialista serial PRIMARY KEY,
	idmedico varchar(20) not null REFERENCES medicos(idmedico),
    titulo varchar(30),
    universidad varchar(40),
    ciudad varchar(30),
    fch_titulo date
	);