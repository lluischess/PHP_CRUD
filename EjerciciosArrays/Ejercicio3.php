<?php
# Ejercicio 3: Comprobar si una variable esta vacia si esta vecia rellenar con texto aleatorio en minusculas y mostrar en mayusculas y negrita.

$texto = "";

if (empty($texto)) { 
    // rellenar 
    $characters = "abcdefghijklmnopqrstuvwxyz";
    $charactersLength = strlen($characters);
    for ($i=0; $i < 10; $i++) { 
        $texto .= $characters[rand(0, $charactersLength -1)];
    }

    echo "<strong>". strtoupper($texto) ."</strong>";
} else { 
    echo $texto;
}

?>