<?php
//Cookie de sesión.
session_start(); // Se destruye cualquier 


	
		//Añadir el archivo de la conexion.
		include ('conexion_bd.php');

function mensaje_Guardado(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Datos Guardados Correctamente');";
				echo "if (msj == true) {";
				echo "}";
				echo "</script>"; 
}

function mensaje_usuario(){
		echo "<script language='javascript'>"; 
				echo "var msj = confirm('Revise los datos correctamente ya que no podran ser modificados');";
				
				echo "</script>";
}


function mensaje_campos(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Favor de llenar los campos.');";
				echo "if (msj == true) {";
				echo "window.location='admin_registroavancesemanal.php';";
				echo "}";
				echo "</script>"; 
}
function redireccionar(){
	echo "<script language='javascript'>"; 
				
				echo "window.location='admonproyecto.php';";
				
				echo "</script>"; 
}

	
		//Revisar que si haya información en los campos.
		//Sustituye  lo que se envió en el formulario para evitar cualquier intruso.
		$fechaI=$_POST['fechaI'];
		
		$actividad= $_POST['actividad'];
		
		
		
		unset($_POST);
		//Con los puntos se concatena.
		if($fechaI!="" || $desviacion!="" || $actividad!=""){
			
			include('ayudas.php');
		
			
			
		/*Registro de los datos en la BD*/
		$guardarDatos=mysqli_query(conexion(), 'insert into planderemediacion(Desviacion,Act_realizar_plan,Fecha_limite_Avance,Avance_cve_Avance) values("'.$this->get_desviacion().'","'.$actividad.'","'.$fechaI.'","'.$this->get_clave_avance().'")');
			
		mensaje_usuario();
			mensaje_Guardado();
			redireccionar();

	
		}else{
		//Si se intenta acceder a este archivo, sin autenticar, se redirige al punto de inicio.
		
			mensaje_campos();
	}
?>