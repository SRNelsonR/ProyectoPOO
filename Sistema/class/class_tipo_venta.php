<?php

	class TipoVenta{

		private $codigoTipoVenta;
		private $nombreTipoVenta;

		public function __construct($codigoTipoVenta,
					$nombreTipoVenta){
			$this->codigoTipoVenta = $codigoTipoVenta;
			$this->nombreTipoVenta = $nombreTipoVenta;
		}
		public function getCodigoTipoVenta(){
			return $this->codigoTipoVenta;
		}
		public function setCodigoTipoVenta($codigoTipoVenta){
			$this->codigoTipoVenta = $codigoTipoVenta;
		}
		public function getNombreTipoVenta(){
			return $this->nombreTipoVenta;
		}
		public function setNombreTipoVenta($nombreTipoVenta){
			$this->nombreTipoVenta = $nombreTipoVenta;
		}
		public function toString(){
			return "CodigoTipoVenta: " . $this->codigoTipoVenta . 
				" NombreTipoVenta: " . $this->nombreTipoVenta;
		}
		public static function generarListaTipoVentas($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_tipo_venta, nombre_tipo_venta 
				FROM tbl_tipo_ventas")			
			);
			echo '<select name="" id="slc-tipo-ventas" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_tipo_venta"].'">'.
					$fila["nombre_tipo_venta"].'</option>';
			}
			echo '</select>';

		}
		
	}
?>