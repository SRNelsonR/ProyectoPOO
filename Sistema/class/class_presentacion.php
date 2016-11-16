<?php

	class Presentaciones{

		private $codigoPresentacion;
		private $nombrePresentacion;

		public function __construct($codigoPresentacion,
					$nombrePresentacion){
			$this->codigoPresentacion = $codigoPresentacion;
			$this->nombrePresentacion = $nombrePresentacion;
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
		public function toString(){
			return "CodigoPresentacion: " . $this->codigoPresentacion . 
				" NombrePresentacion: " . $this->nombrePresentacion;
		}
		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_presentacion) AS id FROM tbl_presentaciones")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo de la presentacion" value="'.$codigoA.'" id="txt-codigo-presentacion">';
			}
	}
?>