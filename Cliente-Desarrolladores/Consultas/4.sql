SELECT *
FROM cliente
NATURAL JOIN pedido
WHERE pedido.Fecha_entrega="2016-03-14";