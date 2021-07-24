<?php
# Ejercicio 2: Crear una array e ir añadiendole numeros mientras la longitut de la arry sea menor a 120 y mostrar.

$numeros = array();


for ($i=1; count($numeros) < 120; $i++) { 
    array_push($numeros,$i);
}

foreach ($numeros as $numero) { 
    echo $numero . "<br>";
}


?>