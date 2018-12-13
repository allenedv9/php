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
       $f = $_POST['fnueva'];
       $c = $_POST['oculto'];

        $q = mysqli_query($conexion,"UPDATE `trenes` SET `fecha_compra`= '$f' WHERE cod_tren='$c' ") or die("Problemas en el select:".mysqli_error());
    
        echo " Fecha de compra del tren modificada";

mysqli_close($conexion);

?>


</body>
</html>
