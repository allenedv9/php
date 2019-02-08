<?php
    require_once 'modelo_abstraccion.php';
    require_once 'modelo_datos.php';

    if(!isset($_REQUEST['seleccionar'])){
        require_once 'vista.php';
    }else{
        require_once 'vista_2.php';
    }

    // dar de alta un estudiante
    if(isset($_REQUEST['insertar'])){
            
        insertEst($_REQUEST['nombre'],$_REQUEST['apellido'], $_REQUEST['telefono']);
    } 

    // consultar los estudiantes por su id
    if(isset($_REQUEST['consultaId'])){

        $estudiante = selectEst($_REQUEST['id']);
        require_once 'vista_3.php';
    }

    // consultar los estudiante por su id y botones de borrar y modificar
    if(isset($_REQUEST['buscaId'])){

        $estudiante = selectEst($_REQUEST['nombre']);
        require_once 'vista_4.php';
    }

    //borrar un estudiante
    if(isset($_REQUEST['borrar'])){
        // echo $_REQUEST['id'];
        // print_r ($_REQUEST);
        borrarEst($_REQUEST['id']);
    }

    //modificar un estudiante
    if(isset($_REQUEST['modificar'])){

        modificarEst($_REQUEST['id']);

    }

?>