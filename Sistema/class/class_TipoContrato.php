<?php

	class TipoContrato{

		private $codigoContrato;
		private $tipoContrato;
		private $sueldo;
		private $duracionContrato;

		public function __construct($codigoContrato,
					$tipoContrato,
					$sueldo,
					$duracionContrato){
			$this->codigoContrato = $codigoContrato;
			$this->tipoContrato = $tipoContrato;
			$this->sueldo = $sueldo;
			$this->duracionContrato = $duracionContrato;
		}
		public function getCodigoContrato(){
			return $this->codigoContrato;
		}
		public function setCodigoContrato($codigoContrato){
			$this->codigoContrato = $codigoContrato;
		}
		public function getTipoContrato(){
			return $this->tipoContrato;
		}
		public function setTipoContrato($tipoContrato){
			$this->tipoContrato = $tipoContrato;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function getDuracionContrato(){
			return $this->duracionContrato;
		}
		public function setDuracionContrato($duracionContrato){
			$this->duracionContrato = $duracionContrato;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoContrato: " . $this->codigoContrato . 
				" TipoContrato: " . $this->tipoContrato . 
				" Sueldo: " . $this->sueldo . 
				" DuracionContrato: " . $this->duracionContrato;
		}
		public static function generarListaTipoContratos($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_tipo_contrato, nombre_tipo_contrato 
				FROM tbl_tipo_contratos")			
			);
			echo '<select name="" id="slc-tipo-contrato" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_tipo_contrato"].'">'.
					$fila["nombre_tipo_contrato"].'</option>';
			}
			echo '</select>';

		}
	}
?>