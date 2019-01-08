<?php

    //array no asociativo

    $capitales = array('Madrid','París','London');

   echo "<b>Matriz vista por echo. Para esta opción utilizar foreach().</b><br><br>";

    foreach($capitales as $indice  => $value){
        echo $indice . " =>" . $value . "<br>";
    }

   echo "<br><br><b>Matriz vista por print_r.</b><br><br>";

    print_r($capitales);

   echo "<br><br><b>Matriz vista por print_r y la etiqueta pre.</b>";

    echo "<PRE>";
    print_r($capitales);
    echo "</PRE>";

    echo "<br><b>atriz vista por la función:  var_dump()</b><br>";

    var_dump($capitales);

    echo "<br><b>Mediante la funcion depurar_array</b>";
    require_once "ejer1_funcion.php";
    depurar_array($capitales,0);
?>