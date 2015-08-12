<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<title></title> 
</head> 
<body> 
<h1>CRUD BASICO PHP</h1><hr> 
<form name="datos" id="datos" method="post" action="guardar.php" > 
Identificación 
<br/><input name="id" /><br/> 
Primer nombre 
<br/><input name="pri_nom" /><br/> 
Primer apellio <br/> 
<input name="pri_ape" /> <br/> 
Dirección <br/> 
<input name="direccion" /><br/> 
Teléfono<br/> 
<input name="telefono" /><br/> 
Email<br/> 
<input name="email" size="40" /><br/><br/> 
<input type="submit" name="Guardar" value="Guardar"/> 
</form> 
</body> 
<?php 
echo "<a href=’consulta.php’>Vergistros</a>"; 
?> 
</html>