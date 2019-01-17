<?php

$nom = $_REQUEST['nombre'];

if(isset($_REQUEST['nombre'])){
    setcookie('prueba',$nom);
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

<a href="info.php"">Ver información de la página</a>
    
</body>
</html>