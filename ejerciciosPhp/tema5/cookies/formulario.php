<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
<?php

    if(isset($_COOKIE['prueba'])){
        echo <<<abc
        <form action="contenido.php" method="post">
        <p>************************************</p>
        <label for="">Introduce un nombre</label><br>
        <input type="text" name="nombre" id="" value="{$_COOKIE['prueba']}">
        <input type="submit" value="Enviar" name="enviar">
        <p>************************************</p>
    </form>
abc;
    }
        echo <<<abc
    <form action="contenido.php" method="post">
        <p>************************************</p>
        <label for="">Introduce un nombre</label><br>
        <input type="text" name="nombre" id="" value="">
        <input type="submit" value="Enviar" name="enviar">
        <p>************************************</p>
    </form>
abc;
    
?>
   
</body>
</html>