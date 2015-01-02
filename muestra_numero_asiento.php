 <?php
include_once ("cnx.php");
include_once ('autoload.php');
include_once("funciones/funcionesVuelos.php");
SESSION_START();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/check2.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/datepicker.js" type="text/javascript"></script>
	<script src="js/ocultacampo.js" type="text/javascript"></script>
	<script src="js/autocomplete.js" type="text/javascript"></script>
	<script src="js/validaCampos.js" type="text/javascript"></script>	
		
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta">
		<p><i>Boarding pass</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="buscador">
		<div class="msj">
		<?php
		$asiento=$_POST['asiento'];
		$ndoc=$_POST['dni'];
		$nreserva=$_POST['reserva'];
		echo "<h2>¡Gracias por volar con nosotros!</h2>
			   <p>Su asiento ha sido reservado</p>";
		echo "<p>El asiento reservado es el Número: ".$asiento."</p>";

		
		insertar_asiento($ndoc,$nreserva,$asiento);

		echo "<a href='boarding-pass.php?d=".$ndoc."&r=".$nreserva."&a=".$asiento."' target='_blank'>Ver y descargar boarding pass</a> ";
		echo "<a href='index.php'>Volver a Buscar Vuelos</a> ";
		?>

		</div>
		

		

		</div>
	</div>

	<div class="pie">
		
	</div>

	</div>


</body>
</html>