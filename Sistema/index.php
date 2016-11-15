<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   	<link href="css/css-add/style.css" rel="stylesheet" />
    <link href="css/css-add/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-2 col-md-offset-2 text-center logo-margin col-lg-2 ">
                <img src="img/razonSocial.png" alt=""/>
            </div><br>
            <div class="col-md-2 col-md-offset-2 text-center logo-margin col-lg-8 ">
              <!-- <img src="assets/img/logo.png" alt=""/>-->
              <img src="img/logoMaxUtil.png" alt=""/>
            </div>
            
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrarse</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <input class="form-control" placeholder="Correo" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="tipo_usuario.php" class="btn btn-lg btn-success btn-block">Ingresar</a>
                            <a href="formularios/registro_de_usuario.php" class="btn btn-lg btn-success btn-block">Nuevo Usuario</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="css/plugins/jquery-1.10.2.js"></script>
    <script src="css/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="css/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!--<script src="js/controlador_cliente.js"></script>-->

</body>

</html>
