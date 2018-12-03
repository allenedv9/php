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
	if (!feof($fichero)) {
		while (!feof($fichero)) {//mientras no sea final de fichero...
			$line = fgets($fichero);//guardamos la linea en un string
			$line = utf8_encode($line);
			$field[$loop] = explode('|', $line);//dividimos las celdas separadas por | y lo metemos en una matriz
			echo <<<txt
				<table  border="1px solid black" width="75%">
				   <tr>
				      <td width="25%">Nombre: {$field[$loop][0]}</td>
				</table>	
txt;

			$loop++;
			
		}
	}else{
		echo "El fichero esta vacio";
	}
		
	fclose($fichero);
	

	




?>

</body>
</html>