<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia MaxUtil | Tablas</title>
    <!-- Core CSS - Include with every page -->
    <link href="../css/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../css/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />
      <link href="../css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="../css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Navegacion MaxUtil </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../formularios/administrador.php" >
                    <img src="../img/logoMaxUtil.png" alt="" width="150" style="height: 50px;" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                        <a href="../formularios/administrador.php"><i class="fa fa-dashboard fa-fw"></i>Tablero Principal</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Mantenimiento del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/forms.php">Productos</a>
                            </li>
                            <li>
                                <a href="../class/forms1.php">Clientes</a>
                            </li>
                            <li>
                                <a href="../class/forms2.php">Empleados</a>
                            </li>
                            <li>
                                <a href="../class/forms3.php">Laboratorios</a>
                            </li>
                            <li>
                                <a href="../class/forms4.php">Presentaciones</a>
                            </li>
                            <li>
                                <a href="../class/forms5.php">Dolencias</a>
                            </li>
                            <li>
                                <a href="../class/forms6.php">Estados</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Configuracion del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/forms7.php">Configuracion del ISV</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Graficos del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/morris.php">Ir a Graficos</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Consultas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/tables.php">Precio Productos</a>
                            </li>
                            <li>
                                <a href="../class/tables1.php">Productos Inexistentes</a>
                            </li>
                            <li>
                                <a href="../class/tables2.php">Productos por Dolencia</a>                                
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Reportes del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/tables3.php">Listado de Productos</a>
                            </li>
                            <li>
                                <a href="../class/morris.php">Listado de Clientes</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i>Archivo<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../index.php">Cerrar Sesion</a>
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
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Precio de Producto</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Buscar Tablas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                include_once("class_conexion.php");
                                $conexion = new Conexion();

                                $resultado = $conexion->ejecutarInstruccion(
                                    "SELECT codigo_producto, codigo_barra,nombre_producto,cantidad_producto,precio_venta
                                        FROM tbl_productos "               
                                    );
                                    ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Codigo Producto</th>
                                            <th>Codigo Barra</th>
                                            <th>Nombre Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio Venta</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
                               while($fila = $conexion->obtenerFila($resultado)){
                                    ?>
                                    <tr class="odd gradeX">
                                            <td><?php echo $fila["codigo_producto"] ;?></td>
                                            <td><?php echo $fila["codigo_barra"] ;?></td>
                                            <td><?php echo $fila["nombre_producto"] ;?></td>
                                            <td class="center"><?php echo $fila["cantidad_producto"] ;?></td>
                                            <td class="center"><?php echo $fila["precio_venta"] ;?></td>
                                        </tr>

                                <?php
                                }
                                ?>
                             

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
            
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../css/plugins/jquery-1.10.2.js"></script>
    <script src="../css/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../css/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../css/plugins/pace/pace.js"></script>
    <script src="../js/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../css/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../css/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
