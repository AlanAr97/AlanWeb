<?php
session_start();
if(!empty($_SESSION['nombree'])){ 
    $_SESSION['estado']='15';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<script type="text/javascript">
function Validar()
{
if(document.radiobutton.IDProyecto[0].checked==false && document.radiobutton.IDProyecto[1].checked==false && document.radiobutton.IDProyecto[2].checked==false && document.radiobutton.IDProyecto[3].checked==false )
    {
    alert('falta seleccionar un proyecto');
    return false;
    }
return true
}
</script>
    <meta charset="UTF-8">
    <title>Administrador de proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
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
                <li class="navbar-item"><a href="" class="navbar-link"><?php echo $_SESSION['rol']; ?></a></li>
                <li class="navbar-item"><a href="cerrarSesion.php" class="navbar-link">Cerrar Sesión</a></li>

            </div>
            <div class="navbar-end">
               
            </div>
        </div>
    </nav>    
    <section class="section main" id="main">
        <div class="container has-text-centered">
            <div class="hero is-info">
              <div class="hero-body">
                <div class="level">
                    <h1 class="title">Proyecto </h1>
                    <a href="admin_registro.php" class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Registrar
                    </a>
                
                </div>
              </div>
            </div>
            <br>
            <div>
                <h1 class="title"><?php
                    print ' Bienvenido(a): '.$_SESSION['nombree'];
                    ?></h1><br>
                <h2 class="subtitle">Tus proyectos</h2>
            <br>
			Selecciona el boton del proyecto que se consultara: 
           <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tbody">
				<form name="radiobutton"  action="admonproyectoconsult.php" method="post" enctype="application/x-www-form-urlencoded">
                    <tr>
					<?php
						include ('conexion_bd.php');
                        $idrecurso=1;
						$sql='select *from proyecto';
                        /*'select Nom_proy from recursoh, proyecto, recursoh_has_proyecto where recursoh.id_Rh=recursoh_has_proyecto.id_Rh and proyecto.id_Proyecto = recursoh_has_proyecto.id_Proyecto and recursoh_has_proyecto.id_Rh=="'.$idrecurso.'"'; */
						$result=mysqli_query(conexion(),$sql);
						while($mostrar=mysqli_fetch_array($result)){
							?>
                        <!--<td><input type="radio" id="IDProyecto" name="IDProyecto" value="<?php echo $mostrar['id_Proyecto']?>"></td>-->
                        <td><?php echo $mostrar['id_Proyecto']?></td>
                        <td><?php echo $mostrar['Nom_proy']?></td>
                        <td><?php echo $mostrar['Fechainiciop']?></td>
                        <td><?php echo $mostrar['Fechafinp']?></td>
                        <td>
                            <button type="submit"  class="button is-primary" id="IDProyecto" name="IDProyecto" value="<?php echo $mostrar['id_Proyecto']?>">Consultar</button>

                        </td>
						
						 </tr>
						 <?php
						}
						?>
                   
					</form>
					
                </tbody>
				
            </table>
                
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>

<?php
}else{

    header('Location: index.php');

}
?>