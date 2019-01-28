<!DOCTYPE html>
<html>
<head>
	<title>Artículos</title>
	<link rel="stylesheet" type="text/css" href="../ventas/style.css">
	<meta charset="utf-8">
	<style>
		body{
			display: flex;
		}
	</style>
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
			<input type="text" name="marca" ><br><br>
			<br><br>
			<input type="submit" name="registrar" value="Registrar artículo">
			<br><br>
		</form> 
		<form action="leer_articulos.php" method="post">
			<input type="submit" name="leer" value="Leer fichero artículos" >
		</form>
	</div>
	<div class="ficha_dos">
		<h2>Proveedores</h2>
		<form action="controlador_proveedores.php" method="post">
			<label>Código del proveedor:</label>
			<input type="number" name="codigoP" required><br><br>
			<label>Teléfono: </label>
			<input type="tel" name="tel" required><br><br>
			<label>Otros datos: </label>
			<input type="text" name="datos" required><br><br>
			
			<br><br>
			<input type="submit" name="registrar" value="Registrar proveedor">
			<br><br>
		</form> 
		<form action="leer_proveedores.php" method="post">
			<input type="submit" name="leer" value="Leer fichero proveedores" >
		</form>
	</div>
	<div class="ficha_tres">
		<h2>Pedidos a Proveedores</h2>
		<form action="controlador_pedidos.php" method="post">
			<label>Código del proveedor:</label>
			<input type="number" name="codigoP" required><br><br>
			<label>Código del artículo:</label>
			<input type="number" name="codigoA" required><br><br>
			<label>Teléfono del proveedor: </label>
			<input type="tel" name="tel" required><br><br>
			
			<br><br>
			<input type="submit" name="registrar" value="Registrar pedido">
			<br><br>
		</form> 
		<form action="leer_pedidos.php" method="post">
			<input type="submit" name="pedido" value="Leer fichero pedidos" >
		</form>
	</div>
</body>
</html>