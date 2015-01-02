<?php
include_once("funciones/funcionesVuelos.php");
include_once ('autoload.php');
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
	<script src="js/jquery1.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/validaChekin.js" type="text/javascript"></script>
	<script src="js/jquery.js"></script>
    <script src="js/funciones.js"></script>


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

	<div class="buscador2">
		<?php	
	
include('cnx.php');	



if (isset($_POST['reserva'])) {

	$nreserva = $_POST['reserva'];
	$reserva = new buscar_reserva($nreserva);
	$reserva -> reserva();

	$query = "SELECT *  FROM vuelo v join reserva r on v.nro_vuelo = r.nro_vuelo WHERE r.nro_reserva ='".$nreserva."' and r.estado like 'pago'";
	$res = mysql_query($query);	
	$row2 = mysql_fetch_array($res);

}else{

		if (isset($_POST['dni'])) {

		$dni = $_POST['dni'];
		$dni2 = new buscaDni($dni);
		$dni2 -> dni();

		$query = "SELECT *  FROM vuelo v join reserva r on v.nro_vuelo = r.nro_vuelo WHERE r.dni ='".$dni."' and r.estado like 'pago'";
		$res = mysql_query($query);	
		$row2 = mysql_fetch_array($res);
	} 

	}



if($row2>0)
{
	$fecha = $row2['fecha_ida'];
	$ndoc = $row2['dni'];
	$nres = $row2['nro_reserva'];

	$fecha_actual = date("Y-m-d");

	$segundos_diferencia = strtotime($fecha) - strtotime($fecha_actual);
	$dias_diferencia = intval($segundos_diferencia/60/60/24);

	if($dias_diferencia <= 2){
	$asientos=buscar_asientos($ndoc, $nres);// busca la cantidad de asientos segun la reserva hecha
	$row = mysql_fetch_array($asientos); //busqueda tipo avion

	echo "<div id='resumen'>";
		echo "<p>Nombre Pasajero: ".$row['nombre']."</p>";
		echo "<p>Apellido Pasajero: ".$row['apellido']."</p>";
		echo "<p>Nro Reserva: ".$row['nro_reserva']."</p>";
		echo "<p>Nro Vuelo: ".$row['nro_vuelo']."</p>";
		echo "<p>Clase: ".$row['categoria']."</p>";
		echo "<p>Salida Del Vuelo: ".$row['hora']."Hs</p>";
		echo "<p>Precio: ".$row['precio']."</p>";
	echo "</div>";




				if(strcmp($row['categoria'],"Economica")==0)
				{
				
				//echo "<br>";
				$fila=$row['filasEcono'];echo "<br>";
				$col=$row['columnasEcono'];echo "<br>";
				/*echo "filas".$row['filasEcono']."<br>";
				echo "columnas".$row['columnasEcono'];*/

				/*$col=$ceco;*/

				}
				else
				{
					$fp=$row['filasPrimera'];
					$cp=$row['columnaPrimera'];
					/*echo $fp;
					echo $ceco."col";*/	
					$fila=$row['filasPrimera'];
					$col=$row['columnaPrimera'];
					/*echo "filas".$row['filasPrimera']."<br>";
					echo "columnas".$row['columnaPrimera']."<br>";*/
				}

	$n_asiento=0;

	echo"<form method='POST' action='muestra_numero_asiento.php' name='lugar'>";
	echo "<input type='hidden' name='reserva' value=".$nres.">";
	echo "<input type='hidden' name='dni' value=".$ndoc.">";
	echo "<h3>SELECCIONE SU ASIENTO</h3>";
	echo "<div id='butacas'>";	

	for ($i=0;$i<$fila;$i++){
		//echo "FILA NRO".$i;

		 for($j=0;$j<$col;$j++) {

			//echo "COLUMNA NRO".$j;
			$n_asiento+=1;
				
				echo "<div id='posiciones'>

								".$n_asiento."<input type='radio' name='asiento' id='asiento' value =".$n_asiento.">

					</div>";
			 }																								
		echo "<br> <br>";


	}

	echo "<p><input type='submit' id='confirma' value='Confirmar Asiento'></p>";
	echo "</div>";
	echo"</form>";

	}else{

		header("location:checkin-msj.php");
	}

}//cierro while


?>

</div><!---cierre div buscador-->

	</div>

	<div class="pie">
		
		
	</div>

	</div>


</body>
</html>