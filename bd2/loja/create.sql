create database bdLoja;
use bdLoja;

create table tbEstado(
	idEstado int primary key auto_increment,
    estado varchar(50)
);

create table tbCliente(
	idCliente int primary key auto_increment,
    nomeCliente varchar(100),
    cpfCliente varchar(15) not null,
    idEstado int,
    foreign key (idEstado) references tbEstado(idEstado)
);

create table tbFoneCli(
	idFoneCli int primary key auto_increment,
    idCliente int,
    numFone varchar(20),
    foreign key (idCliente) references tbCliente(idCliente)
);

create table tbCategoria(
	idCategoria int primary key auto_increment,
    categoria varchar(100)
);

create table tbProduto(
	idProduto int primary key auto_increment,
    idCategoria int,
    dtCadProduto date,
    produto varchar(100),
    cor varchar(50),
    valor decimal(5,2),
    foreign key (idCategoria) references tbCategoria(idCategoria)
);

create table tbPedido(
	idPedido int primary key auto_increment,
    dataPedido date,
    idCliente int,
    foreign key (idCliente) references tbCliente(idCliente)
);

create table tbItemPedido(
	idItemPedido int primary key auto_increment,
    idPedido int,
    idProduto int,
    qtdProduto int,
    foreign key (idPedido) references tbPedido(idPedido),
    foreign key (idProduto) references tbProduto(idProduto)
);

create table tbTeste(
	campo1 int,
    campo2 varchar(10),
    campo3 varchar(15)
);

show tables;

/*Alterações*/
-- 23/05
alter table tbCliente 
add rgCliente varchar(12);

/* 
Utilizando alter table:
	1 - Remova um campo da tabela
    2 - Adicione uma chave primária
    3 - Mude um tipo de dado de um campo da tabela
*/

-- exercício 1
alter table tbCliente 
drop rgCliente;

-- exercício 2
alter table tbTeste
change campo1 campo1 int auto_increment primary key;

-- exercício 3
alter table tbTeste
modify column campo2 int;

drop table tbTeste;