<!DOCTYPE html>
<html>
<head>
	<title>Todo En Uno</title>
	<meta charset="utf-8">
</head>
<body>

<?php
	if (!$_GET) {

// Ingresar numero para multiplicar
echo <<<txt
	<form action="todoEnUno.php" method="get">
		<h2>Tabla de Multiplicar del: </h2>
		<input type="number" name="numero" placeholder="Ingresa un número">
		<input type="submit" name="Enviar">
	</form>
txt;
}else
	
	 if(isset($_GET['Enviar'])){
// Generar tabla de multiplicar

	$num = $_GET['numero'];
	$multi = 1;
	
		echo "<form action='todoEnUno.php' method='get'>";
			while($multi <= 10){

				echo(($num)." x ".($multi)." = ");
				echo "<input type='text' name='$multi'>";
				echo "<br>";
				$multi++;
			}
		echo '<input type="submit" name="Comprobar" value="Comprobar"> <br>' ;
		echo '<input type="hidden" value="'.$num.'" name = "numero">
		</form>';

	}else{

// Gnerar comprobacion

		$num = $_GET['numero'];
		$i = 1;
			

		while ($i <= 10) {
			$n = $_GET[$i];
			if ($n == $num*$i) {
				echo $num. "x" .$i. "  = " .$n. "<img src='v.png' width='16px' ><br>";
				
			}else{
				echo $num. "x" .$i. "  = <img src='x.png' width='16px' ><br>";
			}
			$i++;
		}

	}
?>
</body>
</html>