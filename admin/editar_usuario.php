  <?php 

  include 'conexion/datos.php';
  $id_empleado=$_GET['id'];

  $con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

  $res = mysqli_query($con, "SELECT Nombre_Empleado, Ap_Paterno, Ap_Materno, Fecha_Nac, Fecha_Ingr, Puesto, Telefono, Email FROM empleado WHERE ID_Empleado = '".$id_empleado."'");

  $aux = mysqli_fetch_array($res);

  $nombre=$aux['Nombre_Empleado'];
$apellido_paterno=$aux['Ap_Paterno'];
$apellido_materno=$aux['Ap_Materno'];
$fecha=$aux['Fecha_Nac'];
$fecha_ing=$aux['Fecha_Ingr'];
$puesto=$aux['Puesto'];
$celular=$aux['Telefono'];
$email=$aux['Email'];
  ?>

  <?php include('head.php') ?>
  <body>
  	<?php include('nav.php') ?>
  	<div class="container" style="min-height: 76.5vh;">
  		<form class="col s12" id="form1" action="conexion/usuario_editar.php" method="post" enctype="application/x-www-form-urlencoded" name="login_form">
  			<div class="container">
          <div class="card-panel">
            <div class="center-align">
              <h3>Editar Usuario</h3>
            </div>

            <div class="row">
              <div class="col s8 col-center divider"></div>
            </div>
            <div class="row left-align">
              <div class="col l12">
                <h5>Datos Generales</h5>
              </div>
            </div>

            <div class="row">

              <div class="col l4">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="nombre" type="text" class="validate" name="nombre" value="<?php echo $nombre; ?>" required>
                  <label for="nombre"> Nombre(s)</label>
                </div>      
              </div>

              <div class="col l4">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="apellido_paterno" type="text" class="validate" name="apellido_paterno" value="<?php echo $apellido_paterno; ?>" required>
                  <label for="apellido_paterno"> Apellido Paterno</label>
                </div>      
              </div>

              <div class="col l4">
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="apellido_materno" type="text" class="validate" name="apellido_materno" value="<?php echo $apellido_materno; ?>" required>
                  <label for="apellido_materno"> Apellido Materno</label>
                </div>      
              </div>

              <div class="col l4">
                <div class="input-field">
                  <i class="material-icons prefix">description</i>
                  <input id="fecha" type="text" class="validate" name="fecha" value="<?php echo $fecha; ?>" required>
                  <label for="fecha"> Fecha Nacimiento</label>
                </div>      
              </div>
              
              <div class="col l4">
                <div class="input-field">
                  <i class="material-icons prefix">description</i>
                  <input id="fecha_ing" type="text" class="validate" name="fecha_ing" value="<?php echo $fecha_ing; ?>" disabled>
                  <label for="fecha_ing"> Fecha Registro</label>
                </div>      
              </div>
            

                <div class="input-field col l4">
                  <select name="puesto" id="puesto" required>
                    <option value="" disabled selected>Seleccione un rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Medico">Médico</option>
                    
                  </select>
                  <label>Puesto</label>
                </div>
            </div>

            <div class="row left-align">
              <div class="col l12">
                <h5>Contacto</h5>
              </div>
            </div>

            <div class="row">
              <div class="col l6">
                <div class="input-field">
                  <i class="material-icons prefix">stay_primary_portrait</i>
                  <input id="celular" type="number" class="validate" name="celular"  value="<?php echo $celular; ?>" required>
                  <label for="celular"> Celular </label>
                </div>
              </div>

              <div class="col l6">
                <div class="input-field">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate" name="email"  value="<?php echo $email; ?>" required>
                  <label for="email"> E-mail </label>
                </div>
              </div>

              <div class="col l6">
                <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input id="password" type="password" class="validate" name="password" required>
                  <label for="password"> Contraseña </label>
                </div>
              </div>

              <div class="col l6">
                <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input id="password_confirmation" type="password" class="validate" name="password_confirmation" required>
                  <label for="password_confirmation"> Verifique la contraseña </label>
                </div>
              </div>

                            <div class="col l6 offset-l3">
                <div class="input-field">
                  <i class="material-icons prefix">lock</i>
                  <input id="password_admin" type="password" class="validate" name="password_admin" required>
                  <label for="password_admin"> Contraseña de Administrador </label>
                </div>
              </div>

              <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id_empleado;?>">

            </div>

            <div class="input-field center-align">
              <button type="submit" class="btn btn-large btn-block btn-block-large waves-effect waves-light">Actualizar</button>
            </div>
          </div>

        </div>
      </form>
      <?php
      error_reporting(E_ALL ^ E_NOTICE);
      if($_GET["error"]=="pass"){echo "<span style='COLOR: RED;'>Las contraseñas no coinciden, intentar de nuevo...</span>";}
      ?>
    </div>

    <?php include('footer.php') ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script>
      $(document).ready(function(){
       $(".button-collapse").sideNav({
       edge: 'right', // Choose the horizontal origin
       closeOnClick: true
     });

       $('.modal-trigger').leanModal();
       $('select').material_select();
      $(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion
    });
  </script>
</body>
</html>