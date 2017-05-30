<?php
session_start();

include 'datos.php';

$password_administrador=$_POST['password_administrador'];
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];
$id=$_POST['id'];

if($password != $password_confirmation){
	header('Location: ../empleados.php?error=pass');
}
else{

	$con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

	$res = mysqli_query($con, "SELECT ID_Empleado, contrasena FROM empleado WHERE ID_Empleado = '".$_SESSION["id_empleado"]."'");

	if(mysqli_num_rows($res)>0){
		$aux = mysqli_fetch_array($res);

		if($aux["contrasena"]==sha1($password_administrador)){
			$res = mysqli_query($con, "UPDATE empleado SET contrasena = '".sha1($password)."' where ID_Empleado = '".$id."'");

			header('Location: ../empleados.php?cambio=correcto');
		}
		else{
			header('Location: ../empleados.php?error=passadmin');
		}
	}
}
?>