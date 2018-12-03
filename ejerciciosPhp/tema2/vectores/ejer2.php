<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
/*1.- Declarar el array anterior con la sintaxis :
$lista = [
'curso1' => ['nombre0'=>'Jon','nombre1'=>'Ane','nombre2'=>'Miren','nombre3'=>'Aitor','nombre4'=>'Alberto'],
'curso2'=>['nombre0'=>'Begoña','nombre1'=>'Beatriz','nombre2'=>'Carmen','nombre3'=>'María','nombre4'=>'Zaloa']
];
Obtener la misma salida que en el ejercicio anterior.
2.- Con foreach():
foreach($lista as $curso ){
          …
           …
	foreach($curso as $alumnos){
		echo $alumnos;
		echo "<br />";		
	}
}
*/
$lista = ['curso1' => ['nombre0'=>'Jon','nombre1'=>'Ane','nombre2'=>'Miren','nombre3'=>'Aitor','nombre4'=>'Alberto'],
		  'curso2'=>['nombre0'=>'Begoña','nombre1'=>'Beatriz','nombre2'=>'Carmen','nombre3'=>'María','nombre4'=>'Zaloa']];

		  

		/*  foreach ($lista as $curso => $value) {
		  	echo "Alumnos del Curso:  ". $curso;
			echo "<br />";
			//$x++;
			foreach($value as $indice => $alumnos){
				echo $indice .": ". $alumnos;
				echo "<br />";		
	}
		  }*/

		/* $x = 1;
		 foreach ($lista as $curso) {
		 		echo "Alumnos del Curso:  ". $x;
				echo "<br />";
				$x++;
				foreach ($curso as $alumnos) {
					echo  $alumnos;
					echo "<br />";
			 }		 
		}*/

		for ($x=0; $x < count($lista) ; $x++) { 
			echo "Alumnos del Curso:  ". ($x+1);
			echo "<br />";
			for ($y=0; $y < 5; $y++) { 
				echo $lista['curso'. ($x+1)]['nombre'.$y];
				echo "<br>";

			}
		}


 ?>
</body>
</html>