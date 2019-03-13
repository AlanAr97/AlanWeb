<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
    <title>Palelokas Sin Azúcar® México</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="demo-files/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Barra social-->
    <link rel="stylesheet" href="demo-files/style.css">
    <link rel="stylesheet" href="css/main.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
  <style type="text/css">
#apDiv1 {
  position: absolute;
  width: 675px;
  height: 473px;
  z-index: 1;
  left: 260px;
  top: 40px;
}
#apDiv2 {
  position:absolute;
  width:219px;
  height:48px;
  z-index:1;
  left: 295px;
  top: -90px;
  visibility: hidden;
}

</style>
    <style type="text/css">
    body {
  background-color: #FFFFFF;
}
    </style>
  </head>
  <body> 
    <div class="social">
      <ul>
      <li><a href="https://www.facebook.com/palelokas" class="icon icon-facebook" target="_blank"></a></li>
      <li><a href="https://www.twitter.com" class="icon icon-twitter" target="_blank"></a></li>
      <li><a href="https://www.youtube.com" class="icon icon-youtube" target="_blank"></a></li>
      <li><a href="https://www.instagram.com" class="icon icon-instagram" target="_blank"></a></li>
    </ul>
    </div>
  <?php if($_SESSION['estado']=='1'){
    ?><script>
       swal({
          title: "¡Gracias!",
          text: "Tu comentario fue enviado",
          icon: "success",
          button: "De acuerdo",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }  else if($_SESSION['estado']=='2'){?>
    <script>
        swal({
          title: "¡Ups!",
          text: "Por favor llena todos los campos :)",
          icon: "error",
          button: "Aceptar!",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }    ?> 
  	 <section class="section main" id="main">
        <div class="container has-text-centered">            
    <div class="hero is-warning">
    	<div class="hero-body">
                <div class="level">
                          
							  <div class="navbar-brand">
								    <div class="logo">
	                     			 <img src="images/logo7.png" alt="" width="200" height="170">
	                      			</div>
							    <div class="navbar-burger burger" data-target="navbarTransparent" >
							      
							    </div>

							  </div>
							  
							  <h1 class="title">CONTACTO</h1>
							   <a href="index.html" class="button is-primary btn-lg">
			                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;
			                        Inicio
			                   </a> 
			                    <a href="quienesomos.html" class="button is-primary btn-lg">
			                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;
			                        Quiénes Somos
			                   </a> 
			                    <a href="xoconostle.html" class="button is-primary btn-lg">
			                        <span class="icon"><i class="fa fa-lemon-o" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;
			                        Xoconostle
			                   </a> 
                         <a href="compra.php" class="button is-primary btn-lg">
                              <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>&nbsp;
                              Compra
                         </a> 
			                    <a href="contacto.php" class="button is-primary btn-lg">
			                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>&nbsp;&nbsp;&nbsp;
			                        Contacto
			                   </a> 

                         
							
		                </div>
		              </div>
		    </div>
    <br>
    <br>
    <br>
</div></section>
 
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
           
         	 <p class="text-primary"><h3>Dudas o comentarios comunícate sin costo al:</h3></p>
           <h4 class="text-danger">55-69-89-85-56</h4>
           <h3 class="text-primary">Si tienes en mente un nuevo sabor, ¡háznoslo saber!:</h3>
          </div>

        </div>
      </div>
    </section>
   <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">

          </div>
         <div class="col-md-4 col-12">
            <form action="insertarContacto.php" method="post" enctype="application/x-www-form-urlencoded">
              <div class="form-group col-12">
                <input type="text" class="form-control" name="nombre" id="name" placeholder="Ingresa tu nombre"><br>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu correo electrónico"><br>
                <textarea cols="43" class="form-control" rows="10" id="mensaje" name="mensaje" placeholder="Ingresa tu mensaje o comentario"></textarea>
                <!--Captcha-->
              <div class="g-recaptcha" data-sitekey="6LdvT18UAAAAAMTuw0n-siM9EBPdcZcsNpks2rFg"></div>

                <button type="submit" class="btn btn-warning mt-2" style="margin-left: 25% ;"> Enviar </button>
                <button type="reset" class="button is-text" style="margin-left: 15px ;margin-top:5px; font-size:15px;">Limpiar</button>
                        </div>
            </form>
            <?php 
  foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
  }
?>
          </div>
          <div class="col-md-4 col-12">
           <ul class="list-unstyled"><br>
              <li class="media">
                <img class="mr-3" src="images/regis.png" alt="">
                <div class="media-body">
                  <h5 class="mt-0 mb-1"></h5>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
   </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Palelokas Sin Azucar® 2018 México. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
  </body>
</html>