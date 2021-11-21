<?php
namespace MisClases;

class Usuario{
	public $nombre;
	public $email;
	
	public function __construct() {
		$this->nombre = "Víctor Robles";
		$this->email = "victor@victor.com";
	}
}