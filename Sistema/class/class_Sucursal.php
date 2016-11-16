<?php

	class Sucursal{

		private $codigoSucursal;
		private $nombreSucursal;
		private $direccionSucursal;
		private $telefonoSucursal;
		private $correoSucursal;

		public function __construct($codigoSucursal,
					$nombreSucursal,
					$direccionSucursal,
					$telefonoSucursal,
					$correoSucursal){
			$this->codigoSucursal = $codigoSucursal;
			$this->nombreSucursal = $nombreSucursal;
			$this->direccionSucursal = $direccionSucursal;
			$this->telefonoSucursal = $telefonoSucursal;
			$this->correoSucursal = $correoSucursal;
		}
		public function getCodigoSucursal(){
			return $this->codigoSucursal;
		}
		public function setCodigoSucursal($codigoSucursal){
			$this->codigoSucursal = $codigoSucursal;
		}
		public function getNombreSucursal(){
			return $this->nombreSucursal;
		}
		public function setNombreSucursal($nombreSucursal){
			$this->nombreSucursal = $nombreSucursal;
		}
		public function getDireccionSucursal(){
			return $this->direccionSucursal;
		}
		public function setDireccionSucursal($direccionSucursal){
			$this->direccionSucursal = $direccionSucursal;
		}
		public function getTelefonoSucursal(){
			return $this->telefonoSucursal;
		}
		public function setTelefonoSucursal($telefonoSucursal){
			$this->telefonoSucursal = $telefonoSucursal;
		}
		public function getCorreoSucursal(){
			return $this->correoSucursal;
		}
		public function setCorreoSucursal($correoSucursal){
			$this->correoSucursal = $correoSucursal;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoSucursal: " . $this->codigoSucursal . 
				" NombreSucursal: " . $this->nombreSucursal . 
				" DireccionSucursal: " . $this->direccionSucursal . 
				" TelefonoSucursal: " . $this->telefonoSucursal . 
				" CorreoSucursal: " . $this->correoSucursal;
		}
		
		public static function generarListaSucursales($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_sucursal, nombre_sucursal 
				FROM tbl_sucursales")			
			);
			echo '<select name="" id="slc-sucursales" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_sucursal"].'">'.
					$fila["nombre_sucursal"].'</option>';
			}
			echo '</select>';
		}
	}
?>