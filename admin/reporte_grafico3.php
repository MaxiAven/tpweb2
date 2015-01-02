<?php 

include("ocupacionAvionDestino.php");
include("cnx.php");

$nro_avion = $_POST['avion'];
$prov = $_POST['provincia'];


$datos = new ocupacionAvionDestino($nro_avion,$prov);
$datos -> reporteOcupacion();





 ?>