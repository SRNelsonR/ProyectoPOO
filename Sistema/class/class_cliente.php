<?php
    include_once("class_Persona.php");
	

	class Cliente extends Persona{

		private $codigoCliente;
		private $membresia;
		private $tipoCliente;
		private $fechaIngreso;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identificacion,
					$domicilio,
					$telefono,
					$correo,
					$estadoCivil,
					$usuario,
					$contrasena,
					$codigoCliente,
					$membresia,
					$tipoCliente){
			parent($nombre,
					$apellido,
					$edad,
					$genero,
					$identificacion,
					$domicilio,
					$telefono,
					$correo,
					$estadoCivil,
					$usuario,
					$contrasena
					);
			$this->codigoCliente = $codigoCliente;
			$this->membresia = $membresia;
			$this->tipoCliente = $tipoCliente;
			$this->fechaIngreso = $fechaIngreso;
		}
		public function getCodigoCliente(){
			return $this->codigoCliente;
		}
		public function setCodigoCliente($codigoCliente){
			$this->codigoCliente = $codigoCliente;
		}
		public function getMembresia(){
			return $membresia;
		}
		public function setMembresia($membresia){
			$this->membresia = $membresia;
		}
		public function getTipoCliente(){
			return $tipoCliente;
		}
		public function setTipoCliente($tipoCliente){
			$this->tipoCliente = $tipoCliente;
		}
		public function getFechaIngreso(){
			return $this->fechaIngreso;
		}
		public function setFechaIngreso($fechaIngreso){
			$this->fechaIngreso = $fechaIngreso;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return parent::toString()." CodigoCliente: " . $this->codigoCliente . 
				" Membresia: " . $this->membresia->toString() . 
				" TipoCliente: " . $this->tipoCliente;
		}

		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_cliente) AS id FROM tbl_clientes")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del Cliente" value="'.$codigoA.'" id="txt-codigo-cliente">';
			}
	}
?>