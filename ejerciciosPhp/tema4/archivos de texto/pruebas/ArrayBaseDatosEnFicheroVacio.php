<!DOCTYPE html>
<html>
<head>
	<title>Base de datos</title>
	<!--<meta charset="utf-8">-->
</head>
<body>

<?php 
	$fichero = fopen("contactos.txt", "r") or die("ERROR: No ha sido posible abrir el archivo"); //abrimos el archivo y le decimos lectura
	$loop = 0; //contador de lineas
	//$line = fgets($fichero);//guardamos la linea en un string
	$cabecera = array('Nombre:', 'E-mail:', 'Web:', 'Teléfono:');
	
		while (!feof($fichero)) {//mientras no sea final de fichero...
			$line = fgets($fichero);//guardamos la linea en un string
			$line = utf8_encode($line);
			$field[$loop] = explode('|', $line);//dividimos las celdas separadas por | y lo metemos en una matriz
			
				     for ($x=0; $x < 4 ; $x++) { 
				     	echo '<b>' .$cabecera[$x].'</b>'.$field[$loop][$x];
				     	echo "<br>";
				     }
						echo "<hr>";

			$loop++;
			
	}
	

	fclose($fichero);



?>

</body>
</html>