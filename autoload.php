<?php 
function __autoload($clase){
	if(file_exists("clases/".$clase.".php")){
	include_once ("clases/".$clase.".php");
	}
	else{
		 echo "No existe clase";
	}
	
	
}
?>
