<?php
$host="localhost";
$user="root";
$pass="";
$DB="PracticaPHPMsql";

#enlace =  mysql_connect('localhost', 'usuario_mysql', 'contraseña_mysql')
$conn = mysql_connect($host,$user,$pass)or die('No me pude conectar a la base de datos');

#msql_database("nombre_base_datos",$conexion)  SELECT * FROM `usuariosregistrados`

mysql_select_db($DB,$conn) or die('No pude seleccionar la base de datos');





?>
