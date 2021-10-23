/* 
14. Visualizar las unidades totales vendidas de cada coche a cada cliente.
Mostrando el nombre del coche, numero de cliente y la suma de unidades.
 */

SELECT co.modelo AS 'COCHE', cl.nombre AS 'CLIENTE', SUM(e.cantidad) AS 'UNIDADES'
FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes cl ON cl.id = e.cliente_id
GROUP BY e.coche_id, e.cliente_id;