<!-- 1.- Ejercicio:
En un formulario se teclea: nombre del alumno, apellido1, apellido2  y 3 notas referentes al mismo módulo.
Mediante otro programa  php, visualizar los datos personales del alumno y la nota media.
Realizar el ejercicio aplicando todo tipo de funciones.-->

<!DOCTYPE html>
<html>
<head>
	<title>Funciones</title>
</head>
<body>

	<form action="veri.php" method="get">
		<label>Nombre:</label>
		<input type="text" name="nombre"><br>
		<label>Apellido 1</label>
		<input type="text" name="ape1"><br>
		<label>Apellido2</label>
		<input type="text" name="ape2"><br>
		<label>Nota 1</label>
		<input type="number" name="nota1"><br>
		<label>Nota 2</label>
		<input type="number" name="nota2"><br>
		<label>Nota 3</label>
		<input type="number" name="nota3"><br>

		<input type="submit" name="enviar" value="enviar">
		<input type="reset" name="">
	</form>

</body>
</html>