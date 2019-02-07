<?php

    $x = $_REQUEST['radio'];
   
    if($x == 'alta'){
        echo <<<abc
            <form action="index.php" method="post">
                <label>Nombre: </label>
                <input type="text" name="nombre"><br><br>
                <label>Apellido: </label>
                <input type="text" name="apellido"><br><br>
                <label>Teléfono: </label>
                <input type="number" name="telefono"><br><br>
                <input type="submit" name="insertar" value="insertar">
            </form>
abc;
    }

    if($x == 'borrarModificar'){
        echo <<<abc
            <form action="index.php" method="post">
                <label>Inserta un ID: </label>
                <input type="text" name="nombre"><br><br>
                <input type="submit" name="buscaId" value="buscar">
            </form>
abc;
    }

    if($x == 'consulta'){
        echo <<<abc
        <form action="index.php" method="post">
            <label>Inserta un ID: </label>
            <input type="number" name="id"><br><br>
            <input type="submit" name="consultaId" value="buscar">
        </form>
abc;
    }

?>