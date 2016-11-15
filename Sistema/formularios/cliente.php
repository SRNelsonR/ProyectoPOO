<!DOCTYPE html>
<html>
	<head>
		<title>Este es el formulario del cliente</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../css/bootstrap.css" rel="stylesheet" />
	    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />
	    <link href="../css/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
	   	<link href="../css/css-add/style.css" rel="stylesheet" />
	    <link href="../css/css-add/main-style.css" rel="stylesheet" />
        <style>
          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
              width: 100%;
              margin: auto;
          }
        </style>
	</head>
	<body>

		<div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logoMaxUtil.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" id="btn-perfil"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="../img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Jonny <strong>Deen</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;En línea
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="cliente.php"><i class="fa fa-dashboard fa-fw"></i>Inicio</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Información<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Sucursales.php">Sucursales</a>
                            </li>
                            <li>
                                <a href="Descuentos.php">Descuentos de temporada</a>
                            </li>
                            <li>
                                <a href="productos.php">Productos disponibles</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i>Consultas</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->


        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tablero</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hola! </b>Bienvenido de nuevo <b>Jonny Deen </b>
                        <!--<i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Entradas de apoyo pendientes de respuesta. nbsp;-->
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!--Area chart example -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                          <div class="item active">
                            <img src="../img/1.png" alt="Chania" width="460" height="345">
                            <div class="carousel-caption">
                              <h3>Visitenos</h3>
                              <p>Contamos con personal capacitado.</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../img/2.png" alt="Chania" width="460" height="345">
                            <div class="carousel-caption">
                              <h3>Estamos para servirle</h3>
                              <p>Su salud es nuestra preocupación.</p>
                            </div>
                          </div>
                        
                          <div class="item">
                            <img src="../img/3.png" alt="Flower" width="460" height="345">
                            <div class="carousel-caption">
                              <h3>Cuente con nosotros</h3>
                              <p>Le atendemos con mucho gusto y aclaramos sus dudas.</p>
                            </div>
                          </div>

                          <div class="item">
                            <img src="../img/4.png" alt="Flower" width="460" height="345">
                            <div class="carousel-caption">
                              <h3>Atención para usted</h3>
                              <p>No se conforme, busque lo mejor para su salud, busquenos.</p>
                            </div>
                          </div>
                      
                        </div>

                        <!-- Left and right controls 
                        <a class="nivo-prevNav">Prev</a>
                        <a class="nivo-nextNav">Next</a>-->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                    <!--End area chart example -->
                    <!--Simple table example -->

                    <!--End simple table example -->

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>20,741 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Daily User Visits
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>2,060 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pending Orders Found
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3>20 GB</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New Data Uploaded
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>2,700 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New User Registered
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="well">
                        <!-- Notifications-->
                        
                        <!--End Notifications-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <!-- Donut Example-->

                        <!--End Donut Example-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="well">
                        <!-- Chat Panel Example-->
                        
                        <!--End Chat Panel Example-->
                    </div>
                </div>
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
    <br>
    <div class="row">

        <div id="div-mostrar-productos1" class="well">
            
        </div>

    </div><br><br>

    <div class="container-fluid" id="div-perfil" style="display:none;">
    <div class="bg bg-info">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 well">
                <h1>Perfil</h1><br><br>
                <table class = "table table-striped table-hover">
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" id="txt-nombre" name="txt-nombre" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td>
                            <input type="text" id="txt-apellido" name="txt-apellido" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input type="text" id="txt-edad" name="txt-edad" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Género</td>
                        <td>
                            <input type="text" id="rbt-genero" name="rbt-genero" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Identidad:</td>
                        <td>
                            <input type="text" id="txt-identidad" name="txt-identidad" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Domicilio:</td>
                        <td>
                            <input type="text" id="txt-domicilio" name="txt-domicilio" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>
                            <input type="text" id="txt-telefono" name="txt-telefono" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Correo electrónico</td>
                        <td>
                            <input type="text" id="txt-correo" name="txt-correo" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Estado civil:</td>
                        <td>
                            <input type="text" id="slc-estado-civil" name="slc-estado-civil" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Contraseña:</td>
                        <td>
                            <input type="password" id="txt-contrasena" name="txt-contrasena" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de nacimiento:</td>
                        <td>
                            <input type="text" id="txt-fecha-nacimiento" name="txt-fecha-nacimiento" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de registro:</td>
                        <td>
                            <input type="text" id="txt-fecha-registro" name="txt-fecha-registro" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre de usuario:</td>
                        <td>
                            <input type="text" id="txt-nombre-usuario" name="txt-nombre-usuario" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Membresia:</td>
                        <td>
                            <input type="text" id="txt-membresia" name="txt-membresia" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo cliente:</td>
                        <td>
                            <input type="text" id="slc-tipo-cliente" name="slc-tipo-cliente" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="cliente.php" class="btn btn-success">Regresar</a>
                        </td>
                    </tr>
                </table>
            <br><br>
            </div>
        </div>
    </div>
    </div>

    <div id="json">
        
    </div>

    <br><br><br>

		<script src="../css/plugins/jquery-1.10.2.js"></script>
	    <script src="../css/plugins/bootstrap/bootstrap.min.js"></script>
	    <script src="../css/plugins/metisMenu/jquery.metisMenu.js"></script>
	    <!--aGREGADOS-->
	    <script src="../css/plugins/pace/pace.js"></script>
	    <!--<script src="../js/scripts/siminta.js"></script>-->
	    <!-- Page-Level Plugin Scripts-->
	    <script src="../css/plugins/morris/raphael-2.1.0.min.js"></script>
	    <!--<script src="../css/plugins/morris/morris.js"></script>-->
	    <!--<script src="../js/scripts/dashboard-demo.js"></script>-->
        <script src="../js/controlador_cliente.js"></script>
	</body>
</html>