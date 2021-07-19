<?php 

require_once "post/conexion.php";
$tabla="";
$consulta=" SELECT * FROM asociado LIMIT 0";
$termino= "";
if(isset($_POST['productos']))
{
	$termino=$mysqli->real_escape_string($_POST['productos']);
	$consulta="SELECT * FROM asociado WHERE 
	nombre LIKE '%".$termino."%' OR
	apellido LIKE '%".$termino."%'";
}
$consultaBD=$mysqli->query($consulta);
if($consultaBD->num_rows>=1){
	echo "
	<table class='table table-dark'>
	<thead>
	<tr>
	<th class='bg-info' scope='col'>NOMBRE</th>
	<th class='bg-info' scope='col'>APELLIDO</th>
	<th class='bg-info' scope='col'>DUI</th>
	<th class='bg-info' scope='col'>NIT</th>
	<th class='bg-info' scope='col'>CORREO</th>
	<th class='bg-info' scope='col'>TELEFONO</th>
	</tr>
	</thead><br>
	<tbody>";
	while($fila=$consultaBD->fetch_array(MYSQLI_ASSOC)){
		echo "<tr>
		<td>".$fila['nombre']."</td>	
		<td>".$fila['apellido']."</td>
		<td>".$fila['dui']."</td>
		<td>".$fila['nit']."</td>
		<td>".$fila['correo']."</td>
		<td>".$fila['telefono']."</td>	
		</tr>";
	}
	echo "</tbody>
	</table>";
}else{
	echo "<center><h4>No hemos encotrado ningun registro con la palabra "."<strong class='text-uppercase'>".$termino."</strong><h4><center>";
}

?>