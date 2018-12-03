<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suscripción electrónica</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>suscripción electrónica</h1>

	<?php
 		 if(!$_GET){
 

echo <<<txt
		<div class="formulario">
			<form action="suscripcion1pag.php" method="get">
				<div class="datos">
					<label>nombre: </label>
					<input type="text" class="input_datos" name="nombre" >
					<label>apellidos: </label>
					<input type="text" class="input_datos" name="apellidos" >
					<label>e-mail: </label>
					<input type="email" class="input_datos" name="email" >
					<label>domicilio: </label>
					<input class="domi" type="text" class="input_datos" name="domicilio" >
				</div>
				<div class="dos_bloques">
					<div class="intereses">
						<label>interesado en los siguientes temas: </label><br>
						<input class="tit" type="checkbox" name="musica" value="musica">
						<label>música</label><br>
						<input type="checkbox" name="libros" value="libros">
						<label>libros</label><br>
						<input type="checkbox" name="deportes" value="deportes">
						<label>deportes</label><br>
						<input type="checkbox" name="cine" value="cine">
						<label>cine</label>
					</div>
					<div class="sexo">
						<label>sexo</label><br>
						<input class="tit" type="radio" name="sexo" value="mujer">
						<label>mujer</label><br>
						<input type="radio" name="sexo" value="hombre">
						<label>hombre</label>
					</div>
				</div>
				<div class="fecha">
					<label>día de la semanaque le interesa recibirlo:</label><br>
					<select name="dia">
						<option value="" selected="" >día de la semana</option>
						<option value="lunes">Lunes</option>
						<option value="martes">Martes</option>
						<option value="miercoles">Miércoles</option>
						<option value="jueves">Jueves</option>
						<option value="viernes">Viernes</option>
						<option value="sabado">Sábado</option>
						<option value="domingo">Domingo</option>
					</select>
				</div>
				<div class="opinion">
					<label>su opinión: </label><br>
					<textarea name="box" class="box"></textarea>
				</div>
				<div class="envio">
					<input type="submit" name="submit" value="Enviar datos">
					<input type="reset" name="reset" value="Borrar todo">
				</div>
			</form>
txt;
	
	  }
	  else{  
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
	  }
    ?>

	</div>
</body>
</html>