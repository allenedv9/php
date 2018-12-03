<!DOCTYPE html>
<html>
<head>
	<title>Validación</title>
</head>
<body>

<?php 
	$num = $_GET['numero'];
	$i = 1;
		

	while ($i <= 10) {
		$n = $_GET[$i];
		if ($n == $num*$i) {
			echo $num. "x" .$i. "  = " .$n. "<img src='v.png' width='16px' ><br>";
			
		}else{
			echo $num. "x" .$i. "  = <img src='x.png' width='16px' ><br>";
		}
		$i++;
	}


?>
<img src="" width="">
</body>
</html>