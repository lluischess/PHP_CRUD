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
# 12) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 12) 

 































?>