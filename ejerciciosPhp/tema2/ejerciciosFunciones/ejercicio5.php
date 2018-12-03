<!-- 
Resultado:  hola-que-tal
function en_guiones($a){
	return str_replace(" ","-",$a);
}

-->
<!DOCTYPE html>
<html>
<head>
	<title>Blancos por guiones</title>
</head>
<body>


<?php 

	if (!$_GET) {
		echo <<<txt
		<h2>Introduce un texto</h2>
		<form action="ejercicio5.php" method="get">
			<input type="text" name="txt">
			<input type="submit" name="Transformar">
		</form>
txt;

	}else{
		$txt = $_GET['txt'];
		echo guiones($txt);
		
	}
	
	

	function guiones($a){
		
		 return str_replace(" ","-",$a);
	}
	
 ?>	




</body>
</html>