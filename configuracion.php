<?php 
//Datos del servidor y base de datos 
$server="54.187.145.90"; 
$username="tomas"; 
$password="tomas"; 
$database_name="db"; 
//Establecemos la conexi�n con el servidor 
$conexion=mysql_connect($server, $username, $password) 
or die("Problemas al tratar de establecer la conexion"); 
//Seleccionamos la base de datos 
$bd_sel=mysql_select_db($database_name) or die("Problemas al seleccionar la base de datos"); 
?>