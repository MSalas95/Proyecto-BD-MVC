<?php 

$titulo = "Registrarse";
$contenido = 
'<h2>Registrarse</h2>

<form method="post" class="form-login">

	<div class="form-group">
		<label for="inputCed" class="sr-only">Cedula</label>
		<input type="text" name="inputCed" class="form-control" placeholder="Cedula" pattern="([0-9])*$" required>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
	        	<label for="inputNom" class="sr-only">Nombre</label>
	        	<input type="text" name="inputNom" class="form-control" placeholder="Nombre" required autofocus>
	    	</div>				        	
		</div>
		<div class="col-md-6">
			<div class="form-group">
	        	<label for="inputApe" class="sr-only">Apellido</label>
	        	<input type="text" name="inputApe" class="form-control" placeholder="Apellido" required>
	    	</div>				        	
		</div>
	</div>			        

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="inputPassword1" class="sr-only">Contraseña</label>
				<input type="password" name="inputPassword1" class="form-control" placeholder="Contraseña" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
	        	<label for="inputPassword2" class="sr-only">Confirmar</label>
	        	<input type="password" name="inputPassword2" class="form-control" placeholder="Confirmar" required>
	        </div>
		</div>

	</div>
		

	<div class="registrarse">
	    <div class="row fila">
	    	<div class="col-md-6">
	    		<a href="public/login"><button type="button" class="btn btn-danger" >Regresar</button></a>
	    	</div>
	    	<div class="col-md-6">
	    		<input type="submit" name="enviar" value="Registrarse" class="btn btn-primary">
	    	</div>
	    </div>
		 
	</div>	     
</form>';

require_once '../app/res/templates/login_registro.php';

;




