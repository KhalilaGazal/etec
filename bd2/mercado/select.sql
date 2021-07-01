/*
João da Silva Sauro possui um mercado. 
Ele colocou 5 produtos em promoção e gostaria de saber: 
	- A quantidade de vendas de cada produto;
	- A soma total de cada produto vendido;
    - O percentual de venda de cada produto;
    - O produto que deu mais prejuízo.
*/

select * from cargo_funcionario;
select * from funcionario;
select * from categoria_produto;
select * from produto;
select * from venda;
select * from item_venda;

select i.id, i.id_venda, p.nome, p.preco preco_unitario, i.qtd qtd_venda, p.preco * i.qtd total
from item_venda i
join produto p on i.id_produto = p.id
order by i.id_venda;

-- exercício 1
select i.id_venda, p.nome, i.qtd qtd_venda
from item_venda i
join produto p on i.id_produto = p.id
order by i.id_venda;

-- exercício 2
select i.id_venda, p.nome, p.preco preco_unitario, i.qtd qtd_venda, (p.preco * i.qtd) total
from item_venda i
join produto p on i.id_produto = p.id
order by total desc;

-- exercício 3
select p.nome, p.qtd qtd_total, i.qtd qtd_venda, round(100 * i.qtd / p.qtd, 1) percentual
from item_venda i
join produto p on i.id_produto = p.id;

-- exercício 4
select p.nome, min(p.preco * i.qtd) prejuizo
from item_venda i
join produto p on i.id_produto = p.id;