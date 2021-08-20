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

    return $limpiar;
}

function CerrarSession(){
    $_SESSION['usuario'] = null;
    $limpiar = isset($_SESSION['usuario']) ? session_unset($_SESSION['usuario']) : '';
    return $limpiar;
}