<header>
  <ul id="user_options" class="dropdown-content">
    <li><a href="conexion/salir.php">Salir</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper grey darken-3">
      <div class="container">
        <a href="" class="brand-logo mt-5"><img class="responsive-img" height="50px" src="../images/logo 2.png" style="max-width: 50px;"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="panel.php">Inicio</a></li>
          <?php 
          if($_SESSION["puesto"]=="Administrador"){
            echo "<li><a href='empleados.php'>Empleados</a></li>";
          }

          if($_SESSION["puesto"]=="Administrador" || $_SESSION["puesto"]=="Medico" || $_SESSION["puesto"]=="Administrativo"){
            echo "<li><a href='alumnos.php'>Alumnos</a></li>";
          }
          
          if($_SESSION["puesto"]=="Administrador" || $_SESSION["puesto"]=="Administrativo" ){
            echo "<li><a href='nomina.php'>Nomina</a></li>";
          }
          ?>

          <li><a class="dropdown-button" href="#!" data-activates="user_options"><?php echo $_SESSION["nombre"]." ".$_SESSION["paterno"]; ?><i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
      <ul class="center-align side-nav" id="mobile-demo">
        <div class="row mb-0">
          <div class="col s10 col-center mt-30">
            <a href="">
              <img class="responsive-img" src="../images/logo 2.png" style="height: 50px;">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col s8 col-center divider"></div>
        </div>
        <li><a href="panel.php">Inicio</a></li>
          <?php 
          if($_SESSION["puesto"]=="Administrador"){
            echo "<li><a href='empleados.php'>Empleados</a></li>";
          }

          if($_SESSION["puesto"]=="Administrador" || $_SESSION["puesto"]=="Medico" || $_SESSION["puesto"]=="Administrativo"){
            echo "<li><a href='#!'>Alumnos</a></li>";
          }
          
          if($_SESSION["puesto"]=="Administrador" || $_SESSION["puesto"]=="Administrativo" ){
            echo "<li><a href='#!'>Nomina</a></li>";
          }
          ?>
        <li><a href="conexion/salir.php">Salir de la sesión</a></li>
      </ul>
    </div>
  </nav>
</header>