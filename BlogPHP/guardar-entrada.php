<?php

if(isset($_POST)){
	
	require_once 'includes/conexion.php';
	
	$titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($conexionDB, $_POST['titulo']) : false;
	$descripcion = isset($_POST['desc']) ? mysqli_real_escape_string($conexionDB, $_POST['desc']) : false;
	$categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
	$usuario = $_SESSION['usuario']['id'];
	
	// Validación
	$errores = array();
	
	if(empty($titulo)){
		$errores['titulo'] = 'El titulo no es válido';
	}
	
	if(empty($descripcion)){
		$errores['descripcion'] = 'La descripción no es válida';
	}
	
	if(empty($categoria) && !is_numeric($categoria)){
		$errores['categoria'] = 'La categoría no es válida';
	}
	
	
	if(count($errores) == 0){
		if(isset($_GET['editar'])){
			$entrada_id = $_GET['editar'];
			$usuario_id = $_SESSION['usuario']['id'];
			
			$sql = "UPDATE entradas SET fTitulo='$titulo', fDesc='$descripcion', fCategoria_id=$categoria ".
					" WHERE id = $entrada_id AND fUsuario_id = $usuario_id";

		}else{
			$sql = "INSERT INTO entradas(fUsuario_id, fCategoria_id, fTitulo, fDesc, fFecha) VALUES($usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
		}
		$guardar = mysqli_query($conexionDB, $sql);

		header("Location: index.php");
	}else{

		$_SESSION["errores_entrada"] = $errores;
		
		if(isset($_GET['editar'])){
			header("Location: editar-entrada.php?id=".$_GET['editar']);
		}else{
			header("Location: crear-entradas.php");
		}
	}
	
}

