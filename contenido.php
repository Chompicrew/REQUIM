<?php
ob_start();
?>
<!DOCTYPE html>
<?php
  session_start();
  

  include_once "encabezado.php";
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;
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
  <link rel="stylesheet" href="fonts.css">

</head>
<body>

<div id="main_wrapper">
         <header>
    <nav>
      <ul>
        <li><a href="index.html"><span class="primero"><i class="icon icon-home3"></i></span>Home</a></li>
        <li><a href="contenido.php"><span class="segundo"><i class="icon icon-coin-dollar"></i></span>Tienda</a>
          
        </li>
        <li><a href="#"><span class="tercero"><i class="icon icon-images"></i></span>Galeria</a>
        </li>

        <li><a href="#"><span class="cuarto"><i class="icon icon-profile"></i></span>Identidad Corporativa
        </a>
        </li>
        <li><a href="#"><span class="quinto"><i class="icon icon-user"></i></span>Conctacto
        </a>
      </li>
        <li><a href="#"><span class="sexto"><i class="icon icon-switch"></i></span>Iniciar Sesión
        </a>
          <ul>
            <li><a href="index.php">Login</a></li>
            <li><a href="index2.php">Registro</a></li>
            <li><a href="desconectar.php">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>


            <section id="secNoti">
           <div class="divNoti">
            
            <marquee>  Bienvenido: <strong class="resaltadou"><?php echo $_SESSION['user'];?></strong > ------- Noticias chingonas en esta barrita ------- Mira nuestos Smartphones mas populares ------- </marquee>

           </div>
           </section>


         <section id="suscripcion">
         	 <div class="contenedor">
         	 	<h1>Nuestros Productos</h1>

         	 </div>
         </section>

        <section id="color_section">
  <div class="col-xs-12">
    <?php
      if(isset($_GET["status"])){
        if($_GET["status"] === "1"){
          ?>
            <div class="alert alert-success">
              <strong>¡Correcto!</strong> Venta realizada correctamente
            </div>
          <?php
        }else if($_GET["status"] === "2"){
          ?>
          <div class="alert alert-info">
              <strong>Venta cancelada</strong>
            </div>
          <?php
        }else if($_GET["status"] === "3"){
          ?>
          <div class="alert alert-info">
              <strong>Ok</strong> Producto quitado de la lista
            </div>
          <?php
        }else if($_GET["status"] === "4"){
          ?>
          <div class="alert alert-warning">
              <strong>Error:</strong> El producto que buscas no existe
            </div>
          <?php
        }else if($_GET["status"] === "5"){
          ?>
          <div class="alert alert-danger">
              <strong>Error: </strong>El producto está agotado
            </div>
          <?php
        }else{
          ?>
          <div class="alert alert-danger">
              <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
            </div>
          <?php
        }
      }
    ?>
    <br>
    <form method="post" action="agregarAlCarrito.php">
      <label for="codigo">Código del producto:</label>
      <input autocomplete="off" autofocus class="form-control"  name="codigo" required type="text" id="codigo" required placeholder="Escribe el código y pulsa enter para agregar a tu carrito">
    </form>

    <br><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Código</th>
          <th>Descripción</th>
          <th>Precio de venta</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Quitar</th>
          

        </tr>
      </thead>
      <tbody>
        <?php foreach($_SESSION["carrito"] as $indice => $producto){ 
            $granTotal += $producto->total;
          ?>
        <tr>
          <td><?php echo $producto->codigo ?></td>
          <td><?php echo $producto->descripcion ?></td>
          <td><?php echo $producto->precioVenta ?></td>
          <td><?php echo $producto->cantidad ?></td>
          <td><?php echo $producto->total ?></td>
          <td><a class="btn btn-danger" href="<?php echo "quitarDelCarrito.php?indice=" . $indice?>"><i class="fa fa-trash"></i></a></td>
          
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <h3>Total: <?php echo $granTotal; ?></h3>
    <form action="./terminarVenta.php" method="POST">
      <input name="total"  type="hidden" value="<?php echo $granTotal;?>">
      <input name="id"  type="hidden" value="<?php echo $_SESSION['id'];?>">
      <button type="submit" class="btn btn-success ">Terminar venta </button>
      <a href="./cancelarVenta.php" class="btn btn-danger">Cancelar venta</a>
      
    </form>



<section id="seccion1">
  <marquee> <h3>Smartphones Más Populares</h3></marquee>
          <div class="contenedor">
            <div class="div2">
              <img src="smartphoneimg/Huawei-Y9-2018-pantalla.png">
              <h3>Huawei y9 2018</h3>
              <p ><a href="smartphone/y9-2018.php">Ver especificaciones.</a></p>
              <h3>Codigo 3.</h3>
            </div>
            <div class="div2">
              <img src="smartphoneimg/Huawei-Nova-3-pantalla.png">
              <h3>Huawei Nova 3</h3>
              <p ><a href="smartphone/Huawei-Nova-3.php">Ver especificaciones.</a></p>
              <h3>Codigo 4.</h3>
            </div>
            <div class="div2">
              <img src="smartphoneimg/Huawei-Nova-4-pantalla.png">
              <h3>Huawei Nova 4</h3>
              <p ><a href="smartphone/Huawei-Nova-4.php">Ver especificaciones.</a></p>
              <h3>Codigo 5.</h3>
            </div>
          </div>
         </section>


    


         <section id="seccion1">
           <h3>Smartphones Más Comprados</h3>
          <div class="contenedor">
            <div class="div2">
              <img src="smartphoneimg/Huawei-P-Smart-Z-100-px.png">
              <h3>Huawei p smart</h3>
              <p ><a href="smartphone/Huawei-p-smart.php">Ver especificaciones.</a></p>
              <h3>Codigo 2.</h3>
            </div>
            <div class="div2">
              <img src="smartphoneimg/Huawei-Mate-20-pantalla.png">
              <h3>Huawei mate 20</h3>
              <p ><a href="smartphone/Mate20.php">Ver especificaciones.</a></p>
              <h3>Codigo 6.</h3>
            </div>
            
          </div>
         </section>









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