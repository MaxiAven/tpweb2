<?php 
include('cnx.php');


class CargaPasajero{

	private $nombre;
	private $apellido;
	private $mail;
	private $fnac;
	private $dni;

	function __construct($nombre,$apellido,$mail,$fnac,$dni){


		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->mail = $mail;
		$this->fnac = $fnac;
		$this->dni = $dni;
		


	}


	function cargaUsuario(){

		$query = "INSERT INTO pasajero (dni,nombre,apellido,mail,fnacimiento) 
				  VALUES ('$this->dni','$this->nombre','$this->apellido','$this->mail','$this->fnac')";

		$res = mysql_query($query);


		
	}


	
	
}

/***clase para cargar los datos del pasajero y la reserva**/
 ?>