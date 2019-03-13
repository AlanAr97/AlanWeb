function msj(elemento){       
        if(document.getElementById('email').value==""){
            //alert('damn');
            document.getElementById('desplegar').innerHTML="Favor de ingresar un correo";
            document.getElementById('email').style.borderColor='#B02507';

        }else{
            var elemento = document.getElementById("mostrarE");
            elemento.style.display = 'block';
            document.getElementById('desplegar').innerHTML="";
            document.getElementById('cancelar').value="Regresar";
        }
   

        }

        function clean(){
            document.getElementById('email').style.borderColor='#E9E5E4';
        }

//Validaciones Registrar proyecto
 var nom_proy=document.getElementById('nom_proyecto').value,
        archivo=document.getElementById('archivo').value,
        fechaI=document.getElementById('fechaI').value,
        fechaF=document.getElementById('fechaF').value,
        recHum=document.getElementById('recHum').value,
        presupuesto = document.getElementById('presupuesto').value,
        nombreL=document.getElementById('nombreL').value;

function myFunction(){
    
   
if(document.getElementById('nom_proyecto').value==="" || document.getElementById('presupuesto').value===""){
    swal("Error","Alguno de los campos está vacío","error");

    decorarCajas();

  }else{
    if(document.getElementById('archivo').value===""){
        swal("Error","No se seleccionó ningún archivo","error");
            decorarCajas();
    }else{
        if(document.getElementById('fechaI').value==="" || document.getElementById('fechaF').value===""){
          swal("Error","No se especificó la(s) fecha(s)","error");
            decorarCajas();


        }else{
            document.getElementById("formulario").submit();   
        }
    }
    
  }
}

function decorarCajas(){
            if(document.getElementById('nom_proyecto').value===""){
            document.getElementById('nom_proyecto').style.borderColor="red";
            }else{
                document.getElementById('nom_proyecto').style.borderColor="#E9E5E4";
            }

            if(document.getElementById('presupuesto').value===""){
                document.getElementById('presupuesto').style.borderColor="red";
            }else{
                document.getElementById('presupuesto').style.borderColor="#E9E5E4";
            }

            if(document.getElementById('fechaI').value===""){
                document.getElementById('fechaI').style.borderColor="red";
            }else{
                document.getElementById('fechaI').style.borderColor="#E9E5E4";
            }

            if(document.getElementById('fechaF').value===""){
                document.getElementById('fechaF').style.borderColor="red";
            }else{
                document.getElementById('fechaF').style.borderColor="#E9E5E4";
            }
}