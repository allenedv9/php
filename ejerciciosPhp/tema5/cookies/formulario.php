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
    if(isset($_COOKIE['prueba']))
?>
    <form action="" method="post">
        <p>************************************</p>
        <label for="">Introduce un nombre</label><br>
        <input type="text" name="nombre" id="">
        <input type="submit" value="Enviar" name="enviar">
        <p>************************************</p>
    </form>
    <a href="contenido.php">Ver información de la página</a>
</body>
</html>