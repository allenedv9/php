<?php

    require_once 'ejercicio9.php';

    class Persona implements MiInterfaz{

        private $nombre;
        private $apellido;
        private $genero;

        public function getNombre(){
            return $this->nombre;
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function setGenero($genero){
            $this->genero = $genero;
           
        }
    }

?>
