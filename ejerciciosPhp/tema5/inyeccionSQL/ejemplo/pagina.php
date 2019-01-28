<?php

    $conexion=mysqli_connect("localhost","root","", "usuarios") or die("Error en la conexion"); 

    $sql="select * from usuario where nombre='$_POST[nombre]'";

    echo $sql. "<br />";

    $registros=mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error());
    while ($reg=mysqli_fetch_array($registros)){
        print_r($reg);
        echo "<br>";
    }
    mysqli_free_result($registros);
    mysqli_close($conexion);

?>
