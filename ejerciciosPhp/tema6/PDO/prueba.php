<?php

$con = new PDO('mysql:host=localhost; dbname=estudiantes', 'root', '');
 $nom = "Allende";
 //$inser = "INSERT into x (nombre)  values (:nom)";
     $stmt = $con->prepare('INSERT into x (nombre)  values (:nom)');
     //echo $stmt;
     $rows = $stmt->execute(array(':nom'=>$nom));
 //    $rows = $stmt->execute(array( ':nombre'=>$nombre, ':apellido'=>$apellido, ':telefono'=>$telefono));

     if( $rows == 1 )
         echo 'Inserción correcta';
     else
         echo "fallo";

?>