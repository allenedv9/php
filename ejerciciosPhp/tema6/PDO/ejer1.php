<?php
 
try{
  $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');
  $datos = $con->query('SELECT nombre FROM estudiante' );  

//codificar el foreach correspondiente
   // print_r($datos);
    foreach ($datos as $key => $value) {
        echo $value['nombre']."<br>";
        
    }
}catch(PDOException $e){
  echo 'Error conectando con la base de datos: ' . $e->getMessage();
}

?>
