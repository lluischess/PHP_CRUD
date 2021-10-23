/* 
24. Listar los encargos con el nombre del coche, el nombre del cliente y
el nombre de la ciudad, pero unicamente cuando sean de Barcelona.
 */

SELECT e.id, co.modelo, c.nombre, c.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';