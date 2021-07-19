<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <title>Actualizar</title> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/actualizar.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css
">  
    <script type="text/javascript" src="jquery.js"></script>
    
   
    <script type="text/javascript" src="sweetalert2.all.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            $('#eliminar').click(function(){
                Swal.fire({
                    type:"question",
                    title:"Desea Dar de Baja?",
                    text:"Seguro",
                    showCancelButton:true,
                    cancelButtonColor:"red",
                    confirmButtonColor:"green",
                    confirmButtonText:"Si, Dar Baja"
                }).then((result)=>{
                    if (result.value){
                        $('#d1').append("<input type='hidden' name='eliminar'>");
                        $('#f').submit();


                    }
                });
            });
        });

    </script>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
         <i class="fas fa-bars" id="sidebar_btn"></i>   

        </label>

        <div class="left_area">
            <h3>Gestion<span>Asociados</span></h3>
        </div>
        <div class="right_area">
          <a href="../controllers/controlUser.php" class="logout_btn">Salir</a>
        </div>
        
    </header>
    <div class="sidebar">
        <center>
            <img src="imagenes/1.png" class="profile_image">
            <h4>Usuario</h4>
        </center>
        <a href="../views/vistaPrincipal.php"><i class="fas fa-desktop"></i><span>Inicio</span></a>
        <a href="../controllers/controlAsociado.php"><i class="fas fa-cogs"></i><span>Asociados</span></a>
        <a href="../controllers/controlAgregar.php"><i class="fas fa-table"></i><span>Registrar Asociado</span></a>
        <a href="../controllers/controlActualizar.php"><i class="fas fa-th"></i><span>Actualizar Datos</span></a>
        <a href="../views/buscador.php"><i class="fas fa-th"></i><span>Buscar Asociado</span></a>
        <a href="../controllers/controlBaja.php"><i class="fas fa-sliders-h"></i><span>Asociados de Baja</span></a>
        <a href="../controllers/controlActualizacion.php"><i class="fas fa-sliders-h"></i><span>Historial</span></a>    
    </div>
   <br>
   <br>
   <br>
   
  
       <center> 
         <div class="contenedor">
                <h2 class="titulo" align="center">Gestion Asociados</h2>
            </div>        
    <section>
        <div class="col-md-5"> 
            <form method="post" class="frm" action="#" id="f"><div id='d1'></div> 
                ID<input type="text" name="idAsociado" id="idAsociado" class="form-control" readonly="true"> 
                NOMBRE<input type="text" name="nombre" id="nombre" class="form-control" required="">
                APELLIDO<input type="text" name="apellido" id="apellido" class="form-control" required="">
                DUI<input type="text" name="dui" id="dui" class="form-control" required="">
                NIT<input type="text" name="nit" id="nit" class="form-control" required="">
                CORREO<input type="text" name="correo" id="correo" class="form-control" required="">
                TELEFONO<input type="text" name="telefono" id="telefono" class="form-control" required="">
                ENCARGADO<select name="idEmpleado" id="idEmpleado" class="form-control"> 
                <option></option>
                 <?php 
                 foreach ($dep as $d) { 
                    echo "<option value=".$d["idEmpleado"]. ">". $d["nombre"]."</option>"; 
                 } 
                 ?> 
                </select><br><br><br> 
                <input type="reset" class="btn btn-dark" value="Nuevo" onclick="$('#g').attr('disabled',false)"> 
                <input type="submit" name="insertar" id="g" value="Guardar" class="btn btn-dark" disabled="true"> 
                <input type="submit" name="modificar" value="Modificar" class="btn btn-dark"> 
                <input type="button" id="eliminar" class="btn btn-danger" value="Dar Baja">

            </form></div><br>
           <div class="col-md-5">
            <table class="table table-dark">
                <tr><th>ID</th><th>Nombre</th><th>APELLIDO</th><th>DUI</th><th>NIT</th><th>CORREO</th><th>TELEFONO</th><th>ENCARGADO</th><th>Accion</th></tr>
                 <?php 
                 foreach ($datos as $e) { 
                    $idAsociado=$e->getIdAsociado(); 
                    $nombre=str_replace(" ","&nbsp;",$e->getNombre());
                    $apellido=str_replace(" ","&nbsp;",$e->getApellido());
                    $dui=$e->getDui();
                    $nit=$e->getNit();
                    $correo=$e->getCorreo();
                    $telefono=$e->getTelefono();
                    $idEmpleado=$e->getIdEmpleado(); 
                    echo "<tr><td>$idAsociado</td><td>$nombre</td><td>$apellido</td><td>$dui</td><td>$nit</td><td>$correo</td><td>$telefono</td><td>$idEmpleado</td><td> <button onclick=$('#idAsociado').val('$idAsociado');$('#nombre').val('$nombre');$('#apellido').val('$apellido');$('#dui').val('$dui');$('#nit').val('$nit');$('#correo').val('$correo');$('#telefono').val('$telefono');$('#idEmpleado').val('$idEmpleado') class='btn btn-info'>Editar</button></td></tr>"; 
                 } 
                 ?> 
                </table>
               </div>
              
               
      
    </section>
</center>
</body>
</html>