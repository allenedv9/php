<?php

    class Conectar{

        public static function conexion(){

            $conexion = mysqli_connect("localhost", "root", "", "estudiantes")or die ("Error, no se pudo conectar a la BBDD");

            return $conexion;
        }

        public static function cerrarConexion($conexion){
            
            mysqli_close($conexion);
        }
    }

?>