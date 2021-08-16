<?php


/*
Crear una sesion que aumente su valor en uno o disminuya en uno
en funcion si el parametro get counter esta en uno o a cero.

*/

session_start();

if(!isset($_SESSION['num'])){
    $_SESSION['num'] = 0;
}

if((isset($_GET['counter'])) &&  $_GET['counter']==1){
    $_SESSION['num']++;
}

if((isset($_GET['counter'])) &&  $_GET['counter']==0){
    $_SESSION['num']--;
}

?>

<h1>El valor de la session es: <?=$_SESSION['num']?></h1>
<a href="testing.php?counter=1"> Aumentar Valor</a>
<a href="testing.php?counter=0"> Disminuir Valor</a>