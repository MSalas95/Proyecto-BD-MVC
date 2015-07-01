<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php $titulo ?></title>
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
		$tabs = array("","","","","","","");
		$tabs[$position]="active";   
	?>
	<nav class="navbar-default nav-admin">
		<div class="container">		
			<div class="navbar-header">			
				<a class="navbar-brand " href="http://localhost/proyectobd/public/admin">Distribuidora Filo</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
		            <li class="<?php echo $tabs[0];?>"><a href="http://localhost/proyectobd/public/admin/clientes" >Clientes</a></li>
		            <li class="<?php echo $tabs[1];?>"><a href="http://localhost/proyectobd/public/admin/dispositivos">Dispositivos</a></li>
		            <li class="<?php echo $tabs[2];?>"><a href="http://localhost/proyectobd/public/admin/repuestos" >
		            Repuestos</a></li>
		            <li class="<?php echo $tabs[3];  ?>"><a href="http://localhost/proyectobd/public/admin/tecnicos">Técnicos</a></li>
					<li class="<?php echo $tabs[4];  ?>"><a href="http://localhost/proyectobd/public/admin/reparaciones">Reparaciones</a></li>
					<li class="<?php echo $tabs[5];  ?>"><a href="http://localhost/proyectobd/public/admin/reportes" >
		            Reportes</a></li>
		            <li class="<?php echo $tabs[6];  ?>" title="Cerrar sesión"><a onclick="cerrarSesion();"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
				</ul>
			</div>	
		</div>
	</nav>

	<script type="text/javascript">
	function cerrarSesion(){
		swal({   
			title: "¿Desea cerrar sesión?",   
			text: "",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#368ee0", 
			confirmButtonText: "Aceptar",   
			closeOnConfirm: false });
	}
	</script>