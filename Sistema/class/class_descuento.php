<?php

	class Descuento{

		private $codigoDescuento;
		private $nombreDescuento;
		private $porcentajeDescuento;

		public function __construct($codigoDescuento,
					$nombreDescuento,
					$porcentajeDescuento){
			$this->codigoDescuento = $codigoDescuento;
			$this->nombreDescuento = $nombreDescuento;
			$this->porcentajeDescuento = $porcentajeDescuento;
		}
		public function getCodigoDescuento(){
			return $this->codigoDescuento;
		}
		public function setCodigoDescuento($codigoDescuento){
			$this->codigoDescuento = $codigoDescuento;
		}
		public function getNombreDescuento(){
			return $this->nombreDescuento;
		}
		public function setNombreDescuento($nombreDescuento){
			$this->nombreDescuento = $nombreDescuento;
		}
		public function getPorcentajeDescuento(){
			return $this->porcentajeDescuento;
		}
		public function setPorcentajeDescuento($porcentajeDescuento){
			$this->porcentajeDescuento = $porcentajeDescuento;
		}
		public function toString(){
			return "CodigoDescuento: " . $this->codigoDescuento . 
				" NombreDescuento: " . $this->nombreDescuento . 
				" PorcentajeDescuento: " . $this->porcentajeDescuento;
		}

		public static function generarListaDescuentos($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_descuento, nombre_descuento 
				FROM tbl_descuentos")			
			);
			echo '<select name="" id="slc-descuentos" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_descuento"].'">'.
					$fila["nombre_descuento"].'</option>';
			}
			echo '</select>';

		}
	}
?>