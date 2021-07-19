<!DOCTYPE html>
<html>
<head>
    <title>Asociados</title>
     <meta charset="UTF-8">
     
     <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="sweetalert2.all.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estiloTabla.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css
">

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
    
         
            <div align="center">
                <br><br>
                 <div class="contenedor">
                <h2 class="titulo" align="center">Datos Actualizados</h2>
            </div>
            
<div id="color">
                 <table>
        <tr id="header">
                    <th>Id Asociado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DUI</th>
                    <th>NIT</th>
                    <th>Correo</th>
                    <th>telefono</th>
                    <th>Supervisor</th>
                </tr>
        <?php 
                foreach ($datos as $a) {
                        $idAsociado=$a->getIdAsociado();
                        $nombre=$a->getNombre();
                        $apellido=$a->getApellido();
                        $dui=$a->getDui();
                        $nit=$a->getNit();
                        $correo=$a->getCorreo();
                        $telefono=$a->getTelefono();
                        $idEmpleado=$a->getIdEmpleado();
                        echo "<tr>
                        <td>$idAsociado</td>
                        <td>$nombre</td>
                        <td>$apellido</td>
                        <td>$dui</td>
                        <td>$nit</td>
                        <td>$correo</td>
                        <td>$telefono</td>
                        <td>$idEmpleado</td>
                        </tr>";
                    }
                 ?>

    </table>
    <div class="right_area">
        <a href="../controllers/controlAntigua.php"><i class="fas fa-desktop"></i><span>Ver Actualizaciones Antiguas---></span></a>
           
        </div>

           </div>    

            </div>
      
          
        </section>

        
    </div>
</body>
</html>