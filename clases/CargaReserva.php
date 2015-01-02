<?php 
include('cnx.php');

class CargaReserva{

	private $dni;
	private $precio;
	private $clase;
	private $codigo;

	function __construct($dni,$precio,$clase,$codigo){

		$this->dni = $dni;
		$this->precio = $precio;
		$this->clase = $clase;
		$this->codigo = $codigo;

		
			 if($this->clase == 'precioEcono')
			  {
			  		$this->class = 'Economica';
			  }else{
			  			 $this->class = 'Primera';
			  }
		

			 
	}


	function reserva(){


		$query = "SELECT * FROM vuelo WHERE cod_lista = '$this->codigo' ";

			$rs = mysql_query($query);

			$row = mysql_fetch_array($rs);
			 
				$nro = $row['nro_vuelo'];
				
				$query2 = "INSERT INTO reserva (nro_reserva,estado,categoria,precio,dni,nro_pago,nro_vuelo,asiento) 
				  		   VALUES (NULL,'reservado','$this->class','$this->precio','$this->dni',NULL,'$nro',NULL)";

				$res = mysql_query($query2);
				

	}

	function nReserva(){

		$sql = "SELECT * FROM reserva where dni = '$this->dni' order by nro_reserva desc limit 1";

		$rs2 = mysql_query($sql);

		while($row2 = mysql_fetch_array($rs2)){

			echo "<form action='pago.php' method='post'>
					<p>El número de reserva es: ".$row2['nro_reserva']."</p> 
					<input type='hidden' value=".$row2['nro_reserva']." name='reserva'>
					<input type='hidden' value=".$row2['precio']." name='precio'>
					<p class='info'><i>Señor pasajero por favor imprima el comprobante de reserva que se encuentra en el link de abajo.<br>Para realizar el check In ingrese el número de reserva 48hs ó 2hs antes del vuelo</i></p>
					<p id='checkin2'><a href='index.php'>Volver a la página principal</a></p>
					<p id='pdf'><a href='comprobanteReserva.php?n=".$row2['nro_reserva']."'>Descargar Comprobante de Reserva</a><img src='img/pdf-logo.png' width='18' height='18'></p>
					<p><input type='submit' value='Pagar reserva ahora'  id='pagar'></p>

				  </form>";
			

		}
	}
}


 ?>