<?php 

	$archivo = fopen("ventas.dat", "a") or die("ERROR: No se pudo abrir el archivo");

	

	fwrite($archivo, $_POST['codigoC']. " | ");
	fwrite($archivo, $_POST['codigoA']. " | ");
	fwrite($archivo, $_POST['descripcion']. " | ");
	fwrite($archivo, $_POST['precio']. " | ");
	fwrite($archivo, $_POST['cantidad']. " | ");
	$fecha= date ("j/n/Y");
	fwrite($archivo, $fecha);

	fwrite($archivo, PHP_EOL);

	fclose($archivo);
	echo "Los datos se enviaron correctamente";

?>