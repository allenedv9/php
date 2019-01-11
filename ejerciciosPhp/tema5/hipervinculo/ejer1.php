<?php

  if(isset($_REQUEST['inicio'])){
      $inicio = $_REQUEST['inicio'];
  }else{
    $inicio = 0;
  }

    $conexion = mysqli_connect("localhost","root","","trenes") or die("Error!No se pudo conectar a la base de datos");

    $q = <<<abc
        SELECT * FROM recorridos limit $inicio,2
abc;


    $registro = mysqli_query($conexion,$q)or die ("FALLO en la query");

    while($reg=mysqli_fetch_array($registro)){
        echo <<<result
             <p>
                Tren: {$reg['cod_tren']} <br>
                Estación: est {$reg['cod_estacion']}
                <hr>
             </p> 
result;
        $entera = mysqli_query($conexion,"select * from recorridos");
        $filas = mysqli_num_rows($entera);
        
    }
    mysqli_close($conexion);

    if($inicio == 0){
        echo "Anterior   ";
        $x = $inicio + 2;
        echo '<a href="ejer1.php?inicio='.$x.'">Siguiente</a>';
       
    }else{
        $y = $inicio - 2;
        echo '<a href="ejer1.php?inicio='.$y.'" >Anterior</a>'; 
        
        if($inicio < $filas-2){
            
            $x = $inicio + 2;  
            echo '<a href="ejer1.php?inicio='.$x.'">Siguiente</a>';
        }else{
            echo "Siguiente";
        }
     
    }
   
    



?>