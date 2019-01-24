<?php

   
    if(isset($_COOKIE['nombre'])){
        header("Location: ../cookies/arbol.php");
    }else{
        header("Location: ../cookies/arbol2.php");
    }

?>