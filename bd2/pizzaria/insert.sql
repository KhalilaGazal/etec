-- https://www.4devs.com.br/gerador_de_pessoas
-- http://www.lellucapizzaria.com.br/cardapio-pizzas.asp
-- https://www.clubeextra.com.br/secoes/C76/bebidas?qt=12&s=sort_name%2520asc&p=1&gt=list

insert into cliente values
	(null, '877.623.088-06', 'Lorena', 'Luzia da Mota', 'lorenaluzia@gmail.com'),
	(null, '786.684.588-33', 'Oliver', 'Thiago Leonardo Gonçalves', 'oliverthiago@gmail.com'),
	(null, '482.853.978-66', 'Thales', 'Cauê Silveira', 'thalescaue@gmail.com'),
	(null, '725.601.018-40', 'Manuel', 'Pereira da Costa', 'manueldacosta@gmail.com'),
	(null, '698.192.068-98', 'Arthur', 'Rodrigues Campos', 'arthurcampos@gmail.com'),
	(null, '422.756.348-86', 'Renato', 'Antonio Luís Nascimento', 'renatonascimento@gmail.com'),
	(null, '847.621.018-34', 'Daiane', 'Catarina da Paz', 'daianecatarina@gmail.com'),
	(null, '114.513.838-19', 'Sara', 'Heloisa Assis', 'saraheloisa@gmail.com'),
	(null, '930.487.568-41', 'Aparecida', 'da Rocha', 'aparecidarocha@gmail.com'),
	(null, '664.662.908-08', 'Stefany', 'Fabiana Gomes', 'stefanygomes@gmail.com');

insert into telefone_cliente values
	(null, '(11) 99143-8750', 1),
	(null, '(11) 2870-3789', 1),
	(null, '(11) 99983-3563', 2),
	(null, '(11) 98208-3548', 3),
	(null, '(11) 98631-0048', 4),
	(null, '(11) 99285-3621', 5),
	(null, '(11) 99632-5874', 6),
	(null, '(11) 98752-9585', 7),
	(null, '(11) 3818-4857', 8),
	(null, '(11) 99777-1574', 8),
	(null, '(11) 99247-1695', 9),
	(null, '(11) 98853-4989', 10);    

insert into endereco_cliente values
	(null, '04566-050', 'Rua Francisco Branco Capozzi', '334', 'Cidade Monções', 'São Paulo', 'SP', 1),
    (null, '08070-320', 'Rua Benjamim do Monte', '923', 'Parque Cruzeiro do Sul', 'São Paulo', 'SP', 2),
    (null, '02970-020', 'Rua Santa Teresa de Ávila', '719', 'Jardim São José', 'São Paulo', 'SP', 3),
    (null, '05159-200', 'Rua Belo Jardim', '505', 'Jardim Mutinga', 'São Paulo', 'SP', 4),
    (null, '02312-050', 'Rua Professor Wolf', '131', 'Vila Nova Mazzei', 'São Paulo', 'SP', 5),
    (null, '03169-040', 'Rua Marcial', '622', 'Mooca', 'São Paulo', 'SP', 6),
    (null, '02241-080', 'Rua Estefânia Louro', '874', 'Vila Dom Pedro II', 'São Paulo', 'SP', 7),
    (null, '04507-120', 'Rua Doutor João Borges Filho', '695', 'Vila Nova Conceição', 'São Paulo', 'SP', 8),
    (null, '03563-090', 'Rua Hipólito Xavier', '650', 'Jardim São José', 'São Paulo', 'SP', 9),
    (null, '02128-030', 'Rua Ampére', '361', 'Vila Maria Alta', 'São Paulo', 'SP', 10);


insert into cargo_funcionario values
	(null, 'Gerente'),
	(null, 'Vendedor'),
	(null, 'Pizzaiolo'),
	(null, 'Entregador');

