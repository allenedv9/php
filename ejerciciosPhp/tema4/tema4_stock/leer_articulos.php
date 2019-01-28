<?php

    $archivo = fopen("articulos.txt", "r") or die("ERROR: No se pudo abrir el archivo") ;

    while (!feof($archivo)) {
        
        $lectura = fgets($archivo);
        echo utf8_encode($lectura);
        echo "<br>";
    }

    fclose($archivo);

    echo "<input type='submit' value='Volver' onclick = history.go(-1)>"

?>