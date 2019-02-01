<?php

    function crearConexion(){

        $conexion = mysqli_connect("localhost", "root", "", "estudiantes")or die("Error e la conexion a la BBDD");
        return $conexion;

    }

    function cerrarConexion($conexion){

        mysqli_close($conexion);
    }

?>