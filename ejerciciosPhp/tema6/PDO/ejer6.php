<?php

    $tel = '987456321';

    try {

        $con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', "");

        $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE telefono like :tel');
        $stmt->bindParam(':tel', $tel, PDO::PARAM_INT);
        $stmt->execute();

        while ($datos = $stmt->fetch()) {
            echo $datos[0].'<br>';
        }

        
    }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
      }

?>