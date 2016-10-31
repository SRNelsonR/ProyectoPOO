<?php

	class TipoCliente{

		private $codigoTipoCliente;
		private $nombreTipoCliente;

		public function __construct($codigoTipoCliente,
					$nombreTipoCliente){
			$this->codigoTipoCliente = $codigoTipoCliente;
			$this->nombreTipoCliente = $nombreTipoCliente;
		}
		public function getCodigoTipoCliente(){
			return $this->codigoTipoCliente;
		}
		public function setCodigoTipoCliente($codigoTipoCliente){
			$this->codigoTipoCliente = $codigoTipoCliente;
		}
		public function getNombreTipoCliente(){
			return $this->nombreTipoCliente;
		}
		public function setNombreTipoCliente($nombreTipoCliente){
			$this->nombreTipoCliente = $nombreTipoCliente;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoTipoCliente: " . $this->codigoTipoCliente . 
				" NombreTipoCliente: " . $this->nombreTipoCliente;
		}
	}
?>