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
					
					header("Location: index.php");
					$conexion->cerrarConexion();
					echo "Usuario Creado";	
					header("Location: ../index.php");
					break;
			}
			else{
				echo "Por favor llenar todos los campos";
				break;
			}
		
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