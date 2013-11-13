<?php
	require_once("sesion.class.php");

	$sesion = new sesion();
	
	if( isset($_POST["iniciar"]) )
	{
		
		$usuario = $_POST["usuario"];
		$password = $_POST["contrasenia"];
		
		if(validarUsuario($usuario,$password) == 2)
		{			
			$sesion->set("usuario",$usuario);
			
			header("location: principal.php");
		}
    if(validarUsuario($usuario,$password) == 1)
    {     
      $sesion->set("usuario",$usuario);
      
      header("location: sudosu.php");
    }
		else 
		{
			echo "Verifica tu nombre de usuario y contrase�a";
		}
	}
	
	function validarUsuario($usuario, $password)
	{
		$conexion = new mysqli("localhost","root","","usuarios");
		$consulta = "select contrasenia,tipo_usuario from usuario where Nombre = '$usuario';";
		
		$result = $conexion->query($consulta);
		
		if($result->num_rows > 0)
		{
			$fila = $result->fetch_assoc();
			if( strcmp($password,$fila["contrasenia"]) == 0 && $fila["tipo_usuario"]==2)
				return 2;
      if( strcmp($password,$fila["contrasenia"]) == 0 && $fila["tipo_usuario"]==1)
        return 1; 						
			else					
				return false;
		}
		else
				return false;
	}

?>


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
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">ETN-921</a>
        </div>
        <div class="navbar-collapse collapse">
          <form name="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="navbar-form navbar-right">
            <div class="form-group">
              <input name="usuario" type="text" placeholder="Usuario" class="form-control">
            </div>
            <div class="form-group">
              <input name="contrasenia" type="password" placeholder="Contraseña" class="form-control">
            </div>
            <input type="submit" name ="iniciar" class="btn btn-success" value="Iniciar Sesion"/>
          </form>
        </div><!--/.navbar-collapse -->
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
