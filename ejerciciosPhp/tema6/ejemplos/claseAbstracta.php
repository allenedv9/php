<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    abstract class Operacion {  //colocar la palabra abstract porque no queremos instanciar la clase, si ponemos public                                no funciona
        protected $n1;
        protected $n2;
        protected $resultado;

        public function valorN1($v){
            $this->n1=$v;
        }
        public function valorN2($v){
            $this->n2=$v;
        }
        public function visualizar(){
            echo $this->resultado.'<br>';
        }
        public abstract function operar(); // creamos el metodo abstracto operar para obligar a la clases que heredan operacion a que la usen
    }

    class Suma extends Operacion{ // la clase operacion tiene los elementos en comun para las clases suma y resta 
        public function operar(){
            $this->resultado=$this->n1+$this->n2; 
        }
    }

    class Resta extends Operacion{
        public function operar(){
            $this->resultado=$this->n1-$this->n2;
        }
    }

        $suma=new Suma();
        $suma->valorN1(10);
        $suma->valorN2(10);
        $suma->operar();
        echo 'El resultado de la suma de 10+10 es:';
        $suma->visualizar();

        $resta=new Resta();
        $resta->valorN1(10);
        $resta->valorN2(5);
        $resta->operar();
        echo 'El resultado de la diferencia de 10-5 es:';
        $resta->visualizar();


?>
    
</body>
</html>