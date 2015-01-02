function validaCampos(){

	var origen = document.getElementById("origen");
	var destino = document.getElementById("destino");
	var ida = document.getElementById("ida");
	var vuelta = document.getElementById("vuelta");
	var v = document.getElementById("v");
	var error = document.getElementById("error");
	var error2 =document.getElementById("error2");
	var error3 =document.getElementById("error3");
	var error4 =document.getElementById("error4");


	if(origen.value == "" && destino.value == "" && ida.value =="" ){

		origen.style.border = "1px solid #B33A3A";
		error.innerHTML = '<i>*Ingrese el origen</i>';

		destino.style.border = "1px solid #B33A3A";
		error2.innerHTML = '<i>*Ingrese el destino</i>';

		ida.style.border = "1px solid #B33A3A";
		error3.innerHTML = '<i>*Ingrese la ida </i>';
		error4.innerHTML = '<i>*Ingrese la vuelta </i>';
		vuelta.style.border = "1px solid #B33A3A";
		error4.innerHTML = '<i>*Ingrese la vuelta </i>';

		return false;
	}else{


			if(origen.value == ""){
				origen.style.border = "1px solid #B33A3A";
				error.innerHTML = '<i>*Ingrese el origen</i>';
				return false;
			}else{
					if(destino.value == ""){
					destino.style.border = "1px solid #B33A3A";
					error2.innerHTML = '<i>*Ingrese el destino</i>';
					return false;
					}else{

								if(ida.value == ""){
								ida.style.border = "1px solid #B33A3A";
								error3.innerHTML = '<i>*Ingrese la ida</i>';
								return false;
								}/*else{

										if(vuelta.value == ""){
											vuelta.style.border = "1px solid #B33A3A";
											error4.innerHTML = '<i>*Ingrese la vuelta</i>';
											return false;
										}else{
											
												if(v.style.display = 'none')
													{

														return false;											

													}
	
											}
							}*/

					}
				}
		 }

			
				






}