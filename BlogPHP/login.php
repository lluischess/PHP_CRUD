<?php

# Iniciar session y la conexion a la BBDD
require_once "includes/conexion.php";
# Recoger datos del formulario
if(isset($_POST)){

    # Si existen errores de login los eliminamos
    if (isset($_SESSION['errores']['login'])){
        session_unset($_SESSION['errores']['login']);
    }
    
    $Errores = array();
    $email = trim($_POST['email']);
    $pass = $_POST['pass'];

    # Consulta para verificar email
    $sql_select = "SELECT * FROM usuarios WHERE fEmail = '$email'";
    $login = mysqli_query($conexionDB,$sql_select);

    # Revisamos que el login sea true y que el numero de registros sea 1 que sera el email
    // var_dump($sql_select);
    // var_dump(mysqli_num_rows($login));
    // die();
    if($login && mysqli_num_rows($login) == 1){
        
        $usuario = mysqli_fetch_assoc($login); // Devuelve la array asociativo del objeto entero

        $verify = password_verify($pass,$usuario['fPassword']); // Verifica que las contraseñas coincidan
        //  var_dump($usuario);
        //  die();

        if($verify){
            # Si es correcto le pasamos la array asociativo de los datos del usuario
            $_SESSION['usuario'] = $usuario;
            
            // var_dump($_SESSION['usuario']);
            // die();

        }else{
            $Errores['login'] = "La Contraseña es incorrecta";
            $_SESSION['errores'] = $Errores;
        }

    }else {
        $Errores['login'] = "Este email no existe";
        $_SESSION['errores'] = $Errores;
    }

}

# Logearse correctamente rediriguiendo
header('Location: index.php');