<!--4.	Escribir el código necesario para que, dado un numero n, calcule su cuadro (n2) y su cubo (n3). (en funciones independientes)
pow(base, exponente), y si tienes la versión P.H.P 5.6 ó superior , puedes utilizar el operador **,  es decir: base**exponente.
-->
<!DOCTYPE html>
<html>
<head>
	<title>cuadrado y cubo</title>
</head>
<body>


<?php 

	if (!$_GET) {
		echo <<<txt
		<h2>Introduce un número para saber cual es cuadrado y su cubo</h2>
		<form action="ejercicio4.php" method="get">
			<input type="number" name="numero">
			<input type="submit" name="comprobar">
		</form>
txt;

	}else{
		cuadro();
		cubo();
	}
	
	

	function cuadro(){
		$num = $_GET['numero'];
		echo " El cuadrado del número " . $num . " es: " . pow($num,2) . "<br>";
	}
	
	function cubo(){
		$num = $_GET['numero'];
		echo " El cubo del número " . $num . " es: " . pow($num,3);
	}


 ?>	




</body>
</html>