<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<base href="http://localhost/proyectobd/">
	<link href="app/res/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="app/res/css/awesome-bootstrap-checkbox.css"         rel="stylesheet">
	<link href="app/res/css/bootstrap-table.css"         rel="stylesheet">
	<link href="app/res/css/admin.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="app/res/js/jquery.min.js"></script>
	
	<script src="app/res/js/bootstrap.min.js"></script>
	<script src="app/res/js/bootstrap-table.js"></script>
	<script src="app/res/js/bootstrap-table-toolbar.js"></script>
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
					<li ><a href="http://localhost/proyectobd/public/admin/prueba">Prueba</a></li>
					<li ><a href="http://localhost/proyectobd/public/admin/reparaciones">Reparaciones</a></li>
		            <li class="active"><a href="http://localhost/proyectobd/public/admin/clientes" >Clientes</a></li>
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
	        <i class="glyphicon glyphicon-trash"></i>
	    </button>
	</div>


	<div class="container" style="margin-top:40px;">
		<table  id="table" 
				class="table table-hover table-bordered"
				data-url="public/data/clientes"
				data-toggle="table"
				data-height="0"
				data-page-size = "10"
				data-page-list = "[0]"
				data-show-columns="true"
				data-click-to-select="true"
				data-search="true"
				data-pagination="true"
				data-show-refresh="true"
				data-toolbar="#toolbar"
				data-query-params="queryParams"
				data-advanced-search="true"
				data-locale="es-SP">
		    <thead>
		        <tr>
		        	<th data-field="state" data-checkbox="true"></th>
		            <th data-field="cedula"  data-sortable="true" data-align="center">Cedula</th>
		            <th data-field="nombre" data-sortable="true" data-align="center">Nombre</th>
		            <th data-field="apellido" data-align="center">Apellido</th>
		            <th data-field="email" data-sortable="true" data-align="center">Email</th>
		            <th data-field="telefono"  data-sortable="true" data-align="center">Telefono</th>
		            <th data-field="estado" data-width= "0"data-sortable="true" data-align="center" data-cell-style="cellStyle" data-formatter="stateFormatter">Estado</th>
		        </tr>
		    </thead>
		</table>
	</div>

	<script type="text/javascript">

		function formatAdvancedSearch(){
			return 'Busqueda avanzada';
		}

		function cellStyle(value, row, index) {
		    
		    var classes = ['active', 'success', 'info', 'warning', 'danger'];  

		    if (row.cedula=='25058046') {
		    	return {
	            	classes: classes[4]
	        	};
		    }

		    if (row.nombre=='Luis') {
		    	return {
	            	classes: classes[3]
	        	};
		    }

	        return {
	            classes: classes[1]
	        };
		}

		function stateFormatter(value, row, index) {
			if (row.cedula=='25058046') {return 'Reparado';};
    		return 'No reparado';
		}
		
		function queryParams() {
		    return {
		        type: 'owner',
		        sort: 'updated',
		        direction: 'desc',
		        per_page: 100,
		        page: 1
		    };
		}		
		

	</script>

	


</body>
</html>

