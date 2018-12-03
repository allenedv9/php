<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>

	<?php 

		function funcion1(){
			echo "<b>Nombre: </b>". $_GET['nombre']. "<br>" ;
			echo "<b>Apellidos: </b>". $_GET['ape1']. " " .$_GET['ape2']. "<br>" ;

			$nota1 = $_GET['nota1'];
			$nota2 = $_GET['nota2'];
			$nota3 = $_GET['nota3'];

			/*echo $nota1;
			echo $nota2;
			echo $nota3;*/
			$nota = ($nota1+$nota2+$nota3)/3;
			echo "La nota media de las tres notas es de: " . $nota;
		}


		function funcion2($a,$b,$c){

			echo "<b>Nombre: </b>". $_GET['nombre']. "<br>" ;
			echo "<b>Apellidos: </b>". $_GET['ape1']. " " .$_GET['ape2']. "<br>" ;
			$nota = ($a+$b+$c)/3;
			echo  "La nota media de las tres notas es de: " .$nota;
		}

		function funcion3(){

			echo "<b>Nombre: </b>". $_GET['nombre']. "<br>" ;
			echo "<b>Apellidos: </b>". $_GET['ape1']. " " .$_GET['ape2']. "<br>" ;
			$nota1 = $_GET['nota1'];
			$nota2 = $_GET['nota2'];
			$nota3 = $_GET['nota3'];

			$nota = ($nota1+$nota2+$nota3)/3;

			return $nota;
		}

		function funcion4($a,$b,$c){
			
			echo "<b>Nombre: </b>". $_GET['nombre']. "<br>" ;
			echo "<b>Apellidos: </b>". $_GET['ape1']. " " .$_GET['ape2']. "<br>" ;

			$nota = ($a+$b+$c)/3;
			return $nota;
		}

		echo "Sin parámetros ni retorno <br>";
		funcion1();


		echo "<hr>";
		echo "Con parámetros y sin retorno <br>";
		$nota1 = $_GET['nota1'];
		$nota2 = $_GET['nota2'];
		$nota3 = $_GET['nota3'];
		funcion2($nota1,$nota2,$nota3);


		echo "<hr>";
		echo "Sin parámetros y con retorno <br>";
		$nota = funcion3();
		echo "La nota media de las tres notas es de: " .round($nota,2);

		echo "<hr>";
		echo "Con parámetros y con retorno <br>";
		$nota1 = $_GET['nota1'];
		$nota2 = $_GET['nota2'];
		$nota3 = $_GET['nota3'];
		$nota = funcion4($nota1,$nota2,$nota3);
		echo "La nota media de las tres notas es de: " .round($nota,2);
	 ?>
</body>
</html>