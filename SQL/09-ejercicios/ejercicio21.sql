/* 
21. Obtener los nombre y ciudades de los clientes con encargos de 3 unidades adelante
 */

SELECT nombre, ciudad FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >= 3);
