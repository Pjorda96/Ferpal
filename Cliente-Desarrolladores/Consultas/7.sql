SELECT camion.Matricula
FROM camion
NATURAL JOIN empleado
WHERE empleado.Nombre="Martinez"