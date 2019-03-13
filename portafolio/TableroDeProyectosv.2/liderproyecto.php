<?php
session_start();
if(!empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lider de proyecto</title>
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
                <li class="navbar-item"><a href="" class="navbar-link">Líder del proyecto</a></li>
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
                    <h1 class="title">Nombre del proyecto asignado</h1>
                </div>
              </div>
            </div>
            <br>
            <a class="button">
                <span class="icon">
                  <i class="fa fa-dollar"></i>
                </span>
                <span>Presupuesto</span>
            </a>
            <a class="button is-primary">
                <span class="icon">
                  <i class="fa fa-folder"></i>
                </span>
                <span>Plan de trabajo</span>
            </a>
            <a class="button is-info">
                <span class="icon">
                  <i class="fa fa-book"></i>
                </span>
                <span>Plan de riesgos</span>
            </a>
            <a class="button is-link">
                <span class="icon">
                  <i class="fa fa-pencil"></i>
                </span>
                <span>Modificar entregables del proyecto</span>
            </a>
            <br>
            <br>
           <table class="table is-striped is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Clave</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                        <th>Avance real vs Presupuesto planeado</th>
                        <th>Recursos Asignados</th>
                        <th>Plan de trabajo</th>
                        <th>Avances registrados</th>
                        <th>Riesgos y PR</th>
                        <th>Entregables registrados</th>


                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>P1</td>
                        <td>0005</td>
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
                        <td><div class="field-body">
                                <div class="field">
                                    <div class="control has-icons-left">
                                        <input class="input" type="date" name="fechaF" id="fechaF" value="" >
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <figure class="image is-64x64">
                          <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                        </td>
                        <td>-----------</td>
                        <td>
                            <div class="field-body">
                                <div class="field">
                                  <div class="file is-info has-name">
                                    <label class="file-label">
                                      <input class="file-input" type="file" name="resume">
                                      <span class="file-cta">
                                        <span class="file-icon">
                                          <i class="fa fa-upload" aria-hidden="true"></i>
                                        </span>
                                        <span class="file-label">
                                          Plan…
                                        </span>
                                      </span>
                                      <span class="file-name">
                                        P...
                                      </span>
                                    </label>
                                  </div>
                                </div>

                            </div>
                        </td>
                        <td>
                            <figure class="image is-64x64">
                          <img src="https://bulma.io/images/placeholders/64x64.png">
                        </figure>
                        </td>
                        <td>
                            <div class="field-body">
                                <div class="field">
                                  <div class="file is-info has-name">
                                    <label class="file-label">
                                      <input class="file-input" type="file" name="resume">
                                      <span class="file-cta">
                                        <span class="file-icon">
                                          <i class="fa fa-upload" aria-hidden="true"></i>
                                        </span>
                                        <span class="file-label">
                                          Riesgos…
                                        </span>
                                      </span>
                                      <span class="file-name">
                                       R/Pr...
                                      </span>
                                    </label>
                                  </div>
                                </div>

                            </div>
                        </td>
                        <td>-----</td>
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