<?php

	class Profesion{

		private $codigoProfesion;
		private $nombreProfesion;

		public function __construct($codigoProfesion,
					$nombreProfesion){
			$this->codigoProfesion = $codigoProfesion;
			$this->nombreProfesion = $nombreProfesion;
		}
		public function getCodigoProfesion(){
			return $this->codigoProfesion;
		}
		public function setCodigoProfesion($codigoProfesion){
			$this->codigoProfesion = $codigoProfesion;
		}
		public function getNombreProfesion(){
			return $this->nombreProfesion;
		}
		public function setNombreProfesion($nombreProfesion){
			$this->nombreProfesion = $nombreProfesion;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoProfesion: " . $this->codigoProfesion . 
				" NombreProfesion: " . $this->nombreProfesion;
		}
	}
?>