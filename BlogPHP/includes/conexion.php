<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conexionDB = mysqli_connect($server , $username, $password, $database);

mysqli_query($conexionDB, "SET NAMES 'utf8'");

