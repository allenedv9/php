<!DOCTYPE html>
<html lang="es">
<head>
	<title>Generar Password</title>
	<style>
		body{
			background-color: #6c8816;
		}
		.entero{
		    width: 60%;
		    margin: 0 auto;
		    border: 1px solid;
		    border-radius: 25px;
		    background-color: #96c13e61;
		    padding: 24px;
		    margin-top: 180px;
		    box-shadow: 2px 2px 10px #000;
		}
		.tit{
		    text-transform: capitalize;
		    text-shadow: 2px 1px #386517;
		    color: #e8f1d0;
		    font-size: 23px;
		    font-family: Arial;
		    text-decoration: underline;
		    text-align: center;
		}
		.titu{
			margin-top: 0;
		    font-family: arial;
		    color: #4a4a48;
		    text-transform: capitalize;
		    text-align: center;
		}
		.titut{
			font-family: arial;
		    color: #4a4a48;
		    margin: 13px 15px 37px 32px;
    		display: inline-flex;
		}
		.lab{
			font-size: 20px;
		}
		.bloque{}
		.izk{
			width: 30%;
			margin-left: 80px;
		}
		.drch{
			margin-left: 85px;
		}
		.formulario{
			display: flex;
		}
		input[type=checkbox]{
			margin-right: 20px;
			transform: scale(1.4);
		}
		.estilos{
			padding: 10px;
		    margin-left: 70px;
		    font-weight: 800;
		    font-family: arial;
		    color: #3e3d3c;
		    background-color: #56840c;
		    border-radius: 20px;
		    border: 2px solid #3d6321;
		    box-shadow: 2px 3px 4px #3c3939;
		    margin: 0 auto;
		}
		.es{
			display: block;
   			padding: 10px 65px;
		}
		.sino, .nosi{
			margin-top:70px;
		}
		.nono{
			margin-top: 55px;
		}
		.error{
			text-align: center;
		}
	</style>
