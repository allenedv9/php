<?php
$ar=fopen("datos.txt","a") or die("Problemas en la creacion");
fwrite($ar,$_POST['nombre']);
fwrite($ar, "||");
fwrite($ar,$_POST['telefono']);
fwrite($ar,"<br/>");
fwrite($ar,"--------------------------------------------------------");
fwrite($ar,"<br/>");
fclose($ar);
echo "Los datos se guardaron correctamente.";

echo '<input type="submit" name="" onclick="history.go(-1)">';
?>
