<?php

# INDEX 
# 1) action, method, enctype
# 2) Recoger valor de un input y etiquetas html input
# 3) Tipos de campos formularios
# 4) Recibir datos de un Formulario Basico
# 5) Validar Formulario
# 6) Validar Registro en Post
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
?>
<h2>Formulario HTML</h2>
<form action="DatosRecibidos.php" method="POST">
    <p>
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo"/>
    </p>
    <p>
        <textarea name="descripcion" cols="70" rows="10"></textarea>
    </p> 
    <input type="submit" value="Enviar"/>
</form>




<?php


#----------------------------------------------------------------------------------------------------------------------------------------------
# 5) Validar Formulario
?>


<h2>Validar Formulario HTML</h2>
<?php 
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == "true"){
        echo '<strong style="color:red">Faltan Datos en el formulario</strong>';
    }
    elseif ($error == "Nombre"){
        echo '<strong style="color:red">El nombre es incorrecto</strong>';
    }
    elseif ($error == "Apellidos"){
        echo '<strong style="color:red">El apellido es incorrecto</strong>';
    }
    elseif ($error == "age"){
        echo '<strong style="color:red">La edad es incorrecto</strong>';
    }
    elseif ($error == "Email"){
        echo '<strong style="color:red">El Email es incorrecto</strong>';
    }
    elseif ($error == "Password"){
        echo '<strong style="color:red">El nombre es incorrecto</strong>';
    }
}
?>
<form action="DatosRecibidos.php" method="POST">
    <p>
        <label for="name">Name: </label>
        <input type="text" name="name" require pattern="[A-Za-z]+"/>
    </p>
    <p>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" require pattern="[A-Za-z]+"/>
    </p>
    <p>
        <label for="age">Age: </label>
        <input type="number" name="age" require pattern="[0-9]+"/>
    </p>
    <p>
        <label for="email">Email: </label>
        <input type="text" name="email" require/>
    </p>
    <p>
        <label for="pass">Password: </label>
        <input type="password" name="pass" require/>
    </p>
    <input type="submit" value="Enviar"/>
</form>

<?php


# otro archivo.php
$error = "true";

if(!empty($_POST['name']) && !empty($_POST['apellido']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = "false";

    $nombre = $_POST['name'];
    $apellidos = $_POST['apellido'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Segunda Validación

    # preg_match si es diferente a letras
    if (!is_string($nombre) || !preg_match("/[a-zA-Z ]+/",$nombre)){
        $error = "Nombre";
        header("Location:testing.php?error=$error");
    }
    if (!is_string($apellidos) || !preg_match("/[a-zA-Z ]+/",$apellidos)){
        $error = "Apellidos";
        header("Location:testing.php?error=$error");
    }
    # filter_var($age, FILTER_VALIDATE_INT) sirve para filtrar un valor y validar si es un INt o lo que sea
    if (!is_numeric($age) || !filter_var($age, FILTER_VALIDATE_INT)){
        $error = "Age";
        header("Location:testing.php?error=$error");
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Email";
        header("Location:testing.php?error=$error");
    }
    if (empty($pass) || strlen($pass)<5){
        $error = "Password";
        header("Location:testing.php?error=$error");
    }
}else {
    $error = "true";
    header("Location:testing.php?error=$error");
}


?>

<body>
    <?php if ($error == "false"): ?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$age?></p>
        <p><?=$email?></p>
        <p><?=$pass?></p>
    <?php endif; ?>

</body>


<?php

#----------------------------------------------------------------------------------------------------------------------------------------------
# 6) Validar Registro en Post

# Recoger los datos del registro

#Array de errores del formulario
$Errores = array();

# Revisar si existen datos por post
if (isset($_POST)) {

    #Guardar los datos post en variables
    $name = isset($_POST['nom']) ? $_POST['nom'] : false; # Si existe es el que es i si no es false
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : false;

    #Validación de Datos Nombre
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]",$name)) {
        $nombre_valido = true;
    } else{
        $nombre_valido = false;
        $Errores['nombre'] = "El nombre es incorrecto";
    }

    #Validación de Datos Apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]",$apellidos)) {
        $apellidos_valido = true;
    } else{
        $apellidos_valido = false;
        $Errores['apellidos'] = "El apellido es incorrecto";
    }

    #Validación de Datos Email
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_valido = true;
    } else{
        $email_valido = false;
        $Errores['email'] = "El email es incorrecto";
    }

    #Validación de Datos Contraseña
    if (!empty($pass)) {
        $pass_valido = true;
    } else{
        $pass_valido = false;
        $Errores['password'] = "El Password esta vacio";
    }

    $guardar_usuario = false;
    # Revisar si no hay errores
    if (count($Errores) == 0) {
        # Insertar datos del usuario en la BBDD
        $guardar_usuario = true;
    }


} else {
    echo "El envio de los datos es incorrecto";
}

#----------------------------------------------------------------------------------------------------------------------------------------------
