<?php 
	session_start();
	$tamanio = imagecreate(300, 100);
	$color = imagecolorallocate($tamanio, 15, 111, 137);
	imagefill($tamanio, 0, 0, $color);
	$color2 = imagecolorallocate($tamanio, 247, 247, 2);
	$valor = rand(100000,999999);
	$_SESSION['valor'] = $valor;
	imagestring($tamanio, 9, 100, 50, $valor, $color2);
	$x = 1;
	while ( $x <= 6) {
		$n = rand(0,300);
		$n2 = rand(0,100);
		$n3 = rand(0,300);
		$n4 = rand(0,100);
		imageline($tamanio, $n, $n2, $n3, $n4, $color2);
		$x++;
	}
	header("content-type = image/type");
	imagejpeg($tamanio);
	imagedestroy($tamanio);
 ?>