insert into funcionario values
	(null, 2, '913.978.538-67', '21.140.264-3', 'Renata', 'Isabelly Pires', '1988-08-04', 'renatapires@gmail.com'),
	(null, 2, '013.767.628-03', '21.361.659-2', 'Carla', 'Julia Pietra', '1994-05-27', 'carlapietra@gmail.com'),
	(null, 3, '990.676.648-47', '26.878.958-7', 'Gabriel', 'Jorge Moreira', '1984-06-15', 'gabrielmoreira@gmail.com'),
	(null, 3, '340.215.228-24', '29.871.255-6', 'Renato', 'Bento da Rosa', '1977-11-25', 'renatobento@gmail.com'),
	(null, 4, '821.238.118-82', '46.085.165-2', 'Guilherme', 'Ruan Viana', '1994-08-26', 'guilhermeruan@gmail.com'),
	(null, 4, '572.777.228-17', '33.739.845-8', 'Julio', 'Filipe Vieira', '1996-12-05', 'juliofilipe@gmail.com'),
	(null, 1, '630.512.608-94', '47.799.477-5', 'Renato', 'Benjamin da Cunha', '1971-07-01', 'renatocunha@gmail.com');

insert into telefone_funcionario values
	(null, '(11) 2821-2489', 1),
	(null, '(11) 99217-9490', 1),
	(null, '(11) 3764-1916', 2),
	(null, '(11) 99578-1539', 2),
	(null, '(11) 2802-6155', 3),
	(null, '(11) 98768-7061', 3),
	(null, '(11) 2542-9948', 4),
	(null, '(11) 99832-7595', 4),
	(null, '(11) 2948-8961', 5),
	(null, '(11) 98129-9945', 5),
	(null, '(11) 2703-8425', 6),
	(null, '(11) 99753-8596', 6),
	(null, '(11) 2635-9944', 7),
	(null, '(11) 98836-7627', 7);

insert into endereco_funcionario values
	(null, '05415-011', 'Rua Joaquim Antunes', '260', 'Pinheiros', 'São Paulo', 'SP', 1),
	(null, '03447-125', 'Travessa Santa Júlia', '997', 'Vila Carrão', 'São Paulo', 'SP', 2),
	(null, '04455-340', 'Rua Januário da Rocha Franca', '172', 'Vila Campo Grande', 'São Paulo', 'SP', 3),
	(null, '05270-020', 'Rua Barretos', '729', 'Sítio Itaberaba I', 'São Paulo', 'SP', 4),
	(null, '03721-035', 'Rua Pedro de Brito', '715', 'Cangaíba', 'São Paulo', 'SP', 5),
	(null, '05314-010', 'Rua Hayden', '993', 'Vila Leopoldina', 'São Paulo', 'SP', 6),
	(null, '05542-030', 'Rua Bergognone', '404', 'Jardim Olympia', 'São Paulo', 'SP', 7);


insert into categoria_pizza values
	(null, 'Tradicional'),
	(null, 'Doce'),
	(null, 'Especial');

insert into tamanho_pizza values
	(null, 'Grande'),
    (null, 'Broto');
    
