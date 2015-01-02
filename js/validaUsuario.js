function validaUsuario(){

	var origen = document.getElementById("origen");
	var destino = document.getElementById("destino");
	var ida = document.getElementById("ida");
	var fnac = document.getElementById("fnac");
	var dni = document.getElementById("dni");
	var error = document.getElementById("error");
	var error2 =document.getElementById("error2");
	var error3 =document.getElementById("error3");
	var error4 =document.getElementById("error4");
	var error5 =document.getElementById("error5");

	if(origen.value == "" && destino.value == "" && ida.value =="" && fnac.value=="" && dni.value==""){

		origen.style.border = "1px solid #B33A3A";
		error.innerHTML = '<i>*Complete el nombre</i>';

		destino.style.border = "1px solid #B33A3A";
		error2.innerHTML = '<i>*Complete el apellido</i>';

		ida.style.border = "1px solid #B33A3A";
		error3.innerHTML = '<i>*Complete el correo</i>';

		fnac.style.border = "1px solid #B33A3A";
		error4.innerHTML = '<i>*Complete la fecha </i>';

		dni.style.border = "1px solid #B33A3A";
		error5.innerHTML = '<i>*Complete el documento</i>';

		return false;
	}else{

/******Valida los campos de forma individual***********************/

			if(origen.value == "")
			{
				origen.style.border = "1px solid #B33A3A";
				error.innerHTML = '<i>*Complete el nombre</i>';
				return false;
			}

			if(destino.value == "")
			{
				destino.style.border = "1px solid #B33A3A";
				error2.innerHTML = '<i>*Complete el apellido</i>';
				return false;
			}

			if(ida.value == "")
			{
				ida.style.border = "1px solid #B33A3A";
				error3.innerHTML = '<i>*Complete el correo</i>';
				return false;
			}

			if(fnac.value == "")
			{
				fnac.style.border = "1px solid #B33A3A";
				error4.innerHTML = '<i>*Complete la fecha</i>';
				return false;
			}

			if(dni.value == "")
			{
				dni.style.border = "1px solid #B33A3A";
				error5.innerHTML = '<i>*Complete el documento</i>';
				return false;
			}
		}
}