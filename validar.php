<?php
session_start();
include "conexion.php";

 extract($_POST);
    $query="SELECT puesto FROM empleado WHERE ID_Empleado='$id_empleado' and contraseña='$contraseña'";
    $registro=mysqli_query($conexion,$query);
          if($reg=mysqli_fetch_array($registro)){
              //echo "entró";
              switch($reg['Tipo']){
                  case 1:
                      $_SESSION['userid']=$res->id_empleado;
                      header("location:ingresar.html");
                      break;
                  case 2:
                      $_SESSION['userid']=$res->id_empleado;
                      $c1="INSERT INTO empleado (id_empleado) values('$id_empleado')";
                      $r1=$conexion->query($c1); 
                      //echo "Hola";
                      header("location:user.php");
                      break;
              }
          }else{
              $error = "El nombre de usuario  y/o la contraseña no coinciden";
              header("location:ingresar.php?error=$error");
              
          }
//"INSERT INTO carrito (Medicina,Precio,Precio_T,Cantidad) values ('$nombre','$precio','$precio','1')";
?>