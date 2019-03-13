<?php
session_start();
include('conexion_bd.php');
if(!empty($_SESSION['nombree'])){ 
    $_SESSION['estado']='15';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Proyecto</title>
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
                    <h1 class="title">Proyecto Nuevo</h1>
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

                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Clave del proyecto</th>
                            <th>Nombre del proyecto</th>
                            <th>% de avance real</th>
                            <th>Acciones</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <?php
                            $sqlEq="select *from proyecto";
                            $resulEq=mysqli_query(conexion(), $sqlEq) ;
                            while($mostrarEq=mysqli_fetch_array($resulEq)){                   
                            ?>  
                            <td><?php echo $mostrarEq['id_Equipo']; ?></td>
                            <td><?php echo $mostrarEq['Marca_eq']; ?></td>
                            <td><?php echo $mostrarEq['Tipo_eq']; ?></td>
                            <td>                                
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                            </td>
                            <td id="sele"><input type="checkbox" name="recEq[]" value="<?php echo $mostrarEq['id_Equipo']; ?>"></td>
                        </tr>
                        <?php
                    }
                        ?>
                    </tbody>
                </table>
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