<?php

	class Estado{

		private $codigoEstado;
		private $nombreEstado;

		public function __construct($codigoEstado,
					$nombreEstado){
			$this->codigoEstado = $codigoEstado;
			$this->nombreEstado = $nombreEstado;
		}
		public function getCodigoEstado(){
			return $this->codigoEstado;
		}
		public function setCodigoEstado($codigoEstado){
			$this->codigoEstado = $codigoEstado;
		}
		public function getNombreEstado(){
			return $this->nombreEstado;
		}
		public function setNombreEstado($nombreEstado){
			$this->nombreEstado = $nombreEstado;
		}
		public function toString(){
			return "CodigoEstado: " . $this->codigoEstado . 
				" NombreEstado: " . $this->nombreEstado;
		}
		public static function generarListaEstados($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_estado, nombre_estado 
				FROM tbl_estados")			
			);
			echo '<select name="" id="slc-estados-producto" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_estado"].'">'.
					$fila["nombre_estado"].'</option>';
			}
			echo '</select>';

		}
		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_estado) AS id FROM tbl_estados")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del estado" value="'.$codigoA.'" id="txt-codigo-estado">';
			}
	}
?>