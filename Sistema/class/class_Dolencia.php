<?php

	class Dolencia{

		private $codigoDolencia;
		private $nombreDolencia;

		public function __construct($codigoDolencia,
					$nombreDolencia){
			$this->codigoDolencia = $codigoDolencia;
			$this->nombreDolencia = $nombreDolencia;
		}
		public function getCodigoDolencia(){
			return $this->codigoDolencia;
		}
		public function setCodigoDolencia($codigoDolencia){
			$this->codigoDolencia = $codigoDolencia;
		}
		public function getNombreDolencia(){
			return $this->nombreDolencia;
		}
		public function setNombreDolencia($nombreDolencia){
			$this->nombreDolencia = $nombreDolencia;
		}
		public function toString(){
			return "CodigoDolencia: " . $this->codigoDolencia . 
				" NombreDolencia: " . $this->nombreDolencia;
		}
		public static function generarListaDolencias($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_dolencia, nombre_dolencia 
				FROM tbl_dolencias")			
			);
			
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<div class="checkbox" name="dolencias[]" id="dolencias[]">
                        <label><input type="checkbox" value="'.$fila["codigo_dolencia"].'">'.
					$fila["nombre_dolencia"].'</label></div>';
			}

		}
		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_dolencia) AS id FROM tbl_dolencias")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del dolencia" value="'.$codigoA.'" id="txt-codigo-dolencia">';
			}
	}
?>