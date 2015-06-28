<?php

class Controller
{	
	

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

	//Conectar con base de datos postgresql

	public function conectarBD(){

		$usuario = "postgres";$passwd = "";$db = "dfilo";$port = 5432;$host = "localhost";

		$con = "host=$host port=$port dbname=$db user=$usuario password=$passwd";
		$cnx = pg_connect($con) or die ("Error de conexion. ". pg_last_error());
		return $cnx;

	}

	//GET

	public function getCliente(){
		$cnx = $this->conectarBD();

		$query = 'select array_to_json(array_agg(row_to_json(t)))
				    from (
				      select * from cliente Order by cedula
				    ) t'; 
		$rs = pg_query($cnx, $query) or die("No se puede ejecutar la consulta $query\n");
		$row = pg_fetch_row($rs);

		pg_close($cnx);

		return $row[0];
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
