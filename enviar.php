<?php
//Para que funcione de manera adecuada agregen la carpeta a un host!!! no importa si es gratuito como el web000
$destino ="armando.gotenks@gmail.com"; //Para hacer la prueba, coloquen aqui su correo a donde quiern que le lleguen los mensajes 
//de los que comenten en el formulario.
$nombre = $_POST["nombre"];//estas lineas son las declaraciones de las variables necesarias como el nombre,el correo de
//el que envia el mensaje, su telefono y el mensaje que esta redactando
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"]; //En los campos correspondientes se agregara el valor de las variables-
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje:" . $mensaje;
mail($destino,"Contacto", $contenido);
echo '<script>alert("correro enviado exitosamente")</script> ';
echo "<script>location.href='contacto.php'</script>";

?>