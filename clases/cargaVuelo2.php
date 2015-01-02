<?php 
include('cnx.php');

class cargaVuelo2{

	private $codigo;
	private $fida;
	


	

	function __construct($codigo,$fida){
		$this->codigo = $codigo;
		$this->fida = $fida;
		
}




	function vuelos2(){


			$sql = "INSERT INTO vuelo (nro_vuelo,fecha_ida,fecha_vuelta,dispoEcono,dispoPrimera,cod_lista) 
				    VALUES (NULL,'$this->fida',NULL,NULL,NULL,'$this->codigo')";
				   
			$res = mysql_query($sql);
		}



}


 ?>
