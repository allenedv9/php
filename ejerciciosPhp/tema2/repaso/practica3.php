<?php 


 
	function generarAleatorios(){
					
			$valores = array();
			$x = 0;
			while ( $x < 4) {
				$aleatorio = mt_rand(0,5);
				if (!in_array($aleatorio, $valores)) {
					array_push($valores, $aleatorio);
					$x++;
				}
			}

			return $valores;

	}
	$num = generarAleatorios();
	

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Juego</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 
	<div class="formulario">
		<form method="GET" action= "<?php echo $_SERVER['PHP_SELF'] ?>">
			<input type="number" name="n1" max="9" min="0" required>
			<input type="number" name="n2" max="9" min="0" required>
			<input type="number" name="n3" max="9" min="0" required>
			<input type="number" name="n4" max="9" min="0" required>
			<input type="submit" name="comprobar" value="Comprobar">
		</form>
	</div>
	<div class="resultados">
		<?php 
			if (isset($_GET['comprobar'])) {
				$n = array($_GET['n1'],$_GET['n2'],$_GET['n3'],$_GET['n4']);

				echo "<div class='bloque'>";

				for ($x=0; $x <4 ; $x++) { 
					if ($n[$x] == $num[$x]) {
						echo "<div class='uno' style='border:3px solid green'>$n[$x]</div>";	
				} else{
					echo "<div class='uno' style='border:3px solid red'>$n[$x]</div>";
					}
				}
				echo "</div>";
				echo "<div class='sin'>El número ganador es el: ";
				foreach ($num as $key => $value) {
					echo $value;	
				}
				echo "</div>";
		
			}
	 ?>
	</div>
		



</body>
</html>