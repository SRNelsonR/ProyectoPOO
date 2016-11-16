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
		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_impuesto) AS id FROM tbl_impuestos")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del Empleado" value="'.$codigoA.'" id="txt-codigo-impuesto">';
			}
			
		public static function guardarRegistro($conexion){
			$sql = sprintf("INSERT INTO tbl_impuestos(
							codigo_impuesto, nombre_impuesto, porcentaje_impuesto) 
							VALUES ('%s','%s','%s')",
				stripslashes($this->codigoImpuesto),
				stripslashes($this->nombreImpuesto),
				stripslashes($this->porcentajeImpuesto)
				);
			echo "<br>Instruccion a ejecutar: ". $sql;

			$resultado = $conexion->ejecutarInstruccion($sql);

			if($resultado){
				echo "<b>Registro almacenado con exito</b>";
			}else{
				echo "Error al guardar el registro";
				exit;
			}
		}
	}
?>