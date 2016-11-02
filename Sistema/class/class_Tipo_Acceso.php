<?php

	class TipoAcceso{

		private $codigoAcceso;
		private $nombreTipoAcceso;
		private $fotografia;

		public function __construct($codigoAcceso,
					$nombreTipoAcceso,
					$fotografia){
			$this->codigoAcceso = $codigoAcceso;
			$this->nombreTipoAcceso = $nombreTipoAcceso;
			$this->fotografia = $fotografia;
		}
		public function getCodigoAcceso(){
			return $this->codigoAcceso;
		}
		public function setCodigoAcceso($codigoAcceso){
			$this->codigoAcceso = $codigoAcceso;
		}
		public function getNombreTipoAcceso(){
			return $this->nombreTipoAcceso;
		}
		public function setNombreTipoAcceso($nombreTipoAcceso){
			$this->nombreTipoAcceso = $nombreTipoAcceso;
		}
		public function getFotografia(){
			return $this->fotografia;
		}
		public function setFotografia($fotografia){
			$this->fotografia = $fotografia;
		}
		public function toString(){
			return "CodigoAcceso: " . $this->codigoAcceso . 
				" NombreTipoAcceso: " . $this->nombreTipoAcceso . 
				" Fotografia: " . $this->fotografia;
		}
	}
?>