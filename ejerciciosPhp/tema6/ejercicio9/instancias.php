<?php
require_once 'clase_Persona.php';


$persona1 = new Persona();

$persona1->setNombre('Allende');
$persona1->setApellido('Edv');
$persona1->setGenero('Mujer');


echo "<b>El nombre es: </b>".$persona1->getNombre()." ". $persona1->getApellido()."<br>";
echo "<b>Género: </b>" .$persona1->getGenero();

?>