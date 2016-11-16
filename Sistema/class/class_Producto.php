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
			return $descuento;
		}
		public function setDescuento($descuento){
			$this->descuento = $descuento;
		}
		public function getImpuesto(){
			return $impuesto;
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
			return $tipoPresentacion;
		}
		public function setTipoPresentacion($tipoPresentacion){
			$this->tipoPresentacion = $tipoPresentacion;
		}
		public function getLaboratorio(){
			return $laboratorio;
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
			return $dosis;
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
			return $estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
		}
		public function getIngredientes(){
			return $ingredientes;
		}
		public function setIngredientes($ingredientes){
			$this->ingredientes = $ingredientes;
		}
		public function getDolencias(){
			return $dolencias;
		}
		public function setDolencias($dolencias){
			$this->dolencias = $dolencias;
		}
		public function getTipoVenta(){
			return $tipoVenta;
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
			$codigoA = ($fila["id"]+1);
			echo '<input disabled="disabled" class="form-control" placeholder="Codigo del Producto" value="'.$codigoA.'" id="txt-codigo-producto">';
			}

		public function guardarRegistro($conexion){
			$sql = sprintf(
				"INSERT INTO tbl_productos 
						(
							codigo_producto, codigo_presentacion, codigo_imagen, codigo_estado, codigo_tipo_venta, codigo_descuento, codigo_impuesto, codigo_dosis, codigo_laboratorio, fotografia, codigo_barra, nombre_producto, cantidad_producto, precio_compra, precio_venta, fecha_ingreso, fecha_vencimiento, indicaciones_producto
						) VALUES (
							NULL, '%s', '%s', '%s', '%s', '%s', '%s','%s','%s','%s','%s','%s','%s',
							'%s', '%s', '%s', '%s'
						)",
						stripslashes($this->codigo_producto),
						stripslashes($this->TipoPresentacion->getCodigoPresentacion()),
						stripslashes($this->imagen->getCodigoImagen()),
						stripslashes($this->estado->getCodigoEstado()),
						stripslashes($this->tipoVenta->getCodigoTipoVenta()),
						stripslashes($this->descuento->getCodigoDescuento()),
						stripslashes($this->impuesto->getCodigoImpuesto()),
						stripslashes($this->dosis->getCodigoDosis()),
						stripslashes($this->laboratorio->getCodigoLaboratorio()),
						stripslashes($this->fotografia),
						stripslashes($this->codigoBarraProducto),
						stripslashes($this->nombreProducto),
						stripslashes($this->cantidadProducto),
						stripslashes($this->precioCompra),
						stripslashes($this->precioVenta),
						stripslashes($this->fechaIngreso),						
						stripslashes($this->fechaVencimiento),
						stripslashes($this->indicaciones)
				);
			echo "<br>Instruccion a ejecutar: ".$sql;
			$resultado = $conexion->ejecutarInstruccion($sql);
			if($resultado){
				echo "<b>Registro almacenado con exito</b>";
			}else{
				echo "Error al guardar el registro";
				exit;
			}
			//Es necesario obtener el ultimo ID agregado:
			$resultado = $conexion->ejecutarInstruccion("SELECT last_insert_id() as id;");
			$fila = $conexion->obtenerFila($resultado);

			//Las categorias es un arreglo que contiene los codigos de las categorias que 
			//selecciono el usuario. Por cada categoria tendria
			//que guardar un registro
			if ($fila["id"]>0){
				for ($i=0;$i<count($this->categoria);$i++){
					$sql = sprintf(
						"INSERT INTO tbl_categorias_x_aplicacion(codigo_categoria, 
									codigo_aplicacion) VALUES ('%s','%s')",
						stripslashes($this->categoria[$i]),
						stripslashes($fila["id"])						
					);
					$conexion->ejecutarInstruccion($sql);
				}
			}
		}
		
		public function actualizarRegistro($conexion){
			/*$sql = sprintf(
					"UPDATE tbl_productos 
					SET codigo_presentacion='%s',codigo_imagen='%s',codigo_estado='%s',codigo_tipo_venta='%s',codigo_descuento='%s',codigo_impuesto='%s',codigo_dosis='%s',codigo_laboratorio='%s',fotografia='%s',codigo_barra='%s',nombre_producto='%s',cantidad_producto='%s',precio_compra='%s',precio_venta='%s',fecha_ingreso='%s',fecha_vencimiento='%s',indicaciones_producto='%s' 
					WHERE codigo_producto='%s';,
						stripslashes($this->desarrollador->getNombreUsuario()),//mysqli_magic_quotes, mysqli_real_....
						stripslashes($this->nombreProducto),
						stripslashes($this->descripcion),
						stripslashes($this->fechaPublicacion),
						stripslashes($this->fechaActualizacion),
						stripslashes($this->version),
						stripslashes($this->URLProducto),
						stripslashes($this->icono->getURLImagen()),
						stripslashes($this->calificacionPromedio),
						stripslashes($this->)
				);
			echo "<br>Instruccion a ejecutar: ".$sql;
			$resultado = $conexion->ejecutarInstruccion($sql);
			if($resultado){
				echo "<b>Registro actualizado con exito</b>";
			}else{
				echo "Error al actualizar el registro";
				exit;*/
			}
	}
?>