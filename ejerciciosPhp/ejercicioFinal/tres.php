<?php

    function crearConexion(){

        $con = new PDO('mysql:host = localhost; dbname = estudiantes', 'root', '');

        return $con;
    }
?>