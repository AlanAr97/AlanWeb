<?php 
session_start();
	include 'conexion_bd.php';


	$nombre=mysqli_real_escape_string($conexion, $_POST['nombre']);
	$email=mysqli_real_escape_string($conexion, $_POST['email']);
	$mensaje=mysqli_real_escape_string($conexion, $_POST['mensaje']);
	
	if(!empty($nombre) && !empty($email) && !empty($mensaje)){
	//Insertar registros
	$insertContacto=mysqli_query($conexion,'insert into comentarios(nombre_coment, email_coment, comentario) values ("'.$nombre.'", "'.$email.'", "'.$mensaje.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error($conexion));
	$_SESSION['estado']='1';
	echo " <script>  window.location='contacto.php'; </script>";

		mysqli_close($conexion);
	}else{
		$_SESSION['estado']='2';
	echo " <script>  window.location='contacto.php'; </script>";
	}
		
?>