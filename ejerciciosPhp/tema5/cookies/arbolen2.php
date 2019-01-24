<?php
    if(isset($_REQUEST['nom'])){
        setcookie("nom",$_REQUEST['nom'],time()+60*60*24*365);
        header("Refresh:0, url=arbolen2.php");
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

    if(isset($_COOKIE['nom'])){
        echo <<<abc
        <p>Hola, {$_COOKIE['nom']}</p>
abc;
    
?>

        <h2>Árboles</h2>
        <p>Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo.<br> El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez,<br> diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros</p>
        <img width="600px" src="arbol.jpg"><br>
        <a href="borrarCookie.php">Borrar la cookie</a>
        <form action="borrarCookie.php" method="post">
            <label for="">Borrar la cookie</label>
            <input type="submit" value="Borrar Cookie">
        </form>
   <?php
    } else{
        echo <<<abc
        <h2>Árboles</h2>
        <p>Un árbol es una planta, de tallo leñoso, que se ramifica a cierta altura del suelo.<br> El término hace referencia habitualmente a aquellas plantas cuya altura supera un determinado límite en la madurez,<br> diferente según las fuentes: dos metros, tres metros,​ cinco metros​ o los seis metros</p>
        <img width="600px" src="arbol.jpg"><br>
        <a href="arbol2en2.php"> Pincha aquí para introducir tu nombre</a>
        
abc;
    }


    ?>

</body>
</html>