SELECT COUNT(pedido.Num_reparto), empleado.DNI
FROM empleado
NATURAL JOIN pedido
WHERE empleado.Id_producto=pedido.id_producto