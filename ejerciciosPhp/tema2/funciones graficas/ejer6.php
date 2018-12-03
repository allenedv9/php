<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
	if (!$_GET) {
		echo <<<formulario
		<form method="get" action="">
			<h3>Números a verificar: </h3> 
			<img src="ejer6b.php">
			<h3>Teclea los números que aparecen en el gráfico: </h3>
			<input type="number" name="veri"><br>
			<input type="submit" name="verificar" value="verificar">
		</form>
formulario;
	} else{
		session_start();
	
	if ($_GET['veri'] == $_SESSION['valor']) {
		echo "El codigo introducido es CORRECTO";
	}else{
		echo "El codigo introducido es INCORRECTO";
		}
	}

	



	?>
</body>
</html>