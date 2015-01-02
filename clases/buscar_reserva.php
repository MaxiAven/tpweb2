<?php
class buscar_reserva{

	private $reserva;
	
	function __construct($reserva){
	
		$this->reserva = $reserva;
	
	}
	
	function reserva(){
	$sql = "SELECT *
	from reserva re
	where re.nro_reserva = '$this->reserva'";
	
	$rs = mysql_query($sql);
	$row = mysql_fetch_array($rs);
	
	
	$estado=$row['estado'];
	$reserva = $row['nro_reserva'];
			
			if($reserva==0)
			{
				header('Location: checkin.php');
			}else{

					if (strcmp($estado,"reservado")==0) 
					{
				
						header('Location: pago2.php');		/*falta pasar los datos de pago*/	
					} 
				}
	
	
		


	}

}


?>