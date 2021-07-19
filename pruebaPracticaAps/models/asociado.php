<?php 
	//clase asociado
	
	class Asociado
	{
		private $idAsociado;
		private $nombre;
		private $apellido;
		private $dui;
		private $nit;
		private $correo;
		private $telefono;
		private $idEmpleado;
		

	function __construct($idAsociado,$nombre,$apellido,$dui,$nit,$correo,$telefono,$idEmpleado) {

		$this->idAsociado=$idAsociado;
		$this->nombre=$nombre;
		$this->apellido=$apellido;
		$this->dui=$dui;
		$this->nit=$nit;
		$this->correo=$correo;
		$this->telefono=$telefono;
		$this->idEmpleado=$idEmpleado;
	}
	function getIdAsociado(){
		return $this->idAsociado;

	}
	function getNombre(){
		return $this->nombre;

	}
	function getApellido(){
		return $this->apellido;

	}
	function getDui(){
		return $this->dui;

	}
	function getNit(){
		return $this->nit;

	}
	function getCorreo(){
		return $this->correo;

	}
	function getTelefono(){
		return $this->telefono;

	}
	function getIdEmpleado(){
		return $this->idEmpleado;

	}
	
	}

 ?>	