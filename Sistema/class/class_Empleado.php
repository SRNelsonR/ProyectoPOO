<?php
    include_once("class_Persona.php");
    
	class Empleado extends Persona{

		private $codigoEmpleado;
		private $profesion;
		private $fechaInicio;
		private $tipoContrato;
		private $jornada;
		private $jefeSuperior;
		private $recomendaciones;
		private $sueldo;
		private $tipoAcceso;
		private $sucursal;

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
					$codigoEmpleado,
					$profesion,
					$fechaInicio,
					$tipoContrato,
					$jornada,
					$jefeSuperior,
					$recomendaciones,
					$sueldo,
					$tipoAcceso,
					$sucursal){
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
					$contrasena);
			$this->codigoEmpleado = $codigoEmpleado;
			$this->profesion = $profesion;
			$this->fechaInicio = $fechaInicio;
			$this->tipoContrato = $tipoContrato;
			$this->jornada = $jornada;
			$this->jefeSuperior = $jefeSuperior;
			$this->recomendaciones = $recomendaciones;
			$this->sueldo = $sueldo;
			$this->tipoAcceso = $tipoAcceso;
			$this->sucursal = $sucursal;
		}
		public function getCodigoEmpleado(){
			return $this->codigoEmpleado;
		}
		public function setCodigoEmpleado($codigoEmpleado){
			$this->codigoEmpleado = $codigoEmpleado;
		}
		public function getProfesion(){
			return $profesion;
		}
		public function setProfesion($profesion){
			$this->profesion = $profesion;
		}
		public function getFechaInicio(){
			return $this->fechaInicio;
		}
		public function setFechaInicio($fechaInicio){
			$this->fechaInicio = $fechaInicio;
		}
		public function getTipoContrato(){
			return $tipoContrato;
		}
		public function setTipoContrato($tipoContrato){
			$this->tipoContrato = $tipoContrato;
		}
		public function getJornada(){
			return $jornada;
		}
		public function setJornada($jornada){
			$this->jornada = $jornada;
		}
		public function getJefeSuperior(){
			return $this->jefeSuperior;
		}
		public function setJefeSuperior($jefeSuperior){
			$this->jefeSuperior = $jefeSuperior;
		}
		public function getRecomendaciones(){
			return $recomendaciones;
		}
		public function setRecomendaciones($recomendaciones){
			$this->recomendaciones = $recomendaciones;
		}
		public function getSueldo(){
			return $this->sueldo;
		}
		public function setSueldo($sueldo){
			$this->sueldo = $sueldo;
		}
		public function getTipoAcceso(){
			return $tipoAcceso;
		}
		public function setTipoAcceso($tipoAcceso){
			$this->tipoAcceso = $tipoAcceso;
		}
		public function getSucursal(){
			return $sucursal;
		}
		public function setSucursal($sucursal){
			$this->sucursal = $sucursal;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}

		
		public function toString(){
			return parent::toString()." CodigoEmpleado: " . $this->codigoEmpleado . 
				" Profesion: " . $this->profesion->toString() . 
				" FechaInicio: " . $this->fechaInicio . 
				" TipoContrato: " . $this->tipoContrato . 
				" Jornada: " . $this->jornada->toString() . 
				" JefeSuperior: " . $this->jefeSuperior . 
				" Recomendaciones: " . $this->recomendaciones->toString() . 
				" Sueldo: " . $this->sueldo . 
				" TipoAcceso: " . $this->tipoAcceso->toString() .
				"Sucursal: " . $this->sucursal->toString();
		}
		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_empleado) AS id FROM tbl_empleados")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del Empleado" value="'.$codigoA.'" id="txt-codigo-empleado">';
			}
			
		public static function generarListaEmpleados($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_empleado, nombre_empleado 
				FROM tbl_empleados")			
			);
			echo '<select name="" id="slc-empleados-2" class="form-control">';
			while($fila = $conexion->obtenerFila($resultado)){
				echo '<option value="'.$fila["codigo_empleado"].'">'.
					$fila["nombre_empleado"].'</option>';
			}
			echo '</select>';
		}
		
		public static function ObtenerCodigoCajero($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT codigo_tipo_usuario 
				FROM tbl_empleados")			
			);
			


	}
?>