<?php 
	
	class Tecnico{

		public $nombre;
		public $apellido;
		public $cedula;
		public $clave;

		public function __construct($nombre,$apellido,$cedula,$clave)
		{
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->cedula = $cedula;
			$this->clave = $clave;
		}


	}


 ?>