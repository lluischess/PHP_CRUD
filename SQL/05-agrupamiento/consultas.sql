# CONSULTAS AGRUPAMIENTO #
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTAS AGRUPAMIENTO CON CONDICIONES#
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*
FUNCIONES AGRUPAMIENTO:
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
MIN     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'MAXIMO ID', titulo FROM entradas;
SELECT SUM(id) AS 'SUMA DE ID', titulo FROM entradas;
