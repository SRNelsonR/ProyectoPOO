<?php

	class Jornada{

		private $codigoJornada;
		private $nombreJornada;

		public function __construct($codigoJornada,
					$nombreJornada){
			$this->codigoJornada = $codigoJornada;
			$this->nombreJornada = $nombreJornada;
		}
		public function getCodigoJornada(){
			return $this->codigoJornada;
		}
		public function setCodigoJornada($codigoJornada){
			$this->codigoJornada = $codigoJornada;
		}
		public function getNombreJornada(){
			return $this->nombreJornada;
		}
		public function setNombreJornada($nombreJornada){
			$this->nombreJornada = $nombreJornada;
		}
		public function toString(){
			return "CodigoJornada: " . $this->codigoJornada . 
				" NombreJornada: " . $this->nombreJornada;
		}
		public static function generarListaJornadas($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_jornada, nombre_jornada 
				FROM tbl_jornadas")			
			);
			echo '<select name="" id="slc-jornada" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_jornada"].'">'.
					$fila["nombre_jornada"].'</option>';
			}
			echo '</select>';

		}
	}
?>