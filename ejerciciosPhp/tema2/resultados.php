<!DOCTYPE html>
<html>
<head>
	<title>Datos Procesados</title>
	<style>
		.datos{
			width: 50%;
			margin: 0 auto;
			text-align: center;
		}
	</style>
</head>
<body>

	<div class="datos">
		<?php 
			echo "<b>Nombre: </b>". $_GET['nombre']. "<br>" ;
			echo "<b>Apellidos: </b>". $_GET['apellidos']. "<br>" ;
			echo "<b>E-mail: </b>". $_GET['email']. "<br>" ;
			echo "<b>Dirección: </b>". $_GET['domicilio']. "<br>" ;
			echo "<br>";
			echo "<b>Sus intereses son: </b><br>";
			if (isset($_GET['musica'])) {echo "La música <br>";}
			if (isset($_GET['libros'])) {echo "Los libros <br>";}
			if (isset($_GET['deportes'])) {echo "Los deportes <br>";}
			if (isset($_GET['cine'])) {echo "El cine <br>";}
			echo "<br>";
			if ($_GET['sexo'] == "mujer") {
				echo "<b>Soy mujer</b>";
			}else{
				echo "<b>Soy hombre</b>";
			}
			echo "<br>";
			echo "<br>";
			echo "<b>Quiero recibir el paquete el día: </b><br>";
			echo $_GET['dia'];
			echo "<br>";
			echo "<br>";
			echo "<b>Mi opinión es: </b><br>";
			echo $_GET['box'];
		?>
		
	</div>
	
</body>
</html>
