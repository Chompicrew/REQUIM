<?php
	include 'plantilla.php'; //incluimos los archivos necesarios, la plantilla es un archivo que usaremos para el encabezado del pdf
	require 'connect_db.php'; //archivo de conexion
	
	$query = "SELECT id,user,edad,email FROM `login`"; //hacemos el select de lo que queremos desplear en el archivo pdf.
	$resultado = $mysqli->query($query); //almacenamos el resultado en una bariable
	
	$pdf = new PDF(); // creamos un pdf nuevo
	$pdf->AliasNbPages(); // mandamos llamar a metodos predifinidos de los archivos fpdf apra el avanse de paginas al momento de elavoracion del pdf
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232); //seleccionamos un color si lo deceas, es para el encabezado de la tabla, puedes desplegar en forma de tabla o en texto.
	$pdf->SetFont('Arial','B',12); //defines el tipo de letra, la B es en negritas y el 12 el tamaño
	$pdf->Cell(20,6,'ID',		1,0,'C',1); //el 20 es la longitur de la celda
	$pdf->Cell(30,6,'USER',	1,0,'C',1); //el 6 es el ancho de la celda
	$pdf->Cell(20,6,'EDAD',	1,0,'C',1); // sigue el nombre o texto que estara dentro de la celda
	$pdf->Cell(60,6,'EMAIL',	1,1,'C',1);
	
	 // el 1 se refiere a el borde si queremos que este marcado y un 0 si 											lo queremos sin borde
											// el siguiente numero se refiere al salto de renglon siempre que finalise un renglon pondremos un 1 para que salte al soguiente, de lo ccontrario segira sobre el mismo
											// la C singinifca centrado dentro de la celda 
											// y el 1 al final dira si llevara relleno o 0 si lo queremos blanco el relleno sera del color que definimos al inicio
	
	$pdf->SetFont('Arial','',10); // definimos el tipo de letra del resultado
	
	while($row = $resultado->fetch_assoc()) //a traves del ciclo extraeremos los daos y a su ves los iremos poniendo en el pdf
	{
		$pdf->Cell(20,6,utf8_decode($row['id']),		1,0,'C'); //los datos son iguales, solo cambia que en lugar de definir lo que desplegara lo extraemos con el nombre de las varibles que estan en la base de datos.
		$pdf->Cell(30,6,utf8_decode($row['user']),					1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['edad']),	1,0,'C'); //utf8_decode lo usamos para convertir el texto y no tener probelmas en algunos buscadores que de pronto no reconoce las letras con acentos.
		$pdf->Cell(60,6,utf8_decode($row['email']),	1,1,'C');

	}
	$pdf->Output(utf8_decode('Salidas.pdf'), 'I'); // cerramos el pdf (dentro de los parentess podemos definir el nombre)
/**
	* Documentacion
	*$pdf->Cell(70,6,'Direccion',1,0,'C',1);
	*60->Longitud
	*6-> Alto
	*1-> Borde
	*0-> No tiene Salto de Linea, 1-> Si tiene salto de Linea
	*C-> Centrado
	*1-> Relleno (Color)
	*
	*/

?>

