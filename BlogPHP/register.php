<?php

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

