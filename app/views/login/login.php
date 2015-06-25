
<?php 



$titulo = "Iniciar sesión";
$contenido = 
'<h2>Iniciar sesi&oacute;n</h2>

<form class="form-login" method="post">
    <!-- <h2 class="form-login-heading">Iniciar sesion</h2> -->
    <div class="form-group">
    	<label for="inputCed" class="sr-only">Cedula</label>
    	<input type="text" name="inputCed" class="form-control" placeholder="Cedula" pattern="([0-9])*$" min="6" max="8" required autofocus>
    </div>
    
    <div class="form-group">
    	<label for="inputPassword" class="sr-only">Contraseña</label>
    	<input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
    </div>

  
	<div class="recordar">
		<div class="checkbox checkbox-primary">				            
            <input type="checkbox" name="cb1">
        	<label for="cb1">Recordar</label>
		</div>
	</div>
    	

    <div class="registrarse" style="margin-top:20px">
        <div class="row fila">
        	<div class="col-md-6">
        		<a href="public/registro"><button type="button" class="btn btn-danger" >Registrarse</button></a>
        	</div>
        	<div class="col-md-6">
        		<input type="submit" name="enviar" value="Aceptar" class="btn btn-primary">
        	</div>
        </div>
    	 
    </div>	   			        
    
</form>';

require_once '../app/res/templates/login_registro.php';