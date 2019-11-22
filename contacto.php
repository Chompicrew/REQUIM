<?php
ob_start();
?>
<!DOCTYPE html>
<?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:index.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:admin.php");
    }
    ?>
<html lang="en">
<head>
	<title>Smartphone Store | Bienvenidos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width"> 
    <meta name="description" content="Smartphone Store"> 
    <meta name="keywords" content="Smartphone Store"> 
    <meta name="author" content="Smartphone Store">
    <link rel="stylesheet" type="text/css" href="css/estilosv1.css">
 
</head>
<body>

<div id="main_wrapper">
         <header>
	      <div class="contenedor">
	      	<div id="marca">
	      		<h1><span class="resaltado"><img src="img/logo-smart.png" alt="Logotipo ModGrafics" height="50"> Smartphone</span>   Store </h1>
	      	</div>
	      	<nav>
	      		<ul>
	      	<li><a href="home.php">Inicio</a></li>
            <li><a href="contenido.php">Tienda</a></li>
            <li><a href="ventasregistro.php">Historial</a></li>
            <li class="actual"><a href="contacto.php">Contacto</a></li>
	      		</ul>
	      	</nav>

            <nav>
        <li id="black"> Bienvenido: <strong class="resaltadou"><?php echo $_SESSION['user'];?></strong></li>
        <li class="resaltados"><a href="desconectar.php"> Cerrar Sesión </a></li> 
        <li><a href="ayudauser.php">Ayuda</a></li>
          </nav>
          
	      </div>
          
         </header>

        <section id="secNoti">
           <div class="divNoti">
            <marquee>  Bienvenido: <strong class="resaltadou"><?php echo $_SESSION['user'];?></strong > ------- Noticias chingonas en esta barrita ------- Mira nuestos Smartphones mas populares ------- </marquee>

           </div>
           </section>

         <section id="suscripcion">
         	 <div class="contenedor">
         	 	<h3>Datos Del Desarrollador</h3>

         	 </div>

         </section>

        <section id="color_section">
                <article>
                    <h1><img src="imagenes/pin.png" alt="Travel category" class="cat_icon" />Enviame un correo</h1>
                    <form id="form1" action="enviar.php" method="post">
                <input id="input1" type="text" name="nombre" placeholder="Nombre" required>
                <input id="input1" type="text" name="correo" placeholder="Correo " required>
                <input id="input1" type="text" name="telefono" placeholder="Telefono" required>
            <textarea id="textarea1" name="mensaje" placeholder="Escribe aqui tu mensaje" required></textarea>
                <input type="submit" value="Enviar" id="boton"> 
            </form>


                </article>
                <aside>
                    <h1>Sobre el autor</h1>
                    <img src="imagenes/arrow.png" alt="" id="arrow" />
                    <p id="zozor_picture"><img src="imagenes/23472788_1517041605057515_6975074581477344558_n.jpg" alt="Zozor Picture" height="120" /></p>
                    <p>Mi nombre es Luis Armando Ortiz Salinas. Naci el 25 de junio de 1998.</p>

                    <p>Actualmente estudio la carrera de ingeniera en sistemas computacionales, la cual terminare muy pronto.</p>

                    <p>Redes Sociales</p>
                    <p>
                        <a target="_blank"  href="https://www.facebook.com/luiis.ortissalinas"><img src="imagenes/facebook.png" alt="Facebook"/></a>

                        <a target="_blank" href="https://twitter.com/ortiz_luiis"><img src="imagenes/twitter.png" alt="Twitter" /></a>

                        <a target="_blank" href="https://www.youtube.com/channel/UC6LWLpzPcbqLfMO4q4zD3ug?view_as=subscriber"><img src="imagenes/youtube.png" alt="Youtube" />
                        </a>

                    
                </aside>
            </section>

         <footer id="footer1">
         	<p>Luis Armando Ortiz Salinas, Copyright &copy; 2019</p>
         </footer>

</div>

</body>
</html>
<?php
ob_end_flush();
?>