<?php
ob_start();
?>
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ayuda
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
 	
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    

  </head>
<body data-offset="40" background="imagenes/wp2264184.png" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">

	<h1 class="span"> <img src="img/logo-smart.png" alt="Logotipo ModGrafics" width="50" > BD Smartphone Store

</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR </a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
		<li><a href="admin.php"> Usuarios </a></li>
			  <li><a href="agregarproductos.php"> Productos </a></li>
			  <li><a href="backupAndRestore/BackupAndRestore.php">Base de datos</a></li>
			  <li><a href="ayuda.php"><strong>Ayuda </strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Ayuda para el Administrador</h2>	
		<div class="well" style="background: #81BEF7;">
		<hr class="soft"/>

		<h4>Para agregar un producto</h4>
		<div class="row-fluid">
		<p>Para agregar un producto seleccionamos en el menú la opcion de productos.</p>
		<img src="ayuda/productos1.PNG">
		<p>Y rellenamos el siguiente formulario con los datos de producto y guardamos y listo producto agregado.</p>
		<img src="ayuda/productos2.PNG"><br>

			<hr class="soft"/>

		<h4>Para eliminar un producto</h4>
		<p>Seleccionamos en el menú la opcion de producto y en la tabla donde se muestran los productos que están actualmente en la base de datos en la última columna esta la columna de eliminar, al presionar el botón de eliminar, borrar el producto correspondiente a la fila.</p>
		<img src="ayuda/eliminar1.PNG"><br>

			<hr class="soft"/>

		<h4>Para editar un producto</h4>
		<p>Seleccionamos en el menú la opcion de producto y en la tabla donde se muestran los productos que están actualmente, en la penúltima columna esta la columna de editar, al presionar el botón se abrirá una ventana para editar el producto correspondiente a la fila.</p>
		<img src="ayuda/editar1.PNG"><br>

		<hr class="soft"/>

		<h4>Para eliminar un usuario</h4>
		<p>Seleccionamos en el menú la opcion de Usuarios y en la tabla donde se muestran los usuarios en la última columna esta la columna de borrar, al presionar el botón eliminara el usuario correspondiente a la fila.</p>
		<img src="ayuda/eliminar2.PNG"><br>

		<hr class="soft"/>

		<h4>Realizar un respaldo de la base de datos</h4>
		<p>Basta con seleccionar la opcion de base de datos de menú superior y presionar el botón de Backup y la base de datos quedara respaldada.</p>
		<img src="ayuda/backup.PNG"><br>

		<hr class="soft"/>

		<h4>Restaurar la base de datos</h4>
		<p>Para que la restauracion sea correcta cada vez que realize un respaldo buscara el zip generado y copiara el nombre y lo replazara en el archivo restore, para que al momento de restaurar la base de datos seleccione el zip más actual.</p>
		<img src="ayuda/restore1.PNG"><br>
		<p>Despues basta con seleccionar la opcion de base de datos de menú superior y presionar el botón de Restore y la base de datos quedara restaurada.</p>
		<img src="ayuda/restore.PNG"><br>




<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
         	<p>Luis Armando Ortiz Salinas, Copyright &copy; 2019</p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
<?php
ob_end_flush();
?>