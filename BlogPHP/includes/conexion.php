<?php

// Iniciar conexxion a la BBDD

$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conexionDB = mysqli_connect($server , $username, $password, $database);

mysqli_query($conexionDB, "SET NAMES 'utf8'");


// Iniciar session
if(!isset($_SESSION)){
    session_start();
}


