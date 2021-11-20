<?php

interface Ordenador{
	public function encender();
	public function apagar();
	public function reiniciar();
	public function desfragmentar();
	public function detectarUSB();
}

class iMac implements Ordenador{
	private $modelo;
	
	function getModelo() {
		return $this->modelo;
	}

	function setModelo($modelo) {
		$this->modelo = $modelo;
	}
	
	public function encender() {
		return "LO QUE SEA";
	}

	public function apagar() {
		return "LO QUE SEA";
	}
	
	public function reiniciar() {
		return "LO QUE SEA";
	}
	
	public function desfragmentar() {
		return "LO QUE SEA";
	}
	
	public function detectarUSB() {
		return "LO QUE SEA";
	}
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook PRO 2019');
echo $maquintos->getModelo();