<?php

	class Producto{

		private $codigoProducto;
		private $nombreProducto;
		private $tipoPresentacion;
		private $ingredientes;
		private $laboratorio;
		private $dosis;
		private $precioCompra;
		private $precioVenta;
		private $cantidad;
		private $fechaIngreso;
		private $fechaVencimiento;
		private $dolencias;
		private $estado;
		private $tipoVenta;
		private $descuento;
		private $impuesto;
		private $fotografia;

		public function __construct($codigoProducto,
					$nombreProducto,
					$tipoPresentacion,
					$ingredientes,
					$laboratorio,
					$dosis,
					$precioCompra,
					$precioVenta,
					$cantidad,
					$fechaIngreso,
					$fechaVencimiento,
					$dolencias,
					$estado,
					$tipoVenta,
					$descuento,
					$impuesto,
					$fotografia){
			$this->codigoProducto = $codigoProducto;
			$this->nombreProducto = $nombreProducto;
			$this->tipoPresentacion = $tipoPresentacion;
			$this->ingredientes = $ingredientes;
			$this->laboratorio = $laboratorio;
			$this->dosis = $dosis;
			$this->precioCompra = $precioCompra;
			$this->precioVenta = $precioVenta;
			$this->cantidad = $cantidad;
			$this->fechaIngreso = $fechaIngreso;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->dolencias = $dolencias;
			$this->estado = $estado;
			$this->tipoVenta = $tipoVenta;
			$this->descuento = $descuento;
			$this->impuesto = $impuesto;
			$this->fotografia = $fotografia;
		}
		public function getCodigoProducto(){
			return $this->codigoProducto;
		}
		public function setCodigoProducto($codigoProducto){
			$this->codigoProducto = $codigoProducto;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getTipoPresentacion(){
			return $this->tipoPresentacion;
		}
		public function setTipoPresentacion($tipoPresentacion){
			$this->tipoPresentacion = $tipoPresentacion;
		}
		public function getIngredientes(){
			return $this->ingredientes;
		}
		public function setIngredientes($ingredientes){
			$this->ingredientes = $ingredientes;
		}
		public function getLaboratorio(){
			return $laboratorio;
		}
		public function setLaboratorio($laboratorio){
			$this->laboratorio = $laboratorio;
		}
		public function getDosis(){
			return $this->dosis;
		}
		public function setDosis($dosis){
			$this->dosis = $dosis;
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
		public function getCantidad(){
			return $this->cantidad;
		}
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
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
		public function getDolencias(){
			return $this->dolencias;
		}
		public function setDolencias($dolencias){
			$this->dolencias = $dolencias;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getTipoVenta(){
			return $this->tipoVenta;
		}
		public function setTipoVenta($tipoVenta){
			$this->tipoVenta = $tipoVenta;
		}
		public function getDescuento(){
			return $this->descuento;
		}
		public function setDescuento($descuento){
			$this->descuento = $descuento;
		}
		public function getImpuesto(){
			return $this->impuesto;
		}
		public function setImpuesto($impuesto){
			$this->impuesto = $impuesto;
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
			return "CodigoProducto: " . $this->codigoProducto . 
				" NombreProducto: " . $this->nombreProducto . 
				" TipoPresentacion: " . $this->tipoPresentacion . 
				" Ingredientes: " . $this->ingredientes . 
				" Laboratorio: " . $this->laboratorio->toString() . 
				" Dosis: " . $this->dosis . 
				" PrecioCompra: " . $this->precioCompra . 
				" PrecioVenta: " . $this->precioVenta . 
				" Cantidad: " . $this->cantidad . 
				" FechaIngreso: " . $this->fechaIngreso . 
				" FechaVencimiento: " . $this->fechaVencimiento . 
				" Dolencias: " . $this->dolencias . 
				" Estado: " . $this->estado . 
				" TipoVenta: " . $this->tipoVenta . 
				" Descuento: " . $this->descuento . 
				" Impuesto: " . $this->impuesto . 
				" Fotografia: " . $this->fotografia;
		}
	}
?>