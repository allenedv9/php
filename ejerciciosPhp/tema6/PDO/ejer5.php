<?php

    $id = '3';
    try {
        $con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', '');

        $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE id_estudiante like :id');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while ($datos = $stmt->fetch()) {
            echo $datos[0].'<br>';
        }
    } catch(PDOException $e){
      echo 'Error: ' . $e->getMessage();
    }

?>