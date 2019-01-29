<?php

    require_once 'clases/estudiantes.php';

    $estudiante1 = new Estudiantes();

    $ar = $estudiante1->getEstudiante();
   //print_r($estudiante1);

    for ($x=0; $x < sizeof($ar) ; $x++) { 
        echo <<<abc
        Identificación: {$ar[$x]["id_estudiante"]}<br/>
        Nombre Completo: {$ar[$x]["nombre"]}<br/>
        Teléfono: {$ar[$x]["telefono"]}<br/>
        <hr>

abc;
    }


?>