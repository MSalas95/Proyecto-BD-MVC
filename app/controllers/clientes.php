<?php


/**
* 
*/
class Clientes extends Controller
{

	public function index()
	{			
		if ($this->isLogin()==false){
	        header('Location: http://localhost/proyectobd/public/login/');
	        return false;
	    }else{
	        $this->view('clientes/index');
		}
	}

	public function eliminarCliente($cedula){
        $this->eliminarCli($cedula);
    }

    public function show()
	{		
		echo $clientes = $this->getCliente();
	}

}