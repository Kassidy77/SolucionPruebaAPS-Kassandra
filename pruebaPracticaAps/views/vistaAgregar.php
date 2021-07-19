<!DOCTYPE html>
<html>
<head>
    <title>Agregar Asociado</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/formulario.css">
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
               
            <br>

        <div class="">
           
            <div id="color">

                <form action="#" method="POST" id="f">
                <label>ID</label>
                <input type="text" name="idAsociado" id="idAsociado" class="field" readonly="true">

                NOMBRE<input type="text" name="nombre" id="nombre" class="field"  placeholder="Ingrese el Nombre" required>
                APELLIDO<input type="text" name="apellido" id="apellido" class="field" placeholder="Ingrese el Apellido" required>
                DUI<input type="text" name="dui" id="dui" class="field" placeholder="00000000-0" required>
                NIT<input type="text" name="nit" id="nit" class="field" placeholder="0000-000000-000-0" required>
                CORREO<input type="text" name="correo" id="correo" class="field" placeholder="example1998@gmail.com" required>
                TELEFONO<input type="text" name="telefono" id="telefono" class="field" placeholder="0000-0000" required>
                <br>
                EMPLEADO ENCARGADO<select name="idEmpleado" id="idEmpleado" class="field">
                    <?php
                        foreach ($emp as $em) {
                            echo "<option value=".$em["idEmpleado"].">".$em["nombre"]."</option>"; 
                        }
                    ?>

                </select><br><br>
               
                <input type="submit" name="insertar" id="g" value="Guardar" class="btn">
              
            </form>

           </div>  
        

            </div>
            </div>
        </section>

</body>
</html>