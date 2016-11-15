<?php 
	switch ($_GET["accion"]) {
		case '1': //Guardar registro
			$valNombre = validarInformacion($_POST["txt-nombre"]);
			$valApellido = validarInformacion($_POST["txt-apellido"]);
			$valEdad = validarInformacion($_POST["txt-edad"]);
			$valIdentidad = validarInformacion($_POST["txt-identidad"]);
			$valDomicilio = validarInformacion($_POST["txt-domicilio"]);
			$valTelefono = validarInformacion($_POST["txt-telefono"]);
			$valCorreo = validarInformacion($_POST["txt-correo"]);
			$valNombreUsuario = validarInformacion($_POST["txt-nombre-usuario"]);
			$valContrasena = validarInformacion($_POST["txt-contrasena"]);
			$valMembresia = validarInformacion($_POST["txt-membresia"]);
			$valFechaRegistro = validarInformacion($_POST["txt-fecha-registro"]);
			$valFechaNacimiento = validarInformacion($_POST["txt-fecha-nacimiento"]);
			
			if($valNombre &&
				$valApellido &&
				$valEdad &&
				$valIdentidad &&
				$valDomicilio &&
				$valTelefono &&
				$valCorreo &&
				$valNombreUsuario &&
				$valContrasena &&
				$valMembresia &&
				$valFechaRegistro &&
				$valFechaNacimiento){
					include_once("../class/class_cliente.php");
					include_once("../class/class_conexion.php");
					$conexion = new Conexion();
					$cliente = new Cliente(
							$_POST["txt-nombre"],//txt-nombre
							$_POST["txt-apellido"],//txt-apellido
							$_POST["txt-edad"],//txt-edad
							$_POST["rbt-genero"],//rbt-genero
							$_POST["txt-identidad"],//txt-identidad
							$_POST["txt-domicilio"],//txt-domicilio
							$_POST["txt-telefono"],//txt-telefono
							$_POST["txt-correo"],//txt-correo
							$_POST["slc-estado-civil"],//slc-estado-civil
							$_POST["txt-nombre-usuario"],//txt-nombre-usuario
							$_POST["txt-contrasena"],//txt-contrasena
							null,//foto
							null,//codigo_cliente
							$_POST["txt-membresia"],//txt-membresia
							$_POST["slc-tipo-cliente"],//slc-tipo-cliente
							$_POST["txt-fecha-registro"]
							//txt-fecha-nacimiento
							//txt-fecha-registro
						);
					$cliente->nuevo($conexion,$_POST["txt-fecha-nacimiento"]);
					
					//header("Location: index.php");
					$conexion->cerrarConexion();
					echo "Usuario Creado";
					//header("Location: ../index.php");
					break;
			}
			else{
				echo "Por favor llenar todos los campos antes de crear cuenta";
				break;
			}

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
						"SELECT a.codigo_tipo_cliente, b.nombre_genero,
								c.nombre_estado_civil, a.nombre_cliente, 
								a.apellido_cliente, a.identidad_cliente, 
								a.fecha_nacimiento, a.edad_cliente, a.direccion, 
								a.telefono, a.correo_electronico, 
								a.fecha_ingreso_cliente, a.codigo_membresia
						FROM tbl_clientes a
						INNER JOIN tbl_generos b 
						ON(a.codigo_genero = b.codigo_genero)
						INNER JOIN tbl_estado_civil c 
						ON(a.codigo_estado_civil = c.codigo_estado_civil)
						WHERE codigo_cliente = 2")
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