<?php

	class Cliente extends Persona{

		private $direccion;
		private $correoElectronico;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$direccion,
					$telefono,
					$direccion,
					$correoElectronico){
			Parent::__construct($nombre, $apellido, $edad, $genero, $identidad, $direccion, $telefono);
			$this->direccion = $direccion;
			$this->correoElectronico = $correoElectronico;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getCorreoElectronico(){
			return $this->correoElectronico;
		}
		public function setCorreoElectronico($correoElectronico){
			$this->correoElectronico = $correoElectronico;
		}
		public function toString(){
			return "Direccion: " . $this->direccion . 
				" CorreoElectronico: " . $this->correoElectronico;
		}
	}
?>