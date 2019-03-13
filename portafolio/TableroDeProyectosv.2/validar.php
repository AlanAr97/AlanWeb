<?php
//Cookie de sesión.
session_start(); // Se destruye cualquier 


	
		//Añadir el archivo de la conexion.
		include ('conexion_bd.php');

		//Sustituye  lo que se envió en el formulario para evitar cualquier intruso.
		$nomUsuario=mysqli_real_escape_string(conexion(), $_POST['usuario']);
		$password=mysqli_real_escape_string(conexion(), $_POST['password']);
		unset($_POST);
		//Revisar que si haya información en los campos.
		//Con los puntos se concatena.
		if($nomUsuario!="" || $password!=""){
		
		//$comprobacionUsuario='select *from usuarios where nom_user="'.$nomUsuario.'"';
		//Utilización de objetos; Se usa el apuntador "->" para ejecutar la consulta.
		/*$comprobacion=conexion()->query($comprobacionUsuario);*/
		
		$consultaUser=	mysqli_query(conexion(), 'select Login_user from usuario where Login_user="'.$nomUsuario.'"');		
		$recoger_datoUser=mysqli_fetch_assoc($consultaUser);
		$comprobacion=$recoger_datoUser['Login_user'];



		//Verificar si los intentos en la bd son iguales a 3
		$consultaIntentos=	mysqli_query(conexion(), 'select intentos from usuario where Login_user="'.$nomUsuario.'"');		
		$recoger_datoIntentos=mysqli_fetch_assoc($consultaIntentos);
		$numIntentos=$recoger_datoIntentos['intentos'];
		if($numIntentos>=2){
			echo '<script>location.href = "perfil_bloqueado.php"</script>';
		}
		if($comprobacion==$nomUsuario){
			//$comprobacionPassword ='select password from usuarios where nom_user="'.$_POST['usuario'].'"';
			$consulta_BD=mysqli_query(conexion(), 'select Password_user from usuario where Login_user="'.$nomUsuario.'"');
			//Se hace una función para poder recoger la contraseña.
			$recoger_dato=mysqli_fetch_assoc($consulta_BD);
			//Password_verify funcion que comprueba si esta bien la contraseña (devuélve booleano)
			$getContraseña=$recoger_dato['Password_user'];
			//$comprobacion_pass=password_verify($password, $recoger_dato['password']);
			//$comprobacion2=$conexion->query($comprobacionPassword);

			
			$consultaRolBD=	mysqli_query(conexion(), 'select Rol_user from usuario where Login_user="'.$nomUsuario.'"');		
					$recoger_datoRol=mysqli_fetch_assoc($consultaRolBD);
					$rol_user=$recoger_datoRol['Rol_user'];	
					$_SESSION['rol']=$rol_user;
				
			if($getContraseña==$password){
				if($numIntentos<3){

					$consultaNomBD=	mysqli_query(conexion(), 'select Nom_rh from usuario, recursoh where usuario.Recursoh_id_Rh=recursoh.id_Rh and Login_user="'.$nomUsuario.'"');			
					$recoger_datoNom=mysqli_fetch_assoc($consultaNomBD);
					$nombreCompleto=$recoger_datoNom['Nom_rh'];
					$_SESSION['nombree']= $nombreCompleto;


					//Obtener Id de Rh
					$consultaIdRh=	mysqli_query(conexion(), 'select id_Rh from usuario, recursoh where usuario.Recursoh_id_Rh=recursoh.id_Rh and Login_user="'.$nomUsuario.'"');			
					$recoger_idRh=mysqli_fetch_assoc($consultaIdRh);
					$idRecHum=$recoger_idRh['id_Rh'];
					$_SESSION['idRH']= $idRecHum;


					

					$consultaNomBD=	mysqli_query(conexion(), 'update usuario set intentos="0" where Login_user="'.$nomUsuario.'"');
					//header ('location: index.php');

					if($_SESSION['rol']=='Administrador de Sistema'){
					echo '<script>location.href = "admonsistema.php"</script>';
					}else if($_SESSION['rol']=='Administrador de Proyecto'){
						echo '<script>location.href = "admonproyecto.php"</script>';
					}else if($_SESSION['rol']=='Gerente de Proyectos'){
						echo '<script>location.href = "gerenteproyectos.php"</script>';
					}else if($_SESSION['rol']=='Lider de Proyecto'){
						echo '<script>location.href = "liderproyecto.php"</script>';
					}else if($_SESSION['rol']=='Desarrollador'){
						echo '<script>location.href = "desarrollador.php"</script>';
					}
				exit;

				}else{
					echo '<script>location.href = "perfil_bloqueado.php"</script>';
				}
			}else{
				$consultaNomBD=	mysqli_query(conexion(), 'update usuario set intentos=intentos+1 where Login_user="'.$nomUsuario.'"');	

				if($rol_user=='Administrador de Sistema'){
					$setZero= mysqli_query(conexion(), 'update usuario set intentos=0 where Login_user="'.$nomUsuario.'"');
				}

				 echo '<span>Usuario y/o clave incorrectos.</span>';

				// mensaje_pass();

				
				//print 'Los datos son incorrectos. Favor de verificar. <br> <a href="./">Volver</a>';	
			}
		}else{
				//mensaje_usuario();
			 echo '<span>Usuario y/o clave incorrectos.</span>';
			//print 'No se encontró  el registro. <br> <a href="./">Volver</a>';
		}
	}else{
		//Si se intenta acceder a este archivo, sin autenticar, se redirige al punto de inicio.
			echo '<span>Favor de llenar los campos.</span>';
			//mensaje_campos();
	}
?>