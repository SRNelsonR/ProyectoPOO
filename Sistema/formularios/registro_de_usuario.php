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
								<input type="text" name="" placeholder="Ingrese su nombre" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Aplellido:</td>
							<td>
								<input type="text" name="" placeholder="Ingrese su Apellido" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Género</td>
							<td>
								<label>
									<input type="radio" name="rbt-genero-autor-cancion" value="Hombre">Hombre
								</label>
								<label>
									<input type="radio" name="rbt-genero-autor-cancion" value="Mujer">Mujer
								</label>
							</td>
						</tr>
						<tr>
							<td>Correo electrónico</td>
							<td>
								<input type="text" name="" placeholder="Ingrese su correo electrónico" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Identidad</td>
							<td>
								<input type="text" name="" placeholder="Ingrese su identidad" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Fecha de nacimiento</td>
							<td>
								<input type="text" name="" placeholder="DD/MM/AA" class="form-control">
							</td>
						</tr>
						<tr>
							<td>Contraseña</td>
							<td>
								<input type="password" name="" placeholder="Ingrese su contraseña" class="form-control">
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a href="../index.php" class="btn btn-success">Regresar</a>
								<a href="../index.php" class="btn btn-success">Crear cuenta</a>
							</td>
						</tr>
					</table>
				<br><br>
				</div>
			</div>
		</div>
	</body>
</html>