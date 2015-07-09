<?php


/**
* 
*/
class Reportes extends Controller
{

	public function index()
	{			
		
	}

	public function reporte1($inicio="",$fin="",$cedula="")
    {
       $this->view('reportes/reporte1',[$inicio,$fin,$cedula]);
       
    }

    public function reporte2($inicio="",$fin="",$cedulaTec="",$cedulaCli="")
    {
       $this->view('reportes/reporte2',[$inicio,$fin,$cedulaTec,$cedulaCli]);
       
    }

     public function reporte3($estado="",$cedulaCli="")
    {
       $this->view('reportes/reporte3',[$estado,$cedulaCli]);
       
    }

    public function showr1($inicio="",$fin="",$cedula=""){

    }

    public function showr2($inicio="",$fin="",$cedulaTec="",$cedulaCli=""){
       
    }

    public function showr3($estado="",$cedulaCli=""){

    }
	

}