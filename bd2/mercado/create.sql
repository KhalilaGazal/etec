create database mercado;
use mercado;

create table cargo_funcionario(
	id int primary key auto_increment,
    nome varchar(255)
);

create table funcionario(
	id int primary key auto_increment,
	cpf varchar(14),
    nome varchar(255),
    sobrenome varchar(255),
    id_cargo int,
    foreign key(id_cargo) references cargo_funcionario(id)
);

create table categoria_produto(
	id int primary key auto_increment,
    nome varchar(255)
);

create table produto(
	id int primary key auto_increment,
    id_categoria int,
    nome varchar(255),    
    preco decimal(5,2),
    qtd int,
    foreign key (id_categoria) references categoria_produto(id)
);

create table venda(
	id int primary key auto_increment,
    id_funcionario int,
    data_hora datetime,
    foreign key (id_funcionario) references funcionario(id)
);

create table item_venda(
	id int primary key auto_increment,
    id_venda int,
    id_produto int,
    qtd int,
    foreign key (id_venda) references venda(id),
    foreign key (id_produto) references produto(id)
);

show tables;