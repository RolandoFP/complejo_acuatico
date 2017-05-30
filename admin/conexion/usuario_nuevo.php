<?php
session_start();

include 'datos.php';

date_default_timezone_set("America/Mexico_city"); 

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$fecha=$_POST['fecha'];
$fecha_ing=date("Y-m-d");
$puesto=$_POST['puesto'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];

if($password != $password_confirmation){
	header('Location: ../nuevo_usuario.php?error=pass');
}
else{
	$con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

	$result = mysqli_query($con, "SELECT MAX(ID_Empleado) as ID FROM empleado");
	if ($row = mysqli_fetch_array($result)){
		$id = $row["ID"];

		$id++;
	}

	$query = mysqli_query($con, "INSERT INTO empleado VALUES ( ".$id.", '".$nombre."', '".$apellido_paterno."', '".$apellido_materno."','".$fecha."','".$fecha_ing."','".$puesto."','".sha1($password)."', '".$celular."', '".$email."')");
	
	$res = mysqli_query($con, "SELECT ID_Empleado FROM empleado WHERE Email = '".$email."'");

	if(mysqli_num_rows($res)>0){
		header('Location: ../empleados.php?registro=correcto');
	}
	else{
		header('Location: ../empleados.php?registro=error');
	}
}
?>