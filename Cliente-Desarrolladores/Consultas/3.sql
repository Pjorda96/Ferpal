SELECT sede.Id_sede,COUNT(cliente.DNI)
FROM cliente
NATURAL JOIN sede
