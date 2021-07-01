create database patrono;
use patrono;

create table localidade(
id int auto_increment primary key,
latitude varchar(255),
longitude varchar(255),
logradouro varchar(255),
numero varchar(255),
complemento varchar(255),
bairro varchar(255),
cidade varchar(255),
estado varchar(255),
cep varchar(255),
preco_min varchar(255),
preco_max varchar(255),
nome varchar(255),
descricao text,
horario varchar(255),
telefone varchar(255),
celular varchar(255),
email varchar(255),
link varchar(255),
data_cadastro datetime
);

select * from localidade;


create table usuario_nivel(
id int auto_increment primary key,
nome varchar(255)
);

insert into usuario_nivel values
(null, 'Administrador'),
(null, 'Moderador'),
(null, 'Usuário');

select * from usuario_nivel;


create table usuario(
id int auto_increment primary key,
email varchar(255),
usuario varchar(255),
senha varchar(255),
data_cadastro datetime,
id_nivel int,
foreign key (id_nivel) references usuario_nivel (id)
);

insert into usuario values
(null, 'admin@gmail.com', 'admin', md5('123456'), now(), 1);

select * from usuario;


create table contato(
id int auto_increment primary key,
nome varchar(255),
email varchar(255),
assunto varchar(255),
mensagem text,
data_cadastro datetime
);

select * from contato;


create table material_categoria(
id int auto_increment primary key,
nome varchar(255)
);

insert into material_categoria values
(null, 'Podcast'),
(null, 'Filme'),
(null, 'Série'),
(null, 'Vídeo'),
(null, 'Texto'),
(null, 'Livro'),
(null, 'Link útil'),
(null, 'Blog'),
(null, 'Cartilha'),
(null, 'Manual de prevenção do suicídio'),
(null, 'Atendimento online'),
(null, 'Atendimento presencial'),
(null, 'Outro');

select * from material_categoria;


create table material(
id int auto_increment primary key,
titulo varchar(255),
id_categoria int,
descricao text,
titulo_link varchar(255),
link varchar(255),
descricao_imagem text,
data_cadastro datetime,
foreign key (id_categoria) references material_categoria(id)
);

select * from material;