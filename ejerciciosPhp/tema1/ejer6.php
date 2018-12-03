<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

/*Mostramos los números de los días del 1 a la fecha actual.
Para obtener el día de la fecha del servidor : date(“d”);
	do…..while
*/

	$dia = 1;
	$d = date("d");
	
	
	do{
		echo $dia ."<br>";
		$dia++;
	}while ( $dia < $d);
	echo $d;

?>
</body>
</html>