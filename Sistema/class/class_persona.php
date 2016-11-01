<?php

	class Persona{

		protected $nombre;
		protected $apellido;
		protected $edad;
		protected $genero;
		protected $identificacion;
		protected $domicilio;
		protected $telefono;
		protected $correo;
		protected $estadoCivil;
		protected $usuario;
		protected $contrasena;
		protected $fotografia;

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
					$fotografia){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->genero = $genero;
			$this->identificacion = $identificacion;
			$this->domicilio = $domicilio;
			$this->telefono = $telefono;
			$this->correo = $correo;
			$this->estadoCivil = $estadoCivil;
			$this->usuario = $usuario;
			$this->contrasena = $contrasena;
			$this->fotografia = $fotografia;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function getEdad(){
			return $this->edad;
		}
		public function setEdad($edad){
			$this->edad = $edad;
		}
		public function getGenero(){
			return $this->genero;
		}
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getIdentificacion(){
			return $this->identificacion;
		}
		public function setIdentificacion($identificacion){
			$this->identificacion = $identificacion;
		}
		public function getDomicilio(){
			return $this->domicilio;
		}
		public function setDomicilio($domicilio){
			$this->domicilio = $domicilio;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getEstadoCivil(){
			return $this->estadoCivil;
		}
		public function setEstadoCivil($estadoCivil){
			$this->estadoCivil = $estadoCivil;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getFotografia(){
			return $this->fotografia;
		}
		public function setFotografia($fotografia){
			$this->fotografia = $fotografia;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Edad: " . $this->edad . 
				" Genero: " . $this->genero . 
				" Identificacion: " . $this->identificacion . 
				" Domicilio: " . $this->domicilio . 
				" Telefono: " . $this->telefono . 
				" Correo: " . $this->correo . 
				" EstadoCivil: " . $this->estadoCivil . 
				" Usuario: " . $this->usuario . 
				" Contrasena: " . $this->contrasena.
				"Fotografia: " . $this->fotografia;
		}
	}
?>