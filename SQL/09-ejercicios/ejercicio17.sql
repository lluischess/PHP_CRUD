/* 
17. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
 */

SELECT e.id AS 'Nº ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN 
(SELECT id FROM clientes WHERE nombre = 'Fruteria Antonia Inc');