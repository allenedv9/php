<table>
<th>Tipo</th> <th>importe</th>
<br/>
<?php

$fp = fopen("articulos.txt", 'r');

$archivo = file('articulos.txt');

$importes = [];

foreach($archivo as $linea){
    $cod = $linea[0];
    $importe = explode("|", $linea)[2] * explode("|", $linea)[3];

    if( empty($importes[$cod])){
        $importes[$cod] = 0;
    }

    $importes[$cod] += $importe;
}    

$contTipo = 0;
foreach($importes as $im){
    echo "<tr>";
    echo "<td>" . $contTipo . "</td>" . "<td>" . $im . "</td>";
    echo "</tr>";
    $contTipo++;

}
?>
</table>