  <?php include('head.php') ?>
  <body>
    <?php include('nav.php') ?>

    <div class="container" style="min-height: 76.5vh;">
     <div class="card-panel">
      <div class="row">
       <div class="col push-s1 s10 center-align">
        <h4>Empleados</h4>
      </div>
      <div class="col pull-s1 s1">
        <a class="btn-floating btn-large waves-effect waves-light green tooltipped" data-position="right" data-delay="50" data-tooltip="Nuevo Usuario" href="nuevo_usuario.php"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="row">
     <div class="col s8 col-center divider"></div>
   </div>
   <div class="row">
     <form class="col s12" id="form1" action="empleados.php" method="post" enctype="application/x-www-form-urlencoded" name="login_form">
       <div class="col l6 offset-l4 input-field mt-0">
        <i class="material-icons prefix">search</i>
        <input id="busqueda" type="text" class="validate" name="palabra_txt">
        <label for="busqueda">(Id, Nombre, Apellidos, Puesto)</label>
      </div>
      <div class="col l2">
        <button class="btn waves-effect waves-light" type="submit" style=" width: 100%;">Buscar<i class="mdi-action-lock-open right"></i></button>
      </div>
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    if($_GET["registro"]=="correcto"){echo "<span style='COLOR: GREEN;'>Se ha añadido el usuario de forma exitosa</span>";}
    if($_GET["registro"]=="error"){echo "<span style='COLOR: RED;'>Error: Hubo un problema al registrar el usuario, intente de nuevo...</span>";}
    if($_GET["cambio"]=="correcto"){echo "<span style='COLOR: GREEN;'>Se han actualizado los datos de forma exitosa</span>";}
    if($_GET["cambio"]=="incorrecto"){echo "<span style='COLOR: RED;'>Error: No se han podido actualizar los datos, intente de nuevo...</span>";}
    if($_GET["eliminar"]=="correcto"){echo "<span style='COLOR: GREEN;'>Se ha borrado el usuario de forma exitosa</span>";}
    if($_GET["eliminar"]=="error"){echo "<span style='COLOR: RED;'>Error: Hubo un problema al intentar eliminar el empleado seleccionado...</span>";}
    if($_GET["error"]=="pass"){echo "<span style='COLOR: RED;'>Error: Las contraseñas no coinciden...</span>";}
    if($_GET["error"]=="passadmin"){echo "<span style='COLOR: RED;'>Error: La contraseña de administrador es errónea...</span>";}
    ?>
  </div>
  <table class="responsive-table centered">
   <thead>
    <tr>
     <th data-field="id">Id</th>
     <th data-field="name">Nombre</th>
     <th data-field="fecha_ingreso">Fecha Ingreso</th>
     <th data-field="email">E-mail</th>
     <th data-field="puesto">Puesto</th>
     <th data-field="option">Opciones</th>
   </tr>
 </thead>

 <?php 
 error_reporting(E_ALL ^ E_NOTICE);
 include 'conexion/datos.php';

 $con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

 $palabra=$_POST['palabra_txt'];

 $busqueda = trim($palabra, " \t.");

 $personas = mysqli_query($con, "SELECT ID_Empleado, Nombre_Empleado, Ap_Paterno, Ap_Materno, Fecha_Ingr, Puesto, Email FROM empleado WHERE ID_Empleado > 0 and (ID_Empleado like '%".$busqueda."%' or Nombre_Empleado like '%".$busqueda."%' or Ap_Paterno like '%".$busqueda."%' or Ap_Materno like '%".$busqueda."%' or Puesto like '%".$busqueda."%') ORDER BY ID_Empleado DESC");

 if ($row = mysqli_fetch_array($personas)){
  echo "<tbody> \n";
  do {
    echo "
    <tr>
     <td>".$row["ID_Empleado"]."</td>
     <td>".$row["Nombre_Empleado"]." ".$row["Ap_Paterno"]." ".$row["Ap_Materno"]."</td>
     <td>".$row["Fecha_Ingr"]."</td>
     <td>".$row["Email"]."</td>
     <td>".$row["Puesto"]."</td>

     <td>
       <a href='editar_usuario.php?id=".$row["ID_Empleado"]."' class='btn-floating btn-small waves-effect waves-light amber accent-3 mr-5 tooltipped' data-position='right' data-delay='50' data-tooltip='Editar'><i class='material-icons'>edit</i></a>";

       if($_SESSION["id_empleado"] != $row["ID_Empleado"]){
        echo "<a class='btn-floating btn-small waves-effect waves-light  red darken-1 mr-5 tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar' onclick='eliminar(".$row["ID_Empleado"].", \"".$row["Nombre_Empleado"]." ".$row["Ap_Paterno"]."\")'><i class='material-icons'>delete</i></a>";
      }
      echo "
      <a class='btn-floating btn-small waves-effect waves-light  grey darken-1 tooltipped' data-position='right' data-delay='50' data-tooltip='Cambiar Contraseña' onclick='change_password(".$row["ID_Empleado"].", \"".$row["Nombre_Empleado"]." ".$row["Ap_Paterno"]."\")'><i class='material-icons'>vpn_key</i></a>
    </td>
  </tr>";
} while ($row = mysqli_fetch_array($personas));
echo "</tbody> \n";
} else { 
  echo "<span style='COLOR:red;'> ¡ No se ha encontrado ningun registro !</span>";
}
?>

