<?php
session_start();
if(!empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>4b-1</title>
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
        <?php
            print ' BIENVENIDO: '.$_SESSION['nombree'];
            ?>
        <br>
    	<p><a href="cerrarSesion.php">Cerrar sesión.</a></p>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <li class="navbar-item"><a href="" class="navbar-link">Gerente de proyectos</a></li>
            </div>
            <div class="navbar-end">
                <li class="navbar-item">
                    <img src="./img/empleado.png" alt="" class="navbar-icon">
                </li>
            </div>
        </div>
    </nav>    
    <section class="section main" id="main">
        <div class="columns">
            <div class="column is-three-quarters"></div>
            <div class="column is-one-quarter">
                <nav class="panel">
                  <p class="panel-heading">
                    Proyectos
                  </p>
                  <div class="panel-block">
                    <p class="control has-icons-left">
                      <input class="input is-small" type="text" placeholder="search">
                      <span class="icon is-small is-left">
                        <i class="fas fa-search" aria-hidden="true"></i>
                      </span>
                    </p>
                  </div>
                  <a class="panel-block is-active">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    bulma
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    marksheet
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    minireset.css
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-book" aria-hidden="true"></i>
                    </span>
                    jgthms.github.io
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-code-fork" aria-hidden="true"></i>
                    </span>
                    daniellowtw/infboard
                  </a>
                  <a class="panel-block">
                    <span class="panel-icon">
                      <i class="fas fa-code-fork" aria-hidden="true"></i>
                    </span>
                    mojs
                  </a>
                </nav>

            </div>

        </div>

    </section>
           <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Presupuesto</th>
                        <th>Plan de trabajo</th>
                        <th>Plan de riesgos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>C1</td>
                        <td>N1</td>
                        <td>$1000</td>
                        <td>PT</td>
                        <td>PR</td>
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
            </table> :OOOOOOOOOOO
                
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>

</body>
</html>


<?php
}else{
	header('Location: index.php');

}
?>