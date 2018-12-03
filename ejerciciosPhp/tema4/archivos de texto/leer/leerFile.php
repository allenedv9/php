<?php 

echo "<b>Ahora se lee todo a una matriz con file()</b><br>";
$archivo = fopen("archivo01.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;

$lectura = file("archivo01.txt");
//$lectura = utf8_encode($lectura);
print_r( $lectura);
fclose($archivo);

?>