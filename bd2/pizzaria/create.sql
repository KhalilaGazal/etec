create database pizzaria;
use pizzaria;

create table cliente(
	id int primary key auto_increment,
    cpf varchar(255) not null,
    nome varchar(255),
    sobrenome varchar(255),
    email varchar(255)
);

create table telefone_cliente(
	id int primary key auto_increment,
    numero varchar(255),
    id_cliente int,
    foreign key (id_cliente) references cliente(id)
);

create table endereco_cliente(
	id int primary key auto_increment,
    cep varchar(255),
    nome varchar(255),
    numero varchar(255),
    bairro varchar(255),
    cidade varchar(255),
    estado varchar(255),
    id_cliente int,
    foreign key (id_cliente) references cliente(id)
);


create table cargo_funcionario(
	id int primary key auto_increment,
    nome varchar(255)
);

create table funcionario(
	id int primary key auto_increment,
    id_cargo int,
    cpf varchar(255) not null,
    rg varchar (255) not null,    
    nome varchar(255),
    sobrenome varchar(255),
    data_nascimento date,
    email varchar(255),
    foreign key(id_cargo) references cargo_funcionario(id)
);

create table telefone_funcionario(
	id int primary key auto_increment,
    numero varchar(255),
    id_funcionario int,
    foreign key (id_funcionario) references funcionario(id)
);

create table endereco_funcionario(
	id int primary key auto_increment,
    cep varchar(255),
    nome varchar(255),
    numero varchar(255),
    bairro varchar(255),
    cidade varchar(255),
    estado varchar(255),
    id_funcionario int,
    foreign key (id_funcionario) references funcionario(id)
);


create table categoria_pizza(
	id int primary key auto_increment,
    nome varchar(255)
);

create table tamanho_pizza(
	id int primary key auto_increment,
    nome varchar(255)
);

create table pizza(
	id int primary key auto_increment,
    id_categoria int,
    nome varchar(255),
    descricao varchar(255),
    id_tamanho int,
    preco decimal(5,2),
    foreign key (id_categoria) references categoria_pizza(id),
    foreign key (id_tamanho) references tamanho_pizza(id)
);

create table tipo_bebida(
	id int primary key auto_increment,
	nome varchar(255)
);

create table bebida(
	id int primary key auto_increment,
    id_tipo int,
	nome varchar(255),    
    litros varchar(255),
    preco decimal(4,2),
    foreign key (id_tipo) references tipo_bebida(id)
);


create table pedido(
	id int primary key auto_increment,
    id_funcionario int,
    id_cliente int,
    data_pedido datetime,
    foreign key (id_funcionario) references funcionario(id),
    foreign key (id_cliente) references cliente(id)
);

create table pizza_pedido(
	id int primary key auto_increment,
	id_pedido int,
    id_pizza int,
    quantidade int,
    outras_informacoes varchar(255),    
    foreign key (id_pedido) references pedido(id),
    foreign key (id_pizza) references pizza(id)
);

create table bebida_pedido(
	id int primary key auto_increment,
	id_pedido int,
    id_bebida int,
    quantidade int,
	outras_informacoes varchar(255),
    foreign key (id_pedido) references pedido(id),
    foreign key (id_bebida) references bebida(id)
);