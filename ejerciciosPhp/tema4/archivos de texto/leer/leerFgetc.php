<?php 

echo "<b>Ahora se lee carácter a carácter fgetc()</b><br>";
$archivo = fopen("archivo01.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;
$contador = 0;
while (!feof($archivo)) {
	
	$lectura = fgetc($archivo);
	
	
	$contador++;

}
echo "Contó " . $contador . " carácteres";
fclose($archivo);


?>