<?php 
// seguridad, validacion de sesiones
session_start();
if(isset($_REQUEST["c"])){
	session_destroy();
	header("Location:controlUser.php");
}

if(isset($_SESSION["s1"])){
	
}
else
header("Location:controlUser.php"); 



	require '../models/antiguasModel.php';

		$error="";
		$obAsoci=new ActualizacionAntiguaModel();
		//validar boton
		if(isset($_REQUEST["insertar"])){
			$e=new Asociado($_REQUEST["idAsociado"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["correo"],$_REQUEST["telefono"],$_REQUEST["idEmpleado"]);
			$error=$obAsoci->insertarAsociado($e);
		}

			if(isset($_REQUEST["modificar"])){
			$e=new Asociado($_REQUEST["idAsociado"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["correo"],$_REQUEST["telefono"],$_REQUEST["idEmpleado"]);
			$error=$obAsoci->modificarAsociado($e);
		}
			if(isset($_REQUEST["eliminar"])){
			$e=new Asociado($_REQUEST["idAsociado"],$_REQUEST["nombre"],$_REQUEST["apellido"],$_REQUEST["dui"],$_REQUEST["nit"],$_REQUEST["correo"],$_REQUEST["telefono"],$_REQUEST["idEmpleado"]);
			$error=$obAsoci->eliminarAsociado($e);
		}

		$datos=$obAsoci->getAsociado();
		  $emp=$obAsoci->getEmpleado();

	require '../views/vistaAntiguas.php';
	//require '../views/asociadoVista.php';
	

	

 ?>