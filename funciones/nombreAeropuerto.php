<?php 

include("cnx.php");

$aeropuerto = $_GET['term'];

$consulta = "SELECT * FROM aeropuerto WHERE nombre LIKe '%$aeropuerto%'";

$resultado = mysql_query($consulta);

while($row = mysql_fetch_array($resultado))
{
	$e[]
}

 ?>