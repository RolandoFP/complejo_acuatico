TYPE=VIEW
query=select `acuaticovf`.`alumno`.`ID_Alumno` AS `id_Alumno`,concat(`acuaticovf`.`alumno`.`Nombre_Alumno`,\' \',`acuaticovf`.`alumno`.`Ap_Paterno`,\' \',`acuaticovf`.`alumno`.`Ap_Materno`) AS `Nombre Completo`,`acuaticovf`.`alumno`.`Fecha_Nac` AS `Fecha_Nac`,`acuaticovf`.`alumno`.`Fecha_Ingr` AS `Fecha_ingr`,`acuaticovf`.`alumno`.`Telefono` AS `Telefono`,`acuaticovf`.`alumno`.`Correo_Electronico` AS `Correo_Electronico`,`acuaticovf`.`alumno`.`Nivel_Nado` AS `Nivel_Nado` from `acuaticovf`.`alumno`
md5=4d6d0fd9264fd9097ddb543fcd2ac52a
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-05-29 00:57:04
create-version=2
source=select `alumno`.`ID_Alumno` AS `id_Alumno`,concat(`alumno`.`Nombre_Alumno`,\' \',`alumno`.`Ap_Paterno`,\' \',`alumno`.`Ap_Materno`) AS `Nombre Completo`,`alumno`.`Fecha_Nac` AS `Fecha_Nac`,`alumno`.`Fecha_Ingr` AS `Fecha_ingr`,`alumno`.`Telefono` AS `Telefono`,`alumno`.`Correo_Electronico` AS `Correo_Electronico`,`alumno`.`Nivel_Nado` AS `Nivel_Nado` from `alumno`
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select `acuaticovf`.`alumno`.`ID_Alumno` AS `id_Alumno`,concat(`acuaticovf`.`alumno`.`Nombre_Alumno`,\' \',`acuaticovf`.`alumno`.`Ap_Paterno`,\' \',`acuaticovf`.`alumno`.`Ap_Materno`) AS `Nombre Completo`,`acuaticovf`.`alumno`.`Fecha_Nac` AS `Fecha_Nac`,`acuaticovf`.`alumno`.`Fecha_Ingr` AS `Fecha_ingr`,`acuaticovf`.`alumno`.`Telefono` AS `Telefono`,`acuaticovf`.`alumno`.`Correo_Electronico` AS `Correo_Electronico`,`acuaticovf`.`alumno`.`Nivel_Nado` AS `Nivel_Nado` from `acuaticovf`.`alumno`
mariadb-version=100121
