<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar datos</title>
</head>
<body>


    <?php
       $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 

        $q = mysqli_query($conexion,"select count(cod_estacion) as cod from estaciones where poblacion='Bilbao'") or die("Problemas en el select:".mysqli_error());
    

while ($reg=mysqli_fetch_array($q)){
//Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()

    echo "Numero de estaciones que tiene Bilbao:".$reg['cod']."<br>";
  
}
mysqli_close($conexion);

?>


</body>
</html>

