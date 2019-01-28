<?php

    

    $con = mysqli_connect("Localhost", "root", "", "usuarios")or die("Error en la conexion a la BBDD");

    $mail = mysqli_real_escape_string($con,$_REQUEST['mail']);
    $q = "Delete from usuario where mail='".$mail."'";

    $query = mysqli_query($con,$q)or die("Error en la query");

    echo "Usuario dado de baja";

    mysqli_close($con);

?>