<?php
	

	require 'fpdf/fpdf.php'; //hacemos referencia al archivo de fpdf quien nos ayudara a crear la plantilla
	
	class PDF extends FPDF //creamos una clase la cual dara el formato del encabezado al pdf
	{
		function Header() //iniciamos con el encabezado
		{
			$this->Image('img/logo-smart.png', 5, 0, 30 ); //colocamos una imagen como logotipo, podra ser el de tu empresa
			$this->SetFont('Arial','B',15); //definimos el tipo de letra para el titulo
			$this->Cell(30); // dejamos un espacio en blanco como una celda lineal para que la soguiente celda quede en el centro
			$this->Cell(120,10, 'Reporte de Usuarios',0,0,'C'); // definimos la celada central para el titulo con las mismas caracteristas a las demas celdas solo que sin relleno ni linea de margen
			$this->Ln(20); // hacemos un interlineado para que no se junte con la tabla que desplegara al extraer los datos
		}
		
		function Footer() //para el pie de pagina pondremos la numeracion
		{
			$this->SetY(-15); // en la cordenada Y para colocarla en la arte baja de la pagina
			$this->SetFont('Arial','I', 8); // definimaos el tipo de letra, el estilo y el tamañap
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' ); // colocamos el texto pagina seguido de la numeracion con el metodo PageNo() ademas de que se define igual el color de fondo y la linea de margen, ademas de ser entrado
		}		
	}
?>