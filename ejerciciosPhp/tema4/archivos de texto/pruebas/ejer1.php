<!DOCTYPE html>
<html>
<head>
	<title>Lectura de ficheros</title>
</head>
<body>

	<?php 

		$archivo = fopen("archivo01.txt", "r") or die("No se pudo abrir el archivo");
		$info = file("archivo01.txt");

		foreach ($info as $indice => $valor) {
			echo $valor;
			echo "<br>";
		}

		fclose($archivo);


	?>

</body>
</html>