<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
	<style>
		*{
		background-color: #5baec1;
	}
		.uno{
			display: flex;
		}
			p{
				margin: 0px;
			}
	</style>

</head>
<body>
	<?php 

		$num = $_GET['numero'];
		$multi = 1;
	

		echo "<form action='comprobacion.php' method='get'>";
			while($multi <= 10){

				echo(($num)." x ".($multi)." = ");
				echo "<input type='text' name='$multi'>";
				echo "<br>";
				$multi++;
			}
		echo '<input type="submit" name="Comprobar" value="Comprobar"> <br>' ;
		echo '<input type="hidden" value="'.$num.'" name = "numero"></form>';

	 
	?>

</body>
</html>