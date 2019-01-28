<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "alumnos")or die("Error! No se pudo conectar a la BBDD");


    $mail = $_REQUEST['mail'];
    //echo ($mail);

    $q = <<<abc
        Select nombre from alumno where mail = '$mail'
abc;
    
    $query = mysqli_query($conexion,$q)or die("Error en la query");
   $filas = mysqli_num_rows($query);
    //echo ($filas);
    
    if( $filas > 0){
        if($resultado = mysqli_fetch_array($query)){

            $_SESSION['nombre'] = $resultado['nombre'];
        }
        //$resultado = mysqli_fetch_array($query);
        //echo ($_SESSION['nombre']);
    }
    echo <<<abc
    <a href="pagina3.php">Siguiente</a>
abc;

    mysqli_close($conexion);

?>