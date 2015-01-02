<?php
include_once('cnx.php');

class autobusqueda{
	

	public function buscarAero($nombreCiudad){
	
	$datos = array();
	
	$sql="SELECT *
		  from aeropuerto
		  where ciudad like '%$nombreCiudad%'
		  OR provincia like '%$nombreCiudad%' ";

	
	
	$resultado = mysql_query($sql);

	
		while($row = mysql_fetch_array($resultado))
		{
			$datos[] = array('value' => $row['nombre']);//.",".$row['ciudad']

		}

	return $datos;
	
	}
 
} 
?>