<?php
$ar=fopen("datos.txt","r") or die("No se pudo abrir el archivo");

$linea=fread($ar, filesize("datos.txt")); //leemos el fichero completo

echo utf8_decode($linea);

fclose($ar);
?>
