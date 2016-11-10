<?php

	class Cliente extends Persona{

		private $codigoCliente;
		private $membresia;
		private $tipoCliente;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identificacion,
					$domicilio,
					$telefono,
					$correo,
					$estadoCivil,
					$usuario,
					$contrasena,
					$codigoCliente,
					$membresia,
					$tipoCliente){
			parent($nombre,
					$apellido,
					$edad,
					$genero,
					$identificacion,
					$domicilio,
					$telefono,
					$correo,
					$estadoCivil,
					$usuario,
					$contrasena);
			$this->codigoCliente = $codigoCliente;
			$this->membresia = $membresia;
			$this->tipoCliente = $tipoCliente;
		}
		public function getCodigoCliente(){
			return $this->codigoCliente;
		}
		public function setCodigoCliente($codigoCliente){
			$this->codigoCliente = $codigoCliente;
		}
		public function getMembresia(){
			return $membresia;
		}
		public function setMembresia($membresia){
			$this->membresia = $membresia;
		}
		public function getTipoCliente(){
			return $tipoCliente;
		}
		public function setTipoCliente($tipoCliente){
			$this->tipoCliente = $tipoCliente;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return parent::toString()." CodigoCliente: " . $this->codigoCliente . 
				" Membresia: " . $this->membresia->toString() . 
				" TipoCliente: " . $this->tipoCliente;
		}
	}
?>