insert into pizza values
	(null, 1, 'Alho e Óleo', 'Alho refogado em óleo gratinado com parmesão ralado', 1, 38.00),
	(null, 1, 'Alho e Óleo', 'Alho refogado em óleo gratinado com parmesão ralado', 2, 28.00),
	(null, 1, 'Bauru', 'Presunto com rodelas de tomate e mussarela', 1, 42.00),
	(null, 1, 'Bauru', 'Presunto com rodelas de tomate e mussarela', 2, 30.00),
	(null, 1, 'Cinco Queijos', 'Mussarela, gorgonzola, catupiry, parmesão e provolone', 1, 47.00),
	(null, 1, 'Cinco Queijos', 'Mussarela, gorgonzola, catupiry, parmesão e provolone', 2, 34.00),
	(null, 1, 'Vegetariana', 'Escarola, ervilha, milho verde e cebola coberta com mussarela de búfala', 1, 42.00),
	(null, 1, 'Vegetariana', 'Escarola, ervilha, milho verde e cebola coberta com mussarela de búfala', 2, 30.00),
	(null, 2, 'Banana', 'Banana, açúcar, canela e mussarela', 1, 38.00),
	(null, 2, 'Banana', 'Banana, açúcar, canela e mussarela', 2, 28.00),
	(null, 2, 'Sensação', 'Chocolate ao leite com pedaços de morango', 1, 42.00),
	(null, 2, 'Sensação', 'Chocolate ao leite com pedaços de morango', 2, 30.00),
	(null, 2, 'Romeu e Julieta', 'Mussarela com goiabada', 1, 42.00),
	(null, 2, 'Romeu e Julieta', 'Mussarela com goiabada', 2, 30.00),
	(null, 2, 'Prestígio', 'Chocolate ao leite com granulado, leite condensado e coco ralado', 1, 42.00),
	(null, 2, 'Prestígio', 'Chocolate ao leite com granulado, leite condensado e coco ralado', 2, 30.00),
	(null, 3, 'Camarão', 'Camarão refogado coberto com mussarela ou catupiry', 1, 70.00),
	(null, 3, 'Camarão', 'Camarão refogado coberto com mussarela ou catupiry', 2, 50.00),
	(null, 3, 'Colorado do Brás', 'Mussarela, catupiry, presunto picado, bacon e milho', 1, 45.00),
	(null, 3, 'Colorado do Brás', 'Mussarela, catupiry, presunto picado, bacon e milho', 2, 33.00),
	(null, 3, 'Berinjela', 'Berinjela refogada coberta com mussarela ou catupiry', 1, 44.00),
	(null, 3, 'Berinjela', 'Berinjela refogada coberta com mussarela ou catupiry', 2, 32.00),
	(null, 3, 'Batata Palha', 'Batata palha, mussarela ou catupiry', 1, 38.00),
	(null, 3, 'Batata Palha', 'Batata palha, mussarela ou catupiry', 2, 28.00);


insert into tipo_bebida values
	(null, 'Refrigerante'),
	(null, 'Suco'),
	(null, 'Água'),
    (null, 'Água de Coco'),
    (null, 'Chá');

insert into bebida values
	(null, 1, 'Refrigerante Coca-Cola Lata', '350ml', 5.00),
	(null, 1, 'Refrigerante Fanta Laranja Lata', '350ml', 4.50),
	(null, 4, 'Água de Coco Integral Obrigado', '200ml', 4.00),
	(null, 3, 'Água Mineral Crystal Garrafa', '500ml', 3.00),
	(null, 3, 'Água Mineral com Gás Crystal Garrafa', '500ml', 3.50),
	(null, 1, 'Refrigerante de Limão de Baixa Caloria H2OH! Garrafa', '500ml', 3.50),
	(null, 5, 'Chá Leão Ice Tea Limão Zero', '450ml', 6.00),
	(null, 2, 'Suco de Laranja Integral Do Bem', '200ml', 4.00),
	(null, 2, 'Suco Néctar Misto Pêssego Del Valle Lata', '290ml', '4.50');


insert into pedido values
	(null, 1, 9, '2019-01-05 22:41:50'),
	(null, 1, 8, '2019-01-05 22:53:34'),
	(null, 2, 5, '2019-01-06 23:18:22'),
	(null, 2, 2, '2019-01-06 23:30:14'),
	(null, 1, 6, '2019-01-07 22:19:55'),
	(null, 1, 1, '2019-01-07 22:25:33'),
	(null, 2, 8, '2019-01-08 22:52:25'),
	(null, 2, 4, '2019-01-08 23:15:05');

insert into pizza_pedido values
	(null, 1, 7, 1, ''),
	(null, 1, 10, 1, ''),
	(null, 2, 5, 2, ''),
	(null, 3, 12, 1, ''),
	(null, 4, 21, 1, 'Catupiry'),
	(null, 5, 3, 1, ''),
	(null, 6, 16, 1, ''),
	(null, 6, 3, 1, ''),
	(null, 7, 10, 1, ''),
	(null, 8, 7, 1, '');


insert into bebida_pedido values
	(null, 1, 1, 1, ''), 
	(null, 1, 6, 1, ''),
	(null, 3, 1, 2, ''),
	(null, 6, 4, 1, ''),
	(null, 6, 7, 1, ''),
	(null, 6, 8, 1, ''),
	(null, 8, 3, 2, '');