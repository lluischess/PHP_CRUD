<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Recorger los valores del formulario de actulizacion
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexionDB, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexionDB, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conexionDB, trim($_POST['email'])) : false;
	
	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válido";
	}
	
	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	$guardar_usuario = false;
	if(count($errores) == 0){
		$usuario = $_SESSION['usuario'];
		$guardar_usuario = true;
		
		

		// COMPROBAR SI EL EMAIL YA EXISTE
		$sql = "SELECT id, fEmail FROM usuarios WHERE fEmail = '$email'";
		$isset_email = mysqli_query($conexionDB, $sql);
		$isset_user = mysqli_fetch_assoc($isset_email);
		
		if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
			// ACTULIZAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
			
			$sql = "UPDATE usuarios SET ".
				   "fNombre = '$nombre', ".
				   "fApellidos = '$apellidos', ".
				   "fEmail = '$email' ".
				   "WHERE id = ".$usuario['id'];
			$guardar = mysqli_query($conexionDB, $sql);

			if($guardar){
				$_SESSION['usuario']['fNombre'] = $nombre;
				$_SESSION['usuario']['fApellidos'] = $apellidos;
				$_SESSION['usuario']['fEmail'] = $email;

				$_SESSION['completado'] = "Tus datos se han actualizado con éxito";
			}else{
				$_SESSION['errores']['general'] = "Fallo al guardar el actulizar tus datos!!";
			}
		}else{
			$_SESSION['errores']['general'] = "El usuario ya existe!!";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}

header('Location: misDatos.php');
