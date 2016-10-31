<?php

	class Recomendacion{

		private $codigoRecomendacion;
		private $nombreRecomendacion;
		private $apellidoRecomendacion;
		private $telefonoRecomendacion;
		private $direccionRecomendacion;

		public function __construct($codigoRecomendacion,
					$nombreRecomendacion,
					$apellidoRecomendacion,
					$telefonoRecomendacion,
					$direccionRecomendacion){
			$this->codigoRecomendacion = $codigoRecomendacion;
			$this->nombreRecomendacion = $nombreRecomendacion;
			$this->apellidoRecomendacion = $apellidoRecomendacion;
			$this->telefonoRecomendacion = $telefonoRecomendacion;
			$this->direccionRecomendacion = $direccionRecomendacion;
		}
		public function getCodigoRecomendacion(){
			return $this->codigoRecomendacion;
		}
		public function setCodigoRecomendacion($codigoRecomendacion){
			$this->codigoRecomendacion = $codigoRecomendacion;
		}
		public function getNombreRecomendacion(){
			return $this->nombreRecomendacion;
		}
		public function setNombreRecomendacion($nombreRecomendacion){
			$this->nombreRecomendacion = $nombreRecomendacion;
		}
		public function getApellidoRecomendacion(){
			return $this->apellidoRecomendacion;
		}
		public function setApellidoRecomendacion($apellidoRecomendacion){
			$this->apellidoRecomendacion = $apellidoRecomendacion;
		}
		public function getTelefonoRecomendacion(){
			return $this->telefonoRecomendacion;
		}
		public function setTelefonoRecomendacion($telefonoRecomendacion){
			$this->telefonoRecomendacion = $telefonoRecomendacion;
		}
		public function getDireccionRecomendacion(){
			return $this->direccionRecomendacion;
		}
		public function setDireccionRecomendacion($direccionRecomendacion){
			$this->direccionRecomendacion = $direccionRecomendacion;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoRecomendacion: " . $this->codigoRecomendacion . 
				" NombreRecomendacion: " . $this->nombreRecomendacion . 
				" ApellidoRecomendacion: " . $this->apellidoRecomendacion . 
				" TelefonoRecomendacion: " . $this->telefonoRecomendacion . 
				" DireccionRecomendacion: " . $this->direccionRecomendacion;
		}
	}
?>