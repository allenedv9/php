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

    $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

        $q = mysqli_query($conexion, "CREATE table trenes_antiguos SELECT * FROM trenes WHERE fecha_compra <= '2005-01-01'");
        $borrar = mysqli_query($conexion, "DELETE from trenes where fecha_compra <= '2005-01-01'");
        $addColum = mysqli_query($conexion, "ALTER TABLE trenes add capacidad int");
        

       /* while ($reg=mysqli_fetch_array($q)){
            //Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
            
                echo "Código del tren:".$reg['cod_tren']."<br>";
                echo "Fecha de compra del tren:".$reg['fecha_compra']."<br>";
                echo "Km recorridos: " .$reg['km_recorridos']."<br>";
                echo "<hr>";
        }*/
?>
    
</body>
</html>