/* 
20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y
mostrar el nombre del grupo.
 */

SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo = (
    SELECT MAX(sueldo) FROM vendedores
));
