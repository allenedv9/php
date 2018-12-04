<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="ficha">
		<h2>Ficha Nuevo Cliente</h2>
		<form action="registroClientes.php" method="post">
			<label>Código del Cliente:</label>
			<input type="number" name="codigoC" required><br><br>
			<label>Nombre: </label>
			<input type="text" name="nombre" required><br><br>
			<label>Dirección: </label>
			<input type="text" name="direccion" required><br><br><br>
			<input type="submit" name="registrar" value="Registrar Datos del Cliente">
			<br><br>
		</form>
	</div>
</body>
</html>