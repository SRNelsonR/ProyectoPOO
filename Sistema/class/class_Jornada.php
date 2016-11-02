<?php

	class Jornada{

		private $codigoJornada;
		private $nombreJornada;

		public function __construct($codigoJornada,
					$nombreJornada){
			$this->codigoJornada = $codigoJornada;
			$this->nombreJornada = $nombreJornada;
		}
		public function getCodigoJornada(){
			return $this->codigoJornada;
		}
		public function setCodigoJornada($codigoJornada){
			$this->codigoJornada = $codigoJornada;
		}
		public function getNombreJornada(){
			return $this->nombreJornada;
		}
		public function setNombreJornada($nombreJornada){
			$this->nombreJornada = $nombreJornada;
		}
		public function toString(){
			return "CodigoJornada: " . $this->codigoJornada . 
				" NombreJornada: " . $this->nombreJornada;
		}
	}
?>