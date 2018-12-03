<!DOCTYPE html>
<html>
<head>
	<title>Captcha</title>
</head>
<body>

<?php 
	if (!$_POST) {
		echo <<<formulario
		<form method="post" action="">
			<h3>Números a verificar: </h3> 
			<img src="captcha.php">
			<h3>Teclea los números que aparecen en el gráfico: </h3>
			<input type="number" name="veri"><br>
			<input type="submit" name="verificar" value="verificar">
		</form>
formulario;
	}else{
		session_start();

		if ($_POST['']) {
			# code...
		}
	}



 ?>
</body>
</html>