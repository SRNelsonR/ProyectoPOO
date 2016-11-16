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
                                <a href="cajero.php  ?>"><i class="fa fa-dashboard fa-fw"></i>INICIO</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> INFORMACION<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li>
                                        <a href="Sucursales.php">SUCURSALES</a>
                                    </li>
                                                                
                                    
                                
                                </ul>
                                <!-- second-level-items -->
                            </li>
                             <li>
                                
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table fa-fw"></i>FACTURACION</a>
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
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Farmacia Max Util ""
                            </div>

                            <<form class="form-horizontal" role="form" id="datos_factura">
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
                                <label for="empresa" class="col-md-1 control-label">Vendedor</label>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" id="id_vendedor">
                                        <?php
                                            $sql_vendedor=mysqli_query($con,"select * from users order by lastname");
                                            while ($rw=mysqli_fetch_array($sql_vendedor)){
                                                $id_vendedor=$rw["user_id"];
                                                $nombre_vendedor=$rw["firstname"]." ".$rw["lastname"];
                                                if ($id_vendedor==$_SESSION['user_id']){
                                                    $selected="selected";
                                                } else {
                                                    $selected="";
                                                }
                                                ?>
                                                <option value="<?php echo $id_vendedor?>" <?php echo $selected;?>><?php echo $nombre_vendedor?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <label for="tel2" class="col-md-1 control-label">Fecha</label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control input-sm" id="fecha" value="<?php echo date("d/m/Y");?>" readonly>
                                </div>
                                <label for="email" class="col-md-1 control-label">Pago</label>
                                <div class="col-md-3">
                                    <select class='form-control input-sm' id="condiciones">
                                        <option value="1">Efectivo</option>
                                        <option value="2">Cheque</option>
                                        <option value="3">Transferencia bancaria</option>
                                        <option value="4">Crédito</option>
                                    </select>
                                </div>
                            </div>
                    
                    
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoProducto">
                             <span class="glyphicon glyphicon-plus"></span> Nuevo producto
                            </button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#nuevoCliente">
                             <span class="glyphicon glyphicon-user"></span> Nuevo cliente
                            </button>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                             <span class="glyphicon glyphicon-search"></span> Agregar productos
                            </button>
                            <button type="submit" class="btn btn-default">
                              <span class="glyphicon glyphicon-print"></span> Imprimir
                            </button>
                        </div>  
                    </div>
                </form> 
                
            <div id="resultados" class='col-md-12' style="margin-top:10px"></div><!-- Carga los datos ajax -->          
            </div>
        </div>      
              <div class="row-fluid">
                <div class="col-md-12">
                


                    <button type="submit" class="btn btn-default">Total</button>
                    <button type="submit" class="btn btn-default">Borrar</button>
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <button type="submit" class="btn btn-default">Cancelar</button>
                    <button type="submit" class="btn btn-default">Salir</button>
                </div>
            </div>
        </form>

        <script>

        </script>

                    
                                
                            <!--texto adicional-->

                            
                        
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