<?php


# Funcion para mostrar Error en Rojo Guardado en Session
function MostrarError($errores, $campo){
    $alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
	}
	
	return $alerta;
}

#Funcion para Limpiar Errores de Session
function LimpiarError(){
    $_SESSION['errores'] = null;
    
    $limpiar = isset($_SESSION['errores']) ? session_unset($_SESSION['errores']) : '';

    $_SESSION['completado'] = null;
    isset($_SESSION['completado']) ? session_unset($_SESSION['completado']) : '';

    $_SESSION['errores_entrada'] = null;
    isset($_SESSION['errores_entrada']) ? session_unset($_SESSION['errores_entrada']) : '';

    return $limpiar;
}

function ObtenerCategorias($conexionDB){
    $sql_select = "SELECT * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexionDB,$sql_select);
    $resultado = array();

    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;
    }
    return $resultado;
}

function ObtenerUltimasEntradas($conexionDB){
    $sql_select = "SELECT e.*, c.fNombre AS 'categoria' FROM entradas e ". 
    "INNER JOIN categorias c ON e.fCategoria_id = c.id ORDER BY e.id DESC LIMIT 5";
    // var_dump($sql_select);
    // die();
    $entradas = mysqli_query($conexionDB,$sql_select);
    $resultado = array();

    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $resultado;
}

function conseguirEntrada($conexionDB, $id){
	$sql = "SELECT *, c.fNombre AS 'categoria'"
		  . " FROM entradas ".
		   "INNER JOIN categorias c ON entradas.fCategoria_id = c.id ".
		   "WHERE entradas.id = $id";
    // var_dump($sql);
    // die();
	$entrada = mysqli_query($conexionDB, $sql);
	
	$resultado = array();
	if($entrada && mysqli_num_rows($entrada) >= 1){
		$resultado = mysqli_fetch_assoc($entrada);
	}
	
	return $resultado;
}