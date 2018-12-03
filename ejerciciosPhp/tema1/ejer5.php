<!--Imprimir los múltiplos de cuatro comenzando en el valor 100 y terminando en el valor 400.-->
<html>
<title>   </title>
<body>
 <?php

 	$var = 4;
 	$var2 = 100;
 	$var3 = 400;

 	echo "<b>Múltiplos de 4 de 100 a 400</b><br>";

 	for ($cont=0; $var2 <= $var3 ; $var2++) { 
 		if ($var2 % $var == 0) {
 			echo $var2.",";
 		}
 	}


 ?> 
</body>
</html>
