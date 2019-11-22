<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "connect_db.php";
$sentencia = $base_de_datos->prepare("DELETE FROM ventas WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./ventasregistro.php");
	exit;
}
else echo "Algo salió mal";
?>