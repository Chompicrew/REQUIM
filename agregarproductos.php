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

include_once "connect_db.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Productos registrados
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
	<?php
	include("include/cabecera.php");
	?>
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
			  <li><a href="agregarproductos.php"> <strong>Productos</strong> </a></li>
			   <li><a href="./backupAndRestore/BackupAndRestore.php"> Base de datos </a></li>
			   <li><a href="ayuda.php"> Ayuda </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
	
<div class="col-xs-12">
	<h2>Productos</h2>
		<div class="well well-small">
		
		<div class="row-fluid">
		<div>
			<a class="btn btn-success" href="./newproducto.php">Nuevo Producto<i class="fa fa-plus"></i></a>
		</div><br>
		<div>
			<form action=" <?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
 <button type="submit" id="export_data" name='export_data'
value="Export to excel" class="btn btn-info">Exportar a Excel</button>
 </form>
		</div>
		<br>
		<table border='1'; class="table table-bordered">
			
				<tr class='warning'>
					<td>ID</td>
					<td>Código</td>
					<td>Descripción</td>
					<td>Precio de compra</td>
					<td>Precio de venta</td>
					<td>Existencia</td>
					<td>Editar</td>
					<td>Eliminar</td>
				</tr>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr class='success'>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->codigo ?></td>
					<td><?php echo $producto->descripcion ?></td>
					<td><?php echo $producto->precioCompra ?></td>
					<td><?php echo $producto->precioVenta ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><a  href="<?php echo "editarproducto.php?id=" . $producto->id?>"><img src='imagenes/editar.PNG' width="50" class='img-rounded'/></a></td>
					<td><a href="<?php echo "eliminar.php?id=" . $producto->id?>"><img src='imagenes/eliminar.PNG' width="50" class='img-rounded'/></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>
<?php if(isset($_POST["export_data"])) {
 if(!empty($productos)) {
 $filename = "ImplementoBD.xls";
 header("Content-Type: application/vnd.ms-excel");
 header("Content-Disposition: attachment; filename=".$filename);

 
 }
 exit;
}
?>


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
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
<?php
ob_end_flush();
?>