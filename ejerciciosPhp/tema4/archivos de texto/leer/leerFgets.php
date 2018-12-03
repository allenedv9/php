<?php 

echo "<b>Ahora se lee línea por línea con fgets()</b><br>";
$archivo = fopen("archivo01.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;
$contador = 0;
while (!feof($archivo)) {
	
	$lectura = fgets($archivo);
	echo utf8_encode($lectura).'<br>';
	
	$contador++;

}
fclose($archivo);


?>