<?php 

/*echo "<b>Ahora se lee todo y se imprime con readfile()</b><br>";
$archivo = fopen("archivo01.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;

$lectura = readfile("archivo01.txt");
$lectura = utf8_encode($lectura);
echo  $lectura;
fclose($archivo);*/
readfile("archivo01.txt");

?>