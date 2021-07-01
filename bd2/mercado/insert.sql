-- https://www.4devs.com.br/gerador_de_pessoas
-- https://www.clubeextra.com.br/

insert into cargo_funcionario values
	(null, 'Gerente'),
	(null, 'Caixa');

insert into funcionario values
	(null, '170.633.128-20', 'Tatiane', 'Isabelle Costa', 1),
	(null, '214.340.248-14', 'Thales', 'Bruno Benício', 2),
	(null, '311.857.458-58', 'Murilo', 'Tomás das Neves', 2);

insert into categoria_produto values
	(null, 'Alimentos'),
	(null, 'Bebidas'),
	(null, 'Perfumaria'),
	(null, 'Limpeza');

insert into produto values
	(null, 2, 'Água Mineral sem Gás Minalba 5 Litros', 10.00, 10),
	(null, 1, 'Arroz Agulhinha Tipo 1 CAMIL Pacote 5kg', 15.00, 10),
	(null, 1, 'Feijão Carioca Tipo 1 CAMIL Pacote 1kg', 8.00, 10),
	(null, 1, 'Macarrão com Ovos Espaguete Nº 8 DONA BENTA Pacote 500g', 3.00, 10),
	(null, 3, 'Sabonete JOHNSON´S Creme de Amêndoas 90g', 2.00, 10),
	(null, 4, 'Detergente Líquido YPÊ Neutro 500ml', 2.00, 10),
	(null, 2, 'Bebida em Pó TANG Uva 25g', 2.00, 10),
	(null, 2, 'Leite Longa Vida Desnatado Molico NESTLÉ 1 Litro', 5.00, 20),
	(null, 2, 'Leite Longa Vida Integral Ninho NESTLÉ 1 Litro', 5.00, 20),
	(null, 1, 'Óleo de Soja LIZA Pet 900ml', 4.00, 10);

insert into venda values
	(null, 3, '2019-04-20 16:15:00'),
	(null, 3, '2019-04-20 16:30:00'),
	(null, 3, '2019-04-20 16:35:00'),
	(null, 2, '2019-04-20 17:04:00'),
	(null, 2, '2019-04-20 17:13:00');

insert into item_venda values
	(null, 1, 3, 1),
	(null, 2, 9, 5),
	(null, 2, 2, 1),
	(null, 3, 3, 1),
	(null, 4, 1, 2),
	(null, 5, 5, 3),
	(null, 5, 6, 1);