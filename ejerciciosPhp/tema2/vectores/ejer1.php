<!DOCTYPE html>
<html>
<head>
	<title>vectores</title>
</head>
<body>

<?php 
echo "1.- Crear un vector de 10 elementos con números enteros, visualizar su contenido.";

$numeros = array("9","25","7","45","795","35","1","88","31","9999");

	foreach($numeros as $item=>$value){
	    echo "Posición " . $item. ": tiene el valor: ".$value;
	    echo "<br />";
	}
echo "<hr>";
echo "2.- Visualizar el vector anterior comenzando por el último elemento hasta el primer elemento del vector.";

	foreach (array_reverse($numeros) as $item => $value) {
		  echo "Posición " . $item. ": tiene el valor: ".$value;
	   		 echo "<br />";
	}

echo "<hr>";
	for($i=count($numeros)-1;$i>=0;$i--){
		echo "Posición " . $i. ": tiene el valor: ".$numeros[$i];
	    echo "<br />";
	}

echo "<hr>";
echo "3.- Visualizar la primera mitad del vector.";	
echo "<br />";

	$long = count($numeros)/2;

	for ($x=0; $x < $long; $x++) { 
		echo "Posición " . $x. ": tiene el valor: ".$numeros[$x];
		echo "<br />";
	}
echo "<hr>";
echo "4.- Visualizar la segunda mitad del vector.";
echo "<br />";

for (; $long < count($numeros) ; $long++) { 
	echo "Posición " . $long. ": tiene el valor: ".$numeros[$long];
		echo "<br />";
}



echo "<hr>";
echo "5. -Crear un vector  que almacene las claves de acceso de 5 usuarios de un sistema. El índice del vector será el nombre de cada usuario. Visualizar la clave de acceso de uno de los usuarios.";
echo "<br />";

	$pass = ['pablo'=>12345, 'marcos'=>56789, 'lola'=>13467, 'pipo'=>97643, 'richi'=>21456];
	echo $pass['pablo']. "<br>";


	
echo "<hr>";
echo "6.- Visualizar la clave de acceso de todos los usuarios.";
echo "<br />";

	foreach ($pass as $key => $value) {
		echo "La contraseña de " .$key. " es: " .$value. " <br>";
	}
?>
</body>
</html>