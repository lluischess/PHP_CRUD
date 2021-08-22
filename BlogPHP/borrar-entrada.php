<?php 
 require_once 'includes/conexion.php';
if( isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $sql = "DELETE FROM entradas WHERE id = $entrada_id";
    mysqli_query($conexionDB,$sql);
}

header('Location: index.php');