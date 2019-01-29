<?php
    
    
    $conexion = mysqli_connect("localhost", "root", "", "estudiantes")or die ("Error, no se pudo conectar a la BBDD");

    $q = "Select * from estudiante";
    $query = mysqli_query($conexion,$q);
    
    $estudiante = array();

    while($reg = mysqli_fetch_assoc($query)){
        $estudiante[] = $reg;
    }

    for ($x=0; $x < sizeof($estudiante) ; $x++) { 
        echo <<<abc
        Identificación: {$estudiante[$x]["id_estudiante"]}<br/>
        Nombre Completo: {$estudiante[$x]["nombre"]}<br/>
        Teléfono: {$estudiante[$x]["telefono"]}<br/>
        <hr>

abc;
    }
    mysqli_close($conexion);
?>