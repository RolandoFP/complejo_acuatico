<?php

include 'datos.php';

$id_empleado=$_POST['id_empleado'];
$password_usuario=$_POST['password'];

$con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

$res = mysqli_query($con, "SELECT ID_Empleado, Nombre_Empleado, Ap_Paterno, Ap_Materno, Puesto, contrasena FROM empleado WHERE ID_Empleado = '".$id_empleado."' AND contrasena = '".sha1($password_usuario)."'");

if(mysqli_num_rows($res)>0){
    session_start();

    $aux = mysqli_fetch_array($res);

    $_SESSION["autentificado"]=true;                     
    $_SESSION["id_empleado"]=$aux["ID_Empleado"];
    $_SESSION["nombre"]=$aux["Nombre_Empleado"];
    $_SESSION["paterno"]=$aux["Ap_Paterno"];
    $_SESSION["materno"]=$aux["Ap_Materno"];
    $_SESSION["puesto"]=$aux["Puesto"];

    header('Location: ../panel.php');
}
else{
    header('Location: ../../index.php?error=si');
}
?>