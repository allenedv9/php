<?php

    class Usuario{

        private $nombre;
        private $apellido;

        public function nombreApellido(){

            return $this->nombre . ' ' . $this->apellido;
        }
    }

        // Hay que tener en cuenta que para que funcione correctamente, el nombre de los atributos en nuestra clase tienen que ser iguales que los que tienen las columnas en nuestra tabla de la base de datos. Con esto claro vamos a realizar la consulta.

        try{
            $con = new PDO('mysql:host=localhost;dbname=estudiantes', 'root', '');

            $stmt= $con->prepare('SELECT nombre, apellido FROM estudiante');
            $stmt->execute();
            
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
            
            while($usuario = $stmt->fetch()){
                echo $usuario->nombreApellido() . '<br>';
            }
            
        }catch(PDOException $e){
        echo 'Error: ' . $e->getMessage();
        }



?>