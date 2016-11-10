<?php

	class Impuesto{

		private $codigoImpuesto;
		private $nombreImpuesto;
		private $porcentajeImpuesto;

		public function __construct($codigoImpuesto,
					$nombreImpuesto,
					$porcentajeImpuesto){
			$this->codigoImpuesto = $codigoImpuesto;
			$this->nombreImpuesto = $nombreImpuesto;
			$this->porcentajeImpuesto = $porcentajeImpuesto;
		}
		public function getCodigoImpuesto(){
			return $this->codigoImpuesto;
		}
		public function setCodigoImpuesto($codigoImpuesto){
			$this->codigoImpuesto = $codigoImpuesto;
		}
		public function getNombreImpuesto(){
			return $this->nombreImpuesto;
		}
		public function setNombreImpuesto($nombreImpuesto){
			$this->nombreImpuesto = $nombreImpuesto;
		}
		public function getPorcentajeImpuesto(){
			return $this->porcentajeImpuesto;
		}
		public function setPorcentajeImpuesto($porcentajeImpuesto){
			$this->porcentajeImpuesto = $porcentajeImpuesto;
		}
		public function toString(){
			return "CodigoImpuesto: " . $this->codigoImpuesto . 
				" NombreImpuesto: " . $this->nombreImpuesto . 
				" PorcentajeImpuesto: " . $this->porcentajeImpuesto;
		}
		public static function generarListaImpuestos($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_impuesto, nombre_impuesto 
				FROM tbl_impuestos")			
			);
			echo '<select name="" id="slc-impuestos" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_impuesto"].'">'.
					$fila["nombre_impuesto"].'</option>';
			}
			echo '</select>';

		}
	}
?>