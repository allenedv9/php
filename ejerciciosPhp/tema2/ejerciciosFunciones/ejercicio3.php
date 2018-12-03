<!-- Formulario para introducir 2 números y se debe visualizar el número mayor o el mensaje: son iguales.-->
<!DOCTYPE html>
<html>
<head>
	<title>El mayor</title>
</head>
<body>

	<?php 

	if (!$_GET) {
		
		echo <<<factorial
			<form method="get" action="ejercicio3.php">
				<h2>Introduce dos números para saber cual es el mayor</h2>
				<input type="number" name="num1">
				<input type="number" name="num2">
				<input type="submit" name="Enviar">
			</form>

factorial;

	}else{
		comprobar();
	}

	function comprobar(){

		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];

		if ($num1 > $num2) {
			echo "El número " . $num1 . " es mayor que el número " . $num2;
		}else if($num1 < $num2){
			echo "El número " . $num1 . " es menor que el número " . $num2;
		}else{
			echo "Los números son iguales";
		}
		
	}



	 ?>

</body>
</html>