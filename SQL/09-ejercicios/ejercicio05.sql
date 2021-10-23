/* 
5. Mostrar todos los vendedores con su nombre y el numero de dias que llevan
en el concesionario.
 */

SELECT nombre, DATEDIFF(CURDATE(), fecha) AS 'DÍAS' FROM vendedores;
