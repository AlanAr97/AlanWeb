<?php
session_start();
if(!empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entregables General</title>
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
            <h1 class="title">Entregables</h1><br>
            <div class="columns">
				<div class="column">
					<h2 class="subtitle"><input type="checkbox">Por lista</h2>

					<table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>N1</td>
                            <td>
                                
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
				</div>
				<div class="column">
					<h2 class="subtitle"><input type="checkbox">Por fases</h2>
					<table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Fase1</td>
                            <td>
                                
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-file-text" aria-hidden="true"></i><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fase2</td>
                            <td>
                                
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-file-text" aria-hidden="true"></i><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
                                </a>
                            </td>
                    </tbody>
                </table>
				</div>
            </div>
          <div class="field is-grouped is-grouped-centered">
                                <div class="control">
                                    <button type="submit" class="button is-primary">Registrar riesgos</button>
                                    <button type="submit" class="button is-primary">Finalizar</button>
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