<?php 


include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_bar.php");
include("cnx.php");

class ventasTotal{

		private $fechaInicio;
		private $fechaFin;

	function __construct($fechaInicio,$fechaFin){

		$this->fechaI = $fechaInicio;
		$this->fechaFin = $fechaFin;

	}

	function generaReporte(){

		
		$sql = "SELECT count(*) as CantidadVendido,p.fecha as fecha
				from reserva r join
				pago p on r.nro_pago = p.nro_pago join
				vuelo v on r.nro_vuelo = v.nro_vuelo join
				listavuelos lv on v.cod_lista = lv.cod_lista join
				aeropuerto a1 on a1.cod_aeropuerto = lv.cod_aero_origen join
				aeropuerto a2 on a2.cod_aeropuerto = lv.cod_aero_destino 
				where p.fecha between '$this->fechaI' and '$this->fechaFin'
				and r.estado like 'pago'
				group by p.fecha";

		
		$res = mysql_query($sql);

		while($row = mysql_fetch_array($res)){

			$datos[] = $row['CantidadVendido'];
			$labels[] = $row['fecha'];
		}
		//DEFINO FORMATO GENERAL
		$graph = new Graph(500,400,"auto");
		$graph->SetScale("textint");
		$graph->title->Set("Ventas Semanales");
		$graph->xaxis->title->Set("Fechas De Venta");
		$graph->xaxis->SetTickLabels($labels);
		$graph->yaxis->title->Set("Cantidad De Ventas");

		//INGRESO DATOS AL ARREGLO DE QUE VAN EN EL GRAFICO
		$barplot1 = new BarPlot($datos);

		//DATOS ESPECIFICOS
		$barplot1->SetFillGradient("#152B55","#4E638E",GRAD_HOR);

		$barplot1->SetWidth(30);

		$graph->Add($barplot1);
		$graph->Stroke();
		$graph->Stroke("IMG.PNG");
		

		
			}
}




 ?>
