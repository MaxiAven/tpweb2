<?php 

function convertir_fecha($fecha)
	{
		$auxFecha = $fecha;
		$auxFecha = explode("/", $auxFecha);
		$dia_auxFecha = $auxFecha[0];
		$mes_auxFecha = $auxFecha[1];
		$ano_auxFecha = $auxFecha[2];
		$fecha = "$ano_auxFecha-$mes_auxFecha-$dia_auxFecha";

		return $fecha;
	}



 	function dia_de_la_semana($fecha) {
		$dias_sem = array("d", "l", "m", "x", "j", "v", "s");
		$arraydate = explode ("-", $fecha);
		$dateunix = mktime(0,0,0,$arraydate[1],$arraydate[2],$arraydate[0]);
		$dia = date("w", $dateunix);
		return $dias_sem[$dia];
	}


/*******FUNCION QUE SELECCIONA LOS VUELOS IDA/Vuelta DE LA BUSQUEDA********/

function busqueda_ida_vuelta($o,$d,$i,$v,$c){

	$sql = "SELECT a1.ciudad origen ,a2.ciudad destino,lv.hora,lv.".$c." clase
				FROM listaVuelos lv JOIN 
				aeropuerto a1 on lv.cod_aero_origen = a1.cod_aeropuerto JOIN
				aeropuerto a2 on lv.cod_aero_destino = a2.cod_aeropuerto
 				WHERE a1.nombre like '%".$o."%' 
 				AND a2.nombre like '%".$d."%'
 				AND lv.diasVuelo like '%".$i."%'
 				AND lv.diasVuelo like '%".$v."%'";
 				


		$consulta = mysql_query($sql);

		return $consulta;

}

/*******FUNCION QUE SELECCIONA LOS VUELOS IDA DE LA BUSQUEDA********/
function busqueda_ida($o,$d,$i,$c){

	$sql = "SELECT a1.ciudad origen ,a2.ciudad destino,lv.hora,lv.".$c." clase
				FROM listaVuelos lv JOIN 
				aeropuerto a1 on lv.cod_aero_origen = a1.cod_aeropuerto JOIN
				aeropuerto a2 on lv.cod_aero_destino = a2.cod_aeropuerto
 				WHERE a1.nombre like '%".$o."%' 
 				AND a2.nombre like '%".$d."%'
 				AND lv.diasVuelo like '%".$i."%'";

		$consulta = mysql_query($sql);

		return $consulta;

}


function buscarAvion($ori,$dest){

	$cons = "SELECT * 
			 FROM aeropuerto a1 join 
			 listavuelos lv on a1.cod_aeropuerto = lv.cod_aero_origen join
			 aeropuerto a2 on a2.cod_aeropuerto = lv.cod_aero_destino
			 WHERE a1.nombre like '%".$ori."%'
			 AND a2.nombre like '%".$dest."%' ";
	


	$resultado = mysql_query($cons);
	return $resultado;
}

/*para saber cuantos asientos x avion-Nadia- */

function buscar_asientos($ndoc,$nres)
{
	if($ndoc)
	{
	$sql="SELECT av.capacidadEcono, av.filasEcono, av.columnasEcono, av.columnaPrimera,lv.hora,re.precio,
	av.filasPrimera,av.capacidadPrimera,re.categoria,pas.nombre, pas.apellido,re.nro_reserva, v.nro_vuelo 
	FROM pasajero pas join reserva re on pas.dni=re.dni join
	vuelo v on v.nro_vuelo=re.nro_vuelo join listavuelos lv on v.cod_lista= lv.cod_lista join avion av
	on lv.nro_avion=av.nro_avion where pas.dni= ".$ndoc." ";
	}
	else
	{
		$sql="SELECT av.capacidadEcono, av.filasEcono, av.columnasEcono, av.columnaPrimera,lv.hora,re.precio,
	av.filasPrimera,av.capacidadPrimera,re.categoria,pas.nombre, pas.apellido, v.nro_vuelo, re.nro_reserva 
	FROM pasajero pas join reserva re on pas.dni=re.dni join
	vuelo v on v.nro_vuelo=re.nro_vuelo join listavuelos lv on v.cod_lista= lv.cod_lista join avion av
	on lv.nro_avion=av.nro_avion where re.nro_reserva= ".$nres." ";

	}


	$resultado = mysql_query($sql);

	return $resultado;
}



function insertar_asiento($ndoc,$reserva,$asiento)
{
 

if($ndoc)
	{
	$sql="SELECT * FROM pasajero pas join reserva re on pas.dni=re.dni join
	vuelo v on v.nro_vuelo=re.nro_vuelo join listavuelos lv on v.cod_lista= lv.cod_lista join avion av
	on lv.nro_avion=av.nro_avion where pas.dni= ".$ndoc."";
	}
	else
	{
	$sql="SELECT *	FROM pasajero pas join reserva re on pas.dni=re.dni join
	vuelo v on v.nro_vuelo=re.nro_vuelo join listavuelos lv on v.cod_lista= lv.cod_lista join avion av
	on lv.nro_avion=av.nro_avion where re.nro_reserva= ".$reserva." ";

	}
	$resultado = mysql_query($sql);

	while($row=mysql_fetch_array($resultado))
	{
		$sql2="UPDATE reserva SET asiento='".$asiento."' WHERE nro_reserva='".$row['nro_reserva']."'";
		$rs = mysql_query($sql2);
	}


	/*if(mysql_num_rows($resultado))
	{
		

		//$asiento=$row['asiento'];

		

	//	$sql="UPDATE reserva SET asiento='".$asiento."' WHERE reserva.dni=".$ndoc;

	/*$q = "UPDATE tabla1 set nombre='".$NOMBRE."', edad=".$EDAD.", estatura=".$ESTATURA." where clave=".$CLAVE; 
		 - See more at: http://www.programacionfacil.com/php/update_sql#sthash.49DItUwy.dpuf
	*/



	}

	//return $resultado;



 ?>




