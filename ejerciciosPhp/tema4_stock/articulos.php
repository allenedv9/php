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
		<form action="controlador_articulos.php" method="post">
			<label>Código del artículo:</label>
			<input type="number" name="codigoA" required><br><br>
			<label>Descripción: </label>
			<input type="text" name="desc" required><br><br>
			<label>Existencias: </label>
			<input type="number" name="existencias" required><br><br>
			<label>Stock mínimo: </label>
			<input type="number" name="stock" required><br><br>
			<label>Código del proveedor: </label>
			<input type="number" name="codigoP" required><br><br>
			<label>Marca: </label>
			<input type="text" name="marca" required><br><br>
			<br><br>
			<input type="submit" name="registrar" value="Registrar artículo">
			<br><br>
		</form>
	</div>

</body>
</html>