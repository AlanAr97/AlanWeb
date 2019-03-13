<?php
session_start();
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">

<style>
    #planTrabajo{ border-radius: 5px; background-color: #4288f0; color: white; border-style: none; cursor: pointer; font-size: 16px; padding-right: 12px; padding-left: 12px }
</style>
</head>
<body class="has-navbar-fixed-top">
    <nav class="navbar is-fixed-top is-primary" role="navigation" aria-label="main navigation" id="navbar">
        <div class="navbar-brand">
            <button class="button navbar-burger is-primary" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                 <a href="admonproyecto.php" class="navbar-link" >Regresar</a>
                 <li class="navbar-item"><a href="cerrarSesion.php" class="navbar-link">Cerrar Sesión</a></li>

            </div>
            <div class="navbar-end">
            </div>
        </div>
    </nav>    
    <section class="section main" id="main">
        <div class="container has-text-centered">
            <div class="notification is-primary notificacion">
              <button class="delete"></button>
              Los datos se guardaron correctamente!
            </div>
            <div class="hero is-info">
              <div class="hero-body">
                <div class="level">
                    <h1 class="title">Nombre del proyecto</h1>
                    
                    <a href="admin_registroavancesemanal.php" class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Registrar Avance Semanal
                    </a>
                </div>
              </div>
            </div>
             <h1 class="title">Consulta</h1><br>
           <form action="admin_registroavancesemanal.php" method="post" enctype="application/x-www-form-urlencoded">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Nombre:</label>
                    </div>
                    <div class="field-body">
                     <?php 
					 include ('conexion_bd.php');
					
					 $clave=($_POST['IDProyecto']);
                     $_SESSION['claveProy']=$clave;
							
						$sql="select * from proyecto where id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						$mostrar=mysqli_fetch_array($result);
						?>
						<?php echo $mostrar['Nom_proy']?>
						
						 
						
						     
                    </div>
					<?php
					?>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Clave:</label>
                    </div>
                    <div class="field-body">
                      <?php 
					  
						echo $clave?>
						
                    </div>
					<?php
						?>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Fecha Inicio:</label>
                    </div>
                    <div class="field-body">
                      <?php 
					  
						
						
						$sql="select * from proyecto where id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						$mostrar=mysqli_fetch_array($result);
							?>
							<?php echo $mostrar['Fechainiciop']?>
							
                   </div>
					<?php
					?>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Fecha fin:</label>
                    </div>
                    <div class="field-body">
                     <?php 
					  
					
					$sql="select * from proyecto where id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						$mostrar=mysqli_fetch_array($result);
					?>
							<?php echo $mostrar['Fechafinp']?>
					</div>
					<?php
					?>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Avance planeado:</label>
                         <label class="label">VS:</label>
                         <label class="label">Avance real:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                             <figure class="image is-192x192">
                          <img src="C:\Users\Amanda Bb\Pictures\graf1.png">
                                <span class="icon is-small is-centered">
                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="field-label is-normal">
                        <label class="label">Presupuesto planeado:</label>
                         <label class="label">VS:</label>
                         <label class="label">Presupuesto real:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                             <figure class="image is-192x192">
                          <img src="C:\Users\Amanda Bb\Pictures\graf2.jpg">
                                <span class="icon is-small is-centered">
                                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Plan de trabajo:</label>
                    </div>
                    <div class="field-body">
                        <a  target="_blank" id="planTrabajo" href="mostrarArchivos.php?id=<?php echo $mostrar['id_Proyecto'] ?>"> Ver Plan </a>

                    </div>
                </div>
               <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Avances registrados:</label>
                    </div>
                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Fecha de reunión</th>
                            <th>Avance planeado</th>
                            <th>Avances real</th>
                            <th>Presupuesto planeado</th>
                            <th>Presupuesto real</th>
                            <th>Actividades realizadas</th>
                            <th>Actividades atrasadas</th>
                            <th>Actividades en ejecucuón</th>
                            <th>Actividades por realizar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
						<?php
						 
						
						$sql="select * from avance where Proyecto_id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						while($mostrar=mysqli_fetch_array($result)){
							?>
                            <td><?php echo $mostrar['Fechaavance']?></td>
                            <td><?php echo $mostrar['Avance_plan']?></td>
                            <td><?php echo $mostrar['Avance_real']?></td>
                            <td><?php echo $mostrar['Presupuesto_plan']?></td>
                            <td><?php echo $mostrar['Presupuesto_real']?></td>
                            <td><?php echo $mostrar['Act_realizadas']?></td>
                            <td><?php echo $mostrar['Act_pendientes']?></td>
                            <td><?php echo $mostrar['Act_eject']?></td>
                            <td><?php echo $mostrar['Act_atrasadas']?></td>
                          
                        </tr>
						  <?php
						}
						?>	
                    </tbody>
                </table>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Plan de recuperación y Riesgos:</label>
                    </div>
                    <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Desviación</th>
                        <th>Color</th>
                        <th>Actividad a realizar</th>
                        <th>Fecha límite</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
					<?php
					 
					 $Clave_a="select cve_Avance from avance where Proyecto_id_Proyecto='".$clave."'";
						$Clave_avan2=mysqli_query(conexion(),$Clave_a);
							
						
						while($Clave_avancito2=mysqli_fetch_array($Clave_avan2)){
							$clave_avan3=implode($Clave_avancito2);
						$sql="select * from planderemediacion where Avance_cve_Avance='".$Clave_avan3."'";
						$result=mysqli_query(conexion(),$sql);
						while($mostrar=mysqli_fetch_array($result)){
							?>
                        <td><?php echo $mostrar['Desviacion']?></td>
                        <td>
                            <figure class="image is-64x64">
                          <img src="C:\Users\Amanda Bb\Pictures\verde.png">
                        </figure>
                        </td>
                        <td><?php echo $mostrar['Act_realizar_plan']?></td>
                        <td><?php echo $mostrar['Fecha_limite_Avance']?></td>
						 
				
						 </tr>
						 <?php
						}
						}
						?>
							
                      
                </tbody>
            </table>
                </div>
                <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Riesgo</th>
                            <th>% Ocurrencia</th>
                            <th>Grado Impacto</th>
                            <th>Mitigación</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <?php
						$sql="select * from riesgo where Proyecto_id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						while($mostrar=mysqli_fetch_array($result)){
							?>
                        <td><?php echo $mostrar['Nom_riesgo']?></td>
                        <td><?php echo $mostrar['Ocurrencia_riesgo']?></td>
                        <td><?php echo $mostrar['Grado_impacto']?></td>
                        <td><?php echo $mostrar['Mitigacion_riesgo']?></td>
						
						 </tr>
						 <?php
						}
						?>
							
                      
                    </tbody>
                </table>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Entregables registrados:</label>
                    </div>
                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Archivo</th>
                            <th>Proyecto</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
						<?php
						$sql="select * from entregable where Proyecto_id_Proyecto='".$clave."'";
						$result=mysqli_query(conexion(),$sql);
						while($mostrar=mysqli_fetch_array($result)){
							?>
                            <td><?php echo $mostrar['Nom_entregable']?></td>
                            <td><div class="field-body">
                        <div class="field">
                          
                        </div>
                    </div></td>
                            <td><?php echo $mostrar['Fase']?></td>
                       
						 </tr>
						 <?php
						}
						?>
							
                      
                    </tbody>
                </table>
                </div>


                

                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>
