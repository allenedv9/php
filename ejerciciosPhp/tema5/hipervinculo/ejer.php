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

    $conexion = mysqli_connect("localhost", "root", "", "trenes")or die("ERROR! no se pudo conectar a la BBDD");

    //limite de registros por paginas
    $limite = 2;

    if(isset($_GET['pagina']) ){
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 1;
    }

    $empieza = ($pagina-1)*$limite;

    $query = "Select * from recorridos limit $empieza,$limite";

    $resultado = mysqli_query($conexion,$query);
?>
    <table>
        <tr>
            <th>Tren</th>
            <th>Estación</th>
        </tr>
        
    <?php
        while($reg = mysqli_fetch_assoc($resultado)){
        
    ?>
        <tr>
            <td><?php echo $reg['cod_tren']?></td>
            <td><?php echo $reg['cod_estacion']?></td>
        </tr>
        <?php }; ?>
    </table>

    <div>
        <?php
            $query = "Select * from recorridos";
            $resultado = mysqli_query($conexion,$query);
            $total_reg = mysqli_num_rows($resultado);
            $total_paginas = ceil($total_reg/$limite);

            echo "<center><a href='ejer.php?pagina=1'>Anterior</a>";

            for($x = 1; $x <= $total_paginas; $x++){
                echo " <a href='ejer.php?pagina".$x."'>".$x."</a>";
            }

            echo "<a href='ejer.php?pagina=$total_paginas'>Siguiente</a></center>";
        ?>

    </div>
</body>
</html>