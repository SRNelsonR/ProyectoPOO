<?php
    //VERIFICACIONES
 /*  sleep(5);
    $valCodigoBarra = validarInformacion($_GET["txt-codigo-barra"]);
        if(!$valCodigoBarra)
            echo "Codigo de Barra del Producto no ingresado<br>";
        else
            echo "Codigo de Barra del Producto: " . $_GET["txt-codigo-barra"] . "<br>";

    $valNombre = validarInformacion($_GET["txt-nombre-producto"]);
        if(!$valNombre)
            echo "Nombre del Producto no ingresado<br>";
        else
            echo "Nombre del Producto: " . $_GET["txt-nombre-producto"] . "<br>";

    $valCantidad = validarInformacion($_GET["txt-cantidad-producto"]);
        if(!$valCantidad)
            echo "Cantidad del Producto no ingresada<br>";
        else
            echo "Cantidad del Producto: " . $_GET["txt-cantidad-producto"] . "<br>";

    $valPrecioCompra = validarInformacion($_GET["txt-precio-compra-producto"]);
        if(!$valPrecioCompra)
            echo "Precio de Compra no ingresado<br>";
        else
            echo "Precio de Compra: " . $_GET["txt-precio-compra-producto"] . "<br>";

    $valPrecioVenta = validarInformacion($_GET["txt-precio-venta-producto"]);
        if(!$valPrecioVenta)
            echo "Precio de Venta no ingresado<br>";
        else
            echo "Precio de Venta: " . $_GET["txt-precio-venta-producto"] . "<br>";

    $valTipoPresentacion = validarInformacion($_GET["slc-tipo-presentacion-producto"]);
        if(!$valTipoPresentacion)
            echo "Tipo de Presentacion no ingresado<br>";
        else
            echo "Tipo de Presentacion: " . $_GET["slc-tipo-presentacion-producto"] . "<br>";

    $valLaboratorio = validarInformacion($_GET["slc-laboratorios"]);
        if(!$valLaboratorio)
            echo "Laboratorio no ingresado<br>";
        else
            echo "Laboratorio: " . $_GET["slc-laboratorios"] . "<br>";

    $valFechaIngreso = validarInformacion($_GET["txt-fecha-ingreso-producto"]);
        if(!$valFechaIngreso)
            echo "Fecha de Ingreso del Producto no ingresado<br>";
        else
            echo "Fecha de Ingreso del Producto: " . $_GET["txt-fecha-ingreso-producto"] . "<br>";

    $valFechaVencimiento = validarInformacion($_GET["txt-fecha-vencimiento-producto"]);
        if(!$valFechaVencimiento)
            echo "Fecha de Vencimiento del Producto no ingresado<br>";
        else
            echo "Fecha de Vencimiento del Producto: " . $_GET["txt-fecha-vencimiento-producto"] . "<br>";

    $valDosis = validarInformacion($_GET["rd-dosis-producto"]);
        if(!$valDosis)
            echo "Dosis no ingresado<br>";
        else
            echo "Dosis: " . $_GET["rd-dosis-producto"] . "<br>";

    $valIndicaciones = validarInformacion($_GET["txt-indicaciones-producto"]);
        if(!$valIndicaciones)
            echo "Indicaciones del Producto no ingresado<br>";
        else
            echo "Indicaciones del Producto: " . $_GET["txt-indicaciones-producto"] . "<br>";

    $valEstado = validarInformacion($_GET["slc-estado-producto"]);
        if(!$valEstado)
            echo "Estado del Producto no ingresado<br>";
        else
            echo "Estado del Producto: " . $_GET["slc-estado-producto"] . "<br>";

    $valIngredientes = validarInformacion($_GET["chk-ingredientes"]);
        if(!$valIngredientes)
            echo "Ingredientes del Producto no ingresado<br>";
        else
            echo "Ingredientes del Producto: " . $_GET["chk-ingredientes"] . "<br>";

    $valDolencias = validarInformacion($_GET["chk-dolencias"]);
        if(!$valDolencias)
            echo "Dolencias del Producto no ingresado<br>";
        else
            echo "Dolencias del Producto: " . $_GET["chk-dolencias"] . "<br>";

    $valTipoVenta = validarInformacion($_GET["slc-tipo-venta"]);
        if(!$valTipoVenta)
            echo "Tipo de Venta del Producto no ingresado<br>";
        else
            echo "Tipo de Venta del Producto: " . $_GET["slc-tipo-venta"] . "<br>";

    $valDescuento = validarInformacion($_GET["slc-descuentos"]);
        if(!$valDescuento)
            echo "Descuento del Producto no ingresado<br>";
        else
            echo "Descuento del Producto: " . $_GET["slc-descuentos"] . "<br>";

    $valImpuesto = validarInformacion($_GET["slc-impuestos"]);
        if(!$valImpuesto)
            echo "Impuesto del Producto no ingresado<br>";
        else
            echo "Impuesto del Producto: " . $_GET["slc-impuestos"] . "<br>";

    $valFotografia = validarInformacion($_GET["txt-fotografia"]);
        if(!$valFotografia)
            echo "Fotografia del Producto no ingresado<br>";
        else
            echo "Fotografia del Producto: " . $_GET["txt-fotografia"] . "<br>";

    if( $valNombre==true && 
        $valDescripcion==true && 
        $valFechaPublicacion==true && 
        $valClasificacion==true && 
        $valUrl==true && 
        $valTamanio==true && 
        $valVersion==true && 
        $valFechaActualizacion==true){
        echo "Informacion Completa";
    }else{
        echo "Informacion Incompleta";
    }

    function validarInformacion($valor){
        if(trim($valor) == "")
            return false;
        else
            return true;
    }
*/
    include_once("class_conexion.php");
    include_once("class_descuento.php");
    include_once("class_impuesto.php");
    include_once("class_TipoPresentacion.php");
    include_once("class_Producto.php");
    include_once("class_Laboratorio.php");

    $conexion = new Conexion();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="../css/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../css/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../css/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="../css/style.css" rel="stylesheet" />
      <link href="../css/main-style.css" rel="stylesheet" />



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
                    <img src="../img/logoMaxUtil.png" alt="" width="150" style="height: 70px;" />
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
                                <a href="../class/forms7.html">Configuracion del ISV</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i>Graficos del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/morris.html">Ir a Graficos</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Consultas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/tables.html">Precio Productos</a>
                            </li>
                            <li>
                                <a href="../class/tables1.html">Productos Inexistentes</a>
                            </li>
                            <li>
                                <a href="../class/tables2.html">Productos por Dolencia</a>                                
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Reportes del Sistema<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../class/flot.html">Listado de Productos</a>
                            </li>
                            <li>
                                <a href="../class/morris.html">Listado de Clientes</a>
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
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Productos</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registro de Productos
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Codigo Producto:</label>
                                            <?php
                                                Producto::obtenerCodigo($conexion);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo de Barra del Producto:</label>
                                            <input class="form-control" placeholder="Codigo del Producto" id="txt-codigo-barra">
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre Producto:</label>
                                            <input class="form-control" placeholder="Escriba el Nombre del Producto" id="txt-nombre-producto">
                                        </div>
                                        <div class="form-group">
                                            <label>Cantidad Producto:</label>
                                            <input class="form-control" placeholder="Escriba la Cantidad del Producto" id="txt-cantidad-producto">
                                        </div>
                                        <label>Precio de Compra:</label><br>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">L.</span>
                                            <input type="text" class="form-control" placeholder="Escriba el Precio de Compra del Producto" id="txt-precio-compra-producto">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Descuento:</label>
                                            <?php
                                            Descuento::generarListaDescuentos($conexion);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Impuesto:</label>
                                            <?php
                                            Impuesto::generarListaImpuestos($conexion);
                                            ?>
                                        </div>
                                        <label>Precio de Venta:</label><br>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">L.</span>
                                            <input type="text" class="form-control" placeholder="Escriba el Precio de Venta del Producto" id="txt-precio-venta-producto" disabled="disabled">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo Presentacion:</label>
                                            <?php
                                            TipoPresentacion::generarListaPresentaciones($conexion);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Laboratorio: </label>
                                            <?php
                                            Laboratorio::generarListaLaboratorios($conexion);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Ingreso:</label>
                                            <input class="form-control" type="date" id="txt-fecha-ingreso-producto">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Vencimiento:</label>
                                            <input class="form-control" type="date" id="txt-fecha-vencimiento-producto">
                                        </div>
                                        <div class="form-group">
                                            <label>Dosis Producto:</label>
                                            <select class="form-control" id="rd-dosis-producto">
                                                <option>-Seleccione-</option>
                                                <option>Cada 6 horas</option>
                                                <option>Cada 8 horas</option>
                                                <option>Cada 12 horas</option>
                                                <option>Cada 24 horas</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Indicaciones Producto:</label>
                                            <textarea class="form-control" placeholder="Escriba las Indicaciones del Producto" id="txt-indicaciones-producto"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <select class="form-control" id="slc-estado-producto">
                                                <option>-Seleccione-</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Ingredientes: </label>
                                            <div class="checkbox" id="chk-ingredientes[]">
                                                <label>
                                                    <input type="checkbox" value="">Ingredientes 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Ingredientes 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Ingredientes 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Dolencias</label>
                                            <div class="checkbox" id="chk-dolencias[]">
                                                <label>
                                                    <input type="checkbox" value="">Dolencia 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Dolencia 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Dolencia 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo Venta</label>
                                            <select class="form-control" id="slc-tipo-venta">
                                                <option>-Seleccione-</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Fotografia:</label>
                                            <input type="file" id="txt-fotografia">
                                        </div>
                                        <button type="button" class="btn btn-primary" id="btn-guardar-producto">Guardar</button>
                                        <button type="reset" class="btn btn-success">Limpiar</button>
                                    </form>
                                </div>
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../css/plugins/jquery-1.10.2.js"></script>
    <script src="../css/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../css/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../css/plugins/pace/pace.js"></script>
    <script src="../js/scripts/siminta.js"></script>

</body>

</html>
