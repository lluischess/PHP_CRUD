<?php
require_once "conexion.php";
header("Content-Type: application/json: charset=utf-8");
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM categorias";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$data2 = $resultado->fetchAll(PDO::FETCH_ASSOC);
print $data = json_encode($data2,JSON_UNESCAPED_UNICODE);
$conexion=null;
