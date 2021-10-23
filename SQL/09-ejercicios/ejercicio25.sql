/* 
25. Obtener una lista de los nombres de los clientes con el importe
de sus encargos acumulado
 */

SELECT ci.nombre, SUM(precio*cantidad) AS "IMPORTE" 
FROM clientes ci 
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;

