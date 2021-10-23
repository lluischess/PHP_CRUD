/* 
23. Listar todos los encargos realizados con la marca del coche y el nombre
del cliente.
 */

SELECT e.id, co.marca, c.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id;
