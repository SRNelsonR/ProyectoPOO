<?php

	class EstadoCivil{

		private $codigoEstadoCivil;
		private $nombreEstadoCivil;

		public function __construct($codigoEstadoCivil,
					$nombreEstadoCivil){
			$this->codigoEstadoCivil = $codigoEstadoCivil;
			$this->nombreEstadoCivil = $nombreEstadoCivil;
		}
		public function getCodigoEstadoCivil(){
			return $this->codigoEstadoCivil;
		}
		public function setCodigoEstadoCivil($codigoEstadoCivil){
			$this->codigoEstadoCivil = $codigoEstadoCivil;
		}
		public function getNombreEstadoCivil(){
			return $this->nombreEstadoCivil;
		}
		public function setNombreEstadoCivil($nombreEstadoCivil){
			$this->nombreEstadoCivil = $nombreEstadoCivil;
		}
		public function toString(){
			return "CodigoEstadoCivil: " . $this->codigoEstadoCivil . 
				" NombreEstadoCivil: " . $this->nombreEstadoCivil;
		}
		public static function generarListaEstadoCivil($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_estado_civil, nombre_estado_civil 
				FROM tbl_estado_civil")			
			);
			
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<label class="radio-inline"><input type="radio" name="rd-estado-civil" id="rd-estado-civil" value="'.$fila["codigo_estado_civil"].'" checked >'.
					$fila["nombre_estado_civil"].'</label>';
			}

		}
	}
?>