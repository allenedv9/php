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

    if(isset($_COOKIE['dos'])){
        echo <<<abc
        <form action="cont.php" method="post">
        <p>************************************</p>
        <label for="">Introduce un nombre</label><br>
        <input type="text" name="nombre" id="" value="{$_COOKIE['dos']}">
        <input type="submit" value="Enviar" name="enviar">
        <p>************************************</p>
    </form>
abc;
    }else{
        echo <<<abc
    <form action="cont.php" method="post">
        <p>************************************</p>
        <label for="">Introduce un nombre</label><br>
        <input type="text" name="nombre" id="" value="">
        <input type="submit" value="Enviar" name="enviar">
        <p>************************************</p>
    </form>
abc;
    } 
?>
   
</body>
</html>