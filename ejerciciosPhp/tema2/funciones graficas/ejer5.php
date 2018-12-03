<?php 

$imagen = imageCreate(200,50);
$amarillo = imagecolorallocate($imagen, 233, 249, 26);
imagefill($imagen, 0, 0, $amarillo);

$verde= imagecolorallocate($imagen, 39, 140, 19);
$valor = rand(100,200);
imagestring($imagen, 25, 70, 15, $valor, $verde);

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
?>