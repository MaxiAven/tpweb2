<?php 
include_once('autoload.php');
include_once('funciones/funcionesVuelos.php');

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $mail = $_POST['mail'];
 $fnac = $_POST['fnac'];
 $dni = $_POST['dni'];


 $pre = $_POST['precio'];
 $cla = $_POST['clase'];
 $cod = $_POST['lista'];
 $fida = $_POST['fida'];
//$fvuelta = $_POST['fvuelta'];



if(isset($_POST['fvuelta'])){

	$ida = convertir_fecha($fida);
	$vuelta = convertir_fecha($_POST['fvuelta']);
	$vuelo = new cargaVuelo($cod,$ida,$vuelta);
	$vuelo -> vuelos();

}else
{
	$ida = convertir_fecha($fida);
	$vuelo2 = new cargaVuelo2($cod,$ida);
	$vuelo2 -> vuelos2();
}





$pasajeros = new CargaPasajero($nombre,$apellido,$mail,$fnac,$dni);
$pasajeros -> cargaUsuario();

$reservar = new CargaReserva($dni,$pre,$cla,$cod);
$reservar -> reserva();




?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/reserva.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	
	
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta">
		<p><i>Reserva</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="nreserva">
		
			<?php 

				$nreserva = new CargaReserva($dni,$pre,$cla,$cod);
				$nreserva -> nReserva();
				
			 ?>
			 <!--<p id="pagar"><a href="pago.php">Pagar reserva ahora</a></p>-->
		</div>

	<div class="pie">
		
	</div>

	
</div>

</body>
</html>