</table>

<div id="change_password" class="modal plr-10">
  <div class="modal-content">
    <div class="row">
      <div class="col l5 center">
      <h5>Cambiar contraseña para <br><span id="cp_nombre"></span></h5>
        <div class="divider"></div>     
      </div>
      <div class="col l7">
        <form class="col s12" id="form_changep" action="conexion/change_password.php" method="post" enctype="application/x-www-form-urlencoded" name="form_changep">

          <div class="input-field">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password_admin" type="password" class="validate" name="password_administrador" required>
            <label for="password_admin">Contraseña de administrador</label>
          </div>

          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="password" type="password" class="validate" name="password" required>
            <label for="password">Nueva contraseña</label>
          </div>

          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="password_confirmation" type="password" class="validate" name="password_confirmation" required>
            <label for="password_confirmation">Confirme la nueva contraseña</label>
          </div>

          <input id="id" type="hidden" class="validate" name="id">

          <div class="input-field right-align">
            <button href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" type="reset">Cerrar</button>
            <button type="submit" class="btn waves-effect btn-block waves-light green">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div id="eliminar_usuario" class="modal plr-10">
  <div class="modal-content">
    <div class="row">
      <div class="col l12 center">
        <h5>Está seguro que desea eliminar el usuario <span id="eliminar_nombre"></span>?</h5>
        <div class="divider"></div>     
      </div>
      <div class="col l12">
        <form class="col s12" id="form_changep" action="conexion/usuario_eliminar.php" method="post" enctype="application/x-www-form-urlencoded" name="form_changep">

          <div class="input-field">
            <i class="material-icons prefix">vpn_key</i>
            <input id="password_admin" type="password" class="validate" name="password_administrador" required>
            <label for="password_admin">Contraseña de administrador</label>
          </div>

          <input id="id_eliminar" type="hidden" class="validate" name="id_eliminar">

          <div class="input-field right-align">
            <button href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" type="reset">Cancelar</button>
            <button type="submit" class="btn waves-effect btn-block waves-light green">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

</div>
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

  function change_password(id, nombre) {
    $("#cp_nombre").html(nombre);
    $('#id').val(id);
    $("#change_password").openModal();
  }
  
  function eliminar(id, nombre) {
    $("#eliminar_nombre").html(nombre);
    $('#id_eliminar').val(id);
    $("#eliminar_usuario").openModal();
  }
</script>
</body>
</html>
