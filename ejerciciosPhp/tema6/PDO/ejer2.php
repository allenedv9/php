<?php

    try {
        
        $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');

        $tel = '369852147';
        $datos = $con->query('SELECT nombre FROM estudiante WHERE telefono like ' . $con->quote($tel));//el quote() es para evitar la inyeccion SQL

        foreach ($datos as $key => $value) {
            echo $value['nombre']."<br>";
        }

    } catch (PDOException $e){
        echo 'Error conectando con la base de datos: ' . $e->getMessage();
      }


?>