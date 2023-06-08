drop database if exists practicaordenadores;
create database if not exists practicaordenadores;

use practicaordenadores;

create table if not exists ordenadores(
	id int primary key auto_increment,
    marca varchar(45),
    modelo varchar(45),
    precio int,
    descripcion text
);

/*
	Cargar datos desde ficheros
    -	A la hora de poner la ubicacion del fichero cada barra la tengo que duplicar
*/

-- Importar datos de un archivo csv
LOAD DATA INFILE 'C:\Users\Manu\OneDrive\Escritorio\Archivos CSV\ordenadores.csv'
INTO TABLE practicaordenadores.ordenadores
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES;

select * from ordenadores;