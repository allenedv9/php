<?php

 
    setcookie("nombre",$_REQUEST['nombre'],time()+60*60*24*365);
    echo "Se a creado la cookie, <a href='../redireccionamiento/arbol_redi.php'>Vuelve a la página principal</a>";
   
?>