<?php 



			include ('fpdf.php');

			$Nreserva = $_GET['n'];

			class PDF extends FPDF
			{
			}

			//DECLARACION DE LA HOJA
			$pdf=new PDF('P','mm','A4');
			$pdf->SetMargins(15,5);
			$pdf->AliasNbPages();
			$pdf->AddPage();

				//TITULO
			$pdf -> SetTextColor(0x00,0x00,0x00);
			$pdf -> SetFont("Arial","B",12);
			$pdf -> Cell(0,5,'LINEAS AEREAS PLUMA - COMPROBANTE DE RESERVA',0,1,'C');
			$pdf->Line(15,20,190,20);
			$pdf->Ln(14);

			//DATOS CONECCION
			include("cnx.php");

			//MUESTRO LOS DATOS
			

			$sql = "SELECT p.nombre as nombre ,p.apellido as apellido ,a1.nombre as aero_origen,a2.nombre as aero_destino,
			v.fecha_ida as ida ,v.fecha_vuelta as vuelta ,lv.hora as hora,r.precio as precio,r.nro_reserva ,a1.ciudad ciudad1,
			a2.ciudad ciudad2
					FROM pasajero p join 
					reserva r on p.dni = r.dni join
					vuelo v on r.nro_vuelo = v.nro_vuelo join
					listavuelos lv on v.cod_lista = lv.cod_lista join
					aeropuerto a1 on a1.cod_aeropuerto = lv.cod_aero_origen join
					aeropuerto a2 on a2.cod_aeropuerto = lv.cod_aero_destino 
					WHERE r.nro_reserva = '$Nreserva'";

			$rs = mysql_query($sql);


			while($row = mysql_fetch_array($rs)){

				$pdf->Cell(100,12,"Numero de Reserva: ".$row['nro_reserva']);
				//$pdf->Cell(100,12,"Fecha emicion: ".$row['fecha']);
				//$pdf->Line(35,48,190,48);
				$pdf->Ln(14);
				$pdf->Cell(100,12,"Nombre: ".$row['nombre']);
				$pdf->Cell(90,12,"Apellido: ".$row['apellido']);
				//$pdf->Line(35,48,190,48);
				$pdf->Ln(10);
				$pdf->Cell(100,12,"Aeropuerto de salida: ".$row['aero_origen']."(".$row['ciudad1'].")");
				//$pdf->Line(35,56,190,56);
				$pdf->Ln(10);
				if($row['aero_destino'] != '')
				{
					$pdf->Cell(100,12,"Aeropuerto de destino: ".$row['aero_destino']."(".$row['ciudad2'].")");
					//$pdf->Line(35,64,190,64);
					$pdf->Ln(10);
				}

				$pdf->Cell(100,12,"Fecha de Ida: ".$row['ida']);
				if($row['vuelta'] != ''){
					$pdf->Cell(100,12,"Fecha de Vuelta: ".$row['vuelta']);
					//$pdf->Line(35,72,190,72);
					$pdf->Ln(10);	
				}
				
				$pdf->Cell(100,12,"Hora de salida: ".$row['hora']);
				$pdf->Line(15,80,200,80);
				$pdf->Ln(14);
				$pdf->Cell(100,12,"Precio Total: $".$row['precio']);
				//$pdf->Line(35,88,190,88);
				//$pdf->Ln(14);

			}


			$pdf->Output('comprobanteReserva.pdf','D');

		
			

?>
