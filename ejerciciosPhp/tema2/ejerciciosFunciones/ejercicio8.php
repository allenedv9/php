<!-- 8.	Crea una función que reciba dos parámetros, un carácter (que puede ser cualquiera) y un número, la función debe mostrar el cuadrado con tantas filas y columnas como indique el número. 
Por  ejemplo: 4  +
++++
++++
++++
++++
-->
<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>
</head>
<body>



<?php 


	if (!$_GET) {
		echo <<<txt
			<form method="get" action="ejercicio8.php">
				<h3>Introduce un número y un carácter especial</h3>
				<p>un número</p>
				<input type="number" name="n1" step="any"><br>
				<p>un carácter</p>
				<input type="text" name="carac" ><br><br>
				<input type="submit" name="" value="Dibujo">
			</form>
txt;

	}else{
		$n1 = $_GET['n1'];
		$esp = $_GET['carac'];
		echo dibujo($n1,$esp);
		
	}
	
	function dibujo($a,$b){

		for ($x=0; $x < $a; $x++) { 
			for ($i=0; $i <$a ; $i++) { 
				echo $b;
			}
			echo "<br>";
		
		}
		
	}

	
	
 ?>	




</body>
</html>