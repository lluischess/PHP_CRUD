<?php

# INDEX 
# 1) Que es JSON?
# 2) Funcion JSON.parse() y JSON.stringify()
# 3) Convertir una array a json string
# 4) Tipos de Datos para convertir en JSON
# 5) 
# 6)



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) Que es JSON?
# Es un formato de texto para compartir datos en arquitectura cliente servidor
# Estandar en intercambio de datos
# Altermativa a JSON es XML

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
# 5) 


#----------------------------------------------------------------------------------------------------------------------------------------------
