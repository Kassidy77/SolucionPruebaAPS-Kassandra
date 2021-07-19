<?php
	require '../db/conexion.php';
	require 'asociado.php';

	class BajaModel extends Conexion{
		public $error="";
		//inicializacion de la conexion
		function  __construct(){
			parent::__construct();

		}
		function getAsociado(){
			$res=$this->con->query("select * from asociado_baja");
			//creacion de arreglo
			$r=array();
			while($row=$res->fetch_assoc()){
				//llenado del arreglo
				$e=new Asociado($row["idAsociado"],$row["nombre"],$row["apellido"],$row["dui"],$row["nit"],$row["correo"],$row["telefono"],$row["idEmpleado"]);
				$r[]=$e;
			}
			return $r;
		}
		function getEmpleado(){
			$res=$this->con->query("select * from empleado");
			$r=array();
			while($row=$res->fetch_assoc()){
				$r[]=$row;
			}
			return $r;
		}


		
	}
	
 ?>