<?php 

$archivo = fopen("pizzas.txt", "a") or die("ERROR: No se pudo abrir el archivo");

fwrite($archivo, $_GET['nombre'].PHP_EOL);
fwrite($archivo, $_GET['direccion'].PHP_EOL);

	if (isset($_GET['pizza1'])) {
		fwrite($archivo, $_GET['pizza1']);
		fwrite($archivo, "---->");
		fwrite($archivo, $_GET['cantidad1'].PHP_EOL);
	}
	if (isset($_GET['pizza2'])) {
		fwrite($archivo, $_GET['pizza2']);
		fwrite($archivo, "---->");
		fwrite($archivo, $_GET['cantidad2'].PHP_EOL);
	}
	if (isset($_GET['pizza3'])) {
		fwrite($archivo, $_GET['pizza3']);
		fwrite($archivo, "---->");
		fwrite($archivo, $_GET['cantidad3'].PHP_EOL);
	}
$hora= date ("h:i:s");
$fecha= date ("j/n/Y");
fwrite($archivo, $hora."  ");
fwrite($archivo, $fecha.PHP_EOL);
fwrite($archivo, "--------------------------------".PHP_EOL);
fclose($archivo);
echo "Los datos se enviaron correctamente";


?>