<?php
session_start();
if(!empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>4e-1</title>
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
                <li class="navbar-item"><a href="" class="navbar-link">Desarrollador</a></li>
            </div>
            <div class="navbar-end">
                <li class="navbar-item">
                    <img src="./img/empleado.png" alt="" class="navbar-icon">
                </li>
            </div>
        </div>
    </nav>    
    <section class="section main" id="main">
        <div class="container has-text-centered">
            <div class="hero is-info">
              <div class="hero-body">
                <div class="level">
                    <h1 class="title">Nombre del proyecto</h1>
                    <a href="" class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Registrar
                    </a>
                </div>
              </div>
            </div>
            <br>
            <a href="" class="button is-success">
                <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                Cargar entregables
            </a>
           <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Número</th>
                        <th>Versión</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>1</td>
                        <td>V1</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <p><a href="cerrarSesion.php">Cerrar sesión.</a></p>
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