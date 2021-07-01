select * from tbEstado;
select * from tbCliente;
select * from tbFoneCli;
select * from tbCategoria;
select * from tbProduto;
select * from tbPedido;
select * from tbItemPedido;

select * from tbTeste;


-- 03-28

-- exercício 1
select * from tbCategoria;

-- exercício 2
select * from tbCategoria where idCategoria between 1 and 3;

-- exercício 3
select * from tbCategoria where idCategoria > 3;

-- exercício 4
select * from tbCategoria where idCategoria > 2 and categoria like '%a%';

-- exercício 5
select * from tbCategoria where idCategoria > 2 or categoria like '%a%';

-- exercício 6
select * from tbCategoria order by categoria;

-- exercício 7
select * from tbCategoria order by categoria desc;


-- 04-11

-- exercicio 1
select *, date_format(dtCadProduto, '%d/%m/%Y') dataFormatada from tbProduto;

-- exercício 2
select * from tbProduto where month(dtCadProduto) = 3;

-- exercicio 3
select * from tbProduto where year(dtCadProduto) = 2018 and month(dtCadProduto) = 8;

-- exercício 4
select * from tbProduto where month(dtCadProduto) = 4 and valor >= 200;

-- exercício 5
select * from tbProduto where idCategoria = 2 and valor = 100 
and year(dtCadProduto) = 2019 and month(dtCadProduto) = 4 and day(dtCadProduto) = 1;


-- 04-18

select tbProduto.produto, tbCategoria.Categoria from tbProduto
inner join tbCategoria
on tbProduto.idCategoria = tbCategoria.idCategoria; 

select p.produto, c.Categoria from tbProduto p
inner join tbCategoria c
on p.idCategoria = c.idCategoria; 


select c.nomeCliente, e.estado from tbCliente c
inner join tbEstado e
on c.idEstado = e.idEstado;


-- 04-25

select c.nomeCliente, f.numFone from tbFoneCli f
inner join tbCliente c
on c.idCliente = f.idCliente;


select tbCliente.nomeCliente, tbEstado.estado from tbCliente
inner join tbEstado
on tbCliente.idEstado = tbEstado.idEstado;

select tbCliente.nomeCliente, tbEstado.estado from tbCliente
left join tbEstado
on tbCliente.idEstado = tbEstado.idEstado;

select tbCliente.nomeCliente, tbEstado.estado from tbCliente
right join tbEstado
on tbCliente.idEstado = tbEstado.idEstado;

select tbCliente.nomeCliente, tbEstado.estado from tbEstado
left join tbCliente
on tbCliente.idEstado = tbEstado.idEstado;


-- criar uma consulta que exiba: o nome do cliente, seu estado e os números de telefones
select c.nomeCliente, e.estado, f.numFone from tbCliente c
join tbEstado e
on c.idEstado = e.idEstado
join tbFoneCli f
on c.idCliente = f.idCliente
order by nomeCliente;


select c.nomeCliente, e.estado, f.numFone from tbCliente c
join tbEstado e
on c.idEstado = e.idEstado
join tbFoneCli f
on c.idCliente = f.idCliente
where e.idEstado in(1,2)
order by nomeCliente;


select c.nomeCliente, e.estado, f.numFone from tbCliente c
join tbEstado e
on c.idEstado = e.idEstado
join tbFoneCli f
on c.idCliente = f.idCliente
where e.idEstado not in(1,2)
order by nomeCliente;


select p.idPedido, date_format(p.dataPedido, '%d/%m/%Y') dataPedido, c.nomeCliente from tbPedido p
join tbCliente c
on p.idCliente = c.idCliente
order by dataPedido desc;


-- 05-02
select * from tbCliente where idEstado in(1,2);
select length(nomeCliente), nomeCliente from tbCliente;
SELECT ASCII('@');
select lower(nomeCliente) from tbCliente;
select upper(nomeCliente) from tbCliente;
select repeat('Allan',4);
select space(10);
select '     allan      ';
select ltrim('     allan      ');
select rtrim('     allan      ');
select trim('     allan      ');
select reverse(nomeCliente) from tbCliente;
select left('abcde',2);
select right('abcde',2);
select substring('abcdefg',1,3);

select md5('12345');



-- 05-23

set @cat =  'feminino';

select * from tbCategoria
where categoria=@cat;


select round(298.1234567, 2);


create view viCategoria
as
	select idCategoria 'Código',
    upper(categoria) 'NomeDaCategoria' from tbCategoria;
    
select * from viCategoria;