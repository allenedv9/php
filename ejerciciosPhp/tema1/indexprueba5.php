
<html>
<head>
<title>Sentencias de Control</title>
<meta charset=UTF-8">
</head>
<body>
<?php
	$n1=10;
	$n2=10;

	echo "El producto de los 2 números es: ".($n1*$n2);
	echo "<br />";
	echo "La suma de los 2 números es: ". ($n1+$n2);
	echo "<br />";

	if($n1>$n2){
	echo"El número mayor es: ". $n1;
	}
	else if($n1==$n2){
	echo "Los 2 números son iguales";
	}
	else{
	echo "El número mayor es: ".$n2;
	}


	
?>
</body>
</html>
