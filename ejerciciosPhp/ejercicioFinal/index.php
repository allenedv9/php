<?php
    require_once 'modelo_abstraccion.php';
    require_once 'modelo_datos.php';

    if(!isset($_REQUEST['seleccionar'])){
        require_once 'vista.php';
    }else{
        require_once 'vista_2.php';
    }

    if(isset($_REQUEST['insertar'])){
            
        insertEst($_REQUEST['nombre'],$_REQUEST['apellido'], $_REQUEST['telefono']);
    } 

    if(isset($_REQUEST['consultaId'])){

        selectEst($_REQUEST['id']);
    }

?>