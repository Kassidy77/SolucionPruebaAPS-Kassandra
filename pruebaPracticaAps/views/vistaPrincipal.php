<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="css/estilo.css">
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
		<a href="vistaPrincipal.php"><i class="fas fa-desktop"></i><span>Inicio</span></a>
		<a href="../controllers/controlAsociado.php"><i class="fas fa-cogs"></i><span>Asociados</span></a>
		<a href="../controllers/controlAgregar.php"><i class="fas fa-table"></i><span>Registrar Asociado</span></a>
		<a href="../controllers/controlActualizar.php"><i class="fas fa-th"></i><span>Actualizar Datos</span></a>
		<a href="buscador.php"><i class="fas fa-th"></i><span>Buscar Asociado</span></a>
		<a href="../controllers/controlBaja.php"><i class="fas fa-sliders-h"></i><span>Asociados de Baja</span></a>
		<a href="../controllers/controlActualizacion.php"><i class="fas fa-sliders-h"></i><span>Historial</span></a>	
	</div>
	<div class="contenido">
		 <section class="portafolio">
            <div class="contenedor">
                <br><br>
                <h2 class="titulo">ACACYPAC</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        
                        <img src="imagenes/img1.jpg" alt="">
                        <div class="hover-galeria">
                        <a href="../controllers/controlAsociado.php">
                            <img src="imagenes/icono1.png" alt="">
                        </a>
                            <p>Ingresa</p>
                            <h1>Asociados</h1>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="imagenes/img2.jpg" alt="">
                        <div class="hover-galeria">
                          <a href="../controllers/controlAgregar.php">  
                            <img src="imagenes/icono1.png" alt="">
                        </a>
                            <p>Ingresa</p>
                            <h1>Registrar Asociado</h1>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="imagenes/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="../controllers/controlActualizar.php">
                            <img src="imagenes/icono1.png" alt="">
                            </a>
                            <p>Ingresa</p>
                            <h1>Actualizar Datos</h1>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="imagenes/img5.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="buscador.php">
                            <img src="imagenes/icono1.png" alt="">
                            </a>
                            <p>Ingresa</p>
                            <h1>Buscar Asociado</h1>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="imagenes/img6.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="../controllers/controlBaja.php">
                            <img src="imagenes/icono1.png" alt="">
                            </a>
                            <p>Ingresa</p>
                            <h1>Dar de Baja</h1>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="imagenes/img7.jpg" alt="">
                        <div class="hover-galeria">
                            <a href="../controllers/controlActualizacion.php">
                            <img src="imagenes/icono1.png" alt="">
                        </a>
                            <p>Ingresa</p>
                            <h1>Historial</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Gestion de Asociados</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion1.svg" alt="">
                        <h3>Nuestra Historia</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion4.svg" alt="">
                        <h3>Contactanos</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="imagenes/ilustracion3.svg" alt="">
                        <h3>Otros Servicios</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
	</div>

<footer>
        <div class="contenedor-footer">

    <div class="mover">
        <img class="instagram" src="imagenes/i.png">       
        <img class="facebook" src="imagenes/f.png">
        <img class="tweet" src="imagenes/t.png"> 
    </div>
        </div>
        <h2 class="titulo-final">&copy;  Acacypac - Derechos Reservados</h2>
    </footer>
</body>
</html>