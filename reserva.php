<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Pluma Lineas Aereas</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/reserva.css">
	<link rel="stylesheet" href="js/jquery-ui.css">
	<link rel="stylesheet" href="js/jquery-ui.theme.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/validaUsuario.js" type="text/javascript"></script>
	
</head>
<body>
	<div class="contenedor">

		<nav></nav>
	<div class="titulo">
	<div class="etiqueta">
		<p><i>Datos Personales</i></p>
	</div>
	</div>

	<div class="contenido">

		<div class="reserva">

		<form action="reservar.php" method="POST" name="busqueda" id="busqueda" onsubmit="return validaUsuario()">
			<div class="resumen">
			<?php 

			if(isset($_POST['fvuelta'])){

				$origen = $_POST['origen'];
				$destino = $_POST['destino'];
				$hora = $_POST['hora'];
				$precio = $_POST['precio'];
				$clase = $_POST['clase'];
				$fida = $_POST['fida'];
				$fvuelta = $_POST['fvuelta'];
				$lista = $_POST['codigo'];

				echo "<input type='hidden' name='precio' value=".$precio.">"; 
				echo "<input type='hidden' name='clase' value=".$clase.">";
				echo "<input type='hidden' name='lista' value=".$lista.">";
				echo "<input type='hidden' name='fida' value=".$fida.">";
				echo "<input type='hidden' name='fvuelta' value=".$fvuelta.">";

					echo "
						  <div id='ir'>
						  <p>Ida-> ".$origen."->  ".$destino." -> ".$fida."</p>
						  </div>

						  <div id='volver'>
						  <p>Vuelta-> ".$destino." -> hasta -> ".$origen." -> ".$fvuelta."</p>
						  </div>

						  <div id='hora'>
						  <p>Hora de salida -> ".$hora." hs</p>
						  </div>";

						 if($clase == 'precioEcono')
						 {
						 	echo "<div id='clase'>
						  		 <p>Clase -> Economy</p>
						 		 </div>";
						 }else{
						 		echo "<div id='clase'>
						  		 	  <p>Clase -> Primera</p>
						 		      </div>";
						 	  }

						  

						echo "<div id='precio'>
						  	<p>Precio -> $".$precio."</p>
						  </div>";
						}
						else{
							$origen = $_POST['origen'];
							$destino = $_POST['destino'];
							$hora = $_POST['hora'];
							$precio = $_POST['precio'];
							$clase = $_POST['clase'];
							$fida = $_POST['fida'];
							$lista = $_POST['codigo'];

							
						echo "<input type='hidden' name='precio' value=".$precio.">"; 
						echo "<input type='hidden' name='clase' value=".$clase.">";
						echo "<input type='hidden' name='lista' value=".$lista.">";
						echo "<input type='hidden' name='fida' value=".$fida.">";
						    

							echo "
								  <div id='ir'>
								  <p>Ida-> ".$origen."->".$destino."-> ".$fida."</p>
								  </div>

								 
								  <div id='hora'>
								  <p>Hora -> ".$hora."hs </p>
								  </div>";

								   if($clase == 'precioEcono')
									 {
									 	echo "<div id='clase'>
									  		 <p>Clase -> Economy</p>
									 		 </div>";
									 }else{
									 		echo "<div id='clase'>
									  		 	  <p>Clase -> Primera</p>
									 		      </div>";
									 	  }


								echo"  <div id='clase'>
								  	<p>Precio -> $".$precio."</p>
								  </div>";
							
						}
						 

			
 		?>
 		</div>
		<p id="error"></p>
		<p id="error2"></p>
		<p id="error3"></p>
		<p id="error4"></p>
		<p id="error5"></p>

			<label><i>Nombre:</i>
				<p><input type="text" name="nombre" id="origen"  placeholder="Nombre"></p>
				
			</label>
			<label><i>Apellido:</i>
				<p><input type="text" name="apellido" id="destino" placeholder="Apellido"></p>
				
			</label>
			<label><i>E-Mail:</i>
				<p><input type="text" name="mail" id="ida" placeholder="Correo electronico"></p>
			</label>

			<label><i>Fecha de Nacimiento:</i>
				<p><input type="date" name="fnac" id="fnac"></p>
			</label>
			
			<label><i>Tipo:</i>
				<p><select name="tipo" id="tipo">
					<option value="DNI">DNI</option>
					<option value="LE">LE</option>
				</select></p>
			</label>

			<label><i>Nro Documento:</i>
				<p><input type="text" name="dni" id="dni"></p>
			</label>
			
			
			<input type="submit" name="buscar" id="buscar" value="Reservar">
		</form>


		</div>
	</div>

	<div class="pie">
		
	</div>

	</div>


</body>
</html>

