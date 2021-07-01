show tables;

select * from cliente;
select * from item_do_pedido;
select * from pedido;
select * from produto;
select * from vendedor;



-- 09/09

select nome_cliente, prazo_entrega
from cliente 
inner join pedido
on cliente.codigo_cliente = pedido.codigo_cliente
order by prazo_entrega desc, nome_cliente;


select nome_cliente, cliente.codigo_cliente, num_pedido
from cliente
left join pedido
on cliente.codigo_cliente = pedido.codigo_cliente
order by nome_cliente;


select nome_cliente, cliente.codigo_cliente, num_pedido
from pedido
right outer join cliente
on pedido.codigo_cliente = cliente.codigo_cliente
order by nome_cliente;


select nome_cliente, num_pedido, uf, prazo_entrega
from cliente
left join pedido
on cliente.codigo_cliente = pedido.codigo_cliente
where uf in('SP', 'RJ') and prazo_entrega > 15
order by nome_cliente; 



-- 09/16

SELECT DISTINCT nome_vendedor, quantidade, descricao_produto
FROM vendedor v INNER JOIN pedido p
ON v.codigo_vendedor = p.codigo_vendedor
INNER JOIN item_do_pedido i
ON p.num_pedido = i.num_pedido
INNER JOIN  produto m
ON i.codigo_produto = m.codigo_produto
WHERE quantidade > 10 
AND descricao_produto = 'chocolate';
   

/* Escrever um comando SQL que mostre os nomes dos clientes que fizeram compras, 
os números dos pedidos, e o nome do vendedor responsável por cada pedido.
Mostrar os nomes dos clientes em ordem crescente. */

select nome_cliente, num_pedido, nome_vendedor
from cliente c 
inner join pedido p
on  c.codigo_cliente = p.codigo_cliente
inner join vendedor v
on v.codigo_vendedor = p.codigo_vendedor
order by nome_cliente;

