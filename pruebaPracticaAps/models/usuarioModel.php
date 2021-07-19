<?php 
require '../db/conexion.php'; 
class UsuarioModel extends Conexion{
 function __construct(){ 
  parent::__construct();
  }
   function validarUsuario($login,$password){
    $para=$this->con->prepare("select * from usuario where login=? and password=?");
     $para->bind_param('ss',$a,$b); 
     $a=$login; 
     $b=sha1($password); 
     $para->execute(); 
     while($para->fetch()){ 
     	return 1; 
     } return 0;

	}
}

 ?>