</head>
<body>

	<?php 
		if (!$_GET) {
		
			echo <<<formulario
			<div class="entero">
				<h2 class='tit'>Seleccionar los carácteres que quieres utilizar en la contraseña</h2>
				<div class="bloque">
					<form method="get" action="generarPass.php" class="formulario">
						<div class="izk">
							<label class="lab"><input type="checkbox" name="mayusculas" value="mayusculas">A-Z</label><br><br>
							<label class="lab"><input type="checkbox" name="minisculas" value="minisculas">a-z</label><br><br>
							<label class="lab"><input type="checkbox" name="numeros" value="numeros">0-9</label><br><br>
							<label class="lab"><input type="checkbox" name="especiales" value="especiales">?¿!@$%</label><br><br>
						</div>
						<div class="drch">
							<h3 class ="titu">Número de carácteres de la contraseña: </h3>
							<input  type="number" name="minMax" id="num" min="8" max ="15" >
							<h4 class="titut">Mínimo 8 carácteres, máximo 15</h4>
							<input class="estilos" type="submit" name="" value="GENERAR CONTRASEÑA" >
						</div>
					</form>
				</div>
			</div>
formulario;

		}else{
			$ma = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$mi = "abcdefghijklmnopqrstuvwxyz";
			$nu = "0123456789";
			$es = "@%&?!€";
			$ingrediente = "";
			$numMax = $_GET['minMax'];
			$pass ="";
			$cont = 0;

			function comprobar(){

				//si existen cualquiera de los checkbox

				if (isset($_GET['mayusculas']) || isset($_GET['minisculas']) || isset($_GET['numeros']) || isset($_GET['especiales'])) {
				
				//si no existe el numero de longitud
				if ($_GET['minMax'] == "") {
					echo <<<checksinumno
					<div class="entero sino">
						<div class="error">
							<h3 class ='titu'>correcto existen caracteres</h3>
							<iframe src="https://giphy.com/embed/l41Ywr3dQBOujzU7m" width="280" height="133" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
							<br><hr><br>
							<h3 class ='titu'>Incorrecto, falta la longitud de la contraseña</h3>
							<br>
							<iframe src="https://giphy.com/embed/720g7C1jz13wI" width="280" height="133" frameBorder="0" class="giphy-embed" ></iframe>
							<br><br>
							<input class="estilos es" type='button' onclick='history.go(-1)' value='VOLVER'>
						</div>
					</div> 
checksinumno;
				}else{
					//echo "Los ingredientes de la contraseña son:";
					function generarPass($numMax, $pass){

						if (isset($_GET['mayusculas'])) {
							$GLOBALS['ingrediente'] .= $GLOBALS['ma'];
							$GLOBALS['cont']++;
						}
						if (isset($_GET['minisculas'])) {
							$GLOBALS['ingrediente'] .= $GLOBALS['mi'];
							$GLOBALS['cont']++;
						}
						if (isset($_GET['numeros'])) {
							$GLOBALS['ingrediente'] .= $GLOBALS['nu'];
							$GLOBALS['cont']++;
						}
						if (isset($_GET['especiales'])) {
							$GLOBALS['ingrediente'] .= $GLOBALS['es'];
							$GLOBALS['cont']++;
						}

							//echo $GLOBALS['ingrediente'];
							//echo $GLOBALS['cont'];

						 for ($x=0; $x <= $numMax; $x++) { 
						 	$pass.= $GLOBALS['ingrediente'][rand(0,strlen($GLOBALS['ingrediente'])-1)];

						 }
						 return $pass;
					}
					$final = generarPass($GLOBALS['numMax'] , $GLOBALS['pass']);

					//echo "<br><hr>";
					//echo $final;
					echo <<<ok
						<div class="entero nono">
							<div class="error">
								<h3 class ='titu'>La contraseña genera es:</h3>
								<h2>$final</h2>
								<iframe src="https://giphy.com/embed/8fen5LSZcHQ5O" width="480" height="348" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
							</div>
						</div> 
ok;
				}
			}else{
				
				if ($_GET['minMax'] == "") {
					echo <<<checknonumno
						<div class="entero nono">
							<div class="error">
								<h3 class ='titu'>incorrecto no existen caracteres</h3>
								<iframe src="https://giphy.com/embed/720g7C1jz13wI" width="280" height="133" frameBorder="0" class="giphy-embed" ></iframe>
								<br><br>
								<br><hr><br>
								<h3 class ='titu'>Incorrecto, falta la longitud de la contraseña</h3>
								<br>
								<iframe src="https://giphy.com/embed/720g7C1jz13wI" width="280" height="133" frameBorder="0" class="giphy-embed" ></iframe>
								<br><br>
								<input class="estilos es" type='button' onclick='history.go(-1)' value='VOLVER'>
							</div>
						</div> 
checknonumno;
					/*echo "incorrecto no existen caracteres";
					echo "mete putos numeros 2";
					 echo "<input type='button' onclick='history.go(-1)' value='VOLVER'> ";*/
				}else{
					echo <<<checknonumsi
						<div class="entero nosi">
							<div class="error">
								<h3 class ='titu'>incorrecto no existen caracteres</h3>
								<iframe src="https://giphy.com/embed/720g7C1jz13wI" width="280" height="133" frameBorder="0" class="giphy-embed" ></iframe>
								<br>
								<br><hr><br>
								<h3 class ='titu'>La longitud es correcta</h3>
								<br>
								<iframe src="https://giphy.com/embed/l41Ywr3dQBOujzU7m" width="280" height="133" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
								<br><br>
								<input class="estilos es" type='button' onclick='history.go(-1)' value='VOLVER'>
							</div>
						</div> 
checknonumsi;
					/*echo "incorrecto no existen caracteres pero has metido los putos numeros";
					 echo "<input type='button' onclick='history.go(-1)' value='VOLVER'> ";*/
				}
			}
		}
		comprobar();
	}

?>
</body>
</html>