(SELECT sede.Id_sede, COUNT(pedido.id_producto)
FROM pedido
NATURAL JOIN sede
GROUP BY sede.Id_sede
order by COUNT(pedido.id_producto) desc
LIMIT 1,1)
UNION
(SELECT sede.Id_sede, COUNT(pedido.id_producto)
FROM pedido
NATURAL JOIN sede
GROUP BY sede.Id_sede
order by COUNT(pedido.id_producto) asc
LIMIT 1,1)