<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/checkin.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/validaChekin.js" type="text/javascript"></script>
		
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta">
		<p><i>Check In</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="buscador">
		<div class="check">
		<h3>Check In con Número de reserva</h3>
		<form action="check2.php" method="POST" name="busqueda" id="busqueda" onsubmit="return validaReserva()">
		<p id="error"></p>
		<p id="error2"></p>
			<label><i>Nro reserva:</i>
				<p><input type="text" name="reserva" id="origen"  placeholder="Nro reserva"></p>
			
			</label>
			<label><i>Apellido:</i>
				<p><input type="text" name="apellido" id="destino" placeholder="Apellido"></p>
			</label>

			<input type="submit" name="buscar" id="buscar" value="Buscar">

		</form>

		</div>	
		<div class="check">
		<h3>Check In con Número de Dni</h3>
		<form action="check2.php" method="POST" name="busqueda" id="busqueda" onsubmit="return ValidaDni()">
		<p id="error3"></p>
		<p id="error4"></p>
			<label><i>Nro Dni:</i>
				<p><input type="text" name="dni" id="origen2"  placeholder="Nro Dni"></p>
			
			</label>
			<label><i>Apellido:</i>
				<p><input type="text" name="apellido" id="destino3" placeholder=" Apellido"></p>
			</label>
			
			<input type="submit" name="buscar" id="buscar" value="Buscar">
			<a href="index.php" id="volver">Volver</a>
		</form>
		</div>

		</div>
	</div>

	<div class="pie">
		
	</div>

	</div>


</body>
</html>