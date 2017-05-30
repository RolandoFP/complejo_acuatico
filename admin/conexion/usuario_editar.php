<?php
session_start();

include 'datos.php';

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$fecha=$_POST['fecha'];
$fecha_ing=$_POST['fecha_ing'];
$puesto=$_POST['puesto'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];
$password_administrador=$_POST['password_admin'];
$id_empleado=$_POST['id'];


if($password != $password_confirmation){
	header('Location: ../empleados.php?error=pass');
}

else{

	$con = mysqli_connect($host, $user, $pass, $db) or die ('No se pudo conectar: '.mysqli_error());

	$res = mysqli_query($con, "SELECT contrasena FROM empleado WHERE ID_Empleado = '".$_SESSION["id_empleado"]."'");

	if(mysqli_num_rows($res)>0){
		$aux = mysqli_fetch_array($res);

		if($aux["contrasena"]==sha1($password_administrador)){

			$query = mysqli_query($con, "UPDATE empleado SET Nombre_Empleado = '".$nombre."', Ap_Paterno = '".$apellido_paterno."', Ap_Materno = '".$apellido_materno."', Fecha_Nac = '".$fecha."', Puesto = '".$puesto."', Telefono = '".$celular."', Email = '".$email."', contrasena = '".sha1($password)."' where ID_Empleado = '".$id_empleado."'");

				header('Location: ../empleados.php?cambio=correcto');
			}

			else{
				header('Location: ../empleados.php?error=passadmin');
		}
	}
}
?>