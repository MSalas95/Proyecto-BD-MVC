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
	<link href="app/res/css/toastr.min.css"         rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="app/res/js/jquery.min.js"></script>
	<script src="app/res/js/toastr.min.js"></script>
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
	    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
	        <i class="glyphicon glyphicon-plus"></i>
	    </button>
	    <button type="button" class="btn btn-default" onclick="eliminar()">
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
		            <th data-field="apellido" data-sortable="true" data-align="center">Apellido</th>
		            <th data-field="direccion" data-align="center" data-visible="false">Dirección</th>
		            <th data-field="email" data-align="center">Email</th>
		            <th data-field="telefono"  data-align="center">Telefono</th>
		            <!--<th data-field="estado" data-width= "0"data-sortable="true" data-align="center" data-cell-style="cellStyle" data-formatter="stateFormatter">Estado</th>-->
		        </tr>
		    </thead>
		</table>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Insertar cliente</h4>
	      </div>
	      <div class="modal-body modal-body-custom">
	      
	      	<form class="form-horizontal" method="post">
	      	  <div class="form-group" >
			 	<label for="inputEmail3" class="col-sm-4 control-label">Cedula</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputCed" placeholder="Cedula" id="inputCed" required autofocus>
			  	
			  	</div> 
			  </div>
			  <div class="form-group">
			 	<label for="inputEmail3" class="col-sm-4 control-label">Nombre</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputNom" placeholder="Nombre" id="inputNom" required >
			  	</div> 
			  </div>
			  <div class="form-group">
			 	<label for="inputEmail3" class="col-sm-4 control-label">Apellido</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputApe" placeholder="Apellido" id="inputApe" required>
			  	</div> 
			  </div>
			  <div class="form-group">
			 	<label for="inputEmail3" class="col-sm-4 control-label">Direccion</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputDir" placeholder="Direccion" id="inputDir" required>
			  	</div> 
			  </div>
			  <div class="form-group">
			 	<label for="inputEmail3" class="col-sm-4 control-label">Email</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputEmail" placeholder="Email" id="inputEmail" required>
			  	</div> 
			  </div>
			  <div class="form-group">
			 	<label for="inputEmail3" class="col-sm-4 control-label">Teléfono</label>
			  	<div class="col-sm-6">
			  		 <input type="text" class="form-control input-md" name="inputTel" placeholder="Teléfono" id="inputTel" required>
			  	</div> 
			  </div>
			  		<div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <input type="submit" name="enviar" value="Aceptar" class="btn btn-primary">
	      </div>	 			  
			</form>

	      </div>
	      
	    </div>
	  </div>
	</div>
	<!-- Fin de modal -->


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
		
		function eliminar(){
			
			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": false,
			  "positionClass": "toast-bottom-full-width",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": 0,
			  "extendedTimeOut": 0,
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut",
			  "tapToDismiss": true
			}
			var msg = '¿Desea eliminar los registros seleccionados?</br></br> \
			<button type="button" class="btn btn-default" >Cancelar</button> \
			<button type="button" class="btn btn-primary " style="margin-left: 10px;" onclick="aceptarEliminar()">Aceptar</button>';
			toastr.warning(msg);
		}

		function aceptarEliminar(){
			registrosEliminados();
		}

		function registrosEliminados(){
			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": true,
			  "positionClass": "toast-bottom-full-width",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "300",
			  "hideDuration": "1000",
			  "timeOut": 0,
			  "extendedTimeOut": 0,
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut",
			  "tapToDismiss": true
			}
			toastr.success("Se han eliminado x registros.");

		}

	</script>

	


</body>
</html>

