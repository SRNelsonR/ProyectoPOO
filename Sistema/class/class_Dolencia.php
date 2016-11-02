<?php

	class Dolencia{

		private $codigoDolencia;
		private $nombreDolencia;

		public function __construct($codigoDolencia,
					$nombreDolencia){
			$this->codigoDolencia = $codigoDolencia;
			$this->nombreDolencia = $nombreDolencia;
		}
		public function getCodigoDolencia(){
			return $this->codigoDolencia;
		}
		public function setCodigoDolencia($codigoDolencia){
			$this->codigoDolencia = $codigoDolencia;
		}
		public function getNombreDolencia(){
			return $this->nombreDolencia;
		}
		public function setNombreDolencia($nombreDolencia){
			$this->nombreDolencia = $nombreDolencia;
		}
		public function toString(){
			return "CodigoDolencia: " . $this->codigoDolencia . 
				" NombreDolencia: " . $this->nombreDolencia;
		}
	}
?>