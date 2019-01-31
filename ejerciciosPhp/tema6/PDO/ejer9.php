<?php

    $id = '5';
    try {

        $con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', '');

        $stmt = $con->prepare('DELETE FROM estudiante WHERE id_estudiante = :id');
        $rows = $stmt->execute( array( ':id' => $id));
 
        if( $rows == 1 ){
            echo 'Usuario eliminado';
        }

    } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
      }

?>