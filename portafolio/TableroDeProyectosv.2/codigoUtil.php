<script type="text/javascript">
                                                    if(document.getElementById('nomRH').value=='Alan'){
                                                        document.getElementById('nomRH').style.display="none";
                                                    }
                                                </script>

<?php
function mensaje_pass(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Contraseña incorrecta. Favor de verificar');";
				echo "if (msj == true) {";
				echo "window.location='index.php';";
				echo "}";
				echo "</script>"; 
}

function mensaje_usuario(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Este usuario no existe.');";
				echo "if (msj == true) {";
				echo "window.location='index.php';";
				echo "}";
				echo "</script>"; 
}


function mensaje_campos(){
	echo "<script language='javascript'>"; 
				echo "var msj = confirm('Favor de llenar los campos.');";
				echo "if (msj == true) {";
				echo "window.location='index.php';";
				echo "}";
				echo "</script>"; 
}




/*
//////////////////////Antigua estructura///////////////////////////////////////////////////////////////////////////////////////////////////////////
		//Añadir el archivo de la conexion.

									//Checar si es lista o fase
									if($nombreL==""){
										foreach ($nombreF as $f) {
											$insertFase=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Fase, Proyecto_id_Proyecto) VALUES("'.$f.'", "'.$fase[$j].'", "'.$proyecto.'")');  
										    $j++;  
										}
										}else{
											foreach($nombreL as $n) {  
										    $insertLista=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Proyecto_id_Proyecto) VALUES("'.$n.'",  "'.$proyecto.'")');  
										    $i++;  
											}
										}
		include ('conexion_bd.php');

		$nom_proyecto = $_POST['nom_proyecto'];
		$fechaI = $_POST['fechaI'];
		$fechaF = $_POST['fechaF'];
		$presupuesto =$_POST['presupuesto'];
		$archivooo =$_POST['archivooo'];
		$nombreL=$_POST['nombreL'];
		$nombreF=$_POST['nombreF'];
		$fase=$_POST['fase'];
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

		if($nombreArchivo != ""){
			if($tipoFile != "application/pdf"){
				echo "<script> alert ('nooi es pdf'); </script>";
			}
			if(copy($ruta, $destino)){

				
				$insertProyecto=mysqli_query(conexion(),'insert into proyecto(Nom_proy, Plan_trabajo, Fechainiciop, Fechafinp, Presupuestoplan) values ("'.$nom_proyecto.'", "'.$nombreArchivo.'" , "'.$fechaI.'", "'.$fechaF.'", "'.$presupuesto.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error(conexion()));

				$consultaProy=	mysqli_query(conexion(), 'select id_Proyecto from proyecto where Nom_proy="'.$nom_proyecto.'"');	
				$recoger_datoProy=mysqli_fetch_assoc($consultaProy);
				$proyecto=$recoger_datoProy['id_Proyecto'];

				//Registrar Recurso humanos.
				if(!empty($_POST['recHum'])){
					// Recorrer todo el arreglo
					foreach($recursoH as $selected){
						$insertRecHum=mysqli_query(conexion(),'insert into recursoh_has_proyecto(RecursoH_id_Rh, Proyecto_id_Proyecto) VALUES("'.$selected.'", "'.$proyecto.'")') or die('No se pudo registrar el proyecto  <br>'.mysqli_error(conexion()));;
					}
					} else {
					echo "<script language='javascript'>"; 
				echo "var msj = confirm('Seleccionar al menos un recurso humano.');";
				echo "if (msj == true) {";
				echo "window.location='admin_registro.php';";
				echo "}else{window.location='admin_registro.php'}";
				echo "</script>"; 
				}

					
					/*if(!empty($_POST['recEq'])){
						echo "<script>alert('fuck');</script>";
						/*foreach($recursoE as $selected2){

						$updateRecEq=mysqli_query(conexion(),'update equipo set Proyecto_id_proyecto="'.$proyecto.'" where id_Equipo="'.$recursoE.'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));;
					}
					  
					 if(!empty($_POST['recEq'])){
					 	//Registrar Equipo
					 while($recursoE[$contador] != '') 
					{ 
					$updateRecEq=mysqli_query(conexion(),'update equipo set Proyecto_id_proyecto="'.$proyecto.'" where id_Equipo="'.$recursoE[$contador].'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));; 
					$contador++; 
					}

				}else{ 
						echo "<script language='javascript'>"; 
						echo "var msj = confirm('No se ha seleccionado ningún equipo');";
						echo "if (msj == true) {";
						echo "window.location='admin_registro.php';";
						echo "}";
						echo "</script>";
					}

					
					if(!empty($_POST['recMat'])){
						//Registrar Material
						foreach($recursoM as $selected3){
						$updateRecMat=mysqli_query(conexion(),'update material set Proyecto_id_proyecto="'.$proyecto.'" where id_Material="'.$selected3.'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));;
					}
					}else{ 
						echo "<script language='javascript'>"; 
						echo "var msj = confirm('No se ha seleccionado ningún material');";
						echo "if (msj == true) {";
						echo "window.location='admin_registro.php';";
						echo "}";
						echo "</script>";
					}

					

					if(!empty($_POST['recSw'])){
						//Registrar Software
						foreach($recursoS as $selected4){
						$insertRecSw=mysqli_query(conexion(),'update software set Proyecto_id_proyecto="'.$proyecto.'" where id_Software="'.$selected4.'"') or die('No se pudo actualizar el campo <br>'.mysqli_error(conexion()));;
					}
					}else{ 
						echo "<script language='javascript'>"; 
						echo "var msj = confirm('No se ha seleccionado ningún software');";
						echo "if (msj == true) {";
						echo "window.location='admin_registro.php';";
						echo "}";
						echo "</script>";
					}

					//Registrar entregables
					if($nombreL==""){
				
					foreach ($nombreF as $f) {
						$insertFase=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Fase, Proyecto_id_Proyecto) VALUES("'.$f.'", "'.$fase[$j].'", "'.$proyecto.'")');  
					    $j++;  
					}
				}else{
					foreach($nombreL as $n) {  
				    $insertLista=mysqli_query(conexion(),'insert into entregable(Nom_entregable, Proyecto_id_Proyecto) VALUES("'.$n.'",  "'.$proyecto.'")');  
				    $i++;  
				}
				}


				//registrar riesgo.
				if(!empty($_POST['nom_riesgo'])){
				$insertRiesgo=mysqli_query(conexion(),'insert into riesgo(Nom_riesgo, Ocurrencia_riesgo, Grado_impacto, Mitigacion_riesgo, Proyecto_id_Proyecto) values ("'.$nom_riesgo.'", "'.$ocurrencia.'" , "'.$impacto.'", "'.$mitigacion.'", "'.$proyecto.'")') or die('No se pudo registrar el usuario <br>'.mysqli_error(conexion()));
				}


				echo "<script language='javascript'>"; 
				echo "swal('Se registró el proyecto!');";
				echo "window.location='admin_registro.php';";
				echo "</script>"; 

				mysqli_close(conexion());

			}else{
				echo 'error';
			}
		}else{	
			echo "<script language='javascript'>"; 
				echo "var msj = confirm('No se seleccionó ningún archivo');";
				echo "if (msj == true) {";
				echo "window.location='admin_registro.php';";
				echo "}else{window.location='admin_registro.php'}";
				echo "</script>"; 
				
		}
		}else{

			echo 	"<script language='javascript'>"; 
				echo "var msj = confirm('Favor de llenar los campos.');";
				echo "if (msj == true) {";
				echo "window.location='admin_registro.php';";
				echo "}else{window.location='admin_registro.php'}";
				echo "</script>";
		}
*/

?>