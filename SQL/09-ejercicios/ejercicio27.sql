/* 
27. Visualizar los nombres de los clientes y la cantidad de encargos realizados,
incluyendos los que no hayan realizado encargos.
 */

INSERT INTO clientes VALUES(NULL, 5, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;