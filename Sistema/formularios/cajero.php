<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de Cajero</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../css/bootstrap.css" rel="stylesheet" />
	    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />
	    <link href="../css/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
	   	<link href="../css/css-add/style.css" rel="stylesheet" />
	    <link href="../css/css-add/main-style.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="../index.php" src="../img/logoMaxUtil.png">
                    <img src="../img/logoMaxUtil.png" alt="" />
                </a>
            </div>






            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>





                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        

                
                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.html"><i class="fa fa-sign-out fa-fw" ></i>Salir</a>
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
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> INFORMACION<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Sucursales.php">SUCURSALES</a>
                            </li>
                            <li>
                                <a href="Descuentos.php">DESCUENTOS DE TEMPORADA</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                     <li>
                        
                    </li>
                    <li>
                        <a href="facturacion.php"><i class="fa fa-table fa-fw"></i>FACTURACION</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i>CONSULTAS</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- third-level-items -->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
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
                    <h1 class="page-header">BIENVENIDO</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <b>Farmacia MaxUtil </b> <br>  
                        <b>Telefonos: 2225-5698, 2269-8745</b> <br>

                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            
                <!--seccion informativa importante -->
                <div class="row">
                      <div class="col-sm-2 col-md-4">
                        <div class="thumbnail">
                          <img src="../img/terceraedad.jpg" alt="...">
                          <div class="caption">
                            <h3>15% de descuento para la tercera edad</h3>
                            <p>Derecho permanente para todo adulto mayor que nos visite, 5% de descuento adicional en medicamentos 
                            para la artritis, reumatismo y cualquier otra enfermedad que genere dolor en los huesos </p>
                            <p><a href="#" class="btn btn-primary" role="button">Descuentos de Temporada</a> 
                          </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-sm-2 col-md-4">
                        <div class="thumbnail">
                          <img src="../img/cancermama.jpg" alt="...">
                          <div class="caption">
                            <h3>Octubre: Mes de lucha contra el cancer de mama</h3>
                            <p>Siendo el 19 de octubre el dia mundial de la lucha contra el cancer de mama, nuestra farmacia 
                            obsequia un 20% de descuento a todas las mujeres que hagan compras de medicamentos para combatir esta enfermedad.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Descuentos de Temporada</a> 
                          </div>
                        </div>
                      </div>


                      <div class="row">
                      <div class="col-sm-2 col-md-4">
                        <div class="thumbnail">
                          <img src="../img/natural.jpg" alt="...">
                          <div class="caption">
                            <h3>Descuentos para nuestras clientas</h3>
                            <p>super descuentos en octubre y noviembre para nuestras clientas preferenciales, Productos de uso
                            dermatologico y de limpieza de piel, bloqueadores solares </p>
                            <p><a href="#" class="btn btn-primary" role="button">Descuentos de Temporada</a> 
                          </div>
                        </div>
                      </div>
                    </div>

                    </div>

                    
                <!--fin primera seccion informativa importante  -->
            

            
                        
                    <!--segunda informacion importante-->
                    
                

                
                        
                     <!--End simple table example aqui otro-->   





                

            

                    <!--End Notifications-->
                
                
                    <!-- Donut Example-->
                    <!-- Chat Panel Example-->
                    

                    <!--End Chat Panel Example-->
               

         


        
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

		<script src="../css/plugins/jquery-1.10.2.js"></script>
	    <script src="../css/plugins/bootstrap/bootstrap.min.js"></script>
	    <script src="../css/plugins/metisMenu/jquery.metisMenu.js"></script>
	    <!--aGREGADOS-->
	    <script src="../css/plugins/pace/pace.js"></script>
	    <script src="../js/scripts/siminta.js"></script>
	    <!-- Page-Level Plugin Scripts-->
	    <script src="../css/plugins/morris/raphael-2.1.0.min.js"></script>
	    <script src="../css/plugins/morris/morris.js"></script>
	    <script src="../js/scripts/dashboard-demo.js"></script>

	</body>
</html>