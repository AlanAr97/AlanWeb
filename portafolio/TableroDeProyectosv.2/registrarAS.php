<?php
//Cookie de sesión.

class Foo { 
    public $desviacion;
    public $clave;
    
    
	function get_desviacion($desviacion){
		return $desviacion;
	}
	function get_clave($clave){
		return $clave;
	}
}
$foo = new Foo;

session_start(); // Se destruye cualquier 


	
		//Añadir el archivo de la conexion.
		

function mensaje_Guardado(){
	echo "<script language='javascript'>"; 
				echo "alert('Datos Guardados Correctamente');";
				
				echo "</script>"; 
}

function mensaje_usuario(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Revise los datos correctamente ya que no podran ser modificados');";
				echo "if (msj == false) {";
				echo "window.location='admin_registroavancesemanal.php';";
				echo "}";
				echo "</script>"; 
}

function mensaje_semaforojo(){
	echo "<script language='javascript'>"; 
				echo "window.location='admin_registroavancesemanal.php';";
				echo "</script>"; 
}

function mensaje_semaforoverde(){
	echo "<script language='javascript'>"; 
	
				
				echo "window.location='admonproyecto.php';";
				echo "</script>"; 
}

function mensaje_semaforo_amarillo(){
	echo "<script language='javascript'>"; 
				echo "window.location='admonproyecto.php';";
				echo "</script>"; 
}



function mensaje_campos(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Favor de llenar los campos.');";
				echo "if (msj == true) {";
				echo "window.location='admin_registroavancesemanal.php';";
				echo "}";
				echo "else {";
				echo "window.location='admonproyecto.php';";
				echo "}";
				echo "</script>"; 
}



	
		//Revisar que si haya información en los campos.
		//Sustituye  lo que se envió en el formulario para evitar cualquier intruso.
		$fechaI=$_POST['fechaI'];
		$Avancep=$_POST['Avancep'];
		$Avancer= $_POST['Avancer'];
		$Presupuestop=$_POST['Presupuestop'];
		$Presupuestor=$_POST['Presupuestor'];
		$Actividades=$_POST['Actividades'];
		$Actividadesa=$_POST['Actividadesa'];
		$Actividadese=$_POST['Actividadese'];
		$Actividadesr=$_POST['Actividadesr'];
		$ID_proyecto=($_POST['IDProyecto']);
		unset($_POST);
		//Con los puntos se concatena.
		include ('conexion_bd.php');
		if($fechaI!="" || $Avancep!="" || $Avancer!="" || $Presupuestop!="" || $Presupuestor!="" || $Actividades!="" || $Actividadesa!="" || $Actividadese!="" || $Actividadesr!=""){
		
		/*Registro de los datos en la BD*/
		
		
		
		$insertAvance=mysqli_query(conexion(),'insert into avance(Fechaavance, Avance_plan, Avance_real, Presupuesto_plan, Presupuesto_real, Act_realizadas, Act_atrasadas, Act_eject, Act_pendientes, Proyecto_id_Proyecto )values("'.$fechaI.'","'.$Avancep.'","'.$Avancer.'","'.$Presupuestop.'","'.$Presupuestor.'","'.$Actividades.'","'.$Actividadesa.'","'.$Actividadese.'","'.$Actividadesr.'","'.$ID_proyecto.'")');
		
		$id_preg = mysqli_insert_id(conexion()); 
		mensaje_usuario();
		mensaje_Guardado();
		$desviacion=$Avancep-$Avancer;
		include('ayudas.php');
		$b = new ayudas(); // $a es un objeto
			$b->set_desviacion($desviacion);
			
		$c = new ayudas(); // $a es un objeto
			$c->set_clave_proyecto($Clave_proyecto);
			
			
		if($desviacion<5 && $desviacion>0)
		{
			$_SESSION['semaf']="v";
			echo "<script>  window.location='admin_registroavancesemanal.php'; </script>";
		}
		if($desviacion<9 && $desviacion>5)
		{
			$_SESSION['semaf']="a";
			echo "<script>  window.location='admin_registroavancesemanal.php'; </script>";
		}
		if($desviacion>9)
		{
			$d = new ayudas(); // $a es un objeto
			$d->set_clave_avance($id_preg);
			$_SESSION['semaf']="r";
			echo "<script>  window.location='admin_registroavancesemanal.php'; </script>";
		}

	
		}else{
		//Si se intenta acceder a este archivo, sin autenticar, se redirige al punto de inicio.
		
			mensaje_campos();
	}
?>