<?php
    
    
    $conexion = mysqli_connect("localhost", "root", "", "estudiantes")or die ("Error, no se pudo conectar a la BBDD");

    $q = "Select * from estudiante";
    $query = mysqli_query($conexion,$q);
    
    $estudiante = array();

    while($reg = mysqli_fetch_assoc($query)){
        $estudiante[] = $reg;
    }

    foreach ($estudiante as $key => $value) {

        echo "Identidicación: " . $value['id_estudiante']."<br>";
        echo "Nombre: " . $value['nombre']."<br>";
        echo "Teléfono: " . $value['telefono']."<br>";
        echo "<hr>";

   }
    print_r ($estudiante);
    mysqli_close($conexion);
?>