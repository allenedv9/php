<?php


$cod = $_POST['codigoA'];
$desc = $_POST['desc'];
$exis = $_POST['existencias'];
$stock = $_POST['stock'];
$proveedor = $_POST['codigoP'];
$marca = $_POST['marca'];

$archivo = @fopen("articulos.txt", "r+") or die("ERROR: No se pudo abrir el archivo");

$inicio = ($cod-1)*30;
fseek($archivo,$inicio,SEEK_SET);

fwrite($archivo,"$cod|$desc|$exis|$stock|$proveedor|$marca|".PHP_EOL);

fclose($archivo);

echo "Los valores se han introducido correctamente <br><br> <input type='submit' value='Volver' onclick = history.go(-1)>";



?>