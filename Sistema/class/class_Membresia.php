<?php

	class Membresia{

		private $codigoMembresia;
		private $puntos;

		public function __construct($codigoMembresia,
					$puntos){
			$this->codigoMembresia = $codigoMembresia;
			$this->puntos = $puntos;
		}
		public function getCodigoMembresia(){
			return $this->codigoMembresia;
		}
		public function setCodigoMembresia($codigoMembresia){
			$this->codigoMembresia = $codigoMembresia;
		}
		public function getPuntos(){
			return $this->puntos;
		}
		public function setPuntos($puntos){
			$this->puntos = $puntos;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoMembresia: " . $this->codigoMembresia . 
				" Puntos: " . $this->puntos;
		}
	}
?>