<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	/*Generar un valor aleatorio entre 1 y 100, visualizar desde 1 hasta el valor generado (de uno en uno).Función para generar números aleatorios desde 1 hasta 100 : rand(1,100)*/

	$aleatorio = rand(1,100);
	$num = 1;

	echo "El número aleatorio es: ".$aleatorio."<br>";
	do{
		echo $num."<br>";
		$num++;
	}while($num <= $aleatorio);
?>
</body>
</html>