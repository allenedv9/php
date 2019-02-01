<?php
$tel = '147852369';
try{

  $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');
  
 
 $stmt = $con->prepare('SELECT nombre FROM estudiante WHERE telefono like :tel');

  $stmt->execute(array(':tel' => $tel ));
 
  //print_r($stmt);
 
  while( $datos = $stmt->fetch()){
    echo $datos[0] . '<br/>';
  }
}catch(PDOException $e){
  echo 'Error: ' . $e->getMessage();
}
?>
