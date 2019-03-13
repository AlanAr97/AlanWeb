<?php
session_start();
if(empty($_SESSION['nombree'])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <style type="text/css">
        #resul{ color: #B02507; font-weight: bold;  margin-top: 10px;}
        #usuario, #password {width:400px; }
        form{ margin-left: 20%; margin-top: 50px}
    </style>
</head>
<body class="has-navbar-fixed-top">
	<style>
		input{
            width: 100px;
        }
	</style>
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
                    <h1 class="title">¡Bienvenido!</h1>
                </div>
              </div>
            </div>
            <br>
            <form action="return false" onsubmit="return false">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Usuario:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input onclick="clean()" class="input" type="text" name="usuario" id="usuario" value="" placeholder="Usuario" autofocus>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Contraseña:</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control has-icons-left">
                                <input class="input" onclick="clean()" type="password" name="password" id="password" value="" placeholder="Contraseña">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-key"></i>
                                </span>
                                <div id="resul">
                                    <!-- Aquí van los mensajes-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field has-text-right">
                    <a href="recuperar_pass.php" class="button is-text">¿Olvidaste tu contraseña?</a>
                </div>
                <b><p class="big-danger" align="center">
                	
                </p></b>
                <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <button onclick="Validar(document.getElementById('usuario').value, document.getElementById('password').value);" class="button is-primary">Iniciar Sesión</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-text">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    <script src="mensaje.js"></script>
</body>
</html>
<?php
}else{
	
	if($_SESSION['rol']=='Administrador de Sistema'){
	header("Location: admonsistema.php"); 
	}else if($_SESSION['rol']=='Administrador de Proyecto'){
		header("Location: admonproyecto.php");
	}else if($_SESSION['rol']=='Gerente de Proyectos'){
		header("Location: gerenteproyectos.php");
	}else if($_SESSION['rol']=='Lider de Proyecto'){
		header("Location: liderproyecto.php");
	}else if($_SESSION['rol']=='Desarrollador'){
		header("Location: desarrollador.php");
	}
    exit();
}
?>