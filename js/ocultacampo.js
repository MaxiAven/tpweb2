function ocultarCampo() {
        element = document.getElementById("vuelta");
        check = document.getElementById("volver");
        error4 =document.getElementById("error4");

        if (check.checked) {
            element.style.display='none';
             //element.value='';
            document.getElementById("v").style.display='none';
            error4.style.display = 'none';

        }
        else {
            element.style.display='block';
            document.getElementById("v").style.display='inline-block';
        }


    }
