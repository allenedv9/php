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

        // seleccionar un registro
    function seleccionarRegistro($con,$q){

        $resultado = $con->prepare($q);
        $resultado->execute();
        return $resultado;
    }

    function registros($resultado){

        return $resultado->fetch();

    }
   
    // borrar registro

    function borrarRegistro($con, $q, $id){

        $resultado = $con->prepare($q);
       // $resultado = bindParam(":id", $id, PDO::PARAM_INT);
        $rows = $resultado->execute(array(':id' => $id));
    
        //echo $rows."hola";
        if( $rows == 1 ){
            echo 'Registro borrado';
        }else{
            echo "fallo";
        }

    }
?>