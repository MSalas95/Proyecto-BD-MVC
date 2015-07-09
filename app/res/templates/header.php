<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<base href="http://localhost/proyectobd/">
	<link href="app/res/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="app/res/css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="app/res/css/bootstrap-table.css"         rel="stylesheet">
	<link href="app/res/css/admin.css"         rel="stylesheet">
	<link href="app/res/css/sweetalert.css"         rel="stylesheet">
	<link href="app/res/css/toastr.min.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="app/res/js/jquery.min.js"></script>
	<script src="app/res/js/toastr.min.js"></script>
	<script src="app/res/js/bootstrap.min.js"></script>
	<script src="app/res/js/bootstrap-table.js"></script>
	<script src="app/res/js/bootstrap-table-toolbar.js"></script>
	<script src="app/res/js/bootstrap-table-es-SP.js"></script>
	<script src="app/res/js/alerts.js"></script>
	<script src="app/res/js/sweetalert.min.js"></script>	
</head>
<body>
	<?php 
		$tabs = array("","","","","","","","");
		$tabs[$position]="active";   
	?>
	<nav class="navbar-default nav-admin">
		<div class="container">		
			<div class="navbar-header">			
				<a class="navbar-brand " href="http://localhost/proyectobd/public/admin">Distribuidora Filo</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
		            <li class="<?php echo $tabs[0];?>"><a href="http://localhost/proyectobd/public/clientes" >Clientes</a></li>
		            <li class="<?php echo $tabs[1];?>"><a href="http://localhost/proyectobd/public/dispositivos">Dispositivos</a></li>
		            <li class="<?php echo $tabs[2];?>"><a href="http://localhost/proyectobd/public/repuestos" >
		            Repuestos</a></li>
		            <li class="<?php echo $tabs[3];  ?>"><a href="http://localhost/proyectobd/public/tecnicos">Técnicos</a></li>
					<li class="<?php echo $tabs[4];  ?>"><a href="http://localhost/proyectobd/public/reparaciones">Reparaciones</a></li>
					<li class="<?php echo $tabs[5];  ?>"><a href="http://localhost/proyectobd/public/facturas" >
		            Facturas</a></li>		            

		            <li class="<?php echo $tabs[6];  ?>">
		            	<a href="#"
		            	   class="dropdown-toggle" 
		            	   data-toggle="dropdown" role="button" 
		            	   aria-haspopup="true" aria-expanded="false">
		            	   Reportes <span class="caret"></span></a>	
						
						<ul class="dropdown-menu">
			            	<li><a href="#" data-toggle="modal" data-target="#modalR1">Reporte 1</a></li>
			            	<li><a href="#" data-toggle="modal" data-target="#modalR2">Reporte 2</a></li>
			            	<li><a href="#" data-toggle="modal" data-target="#modalR3">Reporte 3</a></li>
			            	<li><a href="#">Reporte 4</a></li>
			            	<li><a href="#">Reporte 5</a></li>			            	
			          	</ul>	

		            </li>
		            <li class="<?php echo $tabs[7];  ?>" title="Cerrar sesión"><a onclick="cerrarSesion();"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
				</ul>
			</div>	
		</div>
	</nav>


<!-- Modal para R1-->
<div class="modal fade" id="modalR1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Reparaciones completadas por un tecnico en un periodo.</h4>
            </div>
            <div class="modal-body modal-body-custom">
                <form class="form-horizontal" method="post">
                    
                   
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Cedula del Tecnico</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input-md" name="inputCedulaTec" placeholder="Cedula del Tecnico" id="inputCedulaTec" required autofocus>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Fecha Inicial</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control input-md" name="inputfechaIni" placeholder="Fecha de Recibo" id="inputfechaIni" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Fecha Final</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control input-md" name="inputfechaFin" placeholder="Fecha de Recibo" id="inputfechaFin"  required>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <input type="submit" name="enviarR1" value="Aceptar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para R2-->
<div class="modal fade" id="modalR2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Reparaciones completadas por un tecnico en un periodo.</h4>
            </div>
            <div class="modal-body modal-body-custom">
                <form class="form-horizontal" method="post">
                    
                   
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Cedula del Tecnico</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input-md" name="inputCedulaTec" placeholder="Cedula del Tecnico" id="inputCedulaTec" required autofocus>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Cedula del Cliente</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input-md" name="inputCedulaCli" placeholder="Cedula del Cliente" id="inputCedulaCli" required autofocus>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Fecha Inicial</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control input-md" name="inputfechaIni" placeholder="Fecha de Recibo" id="inputfechaIni" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Fecha Final</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control input-md" name="inputfechaFin" placeholder="Fecha de Recibo" id="inputfechaFin"  required>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <input type="submit" name="enviarR2" value="Aceptar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal para R3-->
<div class="modal fade" id="modalR3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Reparaciones completadas por un tecnico en un periodo.</h4>
            </div>
            <div class="modal-body modal-body-custom">
                <form class="form-horizontal" method="post">
                    
                   
                    
                     

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Cedula del Cliente</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control input-md" name="inputCedulaCli" placeholder="Cedula del Cliente" id="inputCedulaCli" required autofocus>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Estado</label>
                        <div class="col-sm-6">
                            <select  class="form-control" 	name="inputEstado" id="inputEstado">
								<option value="REPARADO" selected>REPARADO</option>
								<option value="NO REPARADO">NO REPARADO</option>
							</select>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <input type="submit" name="enviarR3" value="Aceptar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



	<script type="text/javascript">
	function cerrarSesion(){
		 swal({   
			title: "¿Desea cerrar sesión?",   
			text: "",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#368ee0", 
			confirmButtonText: "Aceptar", 
			closeOnConfirm: false },
			 function(){   
			 	window.location.href="http://localhost/proyectobd/public/logout";	    		
	    	});
	}
	</script>


	<?php 

	if (isset($_POST['enviarR1'])) {
			
			$inicio = $_POST['inputfechaIni'];
			$fin    = $_POST['inputfechaFin'];
			$cedula = $_POST['inputCedulaTec'];

			
			die("<script>location.href = 'http://localhost/proyectobd/public/reportes/reporte1/".$inicio."/".$fin."/".$cedula."'</script>");
	}

	if (isset($_POST['enviarR2'])) {
			
			$inicio = $_POST['inputfechaIni'];
			$fin    = $_POST['inputfechaFin'];
			$cedulaT = $_POST['inputCedulaTec'];
			$cedulaC= $_POST['inputCedulaCli'];
			
			die("<script>location.href = 'http://localhost/proyectobd/public/reportes/reporte2/".$inicio."/".$fin."/".$cedulaT."/".$cedulaC."'</script>");
	}

	if (isset($_POST['enviarR3'])) {
			
			
			$estado = $_POST['inputEstado'];
			$cedulaC= $_POST['inputCedulaCli'];
			
			die("<script>location.href = 'http://localhost/proyectobd/public/reportes/reporte3/".$estado."/".$cedulaC."'</script>");
	}



	 ?>