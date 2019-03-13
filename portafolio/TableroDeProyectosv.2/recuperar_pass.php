
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">

    <script type="text/javascript">

        
    </script>
    <style>
        #desplegar{ color:#B02507; font-weight: bold; }
    </style>
    
    
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
                    <h1 class="title">Recuperar contraseña</h1>
                </div>
              </div>
            </div>
            <br>
            <div id="mostrarE" class="notification is-primary notificacion">
              <button class="delete"></button>
              Se ha enviado un email
            </div>
            <div>
                <h1 class="title">Tablero de proyectos</h1><br>
            </div>
            <form action="recuperar_pass.php" method="POST">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Correo empresarial:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input"  type="email" name="email" id="email" value="" onclick="clean()" placeholder="Correo empresarial">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <div id="mensajeD">
                                <span id="desplegar">
                                
                                </span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <a onclick="msj()" class="button is-primary">Continuar</a>
                    </div>
                    <div class="control">
                        <input type="button" name="cancelar" id="cancelar" value="Cancelar" class="button is-text" onClick="location.href='index.php'">
                    </div>
                </div>
            </form>
            
        </div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    <script src="js/validarCorreo.js"></script>
    
    
</body>
</html>