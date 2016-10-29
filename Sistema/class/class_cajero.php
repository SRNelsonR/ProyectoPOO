<?php

	class Cajero extends Persona{

		private $sueldo;
		private $referencias;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$direccion,
					$telefono,
					$sueldo,
					$referencias){
			Parent::__construct($nombre, $apellido, $edad, $genero, $identidad, $direccion, $telefono);
			$this->sueldo = $sueldo;
			$this->referencias = $referencias;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function getReferencias(){
			return $this->referencias;
		}
		public function setReferencias($referencias){
			$this->referencias = $referencias;
		}
		public function toString(){
			return "Sueldo: " . $this->sueldo . 
				" Referencias: " . $this->referencias;
		}
	}
?>