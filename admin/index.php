<?php 
include("cnx.php");
$sql = "SELECT DISTINCT provincia FROM aeropuerto ORDER BY provincia ASC";
$rs = mysql_query($sql);
$rs2 = mysql_query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="../css/informes.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../js/jquery-ui.css">
	<link rel="stylesheet" href="../js/jquery-ui.theme.css">
	
	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/jquery-ui.js" type="text/javascript"></script>
	<script src="../js/datepicker2.js" type="text/javascript"></script>
	<script src="../js/datepicker3.js" type="text/javascript"></script>
	<script src="../js/datepicker4.js" type="text/javascript"></script>
	<script src="../js/ocultacampo.js" type="text/javascript"></script>
	<script src="../js/autocomplete.js" type="text/javascript"></script>
	<script src="../js/validaCampos.js" type="text/javascript"></script>	
		
</head>
<body>
	<div class="contenedor2">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta2">
		<p><i>Informes</i></p>
	</div>
	</div>

	<div class="contenido2">

		<div class="buscador2">
			<div class="ventastotal">
			<form action="reporte_grafico1.php" method="POST" target="_blank">

				<p>Calcular las ventas de pasajes en la semana</p>
			
					<input type="text" name="inicial" id="ida" placeholder="Fecha inicial">
					<input type="text" name="final" id="vuelta" placeholder="Fecha Final">
					<input type="submit" name="calcular" id="calcular" value="Calcular">
				
			</form>
				
				
			</div>
			<div class="ventascategoria">
			<form action="reporte_grafico2.php" method="POST" target="_blank">
				<p>Calcular las ventas de pasajes en la semana por categoria y destino</p>
				<input type="text" name="inicial" id="ida2" placeholder="Fecha inicial">
				<input type="text" name="final" id="vuelta2" placeholder="Fecha Final">
				Clase:
				<select name="categoria" id="categoria">
					<option value="economica">Economy</option>
					<option value="primera">Primera</option>
				</select>
				Destino:
				<select name="provincia" id="provincia">
				<option value="">Provincia</option>
				<?php 
					while($valor = mysql_fetch_array($rs)){
						echo "<option value=".$valor['provincia'].">".$valor['provincia']."</option>";

					}
				 ?>
					
				</select>
				
				<input type="submit" name="calcular" id="calcular" value="Calcular">
			</form>
				
			</div>
			<div class="ocuavion">
				<form action="reporte_grafico3.php" method="POST" target="_blank">
				<p>Calcular ocupacion por avion y destino</p>
				Nro Avión:
				<select name="avion" id="categoria">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
				Destino:
				<select name="provincia" id="provincia">
				<option value="">Provincia</option>
				<?php 
					while($valor2 = mysql_fetch_array($rs2)){
						echo "<option value=".$valor2['provincia'].">".$valor2['provincia']."</option>";

					}
				 ?>
					
				</select>
				
				<input type="submit" name="calcular" id="calcular" value="Calcular">
			</form>
			</div>
			<div class="reservasscaidas">
				<p>Calcular cantidad de reserevas caidas</p>
				<form action="reporte_grafico4.php" method="post" target="_blank">
					<input type="text" name="inicio" id="ida3" placeholder="Fecha inicial">
					<input type="text" name="fin" id="vuelta3" placeholder="Fecha Final">
					<input type="submit" name="calcular" id="calcular" value="Calcular">
				</form>
			</div>

		</div>
	</div>

	<div class="pie">
		
	</div>

	</div>


</body>
</html>