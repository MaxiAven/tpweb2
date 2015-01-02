<?php 
include('cnx.php');

class cargaVuelo{

	private $codigo;
	private $fida;
	private $fvuelta;


	

	function __construct($codigo,$fida,$fvuelta){
		$this->codigo = $codigo;
		$this->fida = $fida;
		$this->fvuelta = $fvuelta;
}




	function vuelos(){


			$sql = "INSERT INTO vuelo (nro_vuelo,fecha_ida,fecha_vuelta,dispoEcono,dispoPrimera,cod_lista) 
				    VALUES (NULL,'$this->fida', '$this->fvuelta',NULL,NULL,'$this->codigo')";
				   
			$res = mysql_query($sql);
		}




	function cargaNvuelo(){

			$query = "SELECT * FROM vuelo WHERE cod_lista = '$this->codigo' ";

			$rs = mysql_query($query);

			while($row = mysql_fetch_array($rs)){

				$query2 = "INSERT INTO reserva (nro_reserva,estado,categoria,precio,dni,nro_pago,nro_vuelo) 
				  VALUES (NULL,NULL,NULL,NULL,NULL,NULL,".$row['nro_vuelo'].")";
				 $result = mysql_query($query2);
			}
	}

}


 ?>
