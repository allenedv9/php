<?php
	echo "<B>Visualizar los pedidos desde el 10 hasta el 13  de forma directa </B><BR /><BR />";
	
	$archivo = @fopen("pedidos.txt", "r")   or die ("No existe el archivo");

	$inicio=(10-1)*31;       

	while($inicio<((14-1)*31)){
		
		fseek($archivo,$inicio,SEEK_SET); 
		$linea=fgets($archivo);
		echo $linea."<br />";
		$inicio=$inicio+31;
	}

	fclose($archivo);
?>
