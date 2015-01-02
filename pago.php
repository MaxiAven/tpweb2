<?php 

include('autoload.php');

$reserva = $_POST['reserva'];
$precio = $_POST['precio'];
$fecha_actual = date("Y-m-d");

$pago = new cargaPago($precio,$fecha_actual,$reserva);
$pago -> pago();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/pago.css">
	<link rel="stylesheet" href="css/reserva.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/validaTarjeta.js" type="text/javascript"></script>
	
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta">
		<p><i>Pago de Pasaje</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="nreserva">
		<form name="procesa" action="procesa-pago.php" method="post" target="_blank" onsubmit="return validaTarjeta()">
		<?php 
			echo "<input type='hidden' name='reserva' value='".$reserva."'>";
		 ?>
		<p>
			Seleccione Tipo de Tarjeta:
			<select  id="tarjeta">
				<option value="">Seleccione tarjeta</option>
				<option value="visa">Visa</option>
				<option value="master">MasterCard</option>
				<option value="american">American Express</option>
			</select>
		</p><div id="t-tarjeta"></div>
			<p>Número de Tarjeta:<input type="text" name="Ntarjeta" value="" placeholder="" id="Ntarjeta"></p><div id="vtarjeta"></div>
			<p>Fecha de Vencimiento: 
				<select name="mes" id="mes">
				<option value="">Mes </option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>

			
				<select name="anio" id="anio">
				<option value="">Año </option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			
			</select>

			</p><div id="vencimiento"></div>
			<p>Nombre del titular:<input type="text" name="Ntitular" value="" placeholder="" id="Ntitular"></p><div id="titular"></div>
			<input type="submit" name="envia" id="enviar" value="Enviar Pago" >
			</form>
		</div>
		<p id="volver"><a href="index.php">Salir del sistema de pago</p>
	<div class="pie">
		
	</div>

	
</div>

</body>
</html>