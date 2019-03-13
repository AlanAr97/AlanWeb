<?php
session_start(); // sesión iniciada 
//Añadir el archivo de la conexion.
include ('conexion_bd.php');

$nom_proyecto = $_POST['nom_proyecto'];
$fechaI = $_POST['fechaI'];
$fechaF = $_POST['fechaF'];
$presupuesto =$_POST['presupuesto'];
$archivooo =$_POST['archivooo'];
$nombreL=$_POST['nombreL'];
$nombreF=$_POST['nombreF'];
$fase=$_POST['fase'];
$listaRadio=$_POST['lista'];
$faseRadio=$_POST['faseRadio'];
$i=0;
$j=0;
$contador = 0;
//Registrar riesgo
$nom_riesgo = $_POST['nom_riesgo'];
$ocurrencia= $_POST['ocurrencia'];
$impacto = $_POST['impacto'];
$mitigacion = $_POST['mitigacion'];

//recursos
$recursoH=$_POST['recHum'];
$recursoE=$_POST['recEq'];
$recursoM=$_POST['recMat'];
$recursoS=$_POST['recSw'];


//subir archivo
$nombreArchivo =$_FILES['archivo']['name'];
$ruta=$_FILES['archivo']['tmp_name'];
$tipoFile = $_FILES['archivo']['type'];
$destino="archivos/".$nombreArchivo;

//Condiciones de validación
	if(!empty($nom_proyecto)  && !empty($fechaI)  && !empty($fechaF) && !empty($presupuesto)){
		if(!empty($nombreArchivo)){
			if($tipoFile == "application/pdf" || $tipoFile == "application/msword" ||$tipoFile=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $tipoFile == "application/vnd.ms-project"){
				if(copy($ruta, $destino)){
					if(!empty($_POST['recHum'])){
						if(!empty($_POST['recEq']) || !empty($_POST['recMat']) || !empty($_POST['recSw'])){
									if(!empty($_POST['nombreL']) || !empty($_POST['nombreF']) || !empty($_POST['fase'])){
										echo $fase[1];
										//Hasta aquí si se aprueba todo, ejecuta la función que inserta en las tablas. 
										$consultaProyecto=	mysqli_query(conexion(), 'select Nom_proy from proyecto where Nom_proy="'.$nom_proyecto.'"');
										$recoger_proyecto=mysqli_fetch_assoc($consultaProyecto);
										$proyectoo=$recoger_proyecto['Nom_proy'];	
										if($proyectoo!=$nom_proyecto){
										$insertProyecto=mysqli_query(conexion(),'insert into proyecto(Nom_proy, Plan_trabajo, Fechainiciop, Fechafinp, Presupuestoplan) values ("'.$nom_proyecto.'", "'.$nombreArchivo.'" , "'.$fechaI.'", "'.$fechaF.'", "'.$presupuesto.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error(conexion()));

	$consultaProy=	mysqli_query(conexion(), 'select id_Proyecto from proyecto where Nom_proy="'.$nom_proyecto.'"');	
	$recoger_datoProy=mysqli_fetch_assoc($consultaProy);
	$proyecto=$recoger_datoProy['id_Proyecto'];

		}else{ 
			$_SESSION['estado']="11";
			echo "<script>  window.location='admin_registro.php'; </script>";

		}

	//Registrar Recurso Humano
	foreach($recursoH as $selected){
		$insertRecHum=mysqli_query(conexion(),'insert into recursoh_has_proyecto(RecursoH_id_Rh, Proyecto_id_Proyecto) VALUES("'.$selected.'", "'.$proyecto.'")') or die('No se pudo registrar el proyecto  <br>'.mysqli_error(conexion()));;
		//Poner contador número de proyectos.

		$actualizarProyectos=	mysqli_query(conexion(), 'update recursoh set Proyectos_actuales=Proyectos_actuales+1 where Id_rh="'.$selected.'"');
	}

	 	//Registrar Equipo
	while($recursoE[$contador] != ''){ 
		$updateRecEq=mysqli_query(conexion(),'update equipo set Proyecto_id_proyecto="'.$proyecto.'" where id_Equipo="'.$recursoE[$contador].'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));; 
		$contador++; 
	}

	//Registrar Material
	foreach($recursoM as $selected3){
		$updateRecMat=mysqli_query(conexion(),'update material set Proyecto_id_proyecto="'.$proyecto.'" where id_Material="'.$selected3.'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));;
	}

	//Registrar Software
	foreach($recursoS as $selected4){
		$insertRecSw=mysqli_query(conexion(),'update software set Proyecto_id_proyecto="'.$proyecto.'" where id_Software="'.$selected4.'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));;
	}

	//Registrar entregables. Condición para saber si es entregable o fase.
	if( $_POST['tipoEntregable']== "Fase" ){
		foreach ($nombreF as $f) {

			$insertFase=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Fase, Proyecto_id_Proyecto) VALUES("'.$f.'", "'.$fase[$j+1].'", "'.$proyecto.'")');  
			$j++;  
		}
	}else{
		foreach($nombreL as $n){  
			$insertLista=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Fase, Proyecto_id_Proyecto) VALUES("'.$n.'", "n/a",  "'.$proyecto.'")');  
			
		}
	}

	//registrar riesgo.
	if(!empty($_POST['nom_riesgo'])){
		$insertRiesgo=mysqli_query(conexion(),'insert into riesgo(Nom_riesgo, Ocurrencia_riesgo, Grado_impacto, Mitigacion_riesgo, Proyecto_id_Proyecto) values ("'.$nom_riesgo.'", "'.$ocurrencia.'" , "'.$impacto.'", "'.$mitigacion.'", "'.$proyecto.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error(conexion()));
	}

	$_SESSION['estado']='10';
	echo "<script>  window.location='admin_registro.php'; </script>";
	//Cerrar Conexión.
	mysqli_close(conexion());
									//Mensajes de error //
								}else{ 
										mensaje_entregables();
							}
								
						}else{
							mensaje_equipo();
						}
					}else{
						mensaje_recHumanos();
					}
				}else{
					mensaje_noCopyArchivo();
				}
			}else{
				mensaje_tipoArchivo();
			}
		}else{
			mensaje_noSelecArchivo();
		}
	}else{
		mensaje_campos();
	}
								
//Funcion para insert y updates en todas las tablas

	


//Funciones Mostrar mensajes:
function mensaje_entregables(){
	$_SESSION['estado']='9';
	echo " <script>window.location='admin_registro.php'; </script>";
}	
function mensaje_software(){
	$_SESSION['estado']='8';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_material(){
	$_SESSION['estado']='7';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_equipo(){
	$_SESSION['estado']='6';
	echo " <script>window.location='admin_registro.php'; </script>";
}

function mensaje_recHumanos(){
	$_SESSION['estado']='5';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_noCopyArchivo(){
	$_SESSION['estado']='4';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_tipoArchivo(){
	$_SESSION['estado']='3';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_noSelecArchivo(){
	$_SESSION['estado']='2';
	echo " <script>window.location='admin_registro.php'; </script>";
}
function mensaje_campos(){
	
	//echo "<script> alert('Favor de llenar todos los campos.'); window.location='admin_registro.php'; </script>";
	$_SESSION['estado']='1';
	echo " <script>window.location='admin_registro.php'; </script>";

}

?>