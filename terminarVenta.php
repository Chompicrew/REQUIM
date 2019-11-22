<?php
session_start();
if(@!$_SESSION['user']){header("Location:index.php");}elseif($_SESSION['rol']==1){
header("Location:admin.php");
}



session_start();

    
    


if(!isset($_POST["total"])) exit;


$total = $_POST["total"];


include_once "connect_db.php";

//define la zona horaria por defecto y obtiene la fecha y hora y la asigna a la variable $ahora
date_default_timezone_set('America/Mexico_City');
$ahora = date("Y-m-d g:i:s");

if(!isset($_POST["id"])) exit;
$id = $_POST["id"];
include_once "connect_db.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM login WHERE id = ?;");
$sentencia->execute([$id]);
$idusuario = $sentencia->fetch(PDO::FETCH_OBJ);


//inserta en la tabla ventas la compra con la fecha obtenida
$sentencia = $base_de_datos->prepare("INSERT INTO ventas(fecha, total) VALUES (?, ?);");
$sentencia->execute([$ahora, $total]);

$sentencia = $base_de_datos->prepare("SELECT id FROM ventas ORDER BY id DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$idVenta = $resultado === false ? 1 : $resultado->id;

$base_de_datos->beginTransaction();
$sentencia = $base_de_datos->prepare("INSERT INTO productos_vendidos(id_producto, id_venta, cantidad, id_usuario) VALUES (?, ?, ?, ?);");
$sentenciaExistencia = $base_de_datos->prepare("UPDATE productos SET existencia = existencia - ? WHERE id = ?;");
foreach ($_SESSION["carrito"] as $producto) {
	$total += $producto->total;
	$sentencia->execute([$producto->id, $idVenta, $producto->cantidad, $idusuario->id]);
	$sentenciaExistencia->execute([$producto->cantidad, $producto->id]);
}
$base_de_datos->commit();
unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];
header("Location: ./contenido.php?status=1");
?>