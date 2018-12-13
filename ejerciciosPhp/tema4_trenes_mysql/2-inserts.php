<?php

    $conexion = mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 


    if(isset($_POST['dat_tren'])){
        mysqli_query($conexion ,"insert into  trenes (fecha_compra, km_recorridos) values ('$_POST[fecha]',$_POST[km])") or die("Problemas al insertar el tren");
        echo "Datos intoducidos correctamente";
        
    } 
 
    if(isset($_POST['dat_est'])){
        mysqli_query($conexion ,"insert into  estaciones (nombre, poblacion) values ('$_POST[nom_estacion]','$_POST[poblacion]')") or die("Problemas al insertar la estacion");
        echo "Datos intoducidos correctamente";
        
    } 

    if (isset($_POST['dat_reco'])) {
        mysqli_query($conexion ,"insert into  recorridos  values ($_POST[codigo_tren],$_POST[codigo_estacion])") or die("Problemas al insertar un recorrido");
        echo "Datos intoducidos correctamente";
    }

   
    echo '<br><input type="submit" value="Volver" onclick="history.go(-1)">';


    mysqli_close($conexion); 

?>
