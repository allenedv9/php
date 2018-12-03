<!DOCTYPE html>
<html>
<head>
	<title>vectores bi-tri</title>
</head>
<body>
	<?php 

	$n[0]=00;
	$n[1]=10;
	$n[2]=20;
	$n[3]=30;
	$n[4][0][0]=400;
	$n[4][0][1]=401;
	$n[4][1][0]=410;
	$n[4][1][1]=411;
	$n[4][2][0]=420;
	$n[4][2][1]=421;
	$n[5]=50;

	$x = [00,10,20,30,[[400,401],[410,411],[420,421]],50];
	//print_r($n);

		foreach ($x as $key => $value) {
			echo "En la posición: " . $key .  " el valor es: "  ;
			if (is_array($value)) {
				foreach ($value as $key2 => $value2) {
					if (is_array($value2)) {
						foreach ($value2 as $key3 => $value3) {
							echo $value3 . " ";
							
						}
					}
				}echo "<br>";
		}else {
			echo $value;
			echo "<br>";
		}
		}



		//echo "<br>";
		/*else{
			echo "No es un array";
		}*/


	

	?>

</body>
</html>