<!--Inicializar 3 variables, si todos son iguales visualizar la suma del primero con el segundo
y a este resultado se le multiplica por el tercero-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

	$var1=4;
	$var2=4;
	$var3=4;

	if ($var1 == $var2 && $var2 == $var3) {
		echo ($var1+$var2)*$var3;
		
	} else {
		echo "Las variables son diferentes";
	}
	


?>
</body>
</html>