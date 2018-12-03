<?php 

	$archivo = fopen("clientes.dat", "a") or die("ERROR: No se pudo abrir el archivo");

	fwrite($archivo, $_POST['codigoC']."|");
	fwrite($archivo, $_POST['nombre']."|");
	fwrite($archivo, $_POST['direccion']);

	fwrite($archivo, PHP_EOL);

	fclose($archivo);
	echo "Los datos se enviaron correctamente";

?>