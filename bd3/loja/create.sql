create database loja;
use loja;

CREATE TABLE cliente
(
codigo_cliente SMALLINT NOT NULL ,
nome_cliente   CHAR(20),
endereco       CHAR(30),
cidade         CHAR(15),
CEP            CHAR(8),
UF             CHAR(2),
CNPJ           CHAR(20),
IE             CHAR(20),
PRIMARY KEY (codigo_cliente)
);

CREATE TABLE vendedor     
(
codigo_vendedor  SMALLINT   NOT NULL,
nome_vendedor    CHAR(20),
salario_fixo     DECIMAL(7,2),
faixa_comissão   CHAR(1),
PRIMARY KEY (codigo_vendedor)
) ;

CREATE TABLE produto
(
codigo_produto    SMALLINT NOT NULL  UNIQUE,
unidade           CHAR(3),
descricao_produto CHAR(30), 
val_unit          DECIMAL(7,2),
PRIMARY KEY (codigo_produto)
); 

CREATE TABLE  pedido
(	
num_pedido      int       not null   unique,
prazo_entrega   SMALLINT  not null,
codigo_cliente  SMALLINT  not null,
codigo_vendedor SMALLINT  not null,
PRIMARY KEY (num_pedido),
CONSTRAINT fk_cliente FOREIGN KEY (codigo_cliente)
            REFERENCES cliente(codigo_cliente),
CONSTRAINT fk_vendedor FOREIGN KEY (codigo_vendedor)
            REFERENCES 	vendedor (codigo_vendedor)
);

CREATE TABLE item_do_pedido
(
num_pedido       INT       not null ,
codigo_produto   SMALLINT  not null ,
quantidade       DECIMAL,
PRIMARY  KEY     (num_pedido,codigo_produto),
CONSTRAINT fk_pedido FOREIGN  KEY     (num_pedido)
                 REFERENCES pedido(num_pedido),
CONSTRAINT fk_produto FOREIGN  KEY     (codigo_produto)
                 REFERENCES produto (codigo_produto)
);