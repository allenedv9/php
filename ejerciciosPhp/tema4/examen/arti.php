<table>
<th>Tipo</th> <th>importe</th>
<br/>
<?php

//abro archivo
$fp = fopen("articulos.txt", 'r');

//meto en una matriz lo que contiene articulos ( cada registro esta en una posicion del array)
$archivo = file('articulos.txt');

//array vacio
$total = [];
//print_r( $archivo);

//recorro el array archivo
foreach($archivo as $linea){

    //en $cod meto el primer parametro de cada registro
    $cod = $linea[0];
    //en importe meto la cantidad por precio
    $importe = explode("|", $linea)[2] * explode("|", $linea)[3];

    // si el total de cod esta vacio
    if( empty($total[$cod])){
        $total[$cod] = 0;
    }
//le suma los importe de los articulos repetidos
    $total[$cod] += $importe;
}    

//creo un contador
$contTipo = 0;
//recorro total y creo las filas de la tabla 
foreach($total as $im){
    echo "<tr>";
    echo "<td>" . $contTipo . "</td>" . "<td>" . $im . "</td>";
    echo "</tr>";
    $contTipo++;

}
?>
</table>
