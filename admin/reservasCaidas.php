<?php 
include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_bar.php");
include("cnx.php");

class reservasCaidas{


	private $finicial;
	private $ffinal;


	function __construct($finicial,$ffinal){

		$this->finicial = $finicial;
		$this->ffinal = $ffinal;
	}


	function reporteCaidas(){

		$sql = "SELECT count(*) as ReservasCaidas,v.fecha_ida as fecha
				FROM reserva r join
				vuelo v on r.nro_vuelo = v.nro_vuelo
				where r.estado like 'reservado'
				and v.fecha_ida between '".$this->finicial."' and '".$this->ffinal."'";

		$rs = mysql_query($sql);

		while($row = mysql_fetch_array($rs)){

			$datos[] = $row['ReservasCaidas'];
			$labels[] = $row['fecha'];
		}
		//DEFINO FORMATO GENERAL
		$graph = new Graph(500,400,"auto");
		$graph->SetScale("textint");
		$graph->title->Set("Reservas Caidas");
		$graph->xaxis->title->Set("Fechas De Reserva");
		$graph->xaxis->SetTickLabels($labels);
		$graph->yaxis->title->Set("Cantidad Caidas");

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