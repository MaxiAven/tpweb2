<?php 
include_once 'autobusqueda.php';


$aero = new autobusqueda();

echo json_encode($aero->buscarAero($_GET['term']));



?>