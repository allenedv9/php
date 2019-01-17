<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_COOKIE['prueba'])){
            echo <<<abc
                <p>Hola, {$_COOKIE['prueba']}</p>
                <h2>Árboles</h2>
                <p>Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros</p>
                <img src="arbol.jpg">
abc;
        }


?>
</body>
</html>