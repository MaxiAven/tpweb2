<?php 
include('cnx.php');

class cargaPago{

	private $precio;
	private $fecha;
	private $reserva;

	function __construct($precio,$fecha,$reserva){

		$this->precio = $precio;
		$this->fecha = $fecha;
		$this->reserva = $reserva;

	}


	function pago(){


		$sql = "INSERT INTO pago  (nro_pago,monto,fecha) VALUES (NULL,'$this->precio','$this->fecha')";
		$rs = mysql_query($sql);


		$query="SELECT * FROM pago order by nro_pago desc";
		$res = mysql_query($query);
		$row = mysql_fetch_array($res);

		$nro_pago = $row['nro_pago'];

		$query2 = "UPDATE  reserva 
				   SET estado = 'Pago',
				   nro_pago = '$nro_pago'
				   where nro_reserva = '$this->reserva'";
				   
		$rs2 = mysql_query($query2);


	}

}


 ?>