<?php

# INDEX 
# 1) action, method, enctype
# 2) Recoger valor de un input y etiquetas html input
# 3) Tipos de campos formularios
# 4) Recibir datos de un Formulario Basico
# 5) 
# 6) 
# 7) 
# 8) 



#----------------------------------------------------------------------------------------------------------------------------------------------
# 1) action, method, enctype

# action : sirve para que una vez despues del submit realize una accion.php 
# method : tipo de envio de datos POST(mas seguro), GET(datos por url)
# enctype : multipart/from-data  permite enviar archivos del formulario al servidor para guardar archivos etz
?>
<form action="" method="" enctype=""></form>

<?php

#----------------------------------------------------------------------------------------------------------------------------------------------
# 2) recoger valor de un input

# label for indica para que imput es el label
# autofocus="true" es para hacer foco al campo
# disable="true" es para deshabilitar el campo
# maxlength para añadir un limitador
# para especificar si quiero de la a a la z en mayusculas (Expresiones regulares)
# required que el campo sea obligatorio
# placeholder texto por default
?>
<form action="" method="" enctype="">
    <lable for="nombre"> Nombre: </lable>
    <input type="text" name="nombre" autofocus="true" maxlength="6" pattern="[A-Z ]+" required/> 
    <lable for="apellido"> Apellido: </lable>
    <input type="text" name="apellido" disabled="true" minlength="2" placeholder="Okey"/>  
    <input type="submit" value="enviar"/>  
</form>

<?php

$nombre = $_POST['nombre'];

#----------------------------------------------------------------------------------------------------------------------------------------------
# 3) Tipos de campos formularios
?>

<input type="color" name="color" id="color">
<input type="button" name="button" value="clica" id="button">
<input type="checkbox" name="sexo" value="hombre">
<input type="password" name="password">
<input type="file" name="file" multiple="file">
<input type="datetime-local" name="datetime" id="datetime">
<input type="date" mame="date">
<input type="time" name="time" id="time">
<input type="number" name="age" id="age" min="1" max="10" step="2">
<input type="url" id="url" name="url">
<input type="tel" id="tel" name="tel">
<input type="search" id="search" name="search">
<input type="email" id="email" name="email" multiple>
<p>
    <input type="radio" name="radio1">
    <input type="radio" name="radio2">
    <input type="radio" name="radio3">
</p>

<textarea name="texto" id="1" cols="30" rows="10"></textarea>

<select name="list" id="list">
    <option value="1">Spiderman</option>
    <option value="2">Superman</option>
</select>

<?php
#----------------------------------------------------------------------------------------------------------------------------------------------
# 4) Recibir datos de un Formulario Basico



#----------------------------------------------------------------------------------------------------------------------------------------------
