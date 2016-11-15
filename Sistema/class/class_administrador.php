<?php
	class Administrador extends Persona{
		private $sueldo;
		private $referencias;
		private $especializacion;
		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$direccion,
					$telefono,
					$sueldo,
					$referencias,
					$especializacion){
			Parent::__construct($nombre, $apellido, $edad, $genero, $identidad, $direccion, $telefono);
			$this->sueldo = $sueldo;
			$this->referencias = $referencias;
			$this->especializacion = $especializacion;
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
		public function getEspecializacion(){
			return $this->especializacion;
		}
		public function setEspecializacion($especializacion){
			$this->especializacion = $especializacion;
		}
		public function toString(){
			return "Sueldo: " . $this->sueldo . 
				" Referencias: " . $this->referencias . 
				" Especializacion: " . $this->especializacion;
		}
	}
?>