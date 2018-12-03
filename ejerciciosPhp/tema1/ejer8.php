<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		/*.- Obtener la tabla del 2 con do…while : 2-4-6-8-10-12-14-16-18-20-*/

		$multi = 2;
		$num = 1;
		do {
			echo $multi."x".$num."=".$multi*$num."<br>";
			$num++;
		} while ($num <= 10);

	?>

</body>
</html>