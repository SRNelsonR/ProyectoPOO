<?php

	 abstract class Persona{

		private $nombre;
		private $apellido;
		private $edad;
		private $genero;
		private $identidad;
		private $direccion;
		private $telefono;

		public function __construct($nombre,
					$apellido,
					$edad,
					$genero,
					$identidad,
					$direccion,
					$telefono){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->edad = $edad;
			$this->genero = $genero;
			$this->identidad = $identidad;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
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
		public function getIdentidad(){
			return $this->identidad;
		}
		public function setIdentidad($identidad){
			$this->identidad = $identidad;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" Apellido: " . $this->apellido . 
				" Edad: " . $this->edad . 
				" Genero: " . $this->genero . 
				" Identidad: " . $this->identidad . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono;
		}
	}
?>