<?php
    $conexion = mysqli_connect("localhost", "root", "", "dwes") or die( "ERROR! No se pudo conectar a la base de datos");

    $q= <<<abc
        Insert into usuarios values ('dwes',md5('abc123.'));
abc;

    $registro = mysqli_query($conexion,$q) or die("ERROR! no se pudo hacer la insert");

    mysqli_close($conexion);
?>