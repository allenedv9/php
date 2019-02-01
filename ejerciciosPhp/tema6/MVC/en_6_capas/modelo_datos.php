<?php

    require_once 'modelos_abstraccion.php';

    function getTodosLosEstudiantes(){

        $conexion = crearConexion();
        $resultado = mysqli_query($conexion,'SELECT nombre, telefono FROM estudiante');
        // crear el array de elementos para la capa de la vista
        $est=array();
        while ($fila = mysqli_fetch_array($resultado)){
            $est[]=$fila;
            
        }
       cerrarConexion($conexion);
        return $est;
    }

?>