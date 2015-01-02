<?php
include("cnx.php");

class buscaDni{

	private $dni;
	
	function __construct($dni){
	
		$this->dni = $dni;
	
	}
	
	function dni(){
	$sql = "SELECT *
	from pasajero p join 
	reserva r on p.dni = r.dni join
	vuelo v on r.nro_vuelo = r.nro_vuelo
	where p.dni = '$this->dni'";
	
	$rs = mysql_query($sql);
	$row = mysql_fetch_array($rs);


	$estado=$row['estado'];
	$dni = $row['dni'];
	if($dni == 0){

		header('Location: checkin.php');	
	}else{

		if (strcmp($estado,"reservado")==0) {

			
			header('Location: pago2.php');		/*falta pasar los datos de pago*/	


		}
	}
	
	

		
	
	
	}
	

}


?>