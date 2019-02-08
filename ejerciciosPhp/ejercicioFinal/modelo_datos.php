<?php

   // insertar estudiante
    function insertEst($nombre,$apellido,$telefono){
        //echo $nombre;

    $con = crearConexion("localhost","estudiantes","root","");


    $insert = <<<abc
        INSERT INTO estudiante (nombre, apellido, telefono)  VALUES (:nombre, :apellido, :telefono)
abc;

    
    insertarRegistro($con, $insert, $nombre, $apellido, $telefono);


    }

    // seleccionar estudiante por id
    function selectEst($id){
        
        $con = crearConexion("localhost","estudiantes","root","");
        
        if($id == ""){
            $q = <<<abc
            SELECT * FROM estudiante
abc;
        $resultado = seleccionarRegistro($con,$q);
        $estudiante = array();
        while($fila = registros($resultado)){
            $estudiante[] = $fila;
        }

        return $estudiante;
        
        }else{
        $q = <<<abc
            SELECT * FROM estudiante where id_estudiante = $id
abc;
        $resultado = seleccionarRegistro($con,$q,$id);
        $estudiante = array();
        while($fila = registros($resultado)){
            $estudiante[] = $fila;
        }

        return $estudiante;
      
    }

    }

    //borrar estudiante

    function borrarEst($id){

        $con = crearConexion("localhost","estudiantes","root","");

        $q = <<<abc
            Delete from estudiante where id_estudiante = :id
abc;

        borrarRegistro($con, $q, $id);


    }

    //modificar un estudiante

    function modificarEst($id){

        $con = crearConexion("localhost","estudiantes","root","");

        $q = <<<abc
            UPDATE estudiante             
abc;

        borrarRegistro($con, $q, $id);


    }

?>