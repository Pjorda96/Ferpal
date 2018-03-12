SELECT *
FROM empleado
NATURAL JOIN pedido
WHERE empleado.Tipo="Conductor" AND pedido.Fecha_entrega="2017-03-03";
