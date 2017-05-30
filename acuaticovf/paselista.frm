TYPE=VIEW
query=select `acuaticovf`.`alumno`.`ID_Alumno` AS `ID_Alumno`,`acuaticovf`.`pase_lista`.`ID_Clase` AS `ID_Clase`,`acuaticovf`.`pase_lista`.`Asistencia` AS `Asistencia`,`acuaticovf`.`alumno`.`Nombre_Alumno` AS `Nombre_Alumno`,`acuaticovf`.`alumno`.`Ap_Paterno` AS `Ap_Paterno`,`acuaticovf`.`alumno`.`Ap_Materno` AS `Ap_Materno` from (`acuaticovf`.`alumno` join `acuaticovf`.`pase_lista`) where (`acuaticovf`.`alumno`.`ID_Alumno` = `acuaticovf`.`pase_lista`.`ID_alumno`)
md5=5ee7d7184114535bded40c8d72042cc2
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-05-29 00:57:05
create-version=2
source=select `alumno`.`ID_Alumno` AS `ID_Alumno`,`pase_lista`.`ID_Clase` AS `ID_Clase`,`pase_lista`.`Asistencia` AS `Asistencia`,`alumno`.`Nombre_Alumno` AS `Nombre_Alumno`,`alumno`.`Ap_Paterno` AS `Ap_Paterno`,`alumno`.`Ap_Materno` AS `Ap_Materno` from (`alumno` join `pase_lista`) where (`alumno`.`ID_Alumno` = `pase_lista`.`ID_alumno`)
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `acuaticovf`.`alumno`.`ID_Alumno` AS `ID_Alumno`,`acuaticovf`.`pase_lista`.`ID_Clase` AS `ID_Clase`,`acuaticovf`.`pase_lista`.`Asistencia` AS `Asistencia`,`acuaticovf`.`alumno`.`Nombre_Alumno` AS `Nombre_Alumno`,`acuaticovf`.`alumno`.`Ap_Paterno` AS `Ap_Paterno`,`acuaticovf`.`alumno`.`Ap_Materno` AS `Ap_Materno` from (`acuaticovf`.`alumno` join `acuaticovf`.`pase_lista`) where (`acuaticovf`.`alumno`.`ID_Alumno` = `acuaticovf`.`pase_lista`.`ID_alumno`)
mariadb-version=100121
