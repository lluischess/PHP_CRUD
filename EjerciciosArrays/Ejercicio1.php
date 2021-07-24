<?php
# Ejercicio 1: Array con 8 numeros enteros, recorrer y mostrar, ordenar i mostrar, visualizar su longitut y buscar algun elemento.

$numeros = array(1,2,3,4,5,6,7,8);

function RecorrerArrays($numeros) { 
    $resultado = "";
    foreach ($numeros as $numero) {
        $resultado .= "<h3>" . $numero . "</h3>";
    }
    return $resultado;
}

echo RecorrerArrays($numeros);
arsort($numeros);
echo RecorrerArrays($numeros);

echo "<br>" . count($numeros). "<br>";

if (isset($_GET['numero'])) {
    $num = $_GET['numero'];
    $search = array_search($num,$numeros);

    if (!empty($search)) { 
        echo "El numero existe";
    }else{ 
        echo "El numero no Existe";
    }
}

?>