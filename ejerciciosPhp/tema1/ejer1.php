<!--Inicializar variables con una fecha para verificar si dicha fecha corresponde a Navidad-->
<html>

<head>
<title>Navidad</title>
</head>
<body>
<?php

	$dia=24;
	$mes=10;
		if($dia==24 ){
			if($mes==12) {
				echo "es navidad";
			}
			else {
				echo "no es navidad";
			}
		}
		else{
		echo "no es navidad";
		}

		echo "<br>";

		
		if ($dia == 24 && $mes == 12) {
			echo "es navidad";
			}
			else {
				echo "no es navidad";
			}
		
?>
</body>
</html>

<!--Modificar el ejercicio utilizando  Operadores lógicos: 
•	operador  “y” con && es lo mismo escribir and
•	operador “o” con || es lo mismo escribir or-->
