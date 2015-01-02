<?php 
include_once ("cnx.php");
include_once("funciones/funcionesVuelos.php");
include_once ('autoload.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/busqueda.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	<link rel="stylesheet" href="js/jquery-ui.structure.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/datepicker.js" type="text/javascript"></script>
	<script src="js/ocultacampo.js" type="text/javascript"></script>
	
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	

	
		<div class='titulo'>
			<p>Vuelos Encontrados</p>
		</div>

		<div class="busqueda">
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

				
				$claseAvion = buscarAvion($origen,$destino);
				$res =  mysql_fetch_array($claseAvion);
				
				
				
				
				if($res['nro_avion'] == 1 && $clase == 'precioPrimera'){

						echo "No hay vuelos en primera clase para este destino";
						echo "<br><a href='index.php'>Volver a buscar vuelos</a>";

					}else{
							$vuelos = new BuscaIdaVuelta($origen,$destino,$dia,$dia2,$clase,$ida,$vuelta);
							$vuelos -> ida_vuelta();
						}
		
			}else{

						/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/
				$fida = convertir_fecha($ida);
				$dia = dia_de_la_semana($fida);		
				/*****Funcion que convierte la fecha de ida en formato año-mes-dia***/
			
				$claseAvion = buscarAvion($origen,$destino);
				$res =  mysql_fetch_array($claseAvion);

				if($res['nro_avion'] == 1 && $clase == 'precioPrimera'){

						echo "No hay vuelos en primera clase para este destino";
						echo "<br><a href='index.php'>Volver a buscar vuelos</a>";

					}else{
							$vuelos2 = new BuscaIda($origen,$destino,$dia,$clase,$ida);
							$vuelos2 -> ida();
						}

			}	


		?>	

</div>




	<div class="pie">
		
	</div>

	</div>
	


</body>
</html>


