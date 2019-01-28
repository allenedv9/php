<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>

<body>

    <?php

echo <<<abc
<h3>Introduce datos del Tren</h3>
<form action="2-inserts.php" method="post">
  <!--  <label>Número de Tren</label>
    <input type="number" name="cod_tren" require><br>-->
    <label>Fecha de Compra</label>
    <input type="date" name="fecha" id="" require><br>
    <label>Kilometros recorridos</label>
    <input type="number" name="km" id="" require><br><br>
    <input type="submit" name="dat_tren" value="Enviar datos"><br><br>
</form>

<h3>Introduce datos de la Estación</h3>
<form action="2-inserts.php" method="post">
    <!--<label>Código de la Estación</label>
    <input type="number" name="cod_estacion" require><br>-->
    <label>Nombre de la Estación</label>
    <input type="text" name="nom_estacion" id="" require><br>
    <label>Población</label>
    <input type="text" name="poblacion" id="" require><br><br>
    <input type="submit" name="dat_est" value="Enviar datos"><br><br>
</form>

<h3>Recorridos</h3>
<form action="2-inserts.php" method="post">
    <label>Código del Tren</label>
    <input type="number" name="codigo_tren" id="" require><br>
    <label for="">Código Estación</label>
    <input type="number" name="codigo_estacion" id="" require><br><br>
    <input type="submit" name="dat_reco" value="Enviar datos"><br><br>
</form>
abc;
   


?>

</body>

</html>