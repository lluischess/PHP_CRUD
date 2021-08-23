<?php

# INDEX 
# 1) Que es JSON?
# 2) Funcion JSON.parse() y JSON.stringify()
# 3) Convertir una array a json string
# 4) Tipos de Datos para convertir en JSON
# 5) json_encode() y json_decode() PHP
# 6) Cliente/servidor Peticion XMLHttpRequest Asyncrona
# 7) Bases de datos Jqery-ajax-mysql y json


#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Que es JSON?
# Es un formato de texto para compartir datos en arquitectura cliente servidor
# Estandar en intercambio de datos
# Altermativa a JSON es XML

# WEB para Crear JSON SINTAXIS VALIDATE JSON
# https://jsonlint.com/

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) Funcion JSON.parse() y JSON.stringify()
# JSON.parse() Convertir una cadena de texto json en un objeto javascript
?>
<script>
var cadena = '{"nombre":"Juan","edad":"31","pais":"peru"}';
var objeto = JSON.parse(cadena);
console.log(objeto);

// Obtener un valor de clave
console.log(objeto.nombre);

</script>
<?php
# JSON.stringify() Convertir un objeto javascript y lo pasa a una cadena de texto
?>
<script>
var cadenanueva = JSON.stringify(objeto);
var objetoJS = {nombre:"juan", edad:24}; // objeto
console.log(cadenanueva,JSON.stringify(objetoJS));
</script>
<?php

#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Convertir una array a json string
?>
<script>
var tabla = ["lunes","martes","miercoles","jueves","viernes"];
console.log(tabla);
var objeto = JSON.stringify(tabla);
console.log(objeto);

</script>
<?php

#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Tipos de Datos para convertir en JSON
?>
<script>
// String:
var cadena = "{'nombre':'pedro'}";

// Numero:
var num = {"num":44};

// Objetos: 
var objetoJS = {nombre:"juan", edad:24};

// Array de objetos:
var arraydeobjetos = [
    {"nombre":"juan","edad":44},
    {"nombre":"juan","edad":44},
    {"nombre":"juan","edad":44}
    ];

// verdadero false y null
var car_true = true;
var car_false = false;
var car_vacio = null;

// combinacion de todas
var ojetocomplejo = {
    "nombre":"pedro",
    "edad": 44,
    "bool": true,
    "edadhijos":[10,12,14],
    "educación":{
        "primario":"hamelin",
        "secundario":"Laie"
    }
};
console.log(ojetocomplejo);
// obtener dato complejo
console.log(ojetocomplejo.educación.secundario);
</script>
<?php


#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) json_encode() y json_decode() PHP
# JSON.encode codifica los datos devuelve la representacion json y nos retorna un string con la representacion
# Objeto a JSON
$objeto = new stdClass();
$objeto->nombre = "Estela";
$objeto->edad = 22;
$objeto->pais = "francia";

$mijson = json_encode($objeto);
echo $mijson;

echo json_encode($objeto->nombre." - ".$objeto->edad);
# Array a JSON
$tabla = array("lunes","martes","miercoles");
echo json_encode($tabla);

# Array asociativo con caracteres especiales
header('Content-Type: application/json; charset=utf-8');
$tabla2 = array("nombre"=>"Jazme","mártes"=>"voley","miercoles"=>"play']");
echo json_encode($tabla2,JSON_UNESCAPED_UNICODE);


# JSON.decode 
# Convierte un JSON a una variable php
$json = '{"a":1,"b":2,"c":3}';
$mivariable = json_decode($json);
var_dump($mivariable);

# para listas asociativas true
$lista = '{"bar":"valor", "bar2":"valor2"}';
var_dump(json_decode($lista,true));

#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) Cliente/servidor Peticion XMLHttpRequest Asyncrona
# las peticiones http se pueden hacer de 2 formas syncrona y asyncrona
?>
<script>
var variable = new XMLHttpRequest(); // Creamos instancia del objeto XMLHttprequest puede ser cualquier formato no solo XML

variable.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
        var miobj = JSON.parse(variable.responseText); // variable. o this. es lo mismo
        console.log(variable.status + " " + variable.readyState);
        console.log(miobj);
        console.log(miobj.nombre); // acceder a los datos del json
    }
};

variable.open("GET","datos_json.txt",true); // inicia la peticion
variable.send(); // envia la peticion al servidor

</script>
<?php


#----------------------------------------------------------------------------------------------------------------------------------------------
# 7) Bases de datos Jqery-ajax-mysql y json
?>
<script src="jquery/jquery-3-6-0.min.js"></script>
<button id="btnConsulta">Consulta</button>
<script>

</script>
<?php
