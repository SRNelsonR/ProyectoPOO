<?php

	class Genero{

		private $codigoGenero;
		private $nombreGenero;

		public function __construct($codigoGenero,
					$nombreGenero){
			$this->codigoGenero = $codigoGenero;
			$this->nombreGenero = $nombreGenero;
		}
		public function getCodigoGenero(){
			return $this->codigoGenero;
		}
		public function setCodigoGenero($codigoGenero){
			$this->codigoGenero = $codigoGenero;
		}
		public function getNombreGenero(){
			return $this->nombreGenero;
		}
		public function setNombreGenero($nombreGenero){
			$this->nombreGenero = $nombreGenero;
		}
		public function toString(){
			return "CodigoGenero: " . $this->codigoGenero . 
				" NombreGenero: " . $this->nombreGenero;
		}
		public static function generarListaGeneros($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_genero, nombre_genero 
				FROM tbl_generos")			
			);
			
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<label class="radio-inline"><input type="radio" name="rd-genero" id="rd-genero" value="'.$fila["codigo_genero"].'" checked >'.
					$fila["nombre_genero"].'</label>';
			}

		}
	}
?>