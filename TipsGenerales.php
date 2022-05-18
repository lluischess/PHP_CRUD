<?php

# INDEX 
# 1) Variable definida o esta vacio? isset() empty()
# 2) PHP abreviado para formularios HTML
# 3) Imprimir valores con var_dump() y print_r()
# 4) Saltos de linea o tabulador en un String
# 5) Function con paramaetros opcionales
# 6) La mejor Practica con funciones es el return
# 7) Variables locales, globales y Constantes, Constantes predefinidas
# 8) Funciones variables ejemplo
# 9) Funciones Predefinidas en php
# 10) Funciones Matematicas
# 11) Mas funciones Predefinidas
# 12) Include y require
# 13) Arrays
# 14) Arrays Multidimensionales
# 15) Funciones para Arrays
# 16) Redireccionar Pagina web
# 17) Cifrar contraseña
# 18) Guardar string sin espacios
# 19) Recortar String caracteres
# 20) Devolver Class vacia




#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Es nulo o esta vacio? isset() empty()

# isset determina si una variable esta definida
# empty determina si una variable esta vacia

# Ejemplo 1  
# Si existe el $_POST['action'] entonces guardara el valor en la variable $action
$action = isset($_POST['action']) ? $_POST['action'] : 'action no existe';

# Ejemplo 2 
# Si la variable $_POST['action'] no esta vacia guardara el valor de POST en la variable $action 
$campo = !empty($_POST['action']) ?  $_POST['action'] : 'action vacia';

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) PHP abreviado para formularios HTML

# Ejemplo 1 
# Podemos imprimir en un HTML la variable $saludos de la siguiente manera:
$saludos = "Hola soy una variable PHP";
?>  

<h1><?=$saludos?></h1>  

<?php

#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Imprimir valores con var_dump() y print_r()

# var_dump() Esta función muestra información sobre una o más expresiones incluyendo su tipo y valor. 
# Las matrices y los objetos son explorados recursivamente con valores sangrados para mostrar su estructura.

# print_r() Muestra información sobre una variable en una forma que es legible por humanos.

# Ejemplo 1 
$variable = "Hola";
var_dump($variable);

# Ejemplo 2
$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r($a);

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
# 7) Variables locales, globales y Constantes, Constantes predefinidas
$frase = "<h1>Hola soy Luis</h1>";

echo $frase;

function hola(){ 
  # Para usar la variable de fuera se usa global
  global $frase; 
    return $frase;
 }

 hola();

 # Definir una constante:
 define('nombre','Luis');

 echo nombre;

 # Constantes predefinidas
 echo PHP_OS.'<br>'; // sistema operativo
 echo PHP_VERSION.'<br>'; // version php
 echo PHP_EXTENSION_DIR.'<br>'; // Extensiones de php instaladas
 echo __FILE__;

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
# 17) Cifrar contraseña

 #                          Password /    Encriptación    / pasadas de encriptado
 $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);

 # Descifrar contraseña y comparar la password
 #   password original / pasword encriptada(hash) TRUE o FALSE
 password_verify($pass,$password_segura);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 18) Guardar string sin espacios

trim($email);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 19) Recortar String caracteres

substr($entrada['fDesc'],0,200);

#----------------------------------------------------------------------------------------------------------------------------------------------
# 20) Devolver Class vacia

$objeto = new stdClass();
#----------------------------------------------------------------------------------------------------------------------------------------------


























?>