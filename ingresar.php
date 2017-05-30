<!DOCTYPE html>
<html lang="en">

<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
     <title>Complejo Acuático</title>
    <link type="text/css" rel="stylesheet" href="css/estilo.css" />
    <link type="text/css" rel="stylesheet" href="css/materialize.css" />
    <script type="text/javascript" src="js/materialize.min.js"></script>
</head>

</head>

<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
        <!--<li><a><i class="material-icons left">person_pin</i>Bienvenido <?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]." ( #".$_SESSION["num_usuario"]." )"?></a></li>
        --></ul>
        <ul class="right hide-on-med-and-down">
          <li class=""><a href="inicio.php"><i class="material-icons left">assessment</i>Página de inicio</a></li>
          <li><a href=""><i class="material-icons left">shopping_cart</i></a></li>
          <li><a href="datos_personales.php"><i class="material-icons left">settings</i>Datos personales</a></li>
          <li><a href="./conexion/salir.php"><i class="material-icons left">input</i>Salir</a></li>
        </ul>
      </div>
    </nav>
  </div>
    

    <!-- Page Content -->
    <div class="">

        <!-- Page Heading/Breadcrumbs -->
      
        
        <!-- /.row -->

        <!-- Content Row -->
        <div class="">
            <div class="">
               <form id="alta" action="validar.php" method="post">
             Id de empleado:<input type="text" name="id_empleado" required placeholder="id_empleado"/><br>
             Contraseña:<input type="password" name="contrasena" required placeholder="contraseña"/><br>
             <input type="submit" value="Enviar" name="login">
         </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Complejo Acuático 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>