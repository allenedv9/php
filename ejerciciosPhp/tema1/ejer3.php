<!--realizar el ejercicio con if y elseif
Inicializar una nota con un numero entero
si la nota es >=5 y <6 visualizar aprobado, si la nota está entre 6 y <7 visualizar bien,
 entre 7 y <8 notable y mayor o igual a 8 sobresaliente.--> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

	$nota= 6;


	if ($nota >= 5 && $nota <6) {
		echo "aprobado";
	} else {
		if ($nota >= 6 && $nota <7 ) {
			echo "bien";
		} else {
			if ($nota >= 7 && $nota <8) {
				echo "notable";
			} else {
				echo "sobresaliente";
			}
			
		}
		
	}
	
	echo "<br>";

	if ($nota >= 5 && $nota <6) {
			echo "aprobado";
		} elseif ($nota >= 6 && $nota <7 ) {
			echo "bien";
		}elseif ($nota >= 7 && $nota <8) {
			echo "notable";
		}else{
			echo "sobresaliente";
		}
			


?>
</body>
</html>