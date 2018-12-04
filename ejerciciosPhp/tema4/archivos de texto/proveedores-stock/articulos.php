<!DOCTYPE html>
<html>
<head>
	<title>Artículos</title>
	<link rel="stylesheet" type="text/css" href="../ventas/style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="ficha">
		<h2>Nuevo Artículo</h2>
		<form action="registroArticulos.php" method="post">
			<label>Código del artículo:</label>
			<input type="number" name="codigoA" required><br><br>
			<label>Descripción: </label>
			<input type="text" name="desc" required><br><br>
			<label>Existencias: </label>
			<input type="number" name="existencias" required><br>
			<label>Stock mínimo: </label>
			<input type="number" name="stock" required><br>
			<label>Código del proveedor: </label>
			<input type="number" name="codigoP" required><br>
			<br><br>
			<input type="submit" name="registrar" value="Registrar Datos del Cliente">
			<br><br>
		</form>
	</div>

</body>
</html>