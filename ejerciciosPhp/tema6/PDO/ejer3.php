
<?php
  try{

    $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');

    $stmt = $con->prepare('SELECT nombre FROM estudiante');
    $stmt->execute();
  
  //   print_r($stmt);
    while( $datos = $stmt->fetch() ){
      echo $datos[0] . '<br/>';
    }

    $stmt2 = $con->prepare('SELECT count(*) FROM estudiante');
    $stmt2->execute();
    
    while($datos2 = $stmt2->fetch()){
      echo "Numero de estudiantes: " .$datos2[0] ;
      echo "<br>";
    }

    $stmt3 = $con->prepare('SELECT count(*),nombre FROM estudiante group by nombre');
    $stmt3->execute();

    while($datos3 = $stmt3->fetch()){
      echo "Estudiates llamados: " . $datos3[1] . " cantidad: " .$datos3[0];
      echo "<br>";
    }

    $stmt4 = $con->prepare('SELECT count(*),nombre FROM estudiante group by nombre HAVING  COUNT(nombre) >2');
    $stmt4->execute();

    while($datos4 = $stmt4->fetch()){
      echo "Mas de dos estudiantes llamados : " . $datos4[1] . " cantidad: " .$datos4[0];
      echo "<br>";
    }
    //  $datos = $stmt->rowCount();
    //   echo "Numero de estudiantes: " .$datos ;
    

  }catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
  }
?>

