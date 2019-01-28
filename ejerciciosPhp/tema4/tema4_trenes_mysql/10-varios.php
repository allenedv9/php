<?php
// crear tabla trenes_antiguos
echo <<<html
    <form action="" method="post">
        <label for="">Desea crear la tabla trenes_antiguos?</label><br>
        <input type="submit" value="Confirmar" name="trenes_antiguos" >
    </form>
html;
    if (isset($_POST['trenes_antiguos'])) {

        $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

        $q = mysqli_query($conexion, "CREATE table trenes_antiguos SELECT * FROM trenes WHERE fecha_compra <= '2005-01-01'");
        $borrar = mysqli_query($conexion, "DELETE from trenes where fecha_compra <= '2005-01-01'");
        
        echo "CREATE table trenes_antiguos SELECT * FROM trenes WHERE fecha_compra <= '2005-01-01'";
        echo "<br>";
        echo "DELETE from trenes where fecha_compra <= '2005-01-01'";
        echo "<br>";
        echo "<br>";
        mysqli_close($conexion); 
    }

    //agregar columna capacidad
    echo <<<html
    <form action="" method="post">
        <label for="">Desea agregar la columna capacidad de viajeros?</label><br>
        <input type="submit" value="Confirmar" name="capacidad" >
    </form>
html;

    if (isset($_POST['capacidad'])) {
        
        $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

        $addColum = mysqli_query($conexion, "ALTER TABLE trenes add capacidad int") or die("Ya está creada la columna");
       
        echo "ALTER TABLE trenes add capacidad int";
        echo "<br>";
        echo "Columna capacidad agregada";
        echo "<br>";
        echo "<br>";
        mysqli_close($conexion); 
    }

        
        //mysqli_query($conexion, "alter table recorridos add foreign key (tren) references trenes(numeros)");

//agregar nuevo tren fecha actual
        echo <<<html
        <form action="" method="post">
            <label for="">Desea agregar un nuevo tren con la fecha actual?</label><br>
            <input type="submit" value="Confirmar" name="nuevoT" >
        </form>
html;

    if (isset($_POST['nuevoT'])) {
            
        $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

        $nuevoTren = mysqli_query($conexion, "INSERT into trenes (fecha_compra, km_recorridos)values (now(), '542')");
        
    
        echo "INSERT into trenes (fecha_compra, km_recorridos)values (now(), '542')";
        echo "<br>";
        echo "Tren agregado";
        echo "<br>";
        echo "<br>";
        mysqli_close($conexion); 
    }


    // nombre y poblacion de las estaciones q pasan tres o mas trenes
    echo <<<html
    <form action="" method="post">
        <label for="">Nombre y poblacion de las estaciones que pasan tres o mas trenes</label><br>
        <input type="submit" value="Confirmar" name="mas3tren" >
    </form>
html;

if (isset($_POST['mas3tren'])) {
            
    $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

    $estaciones = mysqli_query($conexion, "SELECT e.nombre, e.poblacion FROM trenes t, recorridos r, estaciones e WHERE t.cod_tren = r.cod_tren && e.cod_estacion= r.cod_estacion HAVING COUNT(nombre)>=3 ");
   
    echo "SELECT e.nombre, e.poblacion FROM trenes t, recorridos r, estaciones e WHERE t.cod_tren = r.cod_tren && e.cod_estacion= r.cod_estacion HAVING COUNT(nombre)>=3 ";
    echo "<br><br>";

    
    while($reg = mysqli_fetch_array($estaciones)){
        echo <<<sql
        La estación es:  {$reg['nombre']} <br>
        La población es:  {$reg['poblacion']} <br><br>
sql;


    }

    


    mysqli_close($conexion); 
}



    echo <<<html
    <form action="" method="post">
        <label for="">Nombre y poblacion de las estaciones que no pasan trenes</label><br>
        <input type="submit" value="Confirmar" name="nulltren" >
    </form>
html;

    if (isset($_POST['nulltren'])) {

        $conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");
        $q = mysqli_query($conexion, "select e.nombre, e.poblacion from estaciones e WHERE e.cod_estacion not in (SELECT r.cod_estacion from recorridos r, trenes t, estaciones e WHERE r.cod_tren=t.cod_tren AND e.cod_estacion = r.cod_estacion) ");

     while ($reg=mysqli_fetch_array($q)){
    
        echo <<<sql
        La estación es:  {$reg['nombre']} <br>
        La población es:  {$reg['poblacion']} <br><br>
sql;

       
    
    
    
}
    }
?>