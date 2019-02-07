<?php

    
    function crearConexion($host,$db, $user,$pass){

        try {
            
            $con = new PDO("mysql:host=".$host."; dbname=".$db, $user, $pass);
    
            return $con;

        } catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
      }
    }


    function insertarRegistro($con, $insert, $nombre, $apellido, $telefono){
            // echo $insert;
             //echo $nombre;
            $stmt = $con->prepare($insert);
            // $stmt ->bindParam(':nombre', $nombre);
            // $stmt ->bindParam(':apellido', $apellido);
            // $stmt ->bindParam(':telefono', $telefono);
           // $rows = $stmt->execute();
         
            $rows = $stmt->execute(array(':nombre'=>$nombre, ':apellido'=>$apellido, ':telefono'=>$telefono));
    
            //echo $rows."hola";
            if( $rows == 1 ){
                echo 'Inserción correcta';
            }else{
                echo "fallo";
            }
            
               
        }   

    function seleccionarRegistro($con, $id){

        
    }

   
    
?>