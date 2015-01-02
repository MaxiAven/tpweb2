function validaTarjeta(){

	var tarjeta = document.getElementById("tarjeta");
	var Ntarjeta = document.getElementById("Ntarjeta");
	var mes = document.getElementById("mes");
	var Ntitular = document.getElementById("Ntitular");

	/**********************ID DIVS MSJ ERROR****************************/
	var vtarjeta = document.getElementById("vtarjeta");
	var ttarjeta = document.getElementById("t-tarjeta");
	var vencimiento = document.getElementById("vencimiento");
	var titular = document.getElementById("titular");


	if(tarjeta.value == ""){

		tarjeta.style.border = "1px solid #B33A3A";
		ttarjeta.innerHTML = '<i>*Seleccione tipo de tarjeta</i>';
		return false;
	}

	if(Ntarjeta.value == ""){

		Ntarjeta.style.border = "1px solid #B33A3A";
		vtarjeta.innerHTML = '<i>*Ingrese el Número</i>';
		return false;
	}

	if(mes.value == ""){

		mes.style.border = "1px solid #B33A3A";
		vencimiento.innerHTML = '<i>*Seleccione el vencimiento</i>';
		return false;
	}


	if(Ntitular.value == ""){

		Ntitular.style.border = "1px solid #B33A3A";
		titular.innerHTML = '<i>*Ingrese Nombre</i>';
		return false;
	}


	

/****************************Valida numero de tarjeta*****************************************************/
			var visa = '^4[0-9]{12}(?:[0-9]{3})?$';//4029445021477407
			var mc = '^5[1-5][0-9]{14}$';//5280934283171080
			var amex = '^3[47][0-9]{13}$';//345936346788903

		if(tarjeta.value == 'visa' && Ntarjeta.value.match(visa)){

			
			return true;
			
		}else{

				if(tarjeta.value == 'master' && Ntarjeta.value.match(mc)){

				return true;
			
				}else{
						
						if(tarjeta.value == 'american' && Ntarjeta.value.match(amex)){
						return true;

						}else{
								Ntarjeta.style.border = "1px solid #B33A3A";
								vtarjeta.innerHTML = '<i>*Número incorrecto </i>';
								return false;
							 }
					}
			 }




	

	

}