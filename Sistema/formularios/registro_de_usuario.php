<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<br><br><br>
				<div class="col-lg-6 col-lg-offset-3 well">
					<h1>Regístrese</h1><br><br>
					<table class = "table table-striped table-hover">
						<tr>
							<td>Nombre:</td>
							<td>
								<input type="text" id="txt-nombre" name="txt-nombre" placeholder="Ingrese su nombre" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Apellido:</td>
							<td>
								<input type="text" id="txt-apellido" name="txt-apellido" placeholder="Ingrese su apellido" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Edad:</td>
							<td>
								<input type="text" id="txt-edad" name="txt-edad" placeholder="Ingrese su edad" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Género</td>
							<td>
								<label>
									<input type="radio" id="rbt-genero" name="rbt-genero" value="1">Hombre
								</label>
								<label>
									<input type="radio" id="rbt-genero" name="rbt-genero" value="2">Mujer
								</label>
							</td>
						</tr>
						<tr>
							<td>Identidad:</td>
							<td>
								<input type="text" id="txt-identidad" name="txt-identidad" placeholder="Ingrese su número de identidad" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Domicilio:</td>
							<td>
								<input type="text" id="txt-domicilio" name="txt-domicilio" placeholder="Ingrese la dirección de su domicilio" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Telefono:</td>
							<td>
								<input type="text" id="txt-telefono" name="txt-telefono" placeholder="Ingrese su número de telefono" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Correo electrónico</td>
							<td>
								<input type="text" id="txt-correo" name="txt-correo" placeholder="Ingrese su correo electrónico" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Estado civil:</td>
							<td>
								<select id="slc-estado-civil" name="slc-estado-civil" class="form-control">
								<option value="1">Solter@</option>;
								<option value="2">Casad@</option>;
								<option value="3">Unión libre</option>;
								</select>
							</td>
						</tr>
						<tr>
							<td>Contraseña:</td>
							<td>
								<input type="password" id="txt-contrasena" name="txt-contrasena" placeholder="Ingrese su contraseña" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de nacimiento:</td>
							<td>
								<input type="text" id="txt-fecha-nacimiento" name="txt-fecha-nacimiento" placeholder="AAAA-MM-DD" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de registro:</td>
							<td>
								<input type="text" id="txt-fecha-registro" name="txt-fecha-registro" placeholder="AAAA-MM-DD" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Nombre de usuario:</td>
							<td>
								<input type="text" id="txt-nombre-usuario" name="txt-nombre-usuario" placeholder="Ingrese su usuario" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Membresia:</td>
							<td>
								<input type="text" id="txt-membresia" name="txt-membresia" placeholder="Tipo de membresia" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Tipo cliente:</td>
							<td>
								<select id="slc-tipo-cliente" name="slc-tipo-cliente" class="form-control">
								<option value="1">Plus</option>;
								<option value="2">Premium</option>;
								<option value="3">Normal</option>;
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="../index.php" class="btn btn-success">Regresar</a>
								<a href="#" type="button" id="btn-crear"  class="btn btn-success">Crear cuenta</a>
							</td>
						</tr>
					</table>
				<br><br>
				</div>
			</div>
		</div>
		<div id="resultado">
			
		</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/controlador_cliente.js"></script>
	</body>
</html>