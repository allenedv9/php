<!-- 6.	Implementar un conversor de moneda: euros – pesetas.-->
<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>
</head>
<body>



<?php 


	if (!$_GET) {
		echo <<<txt
			<h2>Conversor de euros a pesetas</h2>
			<form method="get" action="ejercicio6.php">
				<h3>Introduce la cantidad a cambiar</h3>
				<input type="number" name="valor" step ="any">
				<h3>selecciona que conversión quieres hacer</h3>
				<select name="eupt">
					<option value="pts">Pesetas a Euros</option>
					<option value="eu">Euros a Pesetas</option>
				</select>
				<input type="submit" name="convertir" value ="Convertir">
			</form>
txt;

	}else{
		convertir();
	}
	
	function convertir(){

		$valor = $_GET['valor'];
		$op = $_GET['eupt'];
		
		if ($op == "pts") {
			$fin = $valor / 166.386;
			echo round($fin,2) . " euros";
		}else{
			$fin = $valor * 166.386;
			echo round($fin,2) . " pesetas";
		}
	}

	
	
 ?>	




</body>
</html>