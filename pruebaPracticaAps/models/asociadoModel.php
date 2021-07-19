<?php
	require '../db/conexion.php';
	require 'asociado.php';

	class AsociadoModel extends Conexion{
		public $error="";
		//inicializacion de la conexion
		function  __construct(){
			parent::__construct();

		}
		function getAsociado(){
			$res=$this->con->query("select * from asociado");
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
		function insertarAsociado($e){
			try{
				//variable para ejecutar los comando
				$para=$this->con->prepare("insert into asociado(idAsociado,nombre,apellido,dui,nit,correo,telefono,idEmpleado) values(?,?,?,?,?,?,?,?)");
				$para->bind_param('ssssssss',$a,$b,$c,$d,$ee,$f,$g,$h);
				$a='';
				$b=$e->getNombre();
				$c=$e->getApellido();
				$d=$e->getDui();
				$ee=$e->getNit();
				$f=$e->getCorreo();
				$g=$e->getTelefono();
				$h=$e->getIdEmpleado();
				$para->execute(); 
				

			}catch(Exception $ex){
				return $ex;

			}finally{
				$para->close();

			}
		}

		function modificarAsociado($e){
			try{
			$para=$this->con->prepare("update asociado set nombre=?,apellido=?,dui=?,nit=?,correo=?,telefono=?,idEmpleado=? where idAsociado=?");
			$para->bind_param('ssssssss',$a,$b,$c,$d,$ee,$f,$g,$h);
				
				$a=$e->getNombre();
				$b=$e->getApellido();
				$c=$e->getDui();
				$d=$e->getNit();
				$ee=$e->getCorreo();
				$f=$e->getTelefono();
				$g=$e->getIdEmpleado();
				$h=$e->getIdAsociado();
				$para->execute();
				}catch(Exception $ex){
					return $ex;
				}finally{
					$para->close();
				}
		}
			function eliminarAsociado($e){
			try{
			$para=$this->con->prepare("delete from asociado where idAsociado=?");
			$para->bind_param('s',$a);
				$a=$e->getIdAsociado();
				
				$para->execute();
				}catch(Exception $ex){
					return $ex;
				}finally{
					$para->close();
				}
		
		}
	}
	
 ?>