<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Resgistro Tecnologico</title>
</head>
<body background="imagenes/wp2264184.png" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #000000; margin-top: 5%;">Registro</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa email"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu edad</b></label>
      <input type="text" name="age" class="form-control"  required placeholder="Ingresa tu edad"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu numero</b></label>
      <input type="text" name="telefono" class="form-control"  required placeholder="Ingresa tu numero telefonico"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    <a href="index.php"><input  class="btn btn-primary" type="button" value="Iniciar sesión"/></a>

     

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->
</body>
</html>
