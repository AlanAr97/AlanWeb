<?php
session_start();
if(empty($_SESSION['nombree'])){
    header ('location: ./');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador de sistema</title>
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
                <li class="navbar-item"><a href="" class="navbar-link">Administrador</a></li>
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
            <a class="button">
                <span class="icon">
                  <i class="fa fa-user"></i>
                </span>
                <span>Administrar usuarios</span>
            </a>
            <a class="button is-primary">
                <span class="icon">
                  <i class="fa fa-folder"></i>
                </span>
                <span>Recursos humanos</span>
            </a>
            <a class="button is-info">
                <span class="icon">
                  <i class="fa fa-book"></i>
                </span>
                <span>Recursos materiales</span>
            </a>
            <br>
            <br>
            <?php
            print ' BIENVENIDO: '.$_SESSION['nombree'];
            ?>
        </div>
        <br><p><a href="registrar_proyecto.php">Registrar nuevo proyecto.</a></p>
        <br>
    <p><a href="cerrarSesion.php">Cerrar sesión.</a></p>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>

