<?php 

include("ventasTotal.php");
include("cnx.php");
function convertir_fecha($fecha)
	{
		$auxFecha = $fecha;
		$auxFecha = explode("/", $auxFecha);
		$dia_auxFecha = $auxFecha[0];
		$mes_auxFecha = $auxFecha[1];
		$ano_auxFecha = $auxFecha[2];
		$fecha = "$ano_auxFecha-$mes_auxFecha-$dia_auxFecha";

		return $fecha;
	}


$fechaIni = $_POST['inicial'];
$fechaFinal = $_POST['final'];

$fini = convertir_fecha($fechaIni);
 $ffinal = convertir_fecha($fechaFinal);



$datos = new ventasTotal($fini,$ffinal);
$datos -> generaReporte();



 ?>