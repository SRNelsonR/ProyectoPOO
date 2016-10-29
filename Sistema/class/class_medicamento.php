<?php

	class Medicamento{

		private $nombre;
		private $fechaIngreso;
		private $fechaVencimiento;
		private $precioCompra;
		private $precioVenta;
		private $formaPresentacion;

		public function __construct($nombre,
					$fechaIngreso,
					$fechaVencimiento,
					$precioCompra,
					$precioVenta,
					$formaPresentacion){
			$this->nombre = $nombre;
			$this->fechaIngreso = $fechaIngreso;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->precioCompra = $precioCompra;
			$this->precioVenta = $precioVenta;
			$this->formaPresentacion = $formaPresentacion;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getFechaIngreso(){
			return $this->fechaIngreso;
		}
		public function setFechaIngreso($fechaIngreso){
			$this->fechaIngreso = $fechaIngreso;
		}
		public function getFechaVencimiento(){
			return $this->fechaVencimiento;
		}
		public function setFechaVencimiento($fechaVencimiento){
			$this->fechaVencimiento = $fechaVencimiento;
		}
		public function getPrecioCompra(){
			return $this->precioCompra;
		}
		public function setPrecioCompra($precioCompra){
			$this->precioCompra = $precioCompra;
		}
		public function getPrecioVenta(){
			return $this->precioVenta;
		}
		public function setPrecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
		public function getFormaPresentacion(){
			return $this->formaPresentacion;
		}
		public function setFormaPresentacion($formaPresentacion){
			$this->formaPresentacion = $formaPresentacion;
		}
		public function toString(){
			return "Nombre: " . $this->nombre . 
				" FechaIngreso: " . $this->fechaIngreso . 
				" FechaVencimiento: " . $this->fechaVencimiento . 
				" PrecioCompra: " . $this->precioCompra . 
				" PrecioVenta: " . $this->precioVenta . 
				" FormaPresentacion: " . $this->formaPresentacion;
		}
	}
?>