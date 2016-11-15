<?php 
	switch ($_GET["accion"]) {
		case '1': 
			include_once("../class/class_conexion.php");
			$conexion = new Conexion();
			$resultado = $conexion->ejecutarInstruccion(
					sprintf(
						"SELECT codigo_producto, nombre_producto, cantidad_producto, precio_venta FROM tbl_productos")
					);
			$fila = $conexion->obtenerFila($resultado);
				?>
				<table class="table table-hover">
					<thead>
						<tr>
						<th>Codigo</th>
						<th>Cant.</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Precio total</th>
						<th></th>
						<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>Mark</td>
						  <td>Otto</td>
						  <td>@mdo</td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td>Jacob</td>
						  <td>Thornton</td>
						  <td>@fat</td>
						</tr>
						<tr>
						  <th scope="row">3</th>
						  <td colspan="2">Larry the Bird</td>
						  <td>@twitter</td>
						</tr>
						<tr>
						  <th scope="row"></th>
						  <td></td>
						  <td></td>
						  <td>SubTotal:</td>
						</tr>

						<th scope="row"></th>
						<td></td>
						<td></td>
						<td><strong>Impuesto:</strong></td>
						</tr>

						<th scope="row"></th>
						<td></td>
						<td></td>
						<td><strong>Descuento:</strong></td>
						</tr>

						<th scope="row"></th>
						<td></td>
						<td></td>
						<td><strong>Total: </strong></td>
						</tr>
					</tbody>
				</table>
				<?php
				break;
		case '2':
				echo "Hola";
				?>

					<div  class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
	                    <div class="well">
	                        <div class="bg-info">
	                            <img src="../img/medicamento1.jpg" class="img-responsive">
	                            <b>NEUROBION DC 25000 HYPAK CON 1 JERINGA</b><br>
	                            <span class="label label-primary">3</span>
	                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
	                            <br>
	                            <p>VITAMINA B1 (TIAMINA)   100 MG
	                            VITAMINA B6 (PIRIDOXINA)    100 MG
	                            VITAMINA B12 (CIANOCOBALAMINA, HIDROXOCOBALAMINA)   25000 MCG<p><br>
	                        </div>
	                    </div>
	                </div>

				<?php
			break;
		case '3':
			//echo "Perfil cliente";
			include_once("../class/class_conexion.php");
			$conexion = new Conexion();
			$resultado = $conexion->ejecutarInstruccion(
					sprintf(
						"SELECT d.tipo_cliente, b.nombre_genero,
								c.nombre_estado_civil, a.nombre_cliente, 
								a.apellido_cliente, a.identidad_cliente, 
								a.fecha_nacimiento, a.edad_cliente, a.direccion, 
								a.telefono, a.correo_electronico, 
								a.fecha_ingreso_cliente, a.codigo_membresia
						FROM tbl_clientes a
						INNER JOIN tbl_generos b ON(a.codigo_genero = b.codigo_genero)
						INNER JOIN tbl_estado_civil c ON(a.codigo_estado_civil = c.codigo_estado_civil)
						INNER JOIN tbl_tipo_clientes d ON(a.codigo_tipo_cliente = d.codigo_cliente)
						WHERE a.codigo_cliente = 2")
					);

			$fila = $conexion->obtenerFila($resultado);
			echo json_encode($fila);
			$conexion->cerrarConexion();
			break;
		
		default:
			# code...
			break;
	}

	function validarInformacion($valor){
		if(trim($valor) == "")
			return false;
		else
			return true;
	}
?>