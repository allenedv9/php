<?php

    $nom = 'Pipo';
    $id = '5';
    try {

        $con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', '');

        $stmt = $con->prepare('UPDATE estudiante SET nombre = :nombre WHERE id_estudiante = :id');
        $rows = $stmt->execute( array( ':nombre' => $nom,':id' => $id));
 
        if( $rows == 1 ){
            echo 'Modificación correcta';
        }

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
      }

?>