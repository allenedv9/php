<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$nombre = "Pepe";
		$tlf = 658965856;
		$sueldo = 145.25;
		

$var=<<<xxx
	Obtener la siguiente salida:<br>
	Crear "3 variables" una para almacenar un nombre, otra 'para' el teléfono, y otra para el sueldo<br>
	Visualizar el contenido de las variables:<br>
xxx;
$var2=<<<'text'
	esto es" un "'texto'
text;
		echo $var2;
		echo "<br>";
		echo $var;
		echo "El teléfono de ".$nombre." "."es ".$tlf." "." y su sueldo es de: ". $sueldo."<br>";
		print htmlspecialchars("NEGRITA: <b></b>");
		echo "<br>";
		print htmlspecialchars("CURSIVA: <i></i>");
		echo "<br>";
		print htmlspecialchars("ENCABEZADOS: <h1></h1>, <h2></h2>...<h6></h6>");
		echo "<br>";
		print htmlspecialchars("SUBRAYADO: <u></u>");
		echo "<br>";
		print htmlspecialchars("TACHADO: <s></s>");
		echo "<br>";
		print htmlspecialchars("Linea Horizontal: <hr/>");
		echo "<br>";
		echo'Para alinear un texto se utiliza el atributo: aling= "center", "left"...'; 
		echo "<br>";
		echo "<hr>";
		echo '<h1 text align="center">PHP</h1>';
		echo "<hr>";
		echo "<b>Php</b> es un lenguaje de programación del <b>lado servidor.</b><br>
		Php puede ser usado en la <i>mayoría de los servidores web.</i></br>
		En cuanto a las <u>palabras claves, </u> PHP comparte con la mayoría de otros <br>
		lenguajes con sintaxis C las condiciones con if, los bucles con for y while y <br>
		los retornos de funciones. Como es habitual en este tipo de lenguajes, las <br>
		sentencias deben acabar con punto y coma (;).";
		echo "<br>";


		$x=456; 
		$y="9 de marzo"; 
		$z=(int)$x * $y; 
		echo $z;
echo "<br>";
		$h=5; 
		function f1(){ 
		$h=9; 
		echo $h;
		echo "<br>";
		}
		f1();
		echo $h; 
?>

</body>
</html>