<?php

    function crearConexion($host,$user,$pass,$db){

        $conexion = mysqli_connect($host,$user,$pass,$db)or die("Error e la conexion a la BBDD");
        return $conexion;

    }
    function query($conexion, $consulta){

        $res =  mysqli_query($conexion,$consulta);
       return $res;
    }

    function registros($res){
        return mysqli_fetch_array($res);
            
        
    }


    function cerrarConexion($conexion){

        mysqli_close($conexion);
    }

?>