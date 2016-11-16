<?php

	class PrecioVenta{

		private $codigoPrecioVenta;
		private $codigoPrecioCompra;
		private $codigoDescuento;
		private $codigoImpuesto;

		public function __construct($codigoPrecioVenta,
					$codigoPrecioCompra,
					$codigoDescuento,
					$codigoImpuesto){
			$this->codigoPrecioVenta = $codigoPrecioVenta;
			$this->codigoPrecioCompra = $codigoPrecioCompra;
			$this->codigoDescuento = $codigoDescuento;
			$this->codigoImpuesto = $codigoImpuesto;
		}
		public function getCodigoPrecioVenta(){
			return $this->codigoPrecioVenta;
		}
		public function setCodigoPrecioVenta($codigoPrecioVenta){
			$this->codigoPrecioVenta = $codigoPrecioVenta;
		}
		public function getCodigoPrecioCompra(){
			return $this->codigoPrecioCompra;
		}
		public function setCodigoPrecioCompra($codigoPrecioCompra){
			$this->codigoPrecioCompra = $codigoPrecioCompra;
		}
		public function getCodigoDescuento(){
			return $this->codigoDescuento;
		}
		public function setCodigoDescuento($codigoDescuento){
			$this->codigoDescuento = $codigoDescuento;
		}
		public function getCodigoImpuesto(){
			return $this->codigoImpuesto;
		}
		public function setCodigoImpuesto($codigoImpuesto){
			$this->codigoImpuesto = $codigoImpuesto;
		}
		public function toString(){
			return "CodigoPrecioVenta: " . $this->codigoPrecioVenta . 
				" CodigoPrecioCompra: " . $this->codigoPrecioCompra . 
				" CodigoDescuento: " . $this->codigoDescuento . 
				" CodigoImpuesto: " . $this->codigoImpuesto;
		}
		
	}
?>