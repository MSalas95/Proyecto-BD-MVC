<?php

class Controller
{	
	private $servidor = 'localhost';
	private $usuario = 'root';
	private $pass = '';
	private $bd = 'login-ejemplo';

	public function model($model)
	{
		require_once '../app/models/'. $model .'.php';
		return new $model;
	}

	public function view($view,$data = []){
		require_once '../app/views/'. $view .'.php';
	}

	public function connectDB(){
		$con = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->bd) or die ('no se conecta');
		return $con;
	}

	//Realizar LOGIN

	public function login($cedula,$clave){
			$sql = "SELECT * FROM tecnico where cedula= '".$cedula."' and clave= '".$clave."'";
			$con = $this->connectDB();
			$user = mysqli_query($con,$sql);

			if ($row = mysqli_fetch_array($user)) {
				echo "Login realizado";
			} else {
				echo "Datos invalidos";
			}

	}

	// INSERTAR UN TECNICO

	public function insertarTecnico($tecnico){
		$sql = 	"INSERT INTO tecnico (nombre,apellido,cedula,clave) 
				 VALUES ('$tecnico->nombre','$tecnico->apellido','$tecnico->cedula','$tecnico->clave')";
		$con = $this->connectDB();
		mysqli_query($con,$sql) or die 	
		('No se puede insertar '.mysqli_error($con));
		echo 'Usuario Registrado';		
	}

	public function registrarTecnico($nombre,$apellido,$cedula,$clave){
		require_once '../app/models/Tecnico.php';
		$tecnico = new Tecnico($nombre,$apellido,$cedula,$clave);
		$this->insertarTecnico($tecnico);
	}
}
