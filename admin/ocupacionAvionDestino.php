<?php 
include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_bar.php");
include("cnx.php");

class ocupacionAvionDestino{


	private $avion;
	private $provincia;

	function __construct($avion,$provincia){

		$this->avion = $avion;	
		$this->provincia = $provincia;

	}


	function reporteOcupacion(){


		$sql = "SELECT count(r.asiento) as asientosTotales,a.nro_avion as Avion
				FROM reserva r join vuelo v
				on r.nro_vuelo = v.nro_vuelo join
				listavuelos lv on v.cod_lista = lv.cod_lista join
				avion a on a.nro_avion = lv.nro_avion join
				aeropuerto ae on lv.cod_aero_destino = ae.cod_aeropuerto
				where a.nro_avion = '".$this->avion."'
				and ae.provincia like '%".$this->provincia."%'";

			$res = mysql_query($sql);

		while($row = mysql_fetch_array($res)){

			$datos[] = $row['asientosTotales'];
			$labels[] = $row['Avion'];
		}
		//DEFINO FORMATO GENERAL
		$graph = new Graph(500,400,"auto");
		$graph->SetScale("textint");
		$graph->title->Set("Ocupación por avión y destino");
		$graph->xaxis->title->Set("Nro Avion");
		$graph->xaxis->SetTickLabels($labels);
		$graph->yaxis->title->Set("Ocupación");

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