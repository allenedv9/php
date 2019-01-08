<?php

    header('Content-Type: text/html; charset=UTF-8');

    if(!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        echo "Has pulsado CANCELAR";
        exit;
    }else{
        $user = $_SERVER['PHP_AUTH_USER'];
        $pass = md5($_SERVER['PHP_AUTH_PW']);

        $conexion = mysqli_connect("localhost","root","","dwes")or die("ERROR!No se pudo conectar a la base de datos");
        

        $q = <<<abc
            Select * from usuarios where usuario='$user' &&pass = '$pass';
abc;

        $registro = mysqli_query($conexion,$q)or die ("Fallo en la query");

        if(mysqli_affected_rows($conexion) == 0){
            echo "No existe el usuario";
            mysqli_close($conexion);
        }else{
            echo "Usuario correcto";
            mysqli_close($conexion);
        }
      
          

    }
?>