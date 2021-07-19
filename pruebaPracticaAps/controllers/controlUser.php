<?php 
require '../models/usuarioModel.php'; 
$obUser=new UsuarioModel(); 
if(isset($_REQUEST["validar"])){ 
	$r=$obUser->validarUsuario($_REQUEST["login"],$_REQUEST["password"]); 
	if($r==1){ 
		session_start(); 
		$_SESSION["s1"]=$_REQUEST["login"]; 
		header("Location:controlAsociado.php"); 
		header("Location:../views/vistaPrincipal.php");
	}
		else 
			echo "<script>alert('Usuario o Contraseña no validos')</script>"; 
	} require '../views/login.php';
	?>