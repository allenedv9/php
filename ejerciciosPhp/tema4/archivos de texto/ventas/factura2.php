<?php  

	//abro los archivos de ventas y clientes
	$archivoVentas = fopen("ventas.dat", "r") or die("ERROR!!!");
	$archivoClientes = fopen("clientes.dat", "r") or die("ERROR!!!");

	$fecha= date ("j/n/Y");
	$contVenta = 1;
	$contCliente = 1;
	$total = 0;

	//leo el primer registro de ventas
	$lecturaVentas = fgets($archivoVentas);

	//mientras no sea final de fichero de ventas
	while (!feof($archivoVentas)) {

		//leo el primer registro de clientes
		$lecturaClientes = fgets($archivoClientes);
		
		
		//mientras que el codigo cliente de ventas sea diferente al codigo cliente de cliente
		while (substr($lecturaVentas, 0,3) != substr($lecturaClientes, 0,3)) {

			//leo el siguiente registro de cliente
			$lecturaClientes = fgets($archivoClientes);
			//echo "son distintos";
		}

		//meto en un array la informacion del registro del cliente
		$cliente[$contCliente] = explode("|",$lecturaClientes);

		//imprimo la fecha de la factura, el codigo del cliente y el nombre del cliente
	echo <<<xxx
		<p>Fecha: $fecha</p>
		<p>Código del cliente: {$cliente[$contCliente][0]} Nombre: {$cliente[$contCliente][1]} </p>
		<p>Código artículo//Descripción//Cantidad//Precio</p>
xxx;

		//mientras que no sea final de fichero de ventas ni clientes y el codigo cliente de ventas y clientes sea el mismo
		while (!feof($archivoVentas) && !feof($archivoClientes) && substr($lecturaVentas, 0,3) == substr($lecturaClientes, 0,3)) {
			//meto el registro de venta en un array
			$ventas[$contVenta] = explode("|", $lecturaVentas);

			//imprimo el codigo del articulo, la descripcion, la cantidad y el precio
		echo <<<xxx
			<p>{$ventas[$contVenta][1]}{$ventas[$contVenta][2]}{$ventas[$contVenta][3]}{$ventas[$contVenta][4]}</p>

xxx;
			//voy sumando el total de las compras de un cliente
			$total += ($ventas[$contVenta][3]*$ventas[$contVenta][4]);

			$contVenta++;

			$lecturaVentas = fgets($archivoVentas);
		}

		//imprimo el total de la factura
		echo "<p><b> Total Factura:$total €</b></p>";
		echo "-----------------------------";
		$total = 0;
		$contCliente++;

		
	}
	
	fclose($archivoVentas);
	fclose($archivoClientes);
?>