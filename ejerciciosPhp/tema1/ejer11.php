<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	/*Obtener la tabla del 2 con for : 2-4-6-8-10-12-14-16-18-20-
Colocar al principio del programa la fecha del servidor; con la función date(“d|m|Y”);*/

		echo "<b>fecha de hoy  </b>";
		echo date("d|m|Y");
		echo "<br>";
		echo "<hr>";

		$multi = 2;
		

		for ($x=1; $x <= 10; $x++) { 
			echo $multi."x".$x."=".$multi*$x."<br>";
			
		}

	?>
</body>
</html>