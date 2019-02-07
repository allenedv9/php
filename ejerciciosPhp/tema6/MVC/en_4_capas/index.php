<?php
    require_once 'modelo_abstraccion.php';
    require_once ('modelo_datos.php');
    $est=getTodosLosEstudiantes();
    require ('vista.php');
?>
