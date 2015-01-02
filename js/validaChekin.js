function validaReserva(){

	var origen = document.getElementById("origen");
	var destino = document.getElementById("destino");
	var error = document.getElementById("error");
	var error2 =document.getElementById("error2");


	if(origen.value == "" && destino.value == "")
	{
		origen.style.border = "1px solid #B33A3A";
		error.innerHTML = '<i>*Complete el campo</i>';

		destino.style.border = "1px solid #B33A3A";
		error2.innerHTML = '<i>*Complete el campo</i>';

		return false;
	}
}


function  ValidaDni(){


	var origen2 = document.getElementById("origen2");
	var destino3 = document.getElementById("destino3");
	var error3 = document.getElementById("error3");
	var error4 =document.getElementById("error4");


	if(origen2.value == "" && destino3.value == "")
	{
		origen2.style.border = "1px solid #B33A3A";
		error3.innerHTML = '<i>*Complete el campo</i>';

		destino3.style.border = "1px solid #B33A3A";
		error4.innerHTML = '<i>*Complete el campo</i>';

		return false;
	}

}