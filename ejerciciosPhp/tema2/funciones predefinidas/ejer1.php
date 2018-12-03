<!DOCTYPE html>
<html>
<head>
	<title>ejer1</title>
</head>
<body>

	<?php 

	echo "<h3>El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las         100 claves que garantizan el éxito</h3>";
	echo "<b>indicar cuántas veces aparece cada vocal usando funciones para cadenas PHP.</b><br>";
 


 		$cadena =  "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 		   100 claves que garantizan el éxito";
 		$cadena = mb_strtolower($cadena);
 		$abecedario = "b c d f g h j k l m n ñ p q r s t v w x y z";
    $vocal = ["a","e","i","o","u"];
    $vocaltil = ["á","é","í","ó","ú"];
   // $vol = explode(" ", $vocal);
    $abc = explode(" ", $abecedario);

  		for ($x=0; $x < count($vocal); $x++) { 
  			/*if ($abc[$x] == "a" || $abc[$x] == "á" || $abc[$x] == "e" || $abc[$x] == "é" ||
  		 		$abc[$x] == "i" || $abc[$x] == "í" || $abc[$x] == "o" || $abc[$x] == "ó" ||
  				$abc[$x] == "u" || $abc[$x] == "ú" ) {*/  

  				$vocales = substr_count($cadena, $vocal[$x])+substr_count($cadena, $vocaltil[$x]);

  			echo "La vocal " . $vocal[$x] . " aparece " . $vocales . " veces<br>";
  	//	}
  		}
  		
 		
 		//$a = substr_count($cadena, "a");
 		//$e = substr_count($cadena, "e");
 		//$i = substr_count($cadena, "i");
 		//$o = substr_count($cadena, "o");
 		//$u = substr_count($cadena, "u");

 	
  echo "<hr>";
  echo "<b>indicar qué consonantes son las que aparecen y cuántas veces aparecen usando funciones para cadenas PHP.</b><br>";

	
  	
  	//print_r($abc);

  foreach ($abc as $indice => $value) {
      $cons = substr_count($cadena, $value);
      if ($cons != 0) {
        echo "La consonante: " . $value . " aparece " . $cons . "<br>";
      }
      
  }
echo "<hr>";
  	for ($x=0; $x < count($abc) ; $x++) { 
  		/*if ($abc[$x] != "a" && $abc[$x] != "á" && $abc[$x] != "e" && $abc[$x] != "é" &&
  		 	$abc[$x] != "i" && $abc[$x] != "í" && $abc[$x] != "o" && $abc[$x] != "ó" &&
  			$abc[$x] != "u" && $abc[$x] != "ú" ) {*/

  			$num = substr_count($cadena, $abc[$x]);
  				if ($num != 0){
  					echo "La consonante: " . strtoupper($abc[$x]) . " aparece " . $num . " veces <br>";
  			}
  		//}
  	}



echo "<hr>";
echo "<b>mostrar la cadena donde todas las a hayan sido sustituídas por el símbolo *. </b>";
echo "<br>";



	//$cadena = "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 		       100 claves que garantizan el éxito";
	echo $cadena . "<br>";
	$cadenadife = str_replace("a", "*", $cadena);
	echo $cadenadife;


echo "<hr>";
echo "<b>mostrar la subcadena desde la aparición de //años// excluyendo años, es decir, deberá mostrarse // averiguar cuáles eran las 100 claves que garantizan el éxito//. Para ello usa una o varias funciones para cadenas PHP. </b>";
echo "<br>";

	$buscar = "averiguar";
	$trozo = strstr($cadena,  $buscar);
	echo $trozo;
 ?>

</body>
</html>