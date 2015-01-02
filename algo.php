<?php 
include('cnx.php');

$sql = "SELECT v.fecha_ida  FROM vuelo v join reserva r on v.nro_vuelo = r.nro_vuelo WHERE r.nro_reserva ='8' or r.dni = ''and r.estado like 'pago'";

$rs = mysql_query($sql);

$row = mysql_fetch_array($rs);

 $fecha = $row['fecha_ida'];

$fecha_actual = date("Y-m-d");

$segundos_diferencia = strtotime($fecha) - strtotime($fecha_actual);


$dias_diferencia = intval($segundos_diferencia/60/60/24);
echo "La cantidad de dias entre el ".$fecha." y hoy es <b>".$dias_diferencia."</b>";
?>
