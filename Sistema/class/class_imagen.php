<?php

	class Imagen{

		private $codigoImagen;
		private $nombreImagen;

		public function __construct($codigoImagen,
					$nombreImagen){
			$this->codigoImagen = $codigoImagen;
			$this->nombreImagen = $nombreImagen;
		}
		public function getCodigoImagen(){
			return $this->codigoImagen;
		}
		public function setCodigoImagen($codigoImagen){
			$this->codigoImagen = $codigoImagen;
		}
		public function getNombreImagen(){
			return $this->nombreImagen;
		}
		public function setNombreImagen($nombreImagen){
			$this->nombreImagen = $nombreImagen;
		}
		public function toString(){
			return "CodigoImagen: " . $this->codigoImagen . 
				" NombreImagen: " . $this->nombreImagen;
		}
	}
?>