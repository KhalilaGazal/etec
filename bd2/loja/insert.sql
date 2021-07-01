insert into tbEstado values
	(null, 'SP'),
	(null, 'RJ'),
	(null, 'MG'),
	(null, 'BA'),
	(null, 'RS'),
    (null, 'AM'),
    (null, 'ES');

insert into tbCliente values
	(null, 'Gustavo Eduardo', '897.888.171-81', 4),
    (null, 'Giovanni Arthur', '261.871.529-21', 1),
    (null, 'Pedro Henrique', '443.369.611-07', 2),
    (null, 'Eduardo Lopes', '816.472.592-74', 3),
    (null, 'Igor Nicolas Souza', '318.213.688-78', 1);
    
insert into tbCategoria values
	(null, 'Feminino'),
    (null, 'Masculino'),
    (null, 'Infantil'),
    (null, 'Acessórios'),
    (null, 'Calçados');
    
insert into tbProduto values
	(null, 1, '2019-04-01', 'Macacão com faixa na cintura', 'Preta', 199.90),
    (null, 2, '2018-03-04', 'Jaqueta emborrachada com zíper', 'Amarela', 199.90),
    (null, 3, '2019-05-15', 'Camiseta com bolso camuflado', 'Cinza', 29.90),
    (null, 4, '2018-08-25', 'Colar longo com pingente em resina', '', 39.90),
	(null, 5, '2019-04-16', 'Tênis em lona', 'Branca', 249.99),
    (null, 2, '2019-04-01', 'Calça Jeans', 'Azul', 100.00);
    
insert into tbPedido values
	(null, '2019-02-15', 5),
    (null, '2019-02-18', 3),
    (null, '2019-02-16', 4),
    (null, '2019-02-20', 1),
    (null, '2019-02-25', 2);
    
insert tbItemPedido values
	(null, 3, 1, 1),
    (null, 2, 5, 1),
    (null, 1, 3, 2),
    (null, 4, 2, 1),
    (null, 5, 4, 1);
    
insert into tbFoneCli values
	(null, 5, '(11) 98765-4654'),
	(null, 4, '(11) 97432-8754'),
	(null, 2, '(11) 91938-0164'),
	(null, 4, '(11) 98744-7654'),
	(null, 3, '(11) 98765-5644');

    
insert into tbTeste values
(null, 'fdagfds', 'fdashfgdhdsa');
insert into tbTeste values
(null, 55, 'fdafdasfds');