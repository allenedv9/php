<!-- 7.	Crea una función que recibe 4 números como parámetros de entrada y devuelve un valor, la media de esos números..-->
<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>
</head>
<body>



<?php 


	if (!$_GET) {
		echo <<<txt
			<form method="get" action="ejercicio7.php">
				<h3>Introduce cuatro números para saber su media</h3>
				<input type="number" name="num1" step="any"><br>
				<input type="number" name="num2" step="any"><br>
				<input type="number" name="num3" step="any"><br>
				<input type="number" name="num4" step="any"><br>
				<input type="submit" name="" value="Sacar la media">
			</form>
txt;

	}else{
		$n1 = $_GET['num1'];
		$n2 = $_GET['num2'];
		$n3 = $_GET['num3'];
		$n4 = $_GET['num4'];
		echo "La media de los cuatro números es: " . media($n1,$n2,$n3,$n4);
		
	}
	
	function media($a,$b,$c,$d){
		return $media = ($a+$b+$c+$d)/4;
		
	}

	
	
 ?>	




</body>
</html>