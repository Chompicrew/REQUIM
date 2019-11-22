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

  include_once "encabezado.php";

include_once "connect_db.php";

//se obtiene el id de la actual sesion y se asigna a la variable id1
$id1 = $_SESSION['id'];

//consulta para ver el historial de compra por usurio
$sentencia = $base_de_datos->query("SELECT ventas.total, ventas.fecha, ventas.id, GROUP_CONCAT( productos.codigo, '..',  productos.descripcion, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto INNER JOIN login ON login.id = productos_vendidos.id_usuario where productos_vendidos.id_usuario = '$id1' GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
              <li class="actual"><a href="ventasregistro.php">Historial</a></li>
              <li><a href="contacto.php">Contacto</a></li>
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
         	 	<h3>Historial de compras</h3>

         	 </div>

         </section>

        <section id="color_section">
  <div class="col-xs-12">
    <h1>Tus compras</h1>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Número</th>
          <th>Fecha</th>
          <th>Productos vendidos</th>
          <th>Total</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($ventas as $venta){ ?>
        <tr>
          <td><?php echo $venta->id ?></td>
          <td><?php echo $venta->fecha ?></td>
          <td>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Descripción</th>
                  <th>Cantidad</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach(explode("__", $venta->productos) as $productosConcatenados){ 
                $producto = explode("..", $productosConcatenados)
                ?>
                <tr>
                  <td><?php echo $producto[0] ?></td>
                  <td><?php echo $producto[1] ?></td>
                  <td><?php echo $producto[2] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </td>
          <td><?php echo $venta->total ?></td>
          <td><a class="btn btn-danger" href="<?php echo "eliminarVenta.php?id=" . $venta->id?>"><i class="fa fa-trash"></i></a></td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<?php include_once "pie.php" ?>              
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