<?php 

include_once("cnx.php");

class BuscaIdaVuelta{

	private $origen;
	private $destino;
	private $ida;
	private $vuelta;
	private $clase;

	public function __construct($origen,$destino,$ida,$vuelta,$clase,$fida,$fvuelta){

		$this->origen = $origen;
		$this->destino = $destino;
		$this->ida = $ida;
		$this->vuelta = $vuelta;
		$this->clase = $clase;
		$this->fida = $fida;
		$this->fvuelta = $fvuelta;

}

	public function ida_vuelta(){

		$sql = mysql_query("SELECT a1.ciudad AS origen ,a2.ciudad AS destino,lv.hora,lv.cod_lista,lv.$this->clase AS precioClase
				FROM listaVuelos lv JOIN 
				aeropuerto a1 on lv.cod_aero_origen = a1.cod_aeropuerto JOIN
				aeropuerto a2 on lv.cod_aero_destino = a2.cod_aeropuerto
 				WHERE a1.nombre like '%$this->origen%' 
 				AND a2.nombre like '%$this->destino%'
 				AND lv.diasVuelo like '%$this->ida%'
 				AND lv.diasVuelo like '%$this->vuelta%'")or die("Error en el select:".mysql_error());
 		

 		


 		if(mysql_num_rows($sql)!= 0)
 		{

 			while($row = mysql_fetch_array($sql)){
 				echo "
 					  <form action='reserva.php' method='POST'>
 					  <div class='ida'>
				      <b>Ida -> </b>".$row['origen']."<b> -> </b>".$row['destino']."<b> -> ".$this->fida."</b>
				      <input type='hidden' value=".$row['origen']." name='origen'>
				      <input type='hidden' value=".$this->fida." name='fida'>
				       <input type='hidden' value=".$this->clase." name='clase'>
				      <input type='hidden' value=".$row['destino']." name='destino'>
				      <input type='hidden' value=".$row['cod_lista']." name='codigo'>
				      
					  </div>

					  <div class='vuelta'>
					  <b>Vuelta -> </b>".$row['destino']."<b> -> </b>".$row['origen']."<b> -> ".$this->fvuelta."</b>
					  <input type='hidden' value=".$this->fvuelta." name='fvuelta'>
					  </div>

					  <div class='hora'>
					  <b>Salida: </b>".$row['hora']."hs
					  <input type='hidden' value=".$row['hora']." name='hora'>
					  </div>

					  <div class='precio'>
					  <b>Precio: </b>$".$row['precioClase']."
					  <input type='hidden' value=".$row['precioClase']." name='precio'>
					  <p><input type='submit' id='reservar' value='Reservar'></p>
					  
					  </div>
					  </form>";
				}//while

 			}else{
 						echo "No se encontraron vuelos para esa fecha";
 						echo "<p><a href='index.php' id='atras'>Volver a buscar vuelos</a><p>";
 				 }
 			
 		}

}	



 ?>