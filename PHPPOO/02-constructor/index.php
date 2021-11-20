<?php
require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);
$coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche2 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche3 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

$coche->color = "ROSA";
$coche->setMarca("Audi");

echo $coche->mostrarInformacion("HOLA MUNDO DESDE UN METODO");


//var_dump($coche->getModelo());
//var_dump($coche);
//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);