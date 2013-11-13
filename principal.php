<?php
  require_once("sesion.class.php");
  
  $sesion = new sesion();
  $usuario = $sesion->get("usuario");
  
  if( $usuario == false )
  { 
    header("Location: login.php");    
  }
  else 
  {
  ?>
  <HTML><head>
  <title></title>
  </head>
  <body>
  
  </body>
  </HTML>
  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="row">
      <div class="col-md-4">
        <div class="navbar-header">
            <a class="navbar-brand" >ETN-921</a>
            </div>
      </div>
      <div class="col-md-2">
        <div class="navbar-header">
            <a class="navbar-brand" ></a>
            </div>
      </div>
     <div class="col-md-2">
        <div class="navbar-header">
            <a class="navbar-brand" >Hola: <?php echo $sesion->get("usuario"); ?></a>
            </div>
      </div>
      <div class="col-md-4">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="cerrarsesion.php"> Cerrar Sesion </a></li>
            </ul>
            </div><!--/.navbar-collapse -->
      </div>
    </div>        
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-8">
          <h3>Video de Prueba</h3>
          <video width="320" height="240" controls>
            <source src="video/test.mp4" type="video/mp4">
          </video>
          <p><a class="btn btn-primary" href="video/test.mp4" download="myvideo">Descargar &raquo;</a></p>
        </div>
      </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->


      <footer>
        <b>Diseñado por: </b>
        <ul>
          <li>Gregory Peck Bustamante Rojas</li>
          <li>Hernando Calle Valencia</li>
        </ul>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


  <?php 
  } 
?>