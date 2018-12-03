<!DOCTYPE html>
<html>
<head>
	<title>Seleccionar tabla de multiplicar</title>
	<style>
	*{
		background-color: #5baec1;
	}
		body{

		}
			form{
				width: 50%;
			    text-align: center;
			    margin: 0 auto;
			    border: 4px solid #00000030;
			    border-radius: 12px;
			    padding: 50px;
			    margin-top: 150px;
			    background-color: #2f4f4f47;
			}
				h2{
					font-size: 3em;
				    text-shadow: 3px 2px 2px #043d4a;
				    font-family: monospace;
				    font-weight: 800;
				    color: #fff;
				    background-color: #2f4f4f00;
				}
				input{
					border: 2px solid #000;
				    height: 30px;
				    background-color: lavender;
				    border-radius: 8px;
				    padding: 0px 11px;
				}

	</style>
</head>
<body>
	<form action="tabla.php" method="get">
		<h2>Tabla de Multiplicar del: </h2>
		<input type="number" name="numero" placeholder="Ingresa un número">
		<input type="submit" name="Enviar">
	</form>

</body>
</html>