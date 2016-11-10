<?php

	class Laboratorio{

		private $codigoLaboratorio;
		private $nombreLaboratorio;
		private $direccionLaboratorio;
		private $telefonoLaboratorio;
		private $correoLaboratorio;
		private $paginaWeb;
		private $Encargado;

		public function __construct($codigoLaboratorio,
					$nombreLaboratorio,
					$direccionLaboratorio,
					$telefonoLaboratorio,
					$correoLaboratorio,
					$paginaWeb,
					$Encargado){
			$this->codigoLaboratorio = $codigoLaboratorio;
			$this->nombreLaboratorio = $nombreLaboratorio;
			$this->direccionLaboratorio = $direccionLaboratorio;
			$this->telefonoLaboratorio = $telefonoLaboratorio;
			$this->correoLaboratorio = $correoLaboratorio;
			$this->paginaWeb = $paginaWeb;
			$this->Encargado = $Encargado;
		}
		public function getCodigoLaboratorio(){
			return $this->codigoLaboratorio;
		}
		public function setCodigoLaboratorio($codigoLaboratorio){
			$this->codigoLaboratorio = $codigoLaboratorio;
		}
		public function getNombreLaboratorio(){
			return $this->nombreLaboratorio;
		}
		public function setNombreLaboratorio($nombreLaboratorio){
			$this->nombreLaboratorio = $nombreLaboratorio;
		}
		public function getDireccionLaboratorio(){
			return $this->direccionLaboratorio;
		}
		public function setDireccionLaboratorio($direccionLaboratorio){
			$this->direccionLaboratorio = $direccionLaboratorio;
		}
		public function getTelefonoLaboratorio(){
			return $this->telefonoLaboratorio;
		}
		public function setTelefonoLaboratorio($telefonoLaboratorio){
			$this->telefonoLaboratorio = $telefonoLaboratorio;
		}
		public function getCorreoLaboratorio(){
			return $this->correoLaboratorio;
		}
		public function setCorreoLaboratorio($correoLaboratorio){
			$this->correoLaboratorio = $correoLaboratorio;
		}
		public function getPaginaWeb(){
			return $this->paginaWeb;
		}
		public function setPaginaWeb($paginaWeb){
			$this->paginaWeb = $paginaWeb;
		}
		public function getEncargado(){
			return $this->Encargado;
		}
		public function setEncargado($Encargado){
			$this->Encargado = $Encargado;
		}
		/*public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}*/

		public function toString(){
			return "CodigoLaboratorio: " . $this->codigoLaboratorio . 
				" NombreLaboratorio: " . $this->nombreLaboratorio . 
				" DireccionLaboratorio: " . $this->direccionLaboratorio . 
				" TelefonoLaboratorio: " . $this->telefonoLaboratorio . 
				" CorreoLaboratorio: " . $this->correoLaboratorio . 
				" PaginaWeb: " . $this->paginaWeb . 
				" Encargado: " . $this->Encargado;
		}
		public static function generarListaLaboratorios($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_laboratorio, nombre_laboratorio 
				FROM tbl_laboratorios")			
			);
			echo '<select name="" id="slc-laboratorios" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_laboratorio"].'">'.
					$fila["nombre_laboratorio"].'</option>';
			}
			echo '</select>';

		}

	}
?>
