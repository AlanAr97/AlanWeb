
<!DOCTYPE html>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>


<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
    <meta charset="UTF-8">
    <title>Registrar Avance Semanal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
</head>
<body class="has-navbar-fixed-top">
    <?php if($_SESSION['semaf']=='v'){
    ?><script>
       swal({
          title: "Semaforo verde!",
          text: "Semaforo verde, tu proyec está en tiempo y forma.",
          icon: "success",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['semaf']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['semaf']=='a'){?>
    <script>
        swal({
          title: "Semáforo amarillo!",
          text: "Semaforo amarillo, tu proyecto necesita atencion",
          icon: "warning",
          button: "Aceptar!",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['semaf']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['semaf']=='r'){?>
    <script>
        swal({
          title: "Semáforo rojo!",
          text: "Semaforo rojo pasa a capturar un plan de remedicacion",
          icon: "error",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['semaf']="15";?>
            }
        });
    </script><?php 
    }?>
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
                 <a href="admonproyectoconsult.php" class="navbar-link" >Regresar</a>

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
                    <h1 class="title">Avance Semanal del Proyecto</h1>
                </div>
              </div>
            </div>
            <br>
            <divc class="tab">
                
                <div class="tabs is-boxed">
                  <ul>
                    <li class="is-active">
                      
                        <span class="icon is-small"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                        <button class="tablinks" onclick="openCity(event, 'AvanceSemanal')">Registro Avance semanal</button>
                      
                    </li>
                    <li>
                      
                        <span class="icon is-small"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                        <button class="tablinks" onclick="openCity(event, 'PlanRemediacion')">Plan de remediacion</button>
                      
                    </li>
                    
                  </ul>
                </div>
            </div>
	<div id="AvanceSemanal" class="tabcontent">
	<h1 class="title">Registro</h1><br>
	
           <form action="registrarAS.php" method="post" enctype="application/x-www-form-urlencoded">
             <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Clave del proyecto:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="string" name="IDProyecto" id="IDProyecto"  >
                                <span class="icon is-small is-left">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
					</div>
					<div class="field is-horizontal">
					<div class="field-label is-normal">
                        <label class="label">Fecha de Reunión:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="date" name="fechaI" id="fechaI" value="" >
                                <span class="icon is-small is-left">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Avance Planeado:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="float" name="Avancep" id="Avancep" value="" placeholder="100" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-percent" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Avance Real:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="float" name="Avancer" id="Avancer" value="" placeholder="89" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-percent" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Presupuesto Planeado:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="number" name="Presupuestop" id="Presupuestop" value="" placeholder="100" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-percent" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Presupuesto Real:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="number" name="Presupuestor" id="Presupuestor" value="" placeholder="70" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-percent" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Actividades realizadas:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="string" name="Actividades" id="Actividades" value="" placeholder="Escriba aquí las Actividades realizadas" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Actividades atrasadas:</label>
                    </div>
                 <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="string" name="Actividadesa" id="Actividadesa" value="" placeholder="Escriba aquí las Actividades atrasadas" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Actividades en ejecución:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="string" name="Actividadese" id="Actividadese" value="" placeholder="Escriba aquí las Actividades en ejecución" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Actividades por realizar:</label>
                    </div>
                   <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" type="string" name="Actividadesr" id="Actividadesr" value="" placeholder="Escriba aquí las Actividades por realizar" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>             
                    
                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
					
                        <button type="submit" class="button is-primary">Guardar y calcular desviaciones</button>
                        <input type="button" class="button is-primary" value="Volver"onclick="location='admonproyecto.php'" />
                    </div>
                </div>
				
            </form>
       </div>
	</div>
	
	<div id="PlanRemediacion" class="tabcontent">
  <table class="table is-striped is-hoverable is-fullwidth">
                <h1 class="title">Plan de Remediación</h1>
				
				<thead>
                    <tr>
					<th>Clave Proyecto</th>
                        <th>Desviación</th>
                        <th>Color</th>
                        <th>Actividad a realizar</th>
                        <th>Fecha límite</th>
                    </tr>
                </thead>
                <body class="tbody">
                    <tr>
					<form action="planRemediacion.php" method="post" enctype="application/x-www-form-urlencoded">
                        <td><input class="input" type="text" name="CLAVE" id="CLAVE" value="" placeholder="50" autofocus></td>
						<td><input class="input" type="number" name="desviacion" id="desviacion" value="" placeholder="50" autofocus></td>
                        <td>
                            <figure class="image is-64x64">
                          <img src="\rojo.png">
                        </figure>
                        </td>
                        <td><input class="input" type="text" name="actividad" id="actividad" value="" placeholder="50" autofocus></td>
                        <td>
                            <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                        <input class="input" type="date" name="fechaI" id="fechaI" value="" >
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href=" http://instal-g.herokuapp.com/usuarios/detalle " class="button is-info is-small">
                                <span class="icon is-large"><i class="fa fa-eye fa-lg"></i></span>
                            </a>
                            <a class="button is-primary is-small">
                                <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                            </a>
                            <a class="button is-danger is-small">
                                <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
			
			
			
			
			
			
			
            <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <button type="submit" class="button is-primary">Guardar</button>
                        <input type="button" class="button is-primary" value="cancelar"onclick="location='admin_registroavancesemanal.php'" />
                    </div>
                </div>
</form>
</div>
	
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>