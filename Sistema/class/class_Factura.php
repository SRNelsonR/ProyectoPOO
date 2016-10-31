<?php

	class Factura{

		private $codigoFactura;
		private $Sucursal;
		private $Cliente;
		private $Empleado;
		private $Producto;
		private $fechaFactura;
		private $subtotal;
		private $impuesto;
		private $descuento;
		private $total;
		private $efectivo;

		public function __construct($codigoFactura,
					$Sucursal,
					$Cliente,
					$Empleado,
					$Producto,
					$fechaFactura,
					$subtotal,
					$impuesto,
					$descuento,
					$total,
					$efectivo){
			$this->codigoFactura = $codigoFactura;
			$this->Sucursal = $Sucursal;
			$this->Cliente = $Cliente;
			$this->Empleado = $Empleado;
			$this->Producto = $Producto;
			$this->fechaFactura = $fechaFactura;
			$this->subtotal = $subtotal;
			$this->impuesto = $impuesto;
			$this->descuento = $descuento;
			$this->total = $total;
			$this->efectivo = $efectivo;
		}
		public function getCodigoFactura(){
			return $this->codigoFactura;
		}
		public function setCodigoFactura($codigoFactura){
			$this->codigoFactura = $codigoFactura;
		}
		public function getSucursal(){
			return $Sucursal;
		}
		public function setSucursal($Sucursal){
			$this->Sucursal = $Sucursal;
		}
		public function getCliente(){
			return $Cliente;
		}
		public function setCliente($Cliente){
			$this->Cliente = $Cliente;
		}
		public function getEmpleado(){
			return $Empleado;
		}
		public function setEmpleado($Empleado){
			$this->Empleado = $Empleado;
		}
		public function getProducto(){
			return $Producto;
		}
		public function setProducto($Producto){
			$this->Producto = $Producto;
		}
		public function getFechaFactura(){
			return $this->fechaFactura;
		}
		public function setFechaFactura($fechaFactura){
			$this->fechaFactura = $fechaFactura;
		}
		public function getSubtotal(){
			return $this->subtotal;
		}
		public function setSubtotal($subtotal){
			$this->subtotal = $subtotal;
		}
		public function getImpuesto(){
			return $this->impuesto;
		}
		public function setImpuesto($impuesto){
			$this->impuesto = $impuesto;
		}
		public function getDescuento(){
			return $this->descuento;
		}
		public function setDescuento($descuento){
			$this->descuento = $descuento;
		}
		public function getTotal(){
			return $this->total;
		}
		public function setTotal($total){
			$this->total = $total;
		}
		public function getEfectivo(){
			return $this->efectivo;
		}
		public function setEfectivo($efectivo){
			$this->efectivo = $efectivo;
		}
		public function nuevo(){}
		public function eliminar(){}
		public function salir(){}
		public function buscar(){}
		public function modificar(){}
		public function conexion(){}
		public function toString(){
			return "CodigoFactura: " . $this->codigoFactura . 
				" Sucursal: " . $this->Sucursal->toString() . 
				" Cliente: " . $this->Cliente->toString() . 
				" Empleado: " . $this->Empleado->toString() . 
				" Producto: " . $this->Producto->toString() . 
				" FechaFactura: " . $this->fechaFactura . 
				" Subtotal: " . $this->subtotal . 
				" Impuesto: " . $this->impuesto . 
				" Descuento: " . $this->descuento . 
				" Total: " . $this->total . 
				" Efectivo: " . $this->efectivo;
		}
	}
?>