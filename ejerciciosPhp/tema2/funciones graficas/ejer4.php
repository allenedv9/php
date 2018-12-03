<?php 
$imagen=imageCreate(200,50);
$amarillo=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$amarillo); 

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio=   rand(100000,9999999);                          //genera números aleatorios
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

$x = 1;
while($x <= 4){
	$n1 = rand(0,200);
	$n2 = rand(0,50);
	$n3 = rand(0,200);
	$n4 = rand(0,50);
	imageline ($imagen, $n1, $n2, $n3, $n4, $verde);
	$x++;
}

/*imageline ($imagen , 15, 5, 120, 60 ,$verde );
imageline ($imagen , 1, 15, 180, 80 ,$verde );
imageline ($imagen , 85, 5, 120, 45 ,$verde );
imageline ($imagen , 50, 25, 190, 40 ,$verde );*/

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
                      


?>