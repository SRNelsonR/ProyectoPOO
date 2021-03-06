<?php
        include_once("class_conexion.php");
        include_once("class_descuento.php");
        include_once("class_impuesto.php");
        include_once("class_Producto.php");
        include_once("class_Tipo_Usuario.php");
        
    

    $conexion = new Conexion();
?>

<!DOCTYPE html>
        <html>
        <head>
          <title>Factura</title>
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

                    <!-- dropdown-messages -->


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
                                <a href="../formularios/cajero.php" ><i class="fa fa-dashboard fa-fw"></i>INICIO</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> INFORMACION<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="../formularios/Sucursales.php">SUCURSALES</a>
                                    </li>

                                    

                                </ul>
                                <!-- second-level-items -->
                            </li>
                            <li>

                            </li>
                            <li>
                                <a href="forms8.php"><i class="fa fa-table fa-fw"></i>GENERAR FACTURA</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-edit fa-fw"></i>CONSULTAS</a>
                            </li>
                            

                        </li>
                        
                    </li>


                </div>
                <!-- end sidebar-collapse -->
            </nav>
            <!-- end navbar side -->
            <!--  page-wrapper -->



            

                <div id="page-wrapper">

                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header">FACTURACION</h1>
                    </div>
                    <!--End Page Header -->
                </div>

                




                <!--factura    -->
                <div class="panel panel-info">
                    <div class="panel-heading">

                        <a  href="#" class="btn btn-info"><span class="glyphicon glyphicon-plus" ></span> Nueva Factura</a>

                    </div>

                    <div class="row">
                        <div class="col-xs-5">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="panel-body">Farmacia MaxUtil <br>
                                        Estamos Ubicados en colonia Loarque ,Centro Comercial Lewis, Local No. 14 <br>
                                        
                                        Telefonos: 2258-6988, 2258-9685


                                    </div>
                                </div>

                            </div>                                        



                        </div>
                        <!-- / fin de sección de datos de farmacia  -->

                        <form class="form-horizontal" role="form" id="datos_factura">
                            <div class="form-group row">
                              <label for="nombre_cliente" class="col-md-1 control-label">Cliente</label>
                              <div class="col-md-3">


                                  <input type="text" class="form-control input-sm" id="nombre_cliente" placeholder="Selecciona un cliente" required>
                                  <input id="id_cliente" type='hidden'> 
                              </div>
                              <label for="tel1" class="col-md-1 control-label">Teléfono</label>
                              <div class="col-md-2">
                                <input type="text" class="form-control input-sm" id="tel1" placeholder="Teléfono" readonly>
                            </div>
                            <label for="mail" class="col-md-1 control-label">Email</label>
                            <div class="col-md-3">
                                <input type="text" class="form-control input-sm" id="mail" placeholder="Email" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-md-1 control-label">Cajero</label>
                            
                             
                                
                            <div class="col-md-3">
                              
                              <?php
                                            TipoUsuario::generarListaTipoUsuario($conexion);
                                            ?>
                                    <!--consulta-->
                                
                               
                                  
                                
                            </div>
                            <label for="tel2" class="col-md-1 control-label">Fecha</label>
                            <div class="col-md-2">
                                <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
                            </div>
                            <label for="email" class="col-md-1 control-label">Pago</label>
                            <div class="col-md-3">
                                <select class='form-control input-sm' id="condiciones">
                                    <option value="1">Efectivo</option>
                                    <option value="2">Tarjeta de Credito</option>

                                </select>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="pull-right">
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
                                   <span class="glyphicon glyphicon-user"></span> Nuevo cliente
                               </button>
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                                   <span class="glyphicon glyphicon-search"></span> Agregar productos
                               </button>
                               <button type="submit" class="btn btn-default">
                                  <span class="glyphicon glyphicon-print"></span> Imprimir
                              </button>
                              <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-edit"></span> Editar

                            </button>
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-remove"></span> Salir  
                            </button>
                        </div>
                    </div>

                    <hr>



                    <div class="col-md-8">

                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Codigo</th>
                              <th>Producto</th>
                              <th>Cant.</th>
                              <th>Precio</th>
                              <th>Precio total</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td > <input type="text" name="txtcodigo" size="3">  </td>
                          <td width="201"><label for="Select"></label>
                            <select name="lista1" id="Select">
                              <option>--Seleccionar Producto</option>
                              <option>Emulsion Scott</option>
                              <option>Panadol</option>
                            </select>
                          </td>

                          if
                          <td > <input type="text" name="txtcantidad" size="3">  </td>
                           
                          <td > <input type="text" name="txtprecio" size="3">  </td>
                         
                      </tr>
                     

                      <tr>
                          <td > <input type="text" name="txtcodigo1" size="3">  </td>
                          <td width="201"><label for="Select"></label>
                            <select name="lista1" id="Select">
                            <option>--Seleccionar Producto</option>
                              <option>Emulsion Scott</option>
                              <option>Panadol</option>
                            </select>
                          </td>
                          <td > <input type="text" name="txtcantidad1" size="3">  </td>
          
                          <td > <input type="text" name="precio1" size="3">  </td>
                      </tr>






                      <tr>
                          <td > <input type="text" name="txtcodigo2" size="3">  </td>
                         <td width="201"><label for="Select"></label>
                            <select name="lista1" id="Select">
                            <option>--Seleccionar Producto</option>
                              <option>Emulsion Scott</option>
                              <option>Panadol</option>
                            </select>
                          </td> 
                          <td > <input type="text" name="txtcantidad2" size="3">  </td>
                            <td > <input type="text" name="precio2" size="3">  </td>
                         
                      </tr>
                      <tr>
                          <th scope="row"></th>
                          <td></td>
                          <td></td>
                          <td><strong>SubTotal:</strong></td>
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
              <td><input type="submit" name="btnfactura" id="button" value="Facturar"> </td>
          </tr>
        
      </tbody>
  </table>
</div>    
</div>

</div>

</form> 

<script>

</script>

                




                <!--factura    -->
                


<!--texto adicional-->



<!-- end page-wrapper -->

</div>
<!-- end wrapper -->

<script src="../css/plugins/jquery-1.10.2.js"></script>
<script src="../css/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../css/plugins/metisMenu/jquery.metisMenu.js"></script>
<!--aGREGADOS-->
<script src="../css/plugins/pace/pace.js"></script>
<!--<script src="../js/scripts/siminta.js"></script>-->
<!-- Page-Level Plugin Scripts-->
<script src="../css/plugins/morris/raphael-2.1.0.min.js"></script>
<!--!<script src="../css/plugins/morris/morris.js"></script>-->
<script src="../js/scripts/dashboard-demo.js"></script>
<script src="../js/controlador_cajero.js"></script>

</body>
</html>