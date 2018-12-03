<!DOCTYPE html>
<html>
<head>
	<title>Factorial1pag</title>
</head>
<body>

<?php 

	if (!$_GET) {
		# code...
	

	echo <<<factorial
		<form method="get" action="ejercicio2-1.php">
			<h2>Introduce un número para sacar la suma de todos ellos</h2>
			<input type="number" name="numero">
			<input type="submit" name="Enviar">
		</form>

factorial;
}else{
	sumas();
}


	function sumas(){
			$num = $_GET['numero'];
			$res = 0;
		//echo $num;
			for ($x=1; $x <= $num ; $x++) { 
				echo $res . " + " .  $x . " = " ;
				$res = $res + $x;
				echo $res;
				echo "<br>";
			}

			echo "El resultado de sumar todos los números de: " . $num . " es: " . $res;
		}

		

 ?>
</body>
</html>