<?php 

include("ventasTotalCategoria.php");
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
$cat = $_POST['categoria'];
$prov = $_POST['provincia'];


$fini = convertir_fecha($fechaIni);
$ffinal = convertir_fecha($fechaFinal);



$datos = new ventasTotalCategoria($fini,$ffinal,$cat,$prov);
$datos -> generaReporte();



 ?>