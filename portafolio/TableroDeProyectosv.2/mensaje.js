/*function msj(){
	alert('prieba');
	//var email=document.getElementById("email");

}*/

		function Validar(usuario, password)
		        {
		            $.ajax({
		                url: "validar.php",
		                type: "POST",
		                data: "usuario="+usuario+"&password="+password,
		                success: function(resp){
		                $('#resul').html(resp),
		                
		                    pass.value="",
		                    //document.getElementById('usuario').style.borderColor='#B02507';
		                    pass.style.borderColor='#B02507';
		                }       
		            });
		}

        function clean(){
           // document.getElementById('usuario').style.borderColor='#E9E5E4';
            pass.style.borderColor='#E9E5E4';
        }


