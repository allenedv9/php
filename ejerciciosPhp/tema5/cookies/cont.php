<?php

//$nom = $_REQUEST['nombre'];

if(isset($_REQUEST['nombre'])){
    setcookie('dos',$_REQUEST['nombre']);
}

?>

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
    echo <<<abc
    <form action="cont.php" method="post">
        <input type=submit value="Ver información de la página" name = "info">
    </form>
abc;
if(isset($_REQUEST['info'])){
    echo <<<abc
    <div>
        <p>Hola, {$_COOKIE['dos']}</p>
        <h2>Árboles</h2>
        <p>Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo. El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez, diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros</p>
        <img src="arbol.jpg">
    </div>
abc;
}
?>
</body>
</html>