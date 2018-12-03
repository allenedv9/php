<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
	<h2>Ficha Nuevo Cliente</h2>
	<form action="registroClientes.php" method="post">
		<label>Código del Cliente: <input type="number" name="codigoC" required></label><br>
		<label>Nombre: <input type="text" name="nombre" required></label><br>
		<label>Dirección: <input type="text" name="direccion" required></label><br><br>
		<input type="submit" name="registrar" value="Registrar Datos del Cliente">
	</form>
</body>
</html>