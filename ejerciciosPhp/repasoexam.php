<!-- 10.-Obtener la siguiente tabla de potencias:
Primera fila:   11,12,13,14
Segunda fila:  21,22,23,24
…
Codificar una función llamada potencia que recibirá 2 parámetros (base y exponente), esta función devolverá el resultado. Dentro de tu función potencia  puedes utilizar la función : pow(base, exponente), y si tienes la versión P.H.P 5.6 ó superior , puedes utilizar el operador **,  es decir: base**exponente.-->
<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>

	<style>
	body{
	    background: #1e7c92;
    }
		.comp{
	        border: 4px solid #fff;
		    padding: 50px;
		    width: 50%;
		    margin: 50px 305px;
		    border-radius: 20px;
		    box-shadow: 3px 3px 12px #000;
		}
		.fila{
		    border: 1px solid #fff;
		    padding: 10px 50px;
		    background: #098586;
		    text-align: center;
		    font-size: 1.5em;
		    color: #fff;
		    font-weight: 900;
		    border-radius: 25px;
		    box-shadow: 2px 2px 7px #000;

		}
		h3{
		    margin-top: -15px;
		    font-size: 1.7em;
		    color: #fff;
		    text-align: center;
		    text-shadow: 2px 2px 2px #000;		
		}
		form{
			text-align: center;
		    padding: 60px;
		    border: 4px solid #fff;
		    width: 50%;
		    margin: 90px 260px;
		    border-radius: 30px;
		    background-color: #1d8a9c;
		}
		input{
			margin: 16px;
		}
		.sin{
		    margin: 0;		
		}
	</style>
</head>

<body>



<?php
	
	$TABLA = 4;
	$num = 0;
	
	function potencia($a,$b,&$res){
		
		$res = pow($a, $b);

}
	echo "<table border = 1px>";
	for ($x=1; $x <= $TABLA; $x++) { 
		echo "<tr>";
		for ($y=1; $y <= $TABLA ; $y++) { 
			potencia($x,$y,$num);
			echo "<td>". $num ."</td>";
		}
		echo "<tr>";
	}
	echo "</table>";
	
 ?>	




</body>
</html>