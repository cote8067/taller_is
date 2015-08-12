<?php
$id=$_POST[‘id’]; 
$pri_nom=$_POST[‘pri_nom’]; 
$pri_ape=$_POST[‘pri_ape’]; 
$direccion=$_POST[‘direccion’]; 
$telefono=$_POST[‘telefono’]; 
$email=$_POST[’email’];

include("configuracion.php");

$query="select id from personas where id=".$id;

$result=mysql_query($query) or die("Error en la instruccion SQL");

if (mysql_num_rows($result) > 0) {

echo "El registro ya se encuentra insertado </br>"; 
echo "<a href=’index.php’>Atras</a

} elseif (mysql_num_rows($result) > 0) {

$query="insert into personas(id,pri_nom,pri_ape,direccion,telefono,email) 
values($id,’$pri_nom’,’$pri_ape’,’$direccion’,’$telefono’,’$email’)"; 
$result=mysql_query($query) or die("Error ejecutar la instrucción SQL ".mysql_error()); 
echo "Registro guardado<br/>"; 
echo "<a href=’index.php’>Atras</a 
mysql_close();

} 
?>