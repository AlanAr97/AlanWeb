var email=document.getElementById('email');
		function ValidarC(email)
		        {
		            $.ajax({
		                url: "validarCorreo.php",
		                type: "POST",
		                data: "email="+email,
		                success: function(resp){
		                $('#desplegar').html(resp),
		                
		                    email.value="",
		                    //document.getElementById('usuario').style.borderColor='#B02507';
		                    
		                }       
		            });
		}
        

