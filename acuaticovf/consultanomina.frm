TYPE=VIEW
query=select concat(`acuaticovf`.`empleado`.`Nombre_Empleado`,\' \',`acuaticovf`.`empleado`.`AP_Paterno`,\' \',`acuaticovf`.`empleado`.`Ap_Materno`) AS `Nombre Completo`,`acuaticovf`.`empleado`.`Puesto` AS `Puesto`,`acuaticovf`.`nomina`.`Salario` AS `Salario` from (`acuaticovf`.`nomina` join `acuaticovf`.`empleado` on((`acuaticovf`.`nomina`.`ID_Empleado` = `acuaticovf`.`empleado`.`ID_Empleado`)))
md5=ba8b234a4ed330ce72c415fab7e52cd0
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=1
with_check_option=0
timestamp=2017-05-29 00:57:05
create-version=2
source=select concat(`empleado`.`Nombre_Empleado`,\' \',`empleado`.`AP_Paterno`,\' \',`empleado`.`Ap_Materno`) AS `Nombre Completo`,`empleado`.`Puesto` AS `Puesto`,`nomina`.`Salario` AS `Salario` from (`nomina` join `empleado` on((`nomina`.`ID_Empleado` = `empleado`.`ID_Empleado`)))
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_general_ci
view_body_utf8=select concat(`acuaticovf`.`empleado`.`Nombre_Empleado`,\' \',`acuaticovf`.`empleado`.`AP_Paterno`,\' \',`acuaticovf`.`empleado`.`Ap_Materno`) AS `Nombre Completo`,`acuaticovf`.`empleado`.`Puesto` AS `Puesto`,`acuaticovf`.`nomina`.`Salario` AS `Salario` from (`acuaticovf`.`nomina` join `acuaticovf`.`empleado` on((`acuaticovf`.`nomina`.`ID_Empleado` = `acuaticovf`.`empleado`.`ID_Empleado`)))
mariadb-version=100121
