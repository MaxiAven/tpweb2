
			<?php 

			$origen = $_POST['origen'];
			$destino = $_POST['destino'];
			$ida = $_POST['ida'];
			$vuelta = $_POST['vuelta'];
			$clase = $_POST['clase'];


			

			if($vuelta != "")
			{

			/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/
			$fida = convertir_fecha($ida);
			$dia = dia_de_la_semana($fida);		
			/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/

					
			/*****Funcion que convierte la fecha de vuelta en formato año-mes-dia***/
			$fvuelta = convertir_fecha($vuelta);
			$dia2 = dia_de_la_semana($fvuelta);
			/*****Funcion que convierte la fecha de vuelta en formato año-mes-dia***/



				$claseAvion = buscarAvion($origen);

				$res =  mysql_fetch_array($claseAvion);
				echo $res['nro_avion'];

					
					if($res['nro_avion'] == 1 && $clase == 'precioPrimera'){

						echo "No hay vuelos en primera clase para este destino";

					}else{

					if($row >0){


					$query = busqueda_ida_vuelta($origen,$destino,$dia,$dia2,$clase);

					while ($row = mysql_fetch_array($query))
					{
						
						echo "<div class='ida'>
								<b>Ida -> </b>".$row['origen']."<b> -> </b>".$row['destino']."<b> -> ".$ida."</b>
							  </div>";

						echo "<div class='vuelta'>
								<b>Vuelta -> </b>".$row['destino']."<b> -> </b>".$row['origen']."<b> -> ".$vuelta."</b>
							  </div>";

						echo "<div class='hora'>
								<b>Salida: </b>".$row['hora']."hs
							 </div>";

						echo "<div class='precio'>
								<b>Precio: </b>$".$row['clase']."
								<p><input type='submit' id='reservar' value='Reservar'></p>
							  </div>";
					}

				}	

			}
				else{

					echo "No se encontraron vuelos";
				}
				
			}else{



			/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/
			$fida = convertir_fecha($ida);
			$dia = dia_de_la_semana($fida);		
			/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/

				

				$query = busqueda_ida($origen,$destino,$dia,$clase);
				

			while ($row = mysql_fetch_array($query))
					{
								echo "<div class='ida'>
								<b>Ida -> </b>".$row['origen']."<b> -> </b>".$row['destino']."<b> -> ".$ida."</b>
							  </div>";

							
								echo "<div class='hora'>
										<b>Salida: </b>".$row['hora']."hs
									 </div>";

							echo "<div class='precio2'>
									<b>Precio: </b>$".$row['clase']."
									<p><input type='submit' id='reservar' value='Reservar'></p>
								  </div>";
					}
			}


	 		?>