<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    
    <?php

        $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 

        $cod = $_POST['codigo'];

        $q = mysqli_query($conexion," SELECT * FROM trenes WHERE cod_tren = $cod") or die("Problemas en el select:".mysqli_error());

        if (mysqli_num_rows($q) == 0) {
            
            echo "No hay resultados para su busqueda<br>";
            echo "<input type='submit' value='Volver' onclick='history.go(-1)'>";
        }else{

        while ($reg=mysqli_fetch_array($q)){
            //Para recuperar  registro a registro los datos obtenidos por el select hay que llamar a la función mysqli_fetch_array()
            
                echo "Código del tren:".$reg['cod_tren']."<br>";
                echo "Fecha de compra del tren:".$reg['fecha_compra']."<br>";
                echo "Km recorridos: " .$reg['km_recorridos']."<br>";
                echo "<hr>";

                $fec = $reg['fecha_compra'];
              
                echo <<<sql
                <form action="9-insertarFechaEnBBDD.php" method="post">
                    <label for="">La fecha a modificar es:</label>
                    <input type="text" name="fecha" id="" value=$fec><br>
                    <label for="">La nueva fecha a introducir es:</label>
                    <input type="text" name="fnueva" id="" ><br><br>
                    <input type="hidden"  name="oculto" value=$cod>
                    <input type="submit" name="enviar" value="Cambiar fecha">
                </form>
    
sql;
        }
    }
        mysqli_close($conexion);

?>
</body>
</html>