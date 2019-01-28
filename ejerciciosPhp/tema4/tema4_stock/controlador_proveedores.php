<?php


    $cod = $_POST['codigoP'];
    $tel = $_POST['tel'];
    $datos = $_POST['datos'];

    $cont = 0;
    
    $archivo = @fopen("proveedores.txt", "a+") or die("ERROR: No se pudo abrir el archivo");
    while($linea = fgets($archivo)){
        $cont++;
    }
  
    if ($cod > $cont || $cod < $cont) {
        echo "Error en el código. El código introducido es ".$cod. " y el código que tienes que introducir es el " .$cont. "<br><br><input type='submit' value='Volver' onclick = history.go(-1)>";
    }else{
    
        fwrite($archivo,"$cod|$tel|$datos|".PHP_EOL);
        echo "Los valores se han introducido correctamente <br><br> <input type='submit' value='Volver' onclick = history.go(-1)>";
    }
    
    
    fclose($archivo);


?>