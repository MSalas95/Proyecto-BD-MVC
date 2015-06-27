<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Prueba tabla</title>
	<base href="http://localhost/proyectobd/">
	<link href="app/res/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="app/res/css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="app/res/css/bootstrap-table.css"         rel="stylesheet">
	<link href="app/res/css/admin.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="app/res/js/jquery.min.js"></script>
	<script src="app/res/js/bootstrap.min.js"></script>
	<script src="app/res/js/bootstrap-table.js"></script>
	<script src="app/res/js/bootstrap-table-es-SP.js"></script>
</head>
<body>

<nav class="navbar-default nav-admin">
	<div class="container">		
		<div class="navbar-header">			
			<a class="navbar-brand " href="http://localhost/proyectobd/public/admin">Distribuidora Filo</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="http://localhost/proyectobd/public/admin/prueba">Prueba</a></li>
				<li ><a href="http://localhost/proyectobd/public/admin/reparaciones">Reparaciones</a></li>
	            <li ><a href="http://localhost/proyectobd/public/admin/clientes" >Clientes</a></li>
	            <li class=""><a href="http://localhost/proyectobd/public/admin/dispositivos">Dispositivos</a></li>
	            <li ><a href="http://localhost/proyectobd/public/admin/repuestos" >Repuestos</a></li>
	            <li ><a href="http://localhost/proyectobd/public/admin/reportes" >Reportes</a></li>
	            <li><a href="http://localhost/proyectobd/public/admin/configuracion" ><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
			</ul>
		</div>	
	</div>
</nav>

	<!--<div class="alert alert-success" id="eventsResult">  	Here is the result of event.</div>-->


	<div id="toolbar" class="btn-group">
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-plus"></i>
	    </button>
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-heart"></i>
	    </button>
	    <button type="button" class="btn btn-default">
	        <i class="glyphicon glyphicon-trash"></i>
	    </button>
	</div>


	<div class="container" style="margin-top:40px;">
		<table  id="table" 
				class="table table-hover table-bordered"
				data-url="public/data/clientes"
				data-toggle="table" 
				data-height="0"
				data-page-size = "18"
				data-page-list = "[0]"
				data-show-columns="true"
				data-click-to-select="true"
				data-search="true"
				data-pagination="true"
				data-show-refresh="true"
				data-toolbar="#toolbar"
				data-query-params="queryParams"
				data-cache="false"
				data-locale="es-SP">
		    <thead>
		        <tr>
		        	<th data-field="state" data-checkbox="true"></th>
		            <th data-field="cedula" data-sortable="true" data-align="center">Cedula</th>
		            <th data-field="nombre" data-sortable="true" data-align="center">Nombre</th>
		            <th data-field="apellido" data-align="center">Apellido</th>
		            <th data-field="email" data-sortable="true" data-align="center">Email</th>
		            <th data-field="telefono"  data-sortable="true" data-align="center">Telefono</th>
		        </tr>
		    </thead>
		</table>
	</div>

	<script type="text/javascript">
		
		function queryParams() {
		    return {
		        type: 'owner',
		        sort: 'updated',
		        direction: 'desc',
		        per_page: 100,
		        page: 1
		    };
		}

		
		
		/*var data =[{"cedula":"25058046","nombre":"asdasd","apellido":"Salas","email":"msalas.095@gmail.com","telefono":"4121959572"},
		{"cedula":"12345678","nombre":"Luis","apellido":"Romero","email":"lromero@gmail.com","telefono":"4121597896"},
		{"cedula":"22345654","nombre":"Pedro","apellido":"Lopez","email":"plopez@gmail.com","telefono":"4265656756"},
		{"cedula":"10123654","nombre":"Luis","apellido":"Gonzalez","email":"lgonzz@gmail.com","telefono":"4144565789"},
		{"cedula":"15456222","nombre":"Jose","apellido":"Suarez","email":"jsuarez@gmail.com","telefono":"4121322344"},
		{"cedula":"6456987","nombre":"Juan","apellido":"Martinez","email":"jmartin@gmail.com","telefono":"412959586"}];

		
		$(function () {
		    $('#table').bootstrapTable({
		        data: data
		    });
		});*/

	</script>



</body>
</html>

