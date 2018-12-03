<!DOCTYPE html>
<html>
<head>
	<title>Pizzas</title>
	<style>
		.datos{
			width: 70px;
			display: inline-block;
			font-weight: 800;
		}
	</style>
</head>
<body>
	<form action="pedidos.php" method="get">
		<!--DATOS-->
		<label class="datos">Nombre:</label>
		<input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
		<label class="datos">Dirección:</label>
		<input type="text" name="direccion" placeholder="Introduce tu dirección"><br>

		<!--PIZZAS Y CANTIDADES-->
		<h3>Pizzas</h3>
		<label><input type="checkbox" name="pizza1" value="jamonyqueso">Jamón y Queso</label>
		<br>
		<label>Cantidad:</label>
		<input type="text" name="cantidad1" size="1"><br><br>

		<label><input type="checkbox" name="pizza2" value="napolitana">Napolitana</label>
		<br>
		<label>Cantidad:</label>
		<input type="text" name="cantidad2" size="1"><br><br>

		<label><input type="checkbox" name="pizza3" value="mozzarela">Mozzarela</label>
		<br>
		<label>Cantidad:</label>
		<input type="text" name="cantidad3" size="1"><br><br>

		<!--ENVIAR-->
		<input type="submit" name="enviar" value="confirmar">
	</form>
</body>
</html>