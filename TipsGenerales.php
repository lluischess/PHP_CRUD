<?php

# INDEX 
# 1) Funciones Es nulo o Esta vacio?
# 2) Echo rapido en php
# 3) Debugear el contenido de una variable
# 4) Saltos de linea o tabulador en un String
# 5) Function con paramaetros opcionales
# 6) La mejor Practica con funciones es el return
# 7) Variables locales y globales
# 8) Funciones variables ejemplo
# 9) Funciones Predefinidas en php
# 10) Funciones Matematicas
# 11) Mas funciones Predefinidas
# 12) Include y require
# 13) Arrays
# 14) Arrays Multidimensionales
# 15) Funciones para Arrays
# 16) Redireccionar Pagina web




#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Funciones Es nulo o Esta vacio?
# utilizar ? en caso contrario 
#isset = es nulo?
#empty = esta vacio?
# Ejemplo 1  despues del ? se pone la otra condicion
$action = isset($_POST['action']) ? $_POST['action'] : '';

# Ejemplo 2 
$campo = empty($_POST['action']) ?  $_POST['action'] : '';

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Echo rapido en php
/* <?="echo rapido"?> */

#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Debugear el contenido de una variable
$variable = "Hola";
var_dump($variable);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Saltos de linea o tabulador en un String

$text = "Soy un texto y \n HOla \t Salto de tabulador";

#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) Function con paramaetros opcionales
function sumar($numero1, $numero2, $numero3 = false){ 
    if ( isset($numero3) ) { 
      echo "<h1>" . ($numero1 + $numero2) . "</h1>";
    }else{
      echo "<h1>" . ($numero1 + $numero2 + $numero3) . "</h1>";
    }
}

sumar(2, 3);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) La mejor Practica con funciones es el return
function sumar2($numero1, $numero2, $numero3 = false){ 
    if ( isset($numero3) ) { 
        $resul = "<h1>" . ($numero1 + $numero2) . "</h1>";
    }else{
        $resul = "<h1>" . ($numero1 + $numero2 + $numero3) . "</h1>";
    }
    return $resul;
}

sumar(2, 3);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 7) Variables locales y globales
$frase = "<h1>Hola soy Luis</h1>";

echo $frase;

function hola(){ 
  # Para usar la variable de fuera se usa global
  global $frase; 
    return $frase;
 }

 hola();


#----------------------------------------------------------------------------------------------------------------------------------------------
# 8) Funciones variables ejemplo

function buenosdias(){ 
  return "Hola buenos dias";
}

function buenasnoches(){ 
  return "Buenas noches";
}
# Guardamos el nombre de la funcion en una variable y luego la llamamos con la misma variable
$funcion_saludos = "buenasnoches";

echo $funcion_saludos();


#----------------------------------------------------------------------------------------------------------------------------------------------
# 9) Funciones Fechas

# Formato de fecha:
echo date('d-m-y') . "<br>";
echo date("d M, Y, g:i a"). "<br>";
echo date("Y-m-d H:i:s"). "<br>"; 
echo date('H:i:s'). "<br>";

# Time en integer
echo time();
 

#----------------------------------------------------------------------------------------------------------------------------------------------
# 10) Funciones Matematicas

# Reiz cuadrada de un numero
echo "Raiz cuadrada de 10 es: ". sqrt(10); 

# Numero aleatorio Random
echo rand(). "<br>";
echo rand(3,10);

# Numero Pi 
echo pi();

# Redondear numero a 2 decimales
echo "Redondear ".round(7.5812312,2);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 11) Mas funciones Predefinidas

# tipo de variable
$tabla = [];
echo gettype($tabla);

# comprobar tipos de datos
echo is_array($tabla);
echo is_float($tabla);
echo is_bool($tabla);

# Limpiar espacios de un string al inicio y al final
$texto = "  hola   ";
var_dump(trim($texto));

# Eliminar variable o indices
unset($tabla);

# Contador de caracteres de un string
$testolargo = "sdfasfasdfasdf";
echo strlen($testolargo);

# Encontrar la posicion caracter o palabra
$frase = "la vida es Bella";
echo strpos($frase, "vida");

# Remplazar palabras de un String
echo str_replace("vida","puta",$frase);
echo $frase;

# Upercase convertir a Mayusculas y minusculas
echo strtoupper($frase);
echo strtolower($frase);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) Include y require

include '<EjerciciosBasicos>/Ejercicio1.php'; // lo incluye siempre y las veces que quieras
include_once '<EjerciciosBasicos>/Ejercicio1.php'; // solo puede incluirse una vez
require '<EjerciciosBasicos>/Ejercicio1.php'; // es necesario para continuar


#----------------------------------------------------------------------------------------------------------------------------------------------
# 13) Arrays

$pelicula = "spiderman";

# Definir un array 2 formas:
$peliculas = array('batman',$pelicula,'batman2');
$cantantes = ['Justin','selena','lady gaga'];

#Array asociativo
$personas = array(
  'nombre' => 'luis',
  'apellido' => 'casamajor',
  'edad'  => '27'
);

#array completa
var_dump($peliculas);
var_dump($cantantes);

# sacar valores de un array
var_dump($peliculas[1]);
echo $peliculas[0];

# Añadir elementos a la Array 2 maneras
$peliculas[] = 'pokemon';
array_push($peliculas,'digimon');
var_dump($peliculas);

#Eliminar el ultimo registro
array_pop($peliculas);
var_dump($peliculas);

#Eliminar el indice que quieras
unset($peliculas[2]);
var_dump($peliculas);

# Recorrer un array sencilla 2 maneras:
for ($i=0; $i < count($peliculas); $i++) { 
  echo "<li>" . $peliculas[$i] . "</li>";
}

foreach ($cantantes as $cantante) {
  echo "<li>" . $cantante . "</li>";
}

foreach ($personas as $persona) {
  echo "<li>" . $persona . "</li>";
}


#----------------------------------------------------------------------------------------------------------------------------------------------
# 14) Arrays Multidimensionales

$contactos = array(
  array(
    'nombre' => 'luis',
    'email' => 'casamajor@email.com',
  ),
  array(
    'nombre' => 'loco',
    'email' => 'casamajor@email.com',
  ),
  array(
    'nombre' => 'luis',
    'email' => 'casamajor@email.com',
  )
);

var_dump($contactos);

# imprimir un json de una array multidimensional
echo json_encode($contactos);
# acceder a un contacto de un array multidemensional
echo $contactos[1]['nombre'];

# Recorrer un array multidimensional:
foreach ($contactos as $key => $contacto){ 
  echo "<br>" . $contacto['nombre'];
  echo "<br>" . $contacto['email'];

}

#----------------------------------------------------------------------------------------------------------------------------------------------
# 15) Funciones para Arrays
$cantantes = ['Justin','selena','lady gaga'];
$num = [4,3,2,1];

# Orden alfabetico A - Z
asort($cantantes);
var_dump($cantantes);

# Orden alfabetico inverso Z - A
arsort($cantantes);
var_dump($cantantes);

# Orden numerico 1 - max
sort($num);
var_dump($num);

# Sacr un elemento aleatorio de un array
echo array_rand($cantantes);

# Revertir el Array dar la vuelta
var_dump(array_reverse($peliculas));

# Buscar dentro de un array
echo array_search('selena',$cantantes);

# Longitut de un array
echo count($num);


#----------------------------------------------------------------------------------------------------------------------------------------------
# 16) Redireccionar Pagina web

header('Location:ver_cookies.php');

#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) 

 































?>