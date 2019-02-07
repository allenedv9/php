<?php

        function getTodosLosEstudiantes(){

            $con = crearConexion("localhost","root","","estudiantes");
            $consulta = 'SELECT nombre, telefono FROM estudiante';
            $res = query($con, $consulta);
            $est=array();
             while ($fila =registros($res)){
            $est[]=$fila;
            
        }
           // $est = registros($res);
           cerrarConexion($con);
            return $est;
        }

    
?>