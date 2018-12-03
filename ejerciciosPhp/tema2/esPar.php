<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		function esPar($numero) {
		    if ($numero == 1) {
		        return false;
		    } else if ($numero == 0) {
		        return true;
		    } else {
		        return esPar($numero-2);
		    }
		}
		 
		$num = 9;
		if (esPar($num) == true)
		    echo $num . ' es par<br/>';
		else
		    echo $num . ' es impar<br/>';
?>


</body>
</html>