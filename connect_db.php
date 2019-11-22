<?php

//conexion para todo el uso referente a la tienda
$contraseña = "12345";
$usuario = "root";
$nombre_base_de_datos = "academ";
try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
	 $base_de_datos->query("set names utf8;");
    $base_de_datos->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base_de_datos->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}


      //conexion para todo el uso referente al login
		$mysqli = new MySQLi("localhost", "root","12345", "academ");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
		//echo "Conexión exitossa!";

//$link =mysqli_connect("localhost","root","12345");
//if($link){		mysqli_select_db($link,"academ");
	//}



?>