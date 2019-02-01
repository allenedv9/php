<?php

    $x = $_REQUEST['radio'];
   
    if($x == 'alta'){
        echo <<<abc
            <form action="tres.php" method="post">
                <label>Nombre: </label>
                <input type="text" name="nombre"><br><br>
                <label>Teléfono: </label>
                <input type="text" name="tel"><br><br>
                <input type="submit" name="insertar" value="insertar">
            </form>
abc;
    }

    if($x == 'borrarModificar'){
        echo <<<abc
            <form action="tres.php" method="post">
                <label>Inserta un ID: </label>
                <input type="text" name="nombre"><br><br>
                <input type="submit" name="buscaId" value="buscar">
            </form>
abc;
    }

    if($x == 'consulta'){
        echo <<<abc
        <form action="tres.php" method="post">
            <label>Inserta un ID: </label>
            <input type="text" name="nombre"><br><br>
            <input type="submit" name="buscaId" value="buscar">
        </form>
abc;
    }
?>