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

	public function prueba()
	{
		$this->view('admin/prueba');
	}

	public function prueba2()
	{	
		$clientes = $this->getCliente();
		$this->view('admin/prueba2',[$clientes]);
	}

	public function configuracion()
	{
		$this->view('admin/configuracion');
	}

	public function clientes()
	{	
		$clientes = $this->getCliente();
		$this->view('admin/clientes',[$clientes]);
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

	

	
}