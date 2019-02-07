<?php

   // require_once 'modelo_abstraccion.php';
    function insertEst($nombre,$apellido,$telefono){
        //echo $nombre;

    $con = crearConexion("localhost","estudiantes","root","");


    $insert = <<<abc
        INSERT into estudiante  VALUES (:nombre, :apellido, :telefono)
abc;
    
    insertarRegistro($con, $insert, $nombre, $apellido, $telefono);


    }

    function selectEst($id){
        
        $con = crearConexion("localhost","estudiantes","root","");
        
        if($id == ""){
            $q = <<<abc
            SELECT * FROM estudiante
abc;
        $estudiante = seleccionarRegistro($con,$q);

        
        }else{
        $q = <<<abc
            SELECT * FROM estudiante where id_estudiante = $id
abc;
        $estudiante = seleccionarRegistro($con,$q);
        }

       
    }
    
?>