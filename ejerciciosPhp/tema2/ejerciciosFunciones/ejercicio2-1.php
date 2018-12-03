<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body>

<?php 


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

	sumas();

 ?>
</body>
</html>