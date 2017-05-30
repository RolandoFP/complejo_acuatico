<?php
session_start();

include 'datos.php';

$password_administrador=$_POST['password_administrador'];
$id_empleado=$_POST['id_eliminar'];

$con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

$res = mysqli_query($con, "SELECT contrasena FROM  empleado WHERE ID_Empleado = '".$_SESSION["id_empleado"]."'");

if(mysqli_num_rows($res)>0){
	$aux = mysqli_fetch_array($res);

	if($aux["contrasena"]==sha1($password_administrador)){

		$query = mysqli_query($con, "DELETE FROM empleado WHERE ID_Empleado = ".$id_empleado);

		header('Location: ../empleados.php?eliminar=correcto');
		
	}
	else{
		header('Location: ../empleados.php?error=passadmin');
	}
}
?>