<?php
session_start();
include('conexion_bd.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Proyecto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="css/pestañas.css">
    <script src="https://unpkg.com/sweetalert@2.1.0/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    
    
    <script type="text/javascript">
      function validarSiNumero(numero){
    if (!/^([0-9]){3,5}$/.test(numero)){
      swal("Error","El valor " + numero + " no es un número o excede el rango", "error");
      document.getElementById('presupuesto').style.borderColor='red';
      document.getElementById('btnEnviar').disabled=true;
  }else {
    
    document.getElementById('presupuesto').style.borderColor='#E9E5E4';
      document.getElementById('btnEnviar').disabled=false;
  }
}

function validarSiNumeroI(numero){
    if (!/^([0-9]){1,3}$/.test(numero)){
      swal("Error","El valor " + numero + " no es un número o excede el rango", "error");
      document.getElementById('impacto').style.borderColor='red';
      document.getElementById('btnEnviar').disabled=true;
  }else {
    
    document.getElementById('impacto').style.borderColor='#E9E5E4';
      document.getElementById('btnEnviar').disabled=false;
  }
}
    </script>
    <style>
        .subtitle{ background-color: #A9D6F9; color: black; font-weight: bold;}
        #MensajeError{ color: #B02507; font-weight: bold;}
    </style>
</head>
<body class="has-navbar-fixed-top">
    <?php if($_SESSION['estado']=='1'){
    ?><script>
       swal({
          title: "Error!",
          text: "Por favor, llena todos los campos",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='2'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se seleccionó ningún archivo",
          icon: "warning",
          button: "Aceptar!",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='3'){?>
    <script>
        swal({
          title: "Error!",
          text: "Sólo se admiten archivos .pdf o .doc o .mpp",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='4'){?>
    <script>
        swal({
          title: "Error!",
          text: "Falló al subir el archivo",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='5'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se seleccionó ningún recurso humano",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='6'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se seleccionó ningún recurso material",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='7'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se seleccionó ningún material",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='8'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se seleccionó ningún software",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='9'){?>
    <script>
        swal({
          title: "Error!",
          text: "No se ingresaron los entregables",
          icon: "warning",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='10'){?>
    <script>
        swal({
          title: "¡Completado!",
          text: "Se registró el proyecto con éxito",
          icon: "success",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }else if($_SESSION['estado']=='11'){?>
    <script>
        swal({
          title: "Error",
          text: "Este nombre de proyecto ya existe",
          icon: "error",
          button: "Aceptar",
        }).then((value) =>{
           if(value=true){
               <?php  $_SESSION['estado']="15";?>
            }
        });
    </script><?php 
    }
    ?>

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
                 <li class="navbar-item"><a href="admonproyecto.php" class="navbar-link">Regresar</a></li>
                    <li class="navbar-item"><a href="cerrarSesion.php" class="navbar-link">Cerrar Sesión</a></li>
            </div>
            <div class="navbar-end">
            </div>
        </div>
    </nav>    
    <section id="mostrarTodo" class="section main" >
        <div class="container has-text-centered">
            <div class="notification is-primary notificacion">
              <button class="delete"></button>
              Los datos se guardaron correctamente!
            </div>        
            <div class="hero is-info">
              <div class="hero-body">

                <div class="level">

                    <h1 class="title">Proyecto Nuevo</h1>
                    
                </div>
              </div>
            </div>
            <br>
            <div>
                <?php
            print ' BIENVENIDO: '.$_SESSION['nombree'];
            ?>
                <h1 class="title">Registro</h1><br>

                <div class="menu">
                    <div class="tab">
                            <div class="tabs is-boxed">
                              <ul>
                                <li class="is-active">
                                  <a>
                                    <span class="icon is-small"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                                    <span class="tablinks" onclick="abrirTab(event, 'Inicio')">Inicio</span>
                                  </a>
                                </li>
                                <li>
                                  <a>
                                    <span class="icon is-small"><i class="fa fa-users" aria-hidden="true"></i></span>
                                    <span class="tablinks" onclick="abrirTab(event, 'RecursosH')">Recursos Humanos</span>
                                  </a>
                                </li>
                                <li>
                                 
                                    <span class="icon is-small"><i class="fa fa-book" aria-hidden="true"></i></span>
                                    <span class="tablinks" onclick="abrirTab(event, 'RecursosM')">Recursos Materiales</span>
                                  </a>
                                </li>
                                <li>
                                 
                                    <span class="icon is-small"><i class="fa fa-money" aria-hidden="true"></i></span>
                                    <span class="tablinks" onclick="abrirTab(event, 'RecursosF')">Recursos Financieros</span>
                                  </a>
                                </li>
                                 <li>
                                  
                                    <span class="icon is-small"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                                    <span class="tablinks" onclick="abrirTab(event, 'Entregables')">Registrar Entregables</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                    </div>
                </div>
                <div id="MensajeError">
                      
                      
                        <p style="color:#39ac73;">*Campo obligatorio</p>
                    </div>
                <form action="insertarProy.php" method="post" enctype="multipart/form-data" id="formulario" name="myform">
                    <div id="Inicio" class="tabcontent">
                                           <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label">Nombre del Proyecto: <span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></label>
                                        </div>
                                        <div id="resultadoNomProy">

                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control has-icons-left">

                                                    <input class="input" type="text"  onblur="validarCampo(this)" name="nom_proyecto" id="nom_proyecto" value="" placeholder="nom_proyecto" required autofocus ">
                                                    <span class="icon is-small is-left">
                                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label">Plan de trabajo: <span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                              <div class="file is-info has-name">
                                                <label class="file-label">
                                                  <input  type="file" data-multiple-caption="{count} archivos seleccionados" multiple="" accept=".pdf, .docx, .mpp" name="archivo" id="archivo">
                                                  
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label">Fecha Inicio:<span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></label>
                                        </div>
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
                                    </div>
                        
                                    <div class="field is-horizontal">
                                        <div class="field-label is-normal">
                                            <label class="label">Fecha fin: <span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></label>
                                        </div>
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control has-icons-left">
                                                    <input class="input" type="date" name="fechaF" id="fechaF" size="85" value="" >
                                                    <span class="icon is-small is-left">
                                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                        
                        
                    </div>
                    
                    <div id="RecursosH" class="tabcontent">
                                        <h2 class="subtitle">Recursos humanos</h2>
                                         <table class="table is-striped is-hoverable is-fullwidth">
                                         <thead>
                                            <tr>

                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido P</th>
                                                <th>Apellido M</th>
                                                <th>Puesto</th>
                                                <th>Cursos</th>
                                                <th>Proyectos</th>
                                                <th>Certificaciones</th>
                                                <th>Experiencia</th>
                                                <th>Seleccionar</th>
                                            </tr>
                                        </thead>
                                                
                                        <tbody class="tbody">
                                            <tr id="filas">
                                                <?php
                                                 $sql="select *from recursoh";
                                                 $resul=mysqli_query(conexion(), $sql) ;
                                                 

                                                

                                                 while($mostrar=mysqli_fetch_array($resul)){
                                                    
                                                   
                                                ?>
                                                
                                                <td id="idRH"><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['id_Rh'];
                                                                         }}?></td>

                                                <td id="nomRH"><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Nom_rh'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Apaterno_rh'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Amaterno_rh'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Puesto'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Cursos_rh'];
                                                                         }}?></td>
                                                 <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Proyectos_trabajados'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Certificaciones_rh'];
                                                                         }}?></td>

                                                <td><?php if($mostrar['id_Rh']==11){ 
                                                                        echo'';
                                                                    }else{
                                                                        if($mostrar['Proyectos_actuales']<2){
                                                                        echo $mostrar['Exp_rh'];
                                                                         }}?></td>
                                                                                    <?php  if($mostrar['id_Rh']==11){ }else {
                                                                                            if($mostrar['Proyectos_actuales']<2){?>
                                                <td><input name="recHum[]" value="<?php echo $mostrar['id_Rh']; ?>"  type="checkbox">
                                                </td> <?php }} ?>
                                            </tr>
                                             
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                </table>
                        
                        
                    </div>

                    <div id="RecursosM" class="tabcontent">
                        
                                        <div class="columns">
                <div class="column">
                    <h2 class="subtitle">Equipo</h2>

                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Marca</th>
                            <th>Tipo</th>
                            <th>RAM</th>
                            <th>Procesador</th>
                            <th>Disco Duro</th>
                            <th>Trajeta de video</th>
                            <th>Puerto USB</th>
                            <th>Entradas</th>
                            <th>Acciones</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <?php
                            $sqlEq="select *from equipo";
                            $resulEq=mysqli_query(conexion(), $sqlEq) ;
                            while($mostrarEq=mysqli_fetch_array($resulEq)){                   
                            ?>  
                            <td><?php echo $mostrarEq['id_Equipo'];  ?></td>
                            <td><?php echo $mostrarEq['Marca_eq']; ?></td>
                            <td><?php echo $mostrarEq['Tipo_eq']; ?></td>
                            <td><?php echo $mostrarEq['Ram']; ?></td>
                            <td><?php echo $mostrarEq['Procesador']; ?></td>
                            <td><?php echo $mostrarEq['Discoduro']; ?></td>
                            <td><?php echo $mostrarEq['Tarjetadevideo']; ?></td>
                            <td><?php echo $mostrarEq['Puertousb']; ?></td>
                            <td><?php echo $mostrarEq['Entradas_eq']; ?></td>
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
                </div>
            </div>
            <div class="column">
                    <h2 class="subtitle">Material</h2>
                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th>Material</th>
                            <th>Ancho</th>
                            <th>Largo</th>
                            <th>Altura</th>
                            <th>Acciones</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <?php
                            $sqlMaterial="select *from material";
                            $resulMaterial=mysqli_query(conexion(), $sqlMaterial) ;
                            while($mostrarMaterial=mysqli_fetch_array($resulMaterial)){                   
                            ?>  
                            <td><?php echo $mostrarMaterial['id_Material']; ?></td>
                            <td><?php echo $mostrarMaterial['Descripcion_mat']; ?></td>
                            <td><?php echo $mostrarMaterial['Material']; ?></td>
                            <td><?php echo $mostrarMaterial['Ancho_mat']; ?></td>
                            <td><?php echo $mostrarMaterial['Largo_mat']; ?></td>
                            <td><?php echo $mostrarMaterial['Altura_mat']; ?></td>
                            <td>                                
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                            </td>
                            <td id="sele"><input type="checkbox" name="recMat[]" value="<?php echo $mostrarMaterial['id_Material']; ?>" ></td>
                        </tr>
                        <?php
                    }
                        ?>
                    </tbody>
                </table>
                </div>
            <div class="column">
                    <h2 class="subtitle">Software</h2>
                    <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Licencia</th>
                            <th>Versión</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                            <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <?php
                            $sqlSoftware="select *from software";
                            $resulSoftware=mysqli_query(conexion(), $sqlSoftware) ;
                            while($mostrarSoftware=mysqli_fetch_array($resulSoftware)){                   
                            ?>  
                            <td><?php echo $mostrarSoftware['id_Software']; ?></td>
                            <td><?php echo $mostrarSoftware['Licencia']; ?></td>
                            <td><?php echo $mostrarSoftware['Version']; ?></td>
                            <td><?php echo $mostrarSoftware['nom_sw']; ?></td>
                            <td>                                
                                <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                            </td>
                            <td id="sele"><input type="checkbox" name="recSw[]" value="<?php echo $mostrarSoftware['id_Software']; ?>"></td>
                        </tr>
                        <?php
                    }
                        ?>
                    </tbody>
                </table>
                </div>
                        
                    </div>

                    <div id="RecursosF" class="tabcontent">
                                    <span style="color: #1cb785; font-size:18px; font-weight:bold">El presupuesto no puede ser menor a $100, ni mayor a $99,999</span>
                                     <div class="field is-horizontal">
                                            <div class="field-label is-normal">
                                                <label class="label">Presupuesto: <span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></label>
                                            </div>
                                            <div class="field-body">
                                                <div class="field">
                                                    <div class="control has-icons-left">
                                                        <input class="input" type="text" min="100" max="50000"  onblur="validarSiNumero(this.value);" name="presupuesto" id="presupuesto" value="" placeholder="" autofocus>
                                                        <span class="icon is-small is-left">
                                                            <i class="fa fa-dollar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                    </div>
                        
                    <div id="Entregables" class="tabcontent">
                            <a onclick="mostrarRiesgo()"  id="btnRiesgo" class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Registrar riesgo
                    </a>
                        <h1 class="title">Entregables <span style="color:#39ac73; font-size: 22px; font-weight: bold"> *</span></h1><br>
                        
            <div class="columns">
                <div class="column">
                    <h2 class="subtitle"><input type="radio" style="width:20px;height:20px" onchange ="desplegarL()" id="lista" name="tipoEntregable" value="Lista">Por lista
                        </h2><br>
                    <div id="btncajaListaa">
                        
                        <button onclick="agregarCajaL()" type="button" style="width: 140px" disabled id="btncajaLista" disabled class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Añadir entregable lista</button>
                    </p></div>

                    <table id="tablaLista" class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                           <!-- <td><input type="text" id="nom_lista" name="nom_lista" placeholder="Escribir " size="50" disabled> </td>-->
                            <!--<td>
                                
                                <!--<a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                            </td>-->
                        </tr>
                    </tbody>
                </table>
                </div>
                <div id="fasess" class="column">
                    <h2 class="subtitle"><input type="radio" style="width:20px;height:20px" onchange="desplegarL()" id="fase" name="tipoEntregable" value="Fase">Por fases</h2>
                    <br>
                    <div id=btncajaFasee>
                        <button type="button"  onclick="agregarCajaF()"   id="btncajaFase"  disabled class="button is-info is-inverted is-outlined">
                        <span class="icon"><i class="fa fa-plus-circle fa-lg"></i></span>&nbsp;&nbsp;
                        Añadir Fase</button>
                    </p></div>
                    <table id="tablaFase"  class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fases</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                           <!-- <td><input type="text" id="nom_fase" name="nom_fase" placeholder="Fase1" size="50" disabled></td>
                            <td>
                                
                               <!-- <a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-pencil fa-lg"></i></span>
                                </a>
                                <a class="button is-danger is-small">
                                    <span class="icon is-large"><i class="fa fa-trash fa-lg"></i></span>
                                </a>
                                <!--<a class="button is-primary is-small">
                                    <span class="icon is-large"><i class="fa fa-file-text" aria-hidden="true"></i><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
                                </a>
                            </td>-->
                        </tr>
                        <tr>
                            
                    </tbody>
                </table>
                </div>
                
            </div>
                        <div id="riesgos">

            <div>

                <h1 class="title">Riesgos</h1><br>
                <p id="cancelRegistro" onclick="quitarRiesgo()" class="button is-text">Cancelar</p>
            </div>
          <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Riesgo</th>
                            <th>% Ocurrencia</th>
                            <th>Grado Impacto</th>
                            <th>Mitigación</th>
                            
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td><input id="nom_riesgo" type="text" name="nom_riesgo" placeholder="R1"></td>
                            <td><input type="range" name="ocurrencia" list="tickmarks">

                                <datalist id="tickmarks">
                                  <option value="0" label="0%">
                                  <option value="10">
                                  <option value="20">
                                  <option value="30">
                                  <option value="40">
                                  <option value="50" label="50%">
                                  <option value="60">
                                  <option value="70">
                                  <option value="80">
                                  <option value="90">
                                  <option value="100" label="100%">
                                </datalist></td>
                            <td><input id="impacto" type="text" onblur="validarSiNumeroI(this.value);" name="impacto"></td>
                            <td><textarea rows="5" cols="42" name="mitigacion" id="mitigacion" placeholder="Describe un plan de acción para este riesgo..."></textarea></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
                     <div class="field is-grouped is-grouped-centered">
                    <div class="control">
                        <button type="button" onclick="myFunction()" id="btnEnviar" class="button is-primary">Continuar</button>
                        
                    </div>   
                    </div>
            </div>
           

                
                </div>
            </form>
        </div>
      
    </section>
<script>

  

   function validarCampo(objeto){
    if(objeto.value==""){
        objeto.focus();
        objeto.placeholder="No dejar campos vacíos"; 
    }
}


 

</script>
<style type="text/css">
    #btnRiesgo{ background-color: #1081DA; margin-left: 60%}
    #riesgos{ margin-top:25px; display: none; }
    #cancelRegistro{ margin-left: 65% }
    option label{font-size: 9px}
    #btncajaFase, #btncajaLista{ background-color: #00cc00; width:120px; font-size: 11px; color: white}
    #btncajaFase:hover, #btncajaLista:hover{ background-color:#33ff33; color: white; }
    #fechaI, #fechaF{ width: 300px; }
    .file-input{ background-color: #1081DA }

    

</style>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/mostrarRiesgos.js"></script>
    <script src="js/desplegarTablaEntregable.js"></script>
    <script src="js/agregarBox.js"></script>
    <script src="js/validarCorreo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
   
</body>
</html>
<?php

?>