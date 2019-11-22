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
            <li ><a href="contacto.php">Contacto</a></li>
	      		</ul>
	      	</nav>

            <nav>
        <li id="black"> Bienvenido: <strong class="resaltadou"><?php echo $_SESSION['user'];?></strong></li>
        <li class="resaltados"><a href="desconectar.php"> Cerrar Sesión </a></li> 
        <li class="actual"><a href="ayudauser.php">Ayuda</a></li>
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
         	 	<h3>Manual para el cliente</h3>

         	 </div>

         </section>

        <section id="color_section" style="background: #CEF6F5;">

                <article id="article1" >

        <h4 id="margen1">Para realizar una compra</h4>
        <p id="margen1">Seleccionamos en el menú la opcion de tienda. una vez finalizada la selección y sus productos estén en el carrito presione el botón de terminar venta.</p>
        <img src="ayuda/venta1.PNG"><br>

        <p id="margen1">Después mire con detalle los Smartphone que nuestra tienda le ofrece, identifique el código del Smartphone deseado y escríbalo en la barra indicada y presiona enter para agregar a su carrito.</p>
        <img src="ayuda/venta2.PNG"><br>

        <p id="margen1">Una vez finalizada la selección y sus productos estén en el carrito presione el botón de terminar venta.</p>
        <img src="ayuda/venta3.PNG"><br>

                </article>
                
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