<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	echo "<b>Ahora se lee todo con fread()</b><br>";
	$archivo = fopen("archivo01.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;
	$lectura = fread($archivo, filesize("archivo01.txt"));
	echo utf8_encode($lectura);
	fclose($archivo);

	?>

</body>
</html>