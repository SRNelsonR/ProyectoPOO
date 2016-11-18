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
					$fotografia,
					$codigoCliente,
					$membresia,
					$tipoCliente,
					$fechaIngreso){
			parent::__construct($nombre,
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
					$fotografia
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

		public function nuevo($conexion,$fechaNacimiento){
			$sql = sprintf(
				"INSERT INTO tbl_clientes 
						(
							codigo_cliente, codigo_tipo_cliente, 
							codigo_genero, codigo_estado_civil, 
							nombre_cliente, apellido_cliente, 
							identidad_cliente, fecha_nacimiento, 
							edad_cliente, direccion, telefono, 
							correo_electronico, fotografia, 
							fecha_ingreso_cliente, codigo_membresia
						) VALUES (
						NULL, '%s',#tipocliente 
						'%s', '%s',#codgenero, codestadocivil 
						'%s', '%s',#nombre,apellido 
						'%s', '%s', #identidad, fenacimiento
						'%s', '%s', '%s',#edad,dir,tel 
						'%s', NULL,#correo_electronico 
						'%s', '%s'#feingreso,codmembresia
						)",
						stripslashes($this->tipoCliente),
						stripslashes($this->genero),
						stripslashes($this->estadoCivil),
						stripslashes($this->nombre),
						stripslashes($this->apellido),
						stripslashes($this->identificacion),
						stripslashes($fechaNacimiento),
						stripslashes($this->edad),
						stripslashes($this->domicilio),
						stripslashes($this->telefono),
						stripslashes($this->correo),
						stripslashes($this->fechaIngreso),
						stripslashes($this->membresia)
				);

			$resultado = $conexion->ejecutarInstruccion($sql);
			if($resultado){
				echo "<b>Registro almacenado con exito</b>";
			}else{
				echo "Error al guardar el registro";
				exit;
			}
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


			
	}










?>