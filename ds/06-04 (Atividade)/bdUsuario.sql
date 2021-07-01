create database bdUsuario;
use bdUsuario;

create table tbUsuarios (
	codigo int primary key,
    nome varchar(45),
    email varchar(45),
    nivel int(11),
    login varchar(15),
    senha varchar(15)
);

select * from tbUsuarios;