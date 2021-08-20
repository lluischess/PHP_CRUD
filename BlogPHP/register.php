<?php

# Revisar si existen datos por post
if (isset($_POST)) {

    if (!isset($_SESSION)){
        session_start();
    }

    require_once "includes/conexion.php";

    # Recoger los datos del registro

    #Array de errores del formulario
    $Errores = array();

    #Guardar los datos post en variables
    $name = isset($_POST['nom']) ? mysqli_real_escape_string($conexionDB,$_POST['nom']) : false; # Si existe es el que es i si no es false
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexionDB,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conexionDB,trim($_POST['email'])) : false;
    $pass = isset($_POST['pass']) ? mysqli_real_escape_string($conexionDB,$_POST['pass']) : false;

    #Validación de Datos Nombre
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/",$name)) {
        $nombre_valido = true;
    } else{
        $nombre_valido = false;
        $Errores['nombre'] = "El nombre es incorrecto";
    }

    #Validación de Datos Apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)) {
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
        $guardar_usuario = true;
        # Insertar datos del usuario en la BBDD

        # Cifrar la contraseña
        $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);

        # Insert new user to DBB
        $date = date('Y-m-d H:i:s');
        $sql_insert = "INSERT INTO usuarios(fNombre,fApellidos,fEmail,fPassword,fFecha) VALUES('$name','$apellidos','$email','$password_segura', '$date')";
        $guardar = mysqli_query($conexionDB,$sql_insert);

        //  var_dump($guardar);
        //  var_dump($sql_insert);
        // var_dump(mysqli_error($conexionDB));
        // die();

        if($guardar) {
            $_SESSION['completado'] = "El registro esta completado";
            //  echo "Okey";
            //  die();
        }else{
            $_SESSION['errores']['general'] = "Fallo al insertar el usuario";
            //  echo "mal";
            //  die();
        }
    } else {
        $_SESSION['errores'] = $Errores;
    }


} else {
    echo "El envio de los datos es incorrecto";
}

header('Location: index.php');
