<?php 

/**
* 
*/
class Registro extends Controller
{
	
	public function index()
	{	

		$this->view('registro/registro');	
		if (isset($_POST['enviar'])){

			
			if (isset($_POST['enviar'])){
  				
  				$nombre = $_POST['inputNom'];
  				$apellido = $_POST['inputApe'];
  				$cedula = $_POST['inputCed'];

  				if ($_POST['inputPassword1']===$_POST['inputPassword2']) {
  					      				
  					$this->registrarTecnico($nombre,$apellido,$cedula,$_POST['inputPassword1']);
  				} else {
  					echo 'Las contraseñas deben ser iguales.';
  				}
  				
  			}

		}
	}

	
	
}

