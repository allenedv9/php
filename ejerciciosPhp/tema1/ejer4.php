<!--Realizar el ejercicio con switch
Declarar 3 variables: $opcion, $n1,$n2
Si opción contiene una s, visualizar la suma de $n1 más $n2.
Si opción contiene una r, visualizar la resta de $n1 menos $n2.
Si  opción contiene una m, visualizar el producto de  $n1 por $n2,
Si  opción contiene una d,  visualizar el cociente de $n1 entre $n2,
Si opción no contiene ninguno de los valores anteriores, visualizar un mensaje de error.-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
	
	$opcion = "e";
	$n1 = 5;
	$n2 = 8;

	switch ($opcion) {
		case 's':
			echo $n1+$n2;
			break;
		case 'r':
			echo $n1-$n2;
			break;
		case 'm':
			echo $n1*$n2;
			break;
		case 'd':
			echo $n1/$n2;
			break;
		default:
		echo 'Error, la variable $opcion no representa ningun caso';
		break;
	}

?>

</body>
</html>