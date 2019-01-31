<?php

    $nom = 'Jorge';
    $tel = '147893256';
    try {

        $con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', '');

        $stmt = $con->prepare('INSERT INTO estudiante (nombre, telefono) VALUES (:nombre, :telefono)');
        $rows = $stmt->execute( array( ':nombre' => $nom,':telefono' => $tel));
 
        if( $rows == 1 ){
            echo 'Inserción correcta';
        }

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
      }

?>