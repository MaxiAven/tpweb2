<?php 

include("reservasCaidas.php");
include("cnx.php");

$finicial = $_POST['inicio'];
$ffinal = $_POST['fin'];

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

$fi = convertir_fecha($finicial);
$ffi = convertir_fecha($ffinal);

$datos = new reservasCaidas($fi,$ffi);
$datos -> reporteCaidas();





 ?>