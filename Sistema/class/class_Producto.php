<?php

	class Producto{

		private $codigoProducto;
		private $codigoBarraProducto;
		private $nombreProducto;
		private $cantidadProducto;
		private $precioCompra;
		private $descuento;
		private $impuesto;
		private $precioVenta;
		private $tipoPresentacion;
		private $laboratorio;
		private $fechaIngreso;
		private $fechaVencimiento;
		private $dosis;
		private $indicaciones;
		private $estado;
		private $ingredientes;
		private $dolencias;
		private $tipoVenta;
		private $fotografia	;

		public function __construct($codigoProducto,
					$codigoBarraProducto,
					$nombreProducto,
					$cantidadProducto,
					$precioCompra,
					$descuento,
					$impuesto,
					$precioVenta,
					$tipoPresentacion,
					$laboratorio,
					$fechaIngreso,
					$fechaVencimiento,
					$dosis,
					$indicaciones,
					$estado,
					$ingredientes,
					$dolencias,
					$tipoVenta,
					$fotografia	){
			$this->codigoProducto = $codigoProducto;
			$this->codigoBarraProducto = $codigoBarraProducto;
			$this->nombreProducto = $nombreProducto;
			$this->cantidadProducto = $cantidadProducto;
			$this->precioCompra = $precioCompra;
			$this->descuento = $descuento;
			$this->impuesto = $impuesto;
			$this->precioVenta = $precioVenta;
			$this->tipoPresentacion = $tipoPresentacion;
			$this->laboratorio = $laboratorio;
			$this->fechaIngreso = $fechaIngreso;
			$this->fechaVencimiento = $fechaVencimiento;
			$this->dosis = $dosis;
			$this->indicaciones = $indicaciones;
			$this->estado = $estado;
			$this->ingredientes = $ingredientes;
			$this->dolencias = $dolencias;
			$this->tipoVenta = $tipoVenta;
			$this->fotografia	 = $fotografia	;
		}
		public function getCodigoProducto(){
			return $this->codigoProducto;
		}
		public function setCodigoProducto($codigoProducto){
			$this->codigoProducto = $codigoProducto;
		}
		public function getCodigoBarraProducto(){
			return $this->codigoBarraProducto;
		}
		public function setCodigoBarraProducto($codigoBarraProducto){
			$this->codigoBarraProducto = $codigoBarraProducto;
		}
		public function getNombreProducto(){
			return $this->nombreProducto;
		}
		public function setNombreProducto($nombreProducto){
			$this->nombreProducto = $nombreProducto;
		}
		public function getCantidadProducto(){
			return $this->cantidadProducto;
		}
		public function setCantidadProducto($cantidadProducto){
			$this->cantidadProducto = $cantidadProducto;
		}
		public function getPrecioCompra(){
			return $this->precioCompra;
		}
		public function setPrecioCompra($precioCompra){
			$this->precioCompra = $precioCompra;
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
		public function getPrecioVenta(){
			return $this->precioVenta;
		}
		public function setPrecioVenta($precioVenta){
			$this->precioVenta = $precioVenta;
		}
		public function getTipoPresentacion(){
			return $this->tipoPresentacion;
		}
		public function setTipoPresentacion($tipoPresentacion){
			$this->tipoPresentacion = $tipoPresentacion;
		}
		public function getLaboratorio(){
			return $this->laboratorio;
		}
		public function setLaboratorio($laboratorio){
			$this->laboratorio = $laboratorio;
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
		public function getDosis(){
			return $this->dosis;
		}
		public function setDosis($dosis){
			$this->dosis = $dosis;
		}
		public function getIndicaciones(){
			return $this->indicaciones;
		}
		public function setIndicaciones($indicaciones){
			$this->indicaciones = $indicaciones;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getIngredientes(){
			return $this->ingredientes;
		}
		public function setIngredientes($ingredientes){
			$this->ingredientes = $ingredientes;
		}
		public function getDolencias(){
			return $this->dolencias;
		}
		public function setDolencias($dolencias){
			$this->dolencias = $dolencias;
		}
		public function getTipoVenta(){
			return $this->tipoVenta;
		}
		public function setTipoVenta($tipoVenta){
			$this->tipoVenta = $tipoVenta;
		}
		public function getFotografia	(){
			return $this->fotografia	;
		}
		public function setFotografia	($fotografia	){
			$this->fotografia	 = $fotografia	;
		}
		public function toString(){
			return "CodigoProducto: " . $this->codigoProducto . 
				" CodigoBarraProducto: " . $this->codigoBarraProducto . 
				" NombreProducto: " . $this->nombreProducto . 
				" CantidadProducto: " . $this->cantidadProducto . 
				" PrecioCompra: " . $this->precioCompra . 
				" Descuento: " . $this->descuento . 
				" Impuesto: " . $this->impuesto . 
				" PrecioVenta: " . $this->precioVenta . 
				" TipoPresentacion: " . $this->tipoPresentacion . 
				" Laboratorio: " . $this->laboratorio . 
				" FechaIngreso: " . $this->fechaIngreso . 
				" FechaVencimiento: " . $this->fechaVencimiento . 
				" Dosis: " . $this->dosis . 
				" Indicaciones: " . $this->indicaciones . 
				" Estado: " . $this->estado . 
				" Ingredientes: " . $this->ingredientes . 
				" Dolencias: " . $this->dolencias . 
				" TipoVenta: " . $this->tipoVenta . 
				" Fotografia	: " . $this->fotografia	;
		}

		public static function  obtenerCodigo($conexion){
			$resultado = $conexion->ejecutarInstruccion(
				sprintf("SELECT MAX(codigo_producto) AS id FROM tbl_productos")			
			);
			
			$fila = $conexion->obtenerFila($resultado);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del Producto" value="'.($fila["id"]+1).'">';
			}
		
	}
?>
