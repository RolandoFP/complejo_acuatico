<?php
session_start();
include "conexion.php";

 extract($_POST);
    $query="SELECT Tipo FROM usuario WHERE Email='$email' and Password='$pass'";
    $registro=mysqli_query($conexion,$query);
          if($reg=mysqli_fetch_array($registro)){
              //echo "entró";
              switch($reg['Tipo']){
                  case 1:
                      $_SESSION['userid']=$res->idusuario;
                      header("location:admin.php");
                      break;
                  case 2:
                      $_SESSION['userid']=$res->idusuario;
                      $c1="INSERT INTO activo (email) values('$email')";
                      $r1=$conexion->query($c1); 
                      //echo "Hola";
                      header("location:user.php");
                      break;
              }
          }else{
              $error = "El nombre de usuario  y/o la contraseña no coinciden";
              header("location:Login.php?error=$error");
              
          }
//"INSERT INTO carrito (Medicina,Precio,Precio_T,Cantidad) values ('$nombre','$precio','$precio','1')";
?>