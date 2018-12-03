<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Crear y eliminar carpetas</h2>
<form method="get">
	<input type="submit" name="crear" value="crear">
	<input type="submit" name="eliminar" value="eliminar">
</form>
<?php 
	if (isset($_GET['crear'])) {
		mkdir("prueba1");
		echo "Se ha creado una carpeta";
	}
	if (isset($_GET['eliminar'])) {
		rmdir("prueba1");
		echo "Se ha eliminado una carpeta";
	}




 ?>
</body>
</html>