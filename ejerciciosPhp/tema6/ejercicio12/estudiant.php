<?php
    
    
    $conexion = mysqli_connect("localhost", "root", "", "estudiantes")or die ("Error, no se pudo conectar a la BBDD");
    
    $estudiante = array();
    $q = "Select * from estudiante";

    $query = mysqli_query($conexion,$q);
    

    while($reg = mysqli_fetch_assoc($query)){
        $estudiante[] = $reg;
    }

    foreach ($estudiante as $key => $value) {
        foreach ($value as $key2 => $valor) {
            echo $valor."<br>";    
        }
        echo "<hr>";
   }
    print_r($estudiante);
    mysqli_close($conexion);
?>