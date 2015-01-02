<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
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
		<p><i>Comprar Vuelos</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="buscador">

		<form action="busqueda.php" method="POST" name="busqueda" id="busqueda" onsubmit="return validaCampos()">
		<p id="error"></p>
		<p id="error2"></p>
		<p id="error3"></p>
		<p id="error4"></p>
		
			<label><i>Viajar Desde:</i>
				<p><input type="text" name="origen" id="origen"  placeholder="Ciudad Origen" ></p>
			</label>
			<label><i>Hasta:</i>
				<p><input type="text" name="destino" id="destino" placeholder="Ciudad Destino"></p>
				
			</label>
			<label><i>Ida:</i>
				<p><input type="text" name="ida" id="ida" placeholder="Fecha ida"></p>
			</label>

			<label id="v"><i>Vuelta:</i>
				<p><input type="text" name="vuelta" id="vuelta" placeholder="Fecha vuelta"> </p>
			</label>

		
			<label><input type="checkbox" name="volver" value="0" id="volver" onchange="javascript:ocultarCampo()">Solo Ida</label>

			<label><i>Clase:</i>
				<p><select name="clase" id="clase">
					<option value="precioEcono">Economy</option>
					<option value="precioPrimera">Primera</option>
				</select></p>
			</label>

		
			<input type="submit" name="buscar" id="buscar" value="Buscar">
			<a href="checkin.php" id="checkin" ><i>Check-In</i></a>
		</form>


		</div>
	</div>

	<div class="pie">
		
	</div>

	</div>


</body>
</html>