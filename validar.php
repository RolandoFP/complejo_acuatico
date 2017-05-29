<?php
session_start();
include "conexion.php";

 extract($_POST);
    $query="SELECT puesto FROM empleado WHERE ID_Empleado='$id_empleado' and contrasena='$contrasena'";
    $registro=mysqli_query($conexion,$query);
          if($reg=mysqli_fetch_array($registro)){
              //echo "entró";
              switch($reg['puesto']){
                  case "Administrador":
                      $_SESSION['id_empleado']=$res->id_empleado;
                      header("location:administrador.php");
                      break;
                  case "Administrativo":
                      $_SESSION['id_empleado']=$res->id_empleado;
                      header("location:administrativo.php");
                      break;
                  case "Medico":
                  $_SESSION['id_empleado']=$res->id_empleado;
                      header("location:medico.php");
                      break;

              }
          }else{
              $error = "El nombre de usuario  y/o la contraseña no coinciden";
              header("location:ingresar.php?error=$error");
              
          }
//"INSERT INTO carrito (Medicina,Precio,Precio_T,Cantidad) values ('$nombre','$precio','$precio','1')";
?>