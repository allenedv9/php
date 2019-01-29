<!-- •	Crear una Interface con los métodos getters y setters para nombre, apellidos y género. Los setters recibirán el parámetro correspondiente.
•	En otro .php crear una clase Persona que implemente la interface anterior.
•	En otro .php crear una instancia de Persona y llamar a los métodos getters y setters. -->

<?php

    interface MiInterfaz{
        
        public function getNombre();
        public function setNombre($nombre);

        public function getApellido();
        public function setApellido($apellido);

        public function getGenero();
        public function setGenero($genero);

    }



?>
    