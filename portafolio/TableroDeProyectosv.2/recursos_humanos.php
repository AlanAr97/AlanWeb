<?php
session_start();

if(!empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recursos Humanos</title>
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
                <li class="navbar-item"><a href="" class="navbar-link">Administrador de proyectos</a></li>
            </div>
            <div class="navbar-end">
            </div>
        </div>
    </nav>    
    <section class="section main" id="main">
        <div class="container has-text-centered">
            <div class="notification is-primary notificacion">
              <button class="delete"></button>
              Se guardaron correctamente los datos!
            </div>
            <div class="hero is-info">
              <div class="hero-body">
                <div class="level">
                    <h1 class="title">Proyecto Nuevo</h1>
                     <a href="" class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Registrar
                    </a>
                </div>
              </div>
            </div>
            <br>
            <div>
                <h1 class="title">Registro</h1><br>
                <div class="tabs is-boxed">
                  <ul>
                    <li>
                      <a href="admin_registro.php">
                        <span class="icon is-small"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                        <span>Inicio</span>
                      </a>
                    </li>
                    <li class="is-active">
                      <a href="recursos_humanos.php">
                        <span class="icon is-small"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span>Recursos Humanos</span>
                      </a>
                    </li>
                    <li>
                      <a href="recursos_materiales.php">
                        <span class="icon is-small"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span>Recursos Materiales</span>
                      </a>
                    </li>
                    <li>
                      <a href="recursos_financieros.php">
                        <span class="icon is-small"><i class="fa fa-money" aria-hidden="true"></i></span>
                        <span>Recursos Financieros</span>
                      </a>
                    </li>
                     <li>
                      <a href="entregables.php">
                        <span class="icon is-small"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span>Registrar Entregables</span>
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
              <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                                            <tr>

                                                <th>ID:</th>
                                                <th>Nombre:</th>
                                                <th>Puesto</th>
                                                <th>Cursos</th>
                                                <th>Proyectos</th>
                                                <th>Certificaciones</th>
                                                <th>Experiencia</th>
                                                <th>Seleccionar</th>
                                            </tr>
                                        </thead>
                                                <?php
                                                include('conexion_bd.php');
                                                 $sql="select *from recursoh";
                                                 $resul=mysqli_query(conexion(), $sql) ;

                                                 while($mostrar=mysqli_fetch_array($resul)){
                                                ?>
                                        <tbody class="tbody">
                                            <tr>
                                                <td><?php echo $mostrar['id_Rh']?></td>
                                                <td><?php echo $mostrar['Nom_rh']?></td>
                                                <td><?php echo $mostrar['Apaterno_rh']?></td>
                                                <td><?php echo $mostrar['Amaterno_rh']?></td>
                                                <td><?php echo $mostrar['Puesto']?></td>
                                                <td><?php echo $mostrar['Cursos_rh']?></td>
                                                <td><?php echo $mostrar['Certificaciones_rh']?></td>
                                                <td><?php echo $mostrar['Exp_rh']?></td>
                                                <td><input type="checkbox"></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                </table>
                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <button type="submit" class="button is-primary">Continuar</button>
                    </div>
                </div>
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