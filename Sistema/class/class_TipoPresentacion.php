<?php

	class TipoPresentacion{

		private $codigoPresentacion;
		private $nombrePresentacion;
		private $fotografia;

		public function __construct($codigoPresentacion,
					$nombrePresentacion,
					$fotografia){
			$this->codigoPresentacion = $codigoPresentacion;
			$this->nombrePresentacion = $nombrePresentacion;
			$this->fotografia = $fotografia;
		}
		public function getCodigoPresentacion(){
			return $this->codigoPresentacion;
		}
		public function setCodigoPresentacion($codigoPresentacion){
			$this->codigoPresentacion = $codigoPresentacion;
		}
		public function getNombrePresentacion(){
			return $this->nombrePresentacion;
		}
		public function setNombrePresentacion($nombrePresentacion){
			$this->nombrePresentacion = $nombrePresentacion;
		}
		public function getFotografia(){
			return $this->fotografia;
		}
		public function setFotografia($fotografia){
			$this->fotografia = $fotografia;
		}
		public function toString(){
			return "CodigoPresentacion: " . $this->codigoPresentacion . 
				" NombrePresentacion: " . $this->nombrePresentacion . 
				" Fotografia: " . $this->fotografia;
		}
	}
?>