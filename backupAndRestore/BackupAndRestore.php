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
    <title>Backup y Restore del SII
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
 	
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="../imagenes/wp2264184.png" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">

	<h1 class="span"> <img src="../img/logo-smart.png" alt="Logotipo ModGrafics" width="50" > BD Smartphone Store

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
		<li><a href="../admin.php"> Usuarios </a></li>
			  <li><a href="../agregarproductos.php"> Productos </a></li>
			  <li><a href="../backupAndRestore/BackupAndRestore.php"><strong>Base de datos</strong></a></li>
			  <li><a href="../ayuda.php"> Ayuda </a></li>
			  <li><a href="../desconectar.php"> Cerrar Cesión </a></li>			 
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
		<h2> Respaldo y restauración de la base de datos</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Seleccióne una opción</h4><br>
		<div class="row-fluid">
		<div>
			<a class="btn btn-success" href="../backupAndRestore/backup.php">Backup <i class="fa fa-plus"></i></a>
			<a class="btn btn-success" href="../backupAndRestore/restore.php">Restore <i class="fa fa-plus"></i></a>
		</div>
		



			
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