<!DOCTYPE html>
<html>
<head>
	<title>Ventas</title>
</head>
<body>

	<h2>Venta de Artículo</h2>
	<form action="registroVentas.php" method="post">
		<label>Código del Cliente: <input type="number" name="codigoC" required></label><br>
		<label>Código del Artículo: <input type="number" name="codigoA" required></label><br>
		<label>Descripción:</label><br>
		<textarea placeholder="Introduce la descripción del artículo" required cols="30" rows="10" name="descripcion"></textarea><br>
		<label>Precio: <input type="number" name="precio" step="any" required></label><br>
		<label>Cantidad: <input type="number" name="cantidad" required></label><br><br>
		<input type="submit" name="registrarV" value="Registrar Venta">
	</form>
</body>
</html>