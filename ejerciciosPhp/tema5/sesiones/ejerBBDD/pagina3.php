<?php
    session_start();
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

    if(isset($_SESSION['nombre'])){
        echo <<<abc
            <p>Bienvenido, {$_SESSION['nombre']}</p>
abc;
    }else{
        echo "Acceso Restringido, <a href='pagina1.php'>Volver al inicio</a>";
    }

?>
</body>
</html>


