<!-- 9.	Crea una función que reciba dos parámetros, un carácter y el número que indicará el número de filas y columnas de la pirámide.
++++
+++
++
+

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
			<form method="get" action="ejercicio9.php">
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
		dibujo($n1,$esp);
		
	}
	
	function dibujo($a,$b){

		$c = $a;
		for ($x=0; $x < $a; $x++) { 
			for ($i=0; $i < $c ; $i++) { 
				echo $b;

			}
			$c--;
			echo "<br>";
			
		
		}
		
	}

	
	
 ?>	




</body>
</html>