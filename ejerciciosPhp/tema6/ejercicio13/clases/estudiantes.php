<?php

    require_once 'conectar.php';

    class Estudiantes{

        private $est;

        public function __construc(){
            
            $this->est = array();   
            
        }
        
        public function getEstudiante(){

            $con = Conectar::conexion();
            $q = "Select * from estudiante";
            $query = mysqli_query($con,$q);
            while($reg = mysqli_fetch_assoc($query)){
                $this->est[] = $reg;
            }
            return $this->est;

            mysqli_close($con);
        }
        
       


    }

?>