<?php 

	$archivo = fopen("articulos.txt", "r+")or die("Error, no se pudo abrir el archivo");

	$leer = fgets($archivo);
	//print_r($leer);
	$cont = 0;
	$total = 0;

	while (!feof($archivo)) {
	
		$reg = explode("|", $leer);
		//print_r($reg);

	echo <<<abc
		<b>Tipo  /  Importe </b><br>
abc;
		$tipo = $reg[0];
		echo $tipo."<br>";

		$total += $reg[0] . " / " . $reg[2]*$reg[3] . " Euros";
		echo $total."<br>";
		
	

		$total = 0;
		$leer = fgets($archivo);
	}


	fclose($archivo);
 ?>