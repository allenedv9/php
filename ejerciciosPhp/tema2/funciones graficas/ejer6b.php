<?php 
session_start();

$imagen = imageCreate(200,50);
$amarillo = imagecolorallocate($imagen, 233, 249, 26);
imagefill($imagen, 0, 0, $amarillo);

$verde= imagecolorallocate($imagen, 39, 140, 19);
$valor = rand(100000,9999999);
$_SESSION['valor'] = $valor ;
imagestring($imagen, 25, 70, 15, $_SESSION['valor'] , $verde);

$x = 1;
while($x <= 4){
	$n1 = rand(0,200);
	$n2 = rand(0,50);
	$n3 = rand(0,200);
	$n4 = rand(0,50);
	imageline ($imagen, $n1, $n2, $n3, $n4, $verde);
	$x++;
}
header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
?>