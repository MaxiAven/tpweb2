<?php 


include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_bar.php");
include("cnx.php");

class ventasTotalCategoria{

		private $fechaInicio;
		private $fechaFin;
		private $categoria;
		private $prov;
		

	function __construct($fechaInicio,$fechaFin,$categoria,$prov){

		$this->fechaI = $fechaInicio;
		$this->fechaFin = $fechaFin;
		$this->categoria = $categoria;
		$this->prov = $prov;
		

	}

	function generaReporte(){

		
		$sql = "SELECT count(*) as CantidadVendido,a2.provincia as destino
				from reserva r join
				pago p on r.nro_pago = p.nro_pago join
				vuelo v on r.nro_vuelo = v.nro_vuelo join
				listavuelos lv on v.cod_lista = lv.cod_lista join
				aeropuerto a1 on a1.cod_aeropuerto = lv.cod_aero_origen join
				aeropuerto a2 on a2.cod_aeropuerto = lv.cod_aero_destino 
				where p.fecha between '$this->fechaI' and '$this->fechaFin'
				and r.categoria like '%$this->categoria%'
				and r.estado like 'pago'
				and lv.cod_lista IN (select lv.cod_lista
									 from aeropuerto a join
									 listavuelos lv on a.cod_aeropuerto = lv.cod_aero_destino 
									 where a.provincia like '%$this->prov%'
									)";

		
		$res = mysql_query($sql);

		while($row = mysql_fetch_array($res)){

			$datos[] = $row['CantidadVendido'];
			$labels[] = $row['destino'];
		}
		//DEFINO FORMATO GENERAL
		$graph = new Graph(500,400,"auto");
		$graph->SetScale("textint");
		$graph->title->Set("Ventas Semanales");
		$graph->xaxis->title->Set("Destinos");
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
