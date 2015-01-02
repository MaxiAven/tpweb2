<?php 

$host = "localhost";
$user = "root";
$pass = "root";
$db = "aerolinea";

mysql_connect($host,$user,$pass) or die("Error al conectarse al servidor");

mysql_select_db($db) or die("Error al conectarse la base de datos");



 ?>