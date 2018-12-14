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

        $addColum = mysqli_query($conexion, "ALTER TABLE trenes add capacidad int");
       
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
    echo "<br>";
    echo "<br>";

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
        $q = mysqli_query($conexion, "select e.nombre, e.poblacion from trenes t, recorridos r, estaciones e WHERE e.cod_estacion not in ( SELECT e.cod_estacion from recorridos) ");

     while ($reg=mysqli_fetch_array($q)){
    
      //  echo "<b>Nombre de la estacion:</b>".$reg['nombre']."<br>";
        //echo "<b>Población:</b>".$reg['poblacion']."<br>";

        $n = $reg['nombre'];
        $p = $reg['poblacion'];

        echo$n+"no hay nada";
        echo$p;
        if(empty($n) && empty($p)){
            echo " No hay registros para esa select";
        }
    }
    
    
}

?>