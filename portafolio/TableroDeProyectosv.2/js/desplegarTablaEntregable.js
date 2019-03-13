//Habilitar botones de Agregar.
function desplegarL(){
	
	if(document.getElementById('lista').checked==true){
			document.getElementById('btncajaLista').disabled=false;
			document.getElementById('btncajaFase').disabled=true;
				
		}else {
			document.getElementById('btncajaFase').disabled=false;
			document.getElementById('btncajaLista').disabled=true;
		}
	}


//MostrarRiesgo
function mostrarRiesgo(){
    document.getElementById('riesgos').style.display='block';

    
}
//Quitar Riesgo   
    function quitarRiesgo(){

        document.getElementById('riesgos').style.display='none';
        document.getElementById('nom_riesgo').value="";
        document.getElementById('impacto').value="";
        document.getElementById('mitigacion').value="";

    }

    //Añadir cajas dinámicamente
    var posicionCampo = 1; 
function agregarCajaL() {
    
    nuevaFila = document.getElementById("tablaLista").insertRow(-1);
    nuevaFila.id = posicionCampo;  
    nuevaCelda = nuevaFila.insertCell(-1); 
    nuevaCelda.innerHTML ="<td><input type='text' size='35' placeholder='Lista " + posicionCampo + "' name='nombreL[" + posicionCampo + "]' id='nombreL'></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  
    /*nuevaCelda.innerHTML = "<td><input type='text' size='10' name='web[" + posicionCampo + "]'></td>";
    nuevaCelda = nuevaFila.insertCell(-1);  
  
    nuevaCelda.innerHTML = "<td><input type='text' size='10' name='correo[" + posicionCampo + "]'></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  */

    nuevaCelda.innerHTML = "<td><a onclick='eliminarUsuario(this)' class='button is-danger is-small'><span class='icon is-large'><i class='fa fa-trash fa-lg'></i></span></a></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  
  
     
     posicionCampo++;  

}

 var posicionCampoF = 1; 
function agregarCajaF() {
    
    nuevaFila = document.getElementById("tablaFase").insertRow(-1);
    nuevaFila.id = posicionCampoF;  
    nuevaCelda = nuevaFila.insertCell(-1); 
    nuevaCelda.innerHTML ="<td><input type='text' size='30' placeholder='Nombre " + posicionCampoF + "' name='nombreF[" + posicionCampoF + "]'></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  
    nuevaCelda.innerHTML = "<td><input type='text' size='30' placeholder='Fase " + posicionCampoF + "' name='fase[" + posicionCampoF + "]'></td>";
    nuevaCelda = nuevaFila.insertCell(-1);  
  
   /* nuevaCelda.innerHTML = "<td><input type='text' size='10' name='correo[" + posicionCampo + "]'></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  */

    nuevaCelda.innerHTML = "<td><a onclick='eliminarUsuario(this)' class='button is-danger is-small'><span class='icon is-large'><i class='fa fa-trash fa-lg'></i></span></a></td>";  
    nuevaCelda = nuevaFila.insertCell(-1);  
  
     
     posicionCampoF++;  

}

function eliminarUsuario(obj) {  
  
    var oTr = obj;  
  
    while(oTr.nodeName.toLowerCase() != 'tr') {  
  
        oTr=oTr.parentNode;  
  
    }  
  
    var root = oTr.parentNode;  
  
    root.removeChild(oTr);  
  
}  

//campos requeridos
