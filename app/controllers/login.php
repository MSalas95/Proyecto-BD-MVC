<?php


/**
* 
*/
class Login extends Controller
{
	
	public function index()
	{	
		
		$this->view('login/login');
		if (isset($_POST['enviar'])){
			
			$cedula = $_POST['inputCed'];
			$clave = $_POST['inputPassword'];
			$this->login($cedula,$clave);		
			
		}	
		
	}

	public function tabla(){
		$this->view('login/tab');
			
	}
	

	
	
}