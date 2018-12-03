<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
/*.- Simular un reloj digital
0:0:0
0:0:1
0:0:2
0:0:3
0:0:4
0:0:5
0:0:6
0:0:7
0:0:8
0:0:9
0:0:10
…
1:0:57
1:0:58
1:0:59
1:1:0
1:1:1
1:1:2
*/
$seg = 0;
$min = 0;
$horas = 0;

for ($horas=0; $horas < 24 ; $horas++) { 
	for ($min=0; $min < 60; $min++) { 
		for ($seg=0; $seg < 60; $seg++) { 
			echo $horas.":".$min.":".$seg."<br>";
		}
	}
}
	
	
		


?>

</body>
</html>