<?php
$telefono = '147852369';
try{

  $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');
  
 
 $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE telefono like :telefono');

  $stmt->execute(array(':telefono' => $telefono ));
 
  //print_r($stmt);
 
  while( $datos = $stmt->fetch()){
    echo $datos[0] . '<br/>';
  }
}catch(PDOException $e){
  echo 'Error: ' . $e->getMessage();
}
?>
