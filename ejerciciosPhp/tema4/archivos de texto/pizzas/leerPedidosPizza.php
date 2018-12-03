<?php 

$archivo = fopen("pizzas.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;
//$contador = 0;
while (!feof($archivo)) {
	
	$lectura = fgets($archivo);
	echo utf8_encode($lectura).'<br>';
	
	//$contador++;

}
fclose($archivo);

 ?>