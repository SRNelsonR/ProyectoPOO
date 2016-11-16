<?php

	class Dosis{

		private $codigoDosis;
		private $nombreDosis;

		public function __construct($codigoDosis,
					$nombreDosis){
			$this->codigoDosis = $codigoDosis;
			$this->nombreDosis = $nombreDosis;
		}
		public function getCodigoDosis(){
			return $this->codigoDosis;
		}
		public function setCodigoDosis($codigoDosis){
			$this->codigoDosis = $codigoDosis;
		}
		public function getNombreDosis(){
			return $this->nombreDosis;
		}
		public function setNombreDosis($nombreDosis){
			$this->nombreDosis = $nombreDosis;
		}
		public function toString(){
			return "CodigoDosis: " . $this->codigoDosis . 
				" NombreDosis: " . $this->nombreDosis;
		}
		public static function generarListaDosis($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_dosis, nombre_dosis 
				FROM tbl_dosis")			
			);
			echo '<select name="" id="slc-dosis-producto" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_dosis"].'">'.
					$fila["nombre_dosis"].'</option>';
			}
			echo '</select>';

		}
	}
?>