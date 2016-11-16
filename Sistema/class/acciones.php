<?php
	switch ($_GET["accion"]) {
		//Guardar 
		case '1':
			include_once("class_conexion.php");
		    include_once("class_descuento.php");
		    include_once("class_impuesto.php");
		    include_once("class_dosis.php");
		    include_once("class_TipoPresentacion.php");
		    include_once("class_Producto.php");
		    include_once("class_estado.php");
		    include_once("class_Dolencia.php");
		    include_once("class_Laboratorio.php");
		    include_once("class_ingrediente.php");
		    include_once("class_tipo_venta.php");
			$conexion = new Conexion();
			$producto = new Producto(
					$_POST["txt-codigo-producto"],
					$_POST["txt-codigo-barra"],
					$_POST["txt-nombre-producto"],
					$_POST["txt-cantidad-producto"],
					$_POST["txt-precio-compra-producto"],
					new Descuento(null,$_POST["slc-descuentos"],null),
					new Impuesto(null,$_POST["slc-impuestos",null]),
					$_POST["txt-precio-venta-producto"],
					new TipoPresentacion(null,$_POST["slc-tipo-presentaciones"],null),
					new Laboratorio(null,$_POST["slc-laboratorios"],null,null,null,null,null),
					null,//fecha
					null,//fecha
					new Dosis(null,$_POST["slc-dosis"]),					
					$_POST["txt-indicaciones"],					
					new Estado(null,$_POST["slc-estados"]),					
					$_POST["ingredientes"],//Ingredientes, esto es un arreglo
					$_POST["dolencias"],//Dolencias, esto es un arreglo
					new TipoVenta(null,$_POST["slc-tipo-ventas"]),				
					$_POST["txt-fotografia"]
			);

			echo "Ingredientes: " . var_dump($_POST["ingredientes"]);

			$producto->guardarRegistro($conexion);			

			break;
		//Actualizar
		case '2':
			# code...
			break;
		//Eliminar
		case '3':
			# code...
			break;
		case '4':
			# code...
			break;
		case '5':
			# code...
			break;
		
		default:
			# code...
			break;
	}
?>