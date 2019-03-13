<?php


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plan de Remediación</title>
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
                <li class="navbar-item"><a href="" class="navbar-link">Administrador de proyecto</a></li>
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
                    <h1 class="title">Plan de Remediación</h1>
                    
                </div>
              </div>
            </div>
            <br>
          
			<table class="table is-striped is-hoverable is-fullwidth">
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
						<td><input class="input" type="float" name="desviacion" id="desviacion" value="" placeholder="50" autofocus></td>
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
<?php

?>