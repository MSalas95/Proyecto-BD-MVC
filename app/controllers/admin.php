<?php


/**
* 
*/
class Admin extends Controller
{
	
	public function index()
	{			
		$this->view('admin/prueba');		
		
	}
	
	public function configuracion()
	{
		$this->view('admin/configuracion');
	}

	public function clientes()
	{	
		$clientes = $this->getCliente();
		$this->view('admin/clientes',[$clientes]);

		if (isset($_POST['enviar']))
		{
			$nombre = $_POST['inputNom'];
			$apellido = $_POST['inputApe'];
			$cedula = $_POST['inputCed'];
			$direccion = $_POST['inputDir'];
			$email = $_POST['inputEmail'];
			$telefono = $_POST['inputTel'];
			$this->insertarCliente($cedula,$nombre,$apellido,$direccion,$email,$telefono);
		}
		if (isset($_POST['enviar2']))
		{
			$nombre = $_POST['inputNom2'];
			$apellido = $_POST['inputApe2'];
			$cedula = $_POST['inputCed2'];
			$direccion = $_POST['inputDir2'];
			$email = $_POST['inputEmail2'];
			$telefono = $_POST['inputTel2'];
			$this->modificarCliente($cedula,$nombre,$apellido,$direccion,$email,$telefono);
		}
	}

	public function dispositivos()
	{
		$this->view('admin/dispositivos');
	}
	public function reparaciones()
	{
		$this->view('admin/reparaciones');
	}
	public function reportes()
	{
		$this->view('admin/reportes');
	}
	public function repuestos()
	{
		$this->view('admin/repuestos');
	}
	public function tecnicos()
	{
		$this->view('admin/tecnicos');
	}
	

	
}