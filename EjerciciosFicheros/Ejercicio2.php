<?php


/*
Una funcion
validar un email con filtervar
recoger variable por get y validar
mostrar el resultado

*/

function validarmail($mail){
    if((!empty($mail)) && filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $status = "Válido";
    }else{
        $status = "Incorrecto";
    }

    return $status;
}


if(isset($_GET['email'])){
    echo validarmail($_GET['email']);
}else{
    echo "No hay un email en el GET";
}



?>