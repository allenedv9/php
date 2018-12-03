<?php  

	$archivoVentas = fopen("ventas.dat", "r") or die("ERROR!!!");
	$archivoClientes = fopen("clientes.dat", "r") or die("ERROR!!!");
	$fecha= date ("j/n/Y");
	$contVenta = 1;
	$contCliente = 1;

	$lecturaVentas = fgets($archivoVentas);

	while (!feof($archivoVentas)) {
		$lecturaClientes = fgets($archivoClientes);
		$arrayVentas[$contVenta] = explode("|", $lecturaVentas);
		$arrayClientes[$contCliente] = explode("|", $lecturaClientes);

		/*echo $arrayClientes[$contCliente][0] ."|";
		echo $arrayClientes[$contCliente][0];*/
		
		while ($arrayVentas[$contVenta][0] != $arrayClientes[$contCliente][0]) {
			$lecturaClientes = fgets($archivoClientes);
			$contCliente++;
			echo "son distintos";
		}
	echo <<<xxx
		<p>Fecha: $fecha</p>
		<p>Código del cliente: {$arrayClientes[$contCliente][0]} Nombre: {$arrayClientes[$contCliente][1]} </p>
xxx;

		$lecturaVentas = fgets($archivoVentas);
		$contVenta++;
		$contCliente++;

		
	}
	
	fclose($archivoVentas);
	fclose($archivoClientes);
?>