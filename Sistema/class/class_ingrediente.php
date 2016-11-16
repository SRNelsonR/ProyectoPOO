<?php

	class Ingrediente{

		private $codigoIngrediente;
		private $nombreIngrediente;

		public function __construct($codigoIngrediente,
					$nombreIngrediente){
			$this->codigoIngrediente = $codigoIngrediente;
			$this->nombreIngrediente = $nombreIngrediente;
		}
		public function getCodigoIngrediente(){
			return $this->codigoIngrediente;
		}
		public function setCodigoIngrediente($codigoIngrediente){
			$this->codigoIngrediente = $codigoIngrediente;
		}
		public function getNombreIngrediente(){
			return $this->nombreIngrediente;
		}
		public function setNombreIngrediente($nombreIngrediente){
			$this->nombreIngrediente = $nombreIngrediente;
		}
		public function toString(){
			return "CodigoIngrediente: " . $this->codigoIngrediente . 
				" NombreIngrediente: " . $this->nombreIngrediente;
		}
		public static function generarListaIngredientes($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_ingrediente, nombre_ingrediente 
				FROM tbl_ingredientes")			
			);
			
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<div class="checkbox" name="ingredientes[]" id="ingredientes[]">
                        <label><input type="checkbox" value="'.$fila["codigo_ingrediente"].'">'.
					$fila["nombre_ingrediente"].'</label></div>';
			}

		}
	}
?>